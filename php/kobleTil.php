<?php
    //Tilkoblingsinformasjon
    $tjener = "localhost";
    $brukernavn = "root";
    $passord = "";
    $database = "brukerinnlogging";
    //Opprett en kobling
    $kobling = new mysqli($tjener, $brukernavn, $passord, $database);
    //Sjekk om tilkoblingen virker
    if ($kobling->connect_error) {
        die("Noe gikk galt: " . $kobling->connect_error);
    } else {
        echo "<h2>Fyll ut skjemaet</h2>";
    }
    //Angi UTF-8 som tegnsett for å kunne bruke alle symboler
    $kobling->set_charset("utf8");
?>