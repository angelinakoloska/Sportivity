<!DOCTYPE html>
<html lang="no">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <style>
        .varer {
            display: flex;
        }

        .vare {
            margin: 2%;
            border: 1px solid black;
        }

        button {
            height: 50px;
            margin: 2%;
        }
    </style>
    <body>
        <h2>Varer</h2>
        <div class="varer">
            <div class="vare">
                <h3>T-skjorter</h3>
                <img src="tshirt1.jpg" width="200" height="200">
                <h4>Pris: 200</h4>
                <form method="POST">
                    <button type="submit" formmethod="POST" name="tskjorterKnapp">Legg til i handlekurv</button>
                </form>
                <div class="vare">
                <h3>T-skjorter</h3>
                <img src="tshirt2.jpg" width="200" height="200">
                <h4>Pris: 200</h4>
                <form method="POST">
                    <button type="submit" formmethod="POST" name="tskjorterKnapp">Legg til i handlekurv</button>
                </form>
            </div>
        </div>
        <?php
            include "varer.php";
        ?>
        <br>
        <a href="handlekurv.php">Gå videre til handlekurv</a>
    </body>
</html>