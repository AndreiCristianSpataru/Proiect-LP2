<?php

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Proiect</title>
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Proiect</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link" aria-current="page" href="index.php">Acasa</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="refresh.php">Refresh Date</a>
            </li>

        </ul>
        </div>
    </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Refresh Date</h1>
            </div>
        </div>

        <?php if(isset($_GET['execute'])) { 
            exec("python3 main.py"); ?>

        <div class="row mb-3">
            <div class="col-12">
                <div class="alert alert-success" role="alert">
                    <h4 class="alert-heading">Executat</h4>
                    <p>Scriptul de regenerare s-a executat.</p>
                    <hr>
                    <a class="btn btn-success" href="index.php" role="button">Intoarce-te la pagina principala</a>

                </div>

            </div>

        </div>

        <?php } else { ?>



        <div class="row mb-3">
            <div class="col-12">
                <div class="alert alert-warning" role="alert">
                    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                        <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                        </symbol>
                    </svg>
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                    <h4 class="alert-heading">Atentie! Va rugam cititi.</h4>
                    <p>Va rugam nu executati aceasta actiune des. Scriptul de importare a datelor foloseste o cheie de API pentru geolocarea adreselor cu acces limitat. Importarea excesiva a datelor duce la pierdera capabilitatii de a localiza adresele ca si coordonate GPS.</p>
                    <p>De asemenea, scriptul dureaza cateva secunde sa se execute (aprox 20s, pana la un minut). Va rugam aveti rabdare cand se incarca pagina si nu spamati butonul.</p>
                    <hr>
                    <p class="mb-0">Daca ati inteles, puteti executa reimprospatarea datelor de aici:</p>
                    <a class="btn btn-danger" href="refresh.php?execute=1" role="button">Regenereaza datele</a>

                </div>

            </div>

        </div>

        <?php } ?>

    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
</html>