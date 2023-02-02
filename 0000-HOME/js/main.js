var email = document.forms['login-form']['username'];
var pwd = document.forms['login-form']['pwd'];

var emailError = document.getElementById('email-error');
var pwdError = document.getElementById('pwd-error');


// EventListener bei Eingabe von Mail + PWD
email.addEventListener("textInput", emailVerify);
pwd.addEventListener('textInput', passVerify);


// Prüfung bei Event 'Submit
function signIn () {
    if (email.value.length < 9) {
        email.style.border = "2px solid red";
        emailError.style.visibility = '';
        email.focus();
        return false
    }

    if (pwd.value.length < 9) {
        pwd.style.border = "2px solid red";
        pwdError.style.visibility = '';
        pwd.focus();
    }
}; 

// Funktion EventListener für Username Feld
function emailVerify () {
    if (email.value.length >= 8) {
        email.style.border = "none";
        emailError.style.visibility = "hidden";
        return true;
    }
};

// Funktion Eventlistener für PWD Feld
function passVerify () {
    if (pwd.value.length >= 8) {
        pwd.style.border = "none";
        pwdError.style.visibility = "hidden";
        return true;
    }
};
