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

    //Legger til t-skjorter i handlekurv
    //Sjekk om tskjorteknappen blir trykket på
    if(isset($_POST["tskjorterKnapp"])) {
        //legg til en t-skjorte i databasen
        $sql = "INSERT INTO varerihandlekurv (vare_id) Values (1)";
        $kobling->query($sql);
        echo "Hvis alt gikk som det skulle så er t-skjorte(r) lagt til i handlekurven";
    }
      //Legger til t-skjorter i handlekurv
    //Sjekk om tskjorteknappen blir trykket på
    if(isset($_POST["tskjorterKnapp"])) {
        //legg til en t-skjorte i databasen
        $sql = "INSERT INTO varerihandlekurv (vare_id) Values (2)";
        $kobling->query($sql);
        echo "Hvis alt gikk som det skulle så er t-skjorte(r) lagt til i handlekurven";
    }
?>