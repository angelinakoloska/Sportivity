<?php
    if (isset($_POST["registrer"])) {
        //Henter tlf.nr fra input-feltet
        $telefonummer = $_POST["telefonnummer"];
        //Lager en spørring som henter alle rader med tlf.nr.
        $sql = "SELECT telefonnummer FROM brukere WHERE telefonnummer='$telefonnummer'";
        $resultat = $kobling->query($sql);
        //Hvis antall rader er lik 0, så betyr det at telefonnummeret ikke finnes
        if($resultat->num_rows == 0) {
            //Henter passordet fra input-feltet
            $passord = $_POST["passord"];
            //Lager en spørring som setter inn en ny bruker o databasen
            $sql = "INSERT INTO brukere (telefonnummer, passord)
            VALUES ('$telefonnummer', '$passord')";
            if ($kobling->query($sql)) {
                echo "<h2>Du har registrer en bruker</h2>";
            } else {
                echo "Noe gikk galt da du prøvde å registrere bruker.";
            }
        } else {
            echo "<h2>Telefonnummeret er opptatt. Prøv et annet</h2>";
        }
    }
?>