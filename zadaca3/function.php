<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/stil.css"/>
    <title>Homework 3</title>
</head>
<body>

<main>
    <section id="unos">
        <header><h1>Spiral Fill</h1></header>
        <form action="function.php" method="post">
            <label for="broj_redaka">Rows</label>
            <input type="number" id="broj_redaka" value="4"/>
            <label for="broj_stupaca">Columns</label>
            <input type="number" id="broj_stupaca" value="5"/>
            <input type="submit" id="kreiraj" value="Submit"/>
        </form>
    </section>
    <section id="prikaz">
        <div id="tablica"></div>
    </section>
</main>
<div id="tablica">

<?php
function spiralFill($maxRow, $maxCol, &$a)
{

    $eho = 1;

    $minRow = 0;
    $minCol = 0;
    while ($minRow < $maxRow && $minCol < $maxCol)
    {
        for ($i = $minCol; $i < $maxCol; ++$i)
            $a[$minRow][$i] = $eho++;

        $minRow++;

        for ($i = $minRow; $i < $maxRow; ++$i)
            $a[$i][$maxCol - 1] = $eho++;
        $maxCol--;

        if ($minRow < $maxRow)
        {
            for ($i = $maxCol - 1; $i >= $minCol; --$i)
                $a[$maxRow - 1][$i] = $eho++;
            $maxRow--;
        }

        if ($minCol < $maxCol)
        {
            for ($i = $maxRow - 1; $i >= $minRow; --$i)
                $a[$i][$minCol] = $eho++;
            $minCol++;
        }

    }

}

$maxRow = 4;
$maxCol = 5;
spiralFill($maxRow, $maxCol, $a);
for ($i = 0; $i < $maxRow; $i++)
{
    for ($j = 0; $j < $maxCol; $j++)
    {
        echo ($a[$i][$j]);
        echo (" ");
    }
    echo "<br />\n";

}
?>
</div>
</body>
</html>