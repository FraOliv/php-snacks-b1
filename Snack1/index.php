<!-- PHP Snack 1:
Creiamo un array 'matches' contenente altri array i
quali rappresentano delle partite di basket di
un’ipotetica tappa del calendario. Ogni array della
partita avrà una squadra di casa e una squadra
ospite, punti fatti dalla squadra di casa e punti fatti
dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo
schema:
Olimpia Milano - Cantù | 55 - 60 -->


<?php
$matches = [
    "partita1" => [
        "home" => ["Finale Ligure", 98],
        "away" => ["Pietra Ligure", 74]

    ],
    "partita2" => [
        "home" => ["Simpson", 98],
        "away" => ["Griffin", 74]



    ],
    "partita3" => [
        "home" => ["Genoa", 98],
        "away" => ["Samp", 74]



    ],
    "partita4" => [
        "home" => ["Bezos Team", 98],
        "away" => ["Musk Team", 74]
        
    ],

];
 // var_dump($matches);
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <ul style="text-align: center;">
        <?php
       
        foreach ($matches as $match) {
            $HomeTeam = $match['home'][0];
            $AwayTeam = $match['away'][0];
            $HomeScore = $match['home'][1];
            $AwayScore = $match['away'][1];

            echo "<li>
            $HomeTeam - $AwayTeam | $HomeScore - $AwayScore</li>";
        }
        ?>
    </li>

</body>

</html>