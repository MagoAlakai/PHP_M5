<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body class="container mt-4">
    <?php
        //Creación de variables

        //INT
        $X = 10;
        $Y = 5;

        //DOUBLE
        $N = 20.5;
        $M = 8.3;

        //Operaciones aritméticas

        //INT
        echo '<h4>Operaciones con X e Y</h4><br>';
        echo 'La variable X es igual a: '.$X.'<br>';
        echo 'La variable Y es igual a: '.$Y.'<br>';
        echo 'La suma es igual a: '.($X + $Y).'<br>';
        echo 'La resta es igual a: '.($X - $Y).'<br>';
        echo 'La multiplicación es igual a: '.($X * $Y).'<br>';
        echo 'La división es igual a: '.($X / $Y).'<br>';
        echo 'El módulo es igual a: '.($X % $Y).'<br><br>';

        //DOUBLE
        echo '<h4>Operaciones con N y M</h4><br>';
        echo 'La variable N es igual a: '.$N.'<br>';
        echo 'La variable M es igual a: '.$M.'<br>';
        echo 'La suma es igual a: '.($N + $M).'<br>';
        echo 'La resta es igual a: '.($N - $M).'<br>';
        echo 'La multiplicación es igual a: '.($N * $M).'<br>';
        echo 'La división es igual a: '.($N / $M).'<br>';
        echo 'El módulo es igual a: '.($N % $M).'<br><br>';

        //TODAS
        echo '<h4>Operaciones con X, Y, N y M</h4><br>';
        echo 'El doble de la variable X es igual a: '.($X * 2).'<br>';
        echo 'El doble de la variable Y es igual a: '.($Y * 2).'<br>';
        echo 'El doble de la variable N es igual a: '.($N * 2).'<br>';
        echo 'El doble de la variable M es igual a: '.($M * 2).'<br>';
        echo 'La suma es igual a: '.($X + $Y + $N + $M).'<br>';
        echo 'La multiplicación es igual a: '.($X * $Y * $N * $M).'<br>';

    ?>
</body>
</html>
<?php

