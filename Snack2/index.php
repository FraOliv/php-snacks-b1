<!-- PHP Snack 2:
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non
conosciamo nella documentazione) che:
1. name sia più lungo di 3 caratteri,
2. mail contenga un punto e una chiocciola
3. age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
Buon pranzo a tutt* -->

<?php
$name = $_GET["name"];
$mail = $_GET["mail"];
$age = $_GET["age"];
?>


<?php


if (
    strlen($name) > 3 && strpos($mail, ".") && strpos($mail, "@")  &&
    is_numeric($age)
) {
    echo "Accesso riuscito";
} else {
    echo "accesso non riuscito";
};
/* 
var_dump(strlen($name) > 3 , strpos($mail, $Must) ,
    is_numeric($age)) */
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    First name:

    <form action="" name="" method="get">
        <input type="text" name="name" value="inserisci il tuo nome"> <br>
        <input type="text" name="age" value="inseriscila tua età"><br>
        <input type="text" name="mail" value="inserisci la tua mail"><br>
        <input type="submit" value="cliccaduro">
    </form>

</body>

</html>