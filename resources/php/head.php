<?php
    require("pokemon.php");
    
    spl_autoload_register(function($class){
    include $class . '.php';
    });
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokemon</title>
</head>
<body>