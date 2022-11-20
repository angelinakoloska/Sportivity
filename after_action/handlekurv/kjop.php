<?php
    //-------Koble til database
    //Tilkoblingsinformasjon
    $tjener = "127.0.0.1";
    $brukernavn = "root";
    $passord = "";
    $database = "butikk";
    //Opprett en kobling
    $kobling = new mysqli($tjener, $brukernavn, $passord, $database);

    //Sjekk om tilkoblingen virker
    if ($kobling->connect_error) {
        die("Noe gikk galt:" . $kobling->connect_error);
    }
    //Angi UTF-8 som tegnsett for å kunne bruke alle symboler
    $kobling->set_charset("utf8");

    //Hent navnet på alle varene og skriv det ut i en liste. Lagrer også prisene
    $sql = "SELECT navn, pris FROM varerihandlekurv
            JOIN vare ON varerihandlekurv.vare_id = vare.vare_id";
    $resultat = $kobling->query($sql);
    $total_pris = 0;
    echo "<ul>";
    while ($rad = $resultat->fetch_assoc()) {
        echo "<li>" . $rad["naavn"] . "</li>";
        $total_pris = $total_pris + $rad["pris"];
    }
    echo "</ul>";
    echo "<h2>Total pris: " . $total_pris;

    //Sjekk om knappen for kjøp trykkes på
    if(isset($_POST["kjopKnapp"])) {
        //Slett alt fra databasen
        $sql = "DELETE FROM varerihandlekurv";
        $kobling->query($sql);
        echo "<br>Takk for kjøpet/ Handlekurven din er tom";
    } 
?>