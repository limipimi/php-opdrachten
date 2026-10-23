<?php
$render = "vul waardes in";
if (isset($_GET["getal"]) and isset($_GET["begin"]) and isset($_GET["eind"])) {
    $tafel = $_GET["getal"];
    $eind = $_GET["eind"];

    for($begin = $_GET["begin"]; $begin <= $eind; $begin++){
        $render .= $tafel . " x " . $begin . " = " . $tafel * $begin . "<br>";
    }
}
?>


<!doctype html>
<html lang="nl">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>simsalabim</title>
    <link rel="stylesheet" href="../style.css">
</head>


    <body>
        
        <h2>Tafels berekenen</h2>

        <form method="get">
            <label>tafelgetal:  <input type="number" name="getal" step="any" required></label>
            <br>
            <label>beginwaarde:  <input type="number" name="begin" step="any" required></label>
            <br>
            <label>eindwaarde:  <input type="number" name="eind" step="any" required></label>
            <br>

            <button>Bereken</button>
        </form>

        <hr>

        <p><?= $render ?></p>
    </body>

</html>
</html>