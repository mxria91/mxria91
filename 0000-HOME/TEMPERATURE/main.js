// Variables
let temp = 15;

// Functions 

function tempIncrease() {
    temp += 1;
    console.log(temp);
}

function tempDecrease() {
    temp -= 1;
    console.log(temp);
}

function reset() {
    temp = 15;
    document.getElementById('input').value = "";
}

// Eventlistener For Buttons

document.getElementById('increaseBtn').addEventListener('click', function() {
    tempIncrease();
    document.getElementById('input').value = temp;
})


document.getElementById('decreaseBtn').addEventListener('click', function() {
    tempDecrease();
    document.getElementById('input').value = temp;
})

document.getElementById('reset').addEventListener('click', function() {
    reset();
    console.log('This is the new temperature:' + ' °' + temp + ' Celsius');
})








