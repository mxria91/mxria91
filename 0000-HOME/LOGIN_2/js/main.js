const MYPASSWORD = "MariaRepolust123"

// Eventlistener

document.getElementById('loginBtn').addEventListener('click', function () {
    checkPWD();
})


// Function

// VANILLA JS

function checkPWD () {
    if (document.getElementById('pwd').value == MYPASSWORD) {
        document.getElementById('successMessage').innerHTML = "Login Successful";
        console.log('Login Successful');
    }

    else if (document.getElementById('pwd').value == '') {
        document.getElementById('successMessage').innerHTML = "Please Enter Valid Password";
    }

    else if (document.getElementById('pwd').value !== MYPASSWORD) {
        document.getElementById('successMessage').innerHTML = "Password Incorrect";
        console.log('Wrong Password');
    }
}
