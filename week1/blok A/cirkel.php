 <?php
$render = "Vul een diameter in.";
if (isset($_GET["diameter"])) {
    $diameter = (float) $_GET["diameter"];
    $straal = ($diameter / 2);
    $omtrek = (pi() * $diameter);
    $oppervlakte = (pi() * $straal ** 2);

    $render = "straal: " . ($straal) . " cm" .
    "<br>omtrek: " . ($omtrek) . " cm" . 
    "<br>oppervlakte: " . ($oppervlakte) . " cm²";
}
?>


<!doctype html>
<html lang="nl">

<head><meta charset="utf-8"><title>cirkelberekenaar dingus</title></head>
    <body>
        <form method="get">
            <label>Getal <input type="number" name="diameter" step="any" required></label>

            <button>Bereken</button>
        </form>

        <hr>

        <p><?= $render ?></p>
    </body>

</html>