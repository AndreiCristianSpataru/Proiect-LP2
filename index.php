<?php
error_reporting(E_ALL);
$jsonString = file_get_contents("./output.json");
$jsonData = json_decode($jsonString, true);


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
            <a class="nav-link active" aria-current="page" href="index.php">Acasa</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" aria-current="page" href="refresh.php">Refresh Date</a>
            </li>

        </ul>
        </div>
    </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Locatii publicitare</h1>
            </div>
        </div>

        <?php foreach ($jsonData as $entry) { ?>
        <div class="row mb-3">
            <div class="col-12">
                <div class="card w-100">
                    <div class="card-body">
                        <h5 class="card-title">Locatie publicitara pentru <?php echo $entry['org'];?></h5>
                        <strong>Nr / Data:</strong> <?php echo $entry['nr_data'];?> <br>
                        <strong>Amplasament:</strong> <?php echo $entry['amplasament'];?> <br>
                        <iframe
                        width="450"
                        height="250"
                        frameborder="0" style="border:0"
                        src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDwY9QtNwODJSd6n4Cm5C0xU3BN-oPq2nE&q=<?php echo $entry['locatie'];?>" allowfullscreen>
                        </iframe>
                    </div>
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