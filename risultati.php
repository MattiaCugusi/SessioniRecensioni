<?php
session_start();
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
    echo "<h1>numero di volte che è stata inviata la form: " . $_SESSION["invio"] . "</h1>";
    echo "<ul>";
    if (isset($_SESSION["voti"]) && is_array($_SESSION["voti"])) {
    $totale = 0;
    for ($i=0; $i<count($_SESSION["voti"]); $i++){
        echo "<li> " . $_SESSION["voti"][$i] . "</li>";
        $voto = intval($_SESSION["voti"][$i]);
        $totale = $totale + $voto;
    }
    echo "</ul>";

    $media = $totale /count($_SESSION["voti"]);

    echo "<p>La media delle recensioni è: " . $media . "</p>";
}
    ?>
</body>
</html>