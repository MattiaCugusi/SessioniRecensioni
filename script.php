<?php
session_start();

if (!isset($_SESSION["invio"])){
    $_SESSION["invio"] = 0;
}

if (!isset($_SESSION["voti"])){
    $_SESSION["voti"] = array();
}

if (!isset($_SESSION["data"])){
    $_SESSION["data"] = "";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $_SESSION["invio"]++;
    $data = $_POST["data"];
    $votoRecensione = $_POST["recensione"];
    array_push($_SESSION["voti"], $votoRecensione);
    $_SESSION["data"] = $data;

    echo "<h1>DATI INVIATI</h1>
          <p>Data: " . $data . "</p>
          <p>Voto Recensione: " . $votoRecensione . "</p>
          <p><a href= './presentazione.html'>Torna alla Home</a></p>";
    




    ?>

</body>
</html>