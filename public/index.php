<?php
    require("../resources/php/head.php");
?>

<?php
    $charmeleon = new Charmeleon("Char");
    $pikachu = new Pikachu("Pika");
    
    

    /*
    print_r('<pre>'. $charmeleon . '</pre>');
    
    print_r('<pre>'. $pikachu . '</pre>');

    echo '<a>' . 'Charmeleon HP:' . '</a>';
    $charmeleon->hitpointChecker();     echo '<br>';
    echo '<a>' . 'Pikachu HP:' . '</a>';
    $pikachu->hitpointChecker();        echo '<br>';


    echo '<a>' . 'Pikachu attacks Charmeleon with Electric Ring' . '</a>' . '<br>';
    echo '<a>' . 'Charmeleon attacks Pikachu with Flare' . '</a>' . '<br>';

    */
    print_r($pikachu->attacks());
    print_r($charmeleon->attacks());
    echo "<br>";

    /*
    echo $pikachu->getEnergyType()  

    
    echo $pikachu->getHealth();
    echo "<br>";
    echo pokemon::getPopulation();
    */




?>



