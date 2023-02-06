const MYPASSWORD = 123;
let pwdInput = document.getElementById('pwd');

// Eventlistener

document.getElementById('loginBtn').addEventListener('click', function () {
    checkPWD();
    console.log("Login Attempted");
})


// Function
// VANILLA JS

function checkPWD () {
    if (pwdInput.value == MYPASSWORD) {
        document.getElementById('successMessage').innerHTML = "Login Successful";
        console.log('Login Successful');
    }

    if (pwdInput.value == '') {
        document.getElementById('successMessage').innerHTML = "Please Enter Valid Password";
        console.log("Try Again");
    }

    if (pwdInput.value != MYPASSWORD) {
        document.getElementById('successMessage').innerHTML = "Password Incorrect";
        console.log('Wrong Password');
    }
}




