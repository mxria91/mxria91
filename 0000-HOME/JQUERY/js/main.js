
// $(".class")

$(".container").append("<p>This is a newly added paragraph using the append function.</p>");

// Change location of an existing element
$(".newId").append( $("h5") );

// Remove an existing class 

$("ul").removeClass("vegetables");

// Add a class to an existing element

$("ul").addClass("greenery");

// Set CSS Functions

$("p").css("color", "purple");

// Set multiple CSS Functions 

$("li").css({
    "background-color": "yellow",
    "height": "40px",
    "font-size": "larger"
});

// Event Handler for Buttons - FadeOut Event

$("#btn-primary").click (function () {
    $( ".fruits" ).fadeOut();
});


// Dynamic HTML with jQuery incl. LOOP
// leere Variable definieren
let dynHTML = '';
// Loop
for(let i = 1; i < 4; i++) {
    dynHTML = dynHTML + `<button>${i}</button>`;
}
// Ausgabe in bel. Class
$('.newId').html(dynHTML);

// Einzelne Arrays abarbeiten
// Variable bzw. Speicherplatz für abgearbeitete Arrays definieren
let newDyn = '';
// Array Elemente definieren
let newArray = ["Maria", "Michael", "Frank", "Ella", "Yuvna", "Siegfried"];
// Arrays mit .each abarbeiten
$(newArray).each(function(index, element) {
    newDyn = newDyn + `<button data-index="${index}">${element}</button>`
});
// Ausgabe abgearbeitete Arrays
$('#newArrays').html(newDyn);

// Eingabe auslesen und wo anders ausgeben 

function ageInput () {
    $('#newInput').val( $('.ageInput').val() );
}
// Event zur Ausgabe des ausgelesenen Wertes
$('#newInput').on("click", function() {
    ageInput();
});