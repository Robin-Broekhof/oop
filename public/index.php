<?php
    require("../resources/php/head.php");
?>

<?php
    $charmeleon = new Charmeleon("Char");
    $pikachu = new Pikachu("Pika");

    

    
    print_r('<pre>'. $charmeleon . '</pre>');
    print_r('<pre>'. $pikachu . '</pre>');


    echo '<a>' . 'Charmeleon HP:' . '</a>';
    $charmeleon->hitpointChecker();     echo '<br>';
    echo '<a>' . 'Pikachu HP:' . '</a>';
    $pikachu->hitpointChecker();        echo '<br>';


    echo '<a>' . 'Pikachu attacks Charmeleon with Electric Ring' . '</a>' . '<br>';
    echo '<a>' . 'Charmeleon attacks Pikachu with Flare' . '</a>' . '<br>';


    print_r($pikachu->attacks()["atk1"]);
    echo "<br>";
    print_r($pikachu->attacksNames()["atk1"]);





?>



