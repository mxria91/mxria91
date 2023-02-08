const pwd = 1234;
let input = document.getElementById('pwdInput');

// Listener

document.getElementById('pwdBtn').addEventListener('click', function () {
    checkPwd();
    console.log(input);
})


// Function
function checkPwd () {

    if (input.value == pwd) {
        document.getElementById('message').innerHTML = "Login Successful";
        console.log("Success");
        input.style.border = "2px solid green";
        document.getElementById('cancelBtn').style.visibility = "hidden";
    }

    if (input.value != pwd) {
        document.getElementById('message').innerHTML = "Wrong Login Data";
        console.log("Error");
        input.style.border = "2px solid red";
        document.getElementById('cancelBtn').style.visibility = '';
    }
    
    if (input.value == '') {
        document.getElementById('message').innerHTML = "Please Enter Your Password";
        console.log("No Password Set");
        input.style.border = "2px solid red";
        document.getElementById('cancelBtn').style.visibility = '';
    }

   
}


// Reset Button

document.getElementById('cancelBtn').addEventListener('click', function () {
    cancel();
    console.log("Reset Input");
})

function cancel () {
    document.getElementById('pwdInput').value = "";
}