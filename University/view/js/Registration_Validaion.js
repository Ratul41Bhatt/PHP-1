function valide() {
    var  username = document.forms["RegForm"]["username"];
    var  password = document.forms["RegForm"]["password"];
    var confirmpassword = document.forms["RegForm"]["confirmpassword"];
    var  name = document.forms["RegForm"]["name"];
    var  ownername = document.forms["RegForm"][" ownername"];
    var presentaddress = document.forms["RegForm"]["presentaddress"];
    var permanentaddress = document.forms["RegForm"]["permanentaddress"];
    var emailaddress = document.forms["RegForm"]["emailaddress"];
    var  weblink = document.forms["RegForm"]["weblink"];
    var typeof = document.forms["RegForm"]["typeof"];


    if ( username.value == "") {
        window.alert("Please enter your Username.");
         username.focus();
        return false;
    }

    if ( password.value == "") {
        window.alert("Please enter your password.");
         password.focus();
        return false;
    }

    if (confirmpassword.value == "") {
        window.alert("Please enter a Confirm password.");
        confirmpassword.focus();
        return false;
    }

    if ( name.value == "") {
        window.alert("Please enter your   name.");
         name.focus();
        return false;
    }

    if ( ownername.value == "") {
        window.alert("Please enter your   Ownername");
         ownername.focus();
        return false;
    }

    if (typeof.selectedIndex < 1) {
        alert("Please enter your   Type.");
        typeof.focus();
        return false;
    }

    if (presentaddress.value == "") {
        window.alert("Please enter your present address.");
        presentaddress.focus();
        return false;
    }

    if (permanentaddress.value == "") {
        window.alert("Please enter your permanent address.");
        permanentaddress.focus();
        return false;
    }

    if (emailaddress.value == "") {
        window.alert("Please enter a valid e-mail address.");
        emailaddress.focus();
        return false;
    }

    if ( weblink.value == "") {
        window.alert("Please enter your   web link.");
         weblink.focus();
        return false;
    }


    return true;
}

function previewFile(input) {
    var file = $("input[type=file]").get(0).files[0];

    if (file) {
        var reader = new FileReader();

        reader.onload = function() {
            $("#previewImg").attr("src", reader.result);
        }

        reader.readAsDataURL(file);
    }
}