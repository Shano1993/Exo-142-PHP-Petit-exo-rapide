<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exo 142</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php
    echo "Salut tout le monde" . "<br>";
    $maVar = "Salut tout le monde";
    echo $maVar . "<br>";

    $array = ["Salut", "tout", "le", "monde"];
    echo $array[1] . "<br>";

    for ($i = 0; $i < count($array); $i++) {
        echo $array[$i] . "<br>";
    };

    foreach ($array as $item) {
        echo $item . "<br>";
    };
?>
<?php
    echo "<ul>
        <li>Une entrée</li>
        <li>Deux entrée</li>
        <li>Trois entrée</li>
    </ul>";
?>

</body>
</html>