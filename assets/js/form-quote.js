"use strict";
const setCookie = (name, value, days) => {
    // concatenate cookie name and encoded value
    let cookie = name + "=" + encodeURIComponent(value);

    // if there's a value for days, add max-age to cookie
    if (days !== undefined) {
        cookie += "; max-age=" + days * 24 * 60 * 60;
    }
    // add path to cookie and then set
    cookie += "; path=/";
    document.cookie = cookie;
};

const getCookieByName = name => {
    const cookies = document.cookie;

    // get the index of the cookie name and equal sign
    let start = cookies.indexOf(name + "=");
    if (start === -1) {  // no cookie with that name
        return "";
    } else {
        // adjust so the name and equal sign aren't included in the result
        start = start + (name.length + 1);

        // get the index of the semi-colon at the end of the cookie value,
        let end = cookies.indexOf(";", start);
        if (end === -1) {  // if last cookie, get length of cookie
            end = cookies.length;
        }

        // use the start and end indexes to get the cookie value
        const cookieValue = cookies.substring(start, end);

        // return the decoded cookie value
        return decodeURIComponent(cookieValue);
    } 
};

const deleteCookie = name => 
    document.cookie = name + "=''; max-age=0; path=/";

$(document).ready( () => {


    // sets the date input field to today's date
        var now = new Date();
        var month = (now.getMonth() + 1);               
        var day = now.getDate();
        if (month < 10) 
            month = "0" + month;
        if (day < 10) 
            day = "0" + day;
        var today = now.getFullYear() + '-' + month + '-' + day;
        $('#date').val(today);

    // the handler for the click event of the submit button
    $("#quote_form").submit( event => {
        let isValid = true;
  



        // validate the email entry with a regular expression
        const emailPattern = /\b[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}\b/;
        const email = $("#email").val().trim();
        if (email == "") { 
            $("#email").next().text("This field is required.");
            isValid = false;
        } else if ( !emailPattern.test(email) ) {
            $("#email").next().text("Must be a valid email address.");
            isValid = false;
        } else {
            $("#email").next().text("");
        }
        $("#email").val(email);
        
        // validate the verify entry
        const verify = $("#vemail").val().trim();
        if (verify == "") { 
            $("#vemail").next().text("This field is required.");
            isValid = false; 
        } else if (verify !== email) { 
            $("#vemail").next().text("Must match first email entry.");
            isValid = false;
            alert("emails do not match.");
        } else {
            $("#vemail").next().text("");
        }
        $("#vemail").val(verify);
                    
        // validate the first name entry
        const firstName = $("#fname").val().trim();
        if (firstName == "") {
            $("#fname").next().text("This field is required.");
            isValid = false;
        } else {
            $("#fname").next().text("");
        }
        $("#fname").val(firstName);
        setCookie("fname", firstName, 21);

        // validate the last name entry
        const lastName = $("#lname").val().trim();
        if (lastName == "") {
            $("#lname").next().text("This field is required.");
            isValid = false;
        } else {
            $("#lname").next().text("");
        }
        $("#lname").val(lastName);
        setCookie("lname", lastName, 21);
            
        // validate the phone number with a regular expression
        const phonePattern = /^\d{3}-\d{3}-\d{4}$/;
        const phone = $("#phone").val().trim();
        if (phone == "") { 
            $("#phone").next().text("This field is required.");
            isValid = false; 
        } else if ( !phonePattern.test(phone) ) {
            $("#phone").next().text("Use 999-999-9999 format.");
            isValid = false;
            alert("Invalid phone format. Use 999-999-9999 format.");
        } else {
            $("#phone").next().text("");
        }
        $("#phone").val(phone);
        setCookie("phone", phone, 21);

        // prevent the submission of the form if any entries are invalid 
        if (isValid == false) {
            event.preventDefault(); 
                           
        }

    });
    $("#phone").val(getCookieByName("phone")); 
    $("#fname").val(getCookieByName("fname")); 
    $("#lname").val(getCookieByName("lname")); 

});