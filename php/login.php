<?php
    if (isset($_POST["login"])) {
        //Henter telefonnummeret som brukeren har skrevet
        $telefonnummer = $_POST["telefonnummer_login"];
        //Henter passordet som brukeren har skrevet
        $passord = $_POST["passord_login"];
        //Lager spørring som henter en rad med telefonnummeret og passordet
        $sql = "SELECT * FROM brukere WHERE telefonnummer='$telefonnummer' AND passord='$passord'";
        $resultat = $kobling->query($sql);
        //Hvis vi ikke har et resultat, altå 0 rader så gir vi beskjed om det
        if ($resultat->num_rows == 0) {
            echo "<h2>Fant ikke en bruker med dette telefonnummeret og passordet</h2>";
        } else {
            //Hvis vi har et resultat kan vi gjøre mange ting
            while($rad = $resultat->fetch_assoc()) {
                $telefonnummer = $rad["telefonnummer"];
            }
            //Hilser på brukeren - blir med tlf.nr.
            echo "<h2>Hei $telefonnummer!</h2>";   
        }
    }
?>