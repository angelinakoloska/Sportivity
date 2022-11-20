<!DOCTYPE html>
<html lang="no">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sportivity</title>
        <!--Benyttet meg av bootstrap fordi det var lettere å plassere logoen med de andre elementene i navigasjonsbaren-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <!--<srcipt>-tagene med linker i er der for "animasjoner" - disse trengs for å gjøre dropdown (litt nedover i dokumentet) fungerende-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="orderPage.css">
    </head>
    <body>
        <header>
          <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <!--Brand Logo - gjør som at logoen blir på lik linje som resten av "nav-item"-->
            <a class="navbar-brand" href="index.php">
                <img src="images/logo-light.svg">  
            </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Hjem</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">FAQ</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="#">Om</a>
      </li>
    </ul>
    <!--Søkemotor - ikke fungerende, bare for pynt-->
    <form class="form-inline mr-auto">
      <input class="form-control mr-sm-2" type="search" placeholder="Søk" aria-label="Søk">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Søk</button>
    </form>
        <ul class="navbar-nav my-2 my-lg-0">
      <li class="nav-item">
        <a class="nav-link" href="brukerinnlogging.php">Lag en bruker</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="brukerlogin.php">Logg inn</a>
      </li>
      </ul>
  </div>
</nav>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr">
                    <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Sportsklær<span class="sr-only">(current)</span>
        </a>
        <!--Dropdown elementene-->
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="includes/clothing-pages/tshirts.php">T-skjorter</a>
          <a class="dropdown-item" href="#">Hoodies</a>
        <!--  <div class="dropdown-divider"></div>-->
          <a class="dropdown-item" href="#">Treningsbukser</a>
        </div>
                          <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Sportsko
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Løpesko</a>
          <a class="dropdown-item" href="#">Sneakers</a>
        <!--  <div class="dropdown-divider"></div>-->
          <a class="dropdown-item" href="#">Fotballsko</a>
        </div>
                                <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Accessories
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Hodeplagg</a>
          <a class="dropdown-item" href="#">Ryggsekker</a>
        <!--  <div class="dropdown-divider"></div>-->
          <a class="dropdown-item" href="#">Munnbind</a>
        </div>
                </ul>
            </div>
        </nav>
        </header>
        <div class="content">
            <!--
            <div class="product-img">
                <img src="tshirt1 (2).jpg">
            </div>
            <
            <section class="size-form">
                <form method= "post">
                    <label>Velg størrelse</label>
                    <select id="size" name="size">
                        <option value="xs">XS</option>
                        <option value="s">S</option>
                        <option value="m">M</option>
                        <option value="l">L</option>
                        <option value="xl">XL</option>
                    </select>
                </form>
            </section>-->
            <p style="margin-left: 25px;"><a href="/view/tshirts.php">T-skjorter</a>/Produkt</p>
            <table style="width:90%">
        <tr>
            <th></th>
            <th></th>
        </tr>
        <tr>
            <td><img src="images/tshirt1.jpg" alt="Clique" style="width: 50%";></td>
                <td>
                    <h3>Clique</h3>
                    <p><strong>Blå sports t-skjorte</strong></p>
                    <p style="font-size: 12px;">Material: 100% bomull</p>
                    <form method= "post">
                    <label>Velg størrelse</label>
                    <select id="size" name="size">
                        <option value="xs">XS</option>
                        <option value="s">S</option>
                        <option value="m">M</option>
                        <option value="l">L</option>
                        <option value="xl">XL</option>
                    </select>
                </form>
                <form method= "post">
                    <label>Velg farge</label>
                    <select id="color" name="color">
                        <option value="blaa">Blå</option>
                        <option value="rod">Rød</option>
                        <option value="svart">Svart</option>
                        <option value="hvit">Hvit</option>
                    </select>
                </form>
                <button style="background-color:palegreen; width: 135px;">Kjøp</button>
            </td>
        </tr>
    </table>
        </div>
        <footer class="footer mt-auto py-3">
  <div class="container justify-content-center">
    <span class="text-muted">&copy;Sportivity 2021 |                       <strong>kontakt@sportivity.no</strong>
    </span>
          