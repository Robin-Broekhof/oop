<?php
    require("../resources/php/head.php");
?>

<?php
    $charmeleon = new Charmeleon("Char");
    $pikachu = new Pikachu("Pika");
    
    

    /*
    print_r('<pre>'. $charmeleon . '</pre>');
    print_r('<pre>'. $pikachu . '</pre>');
    */

    //echo pokemon::battleStart();



    pokemon::battle('pikachu', 'pikachu->attacks[0]');
    pokemon::battle('charmeleon', 'charmeleon->attack[1]');




    //print_r($charmeleon->attacks());
    echo "<br>";

    /*
    echo pokemon::getPopulation();
    */




?>



