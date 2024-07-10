"use strict";
$(document).ready( () => {
    
    // the handler for the click event of the submit button
    $("#contact_form").submit( event => {
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
                    
        // validate the last name entry
        const lastName = $("#lname").val().trim();
        if (lastName == "") {
            $("#lname").next().text("This field is required.");
            isValid = false;
        } else {
            $("#lname").next().text("");
        }
        $("#lname").val(lastName);
                    
        // prevent the submission of the form if any entries are invalid 
        if (isValid == false) {
            event.preventDefault(); 
                           
        }
    });

});