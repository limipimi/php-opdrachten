<?php
    $a1 = "Ik heb niet gefaald ";
    $b1 = "die niet werken"; 
    $c1 = 10000;

    $a2 = "die geen fout";
    $b2 = "en";
    $c2 = "niet";
    
    $render1 = $a1 . "ik heb alleen " . $c1 . " manieren gevonden " . $b1 . "<br>- Thomas Edison.";

    $render2 = "mensen " . $a2 . $b2 . " maken, werken " . $c2 . ". <br>- Albert Plesman (KLM).";
?>


<!doctype html>

<html lang="nl">

<head><meta charset="utf-8"><title>citaat</title></head>

    <body>

        <h1>Citaten van twee goons</h1>
        <hr>
        <?= $render1 ?>

        <br><br>

        <?= $render2 ?>

    </body>
</html>