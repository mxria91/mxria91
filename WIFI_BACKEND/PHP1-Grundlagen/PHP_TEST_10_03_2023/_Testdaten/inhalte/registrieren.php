<?php

// Validierung der Benutzereingaben 

/*
Benutzername - Pflicht, min 4 Zeichen
PW - Pflicht, min 6 Zeichen
Mail - Pficht, korrektes Format


METHODE: POST 


echo "<pre>";
print_r($_POST);
echo "</pre>";
*/



// Prüfungen für Felder 

$fehlermeldungen = array();
$erfolgreich = false;

if (!empty($_POST)) {                  
    

	// Benutzername
    if (empty($_POST["benutzername"])) {  
        $fehlermeldungen[]= "Bitte geben Sie Ihren Benutzernamen ein."; 
    } 

	// Zusatz Benutzername nur Buchstaben und Zahlen 
	elseif ( !preg_match("/^[0-9a-z]/", $_POST["benutzername"])) {
		echo "Benutzername ist nicht zulässig. Keine Sonderzeichen erlaubt.";
	}
	
	// Zusatz Benutzername Mindestlänge
	elseif (strlen($_POST["benutzername"]) < 4 ) { // Min.-Länge 4 
        $fehlermeldungen[] = "Ihr Benutzername ist zu kurz. Die Mindestlänge beträgt 4 Zeichen.";
    } 
    

	//Passwort
    if (empty($_POST["passwort"])) { 
        $fehlermeldungen[]= "Bitte geben Sie Ihr Passwort ein.";

    } elseif (strlen($_POST["passwort"]) < 6 ) { // Min.-Länge 6
		$fehlermeldungen[] = "Ihr Passwort muss mindestens aus 6 Zeichen bestehen.";

	} elseif ( !preg_match("/^[0-9a-z]/", $_POST["passwort"])) {
		echo "Passwort ist nicht zulässig.";
	}

    if (empty($_POST["email"])) { 
        $fehlermeldungen[]= "Bitte geben Sie Ihre E-Mail Adresse ein.";
    } 


	// Auf Format überprüfen

	if (empty($_POST["agb"])) {
		$fehlermeldungen[] = "Sie müssen die AGBs akzeptieren um fortfahren zu dürfen.";
	}

	if (empty($fehlermeldungen)) { 
        $erfolgreich = true;

        // wenn keine Fehler aufgetreten sind -< in Datei schreiben und an XY Ordner übergeben!!

        $inhalt = "Anfrage über Kontaktformular:" . "<br>" . 
        "Name: " . 
        $_POST["benutzername"] . 
        "<br>" . 
        "Email: " . 
        $_POST["passwort"] . 
        "<br>" . 
        "Message: " . 
        $_POST["email"];

        $dateiname = date("Y-m-d_H-i-s");
        // Anfrage in Datei am Server speichern (backup) -> nur in ein existierendes Verzeichnis  // In Root-Verzeichnis speichern!
        file_put_contents("registrierungen/{$dateiname}.txt", $inhalt);

}
}

?>




<div class='wrapper'>
	<div class='row'>
		<div class='col-xs-12'>
			<h1>Registrierung</h1>
		</div>
	</div>
</div>

<?php

// Ausgabe der Fehlermeldungen 


	if (!empty($fehlermeldungen))
						
	{ 
		echo "Es sind folgende Fehlermeldungen aufgetreten: " . "<br>" . "<br>";
		echo "<ul>";
		foreach ($fehlermeldungen as $fehlermeldung) {
			echo "<li>";
			echo $fehlermeldung . "<br>";
			echo "</li>";
		}
		echo "</ul>";
}

?>

<?php 


// Erfolgsmeldung nach Absenden, Formular soll nicht mehr angezeigt werden

	if ($erfolgreich) {
		echo "<h3> Vielen Dank für Ihre Anfrage! </h3>";
	} else {                                          
?>


<form id='register-form' method="post" action="index.php?seite=registrieren">
	<div class="wrapper">
		<div class='row'>
			<div class='col-xs-12 col-sm-12'>
				<label for='username'>Benutzername</label>
				<input type='text' id='username' name='benutzername' value = "<?php if (!empty($_POST["benutzername"])) 
				{
					echo $_POST["benutzername"]; 
				}
				?>"/>

			</div>
			<div class='col-xs-12 col-sm-12'>
				<label for='password'>Passwort</label>
				<input type='password' id='password' name='passwort' 
				
				value="<?php if (!empty($_POST["passwort"])) 
				{
                    echo $_POST["passwort"];
                } 
				?>"/>


			</div>
			<div class='col-xs-12 col-sm-12'>
				<label for='email'>E-Mail</label>
				<input type='text' id='email' name='email'
			
				value="<?php if (!empty($_POST["email"]))  
				{
                    echo $_POST["email"];
                } 
				?>"/>
			</div>

			
			<div class='col-xs-12 col-sm-12'>
				<input type='checkbox' id='toc' name='agb' />
				<label for='toc'>Ich akzeptiere die AGB.</label>
			</div>
			<div class='col-xs-12'>
				<input type='submit' value='Registrieren' />
			</div>
		</div>
	</div>
</form>

<?php
}
?>