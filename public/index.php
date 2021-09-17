<?php
    require("../resources/php/head.php");
?>

<?php
    $charmeleon = new Charmeleon("Char");
    $pikachu = new Pikachu("Pika");

    pokemon::battle($pikachu,$pikachu->attacks[0],$charmeleon);
    pokemon::battle($charmeleon,$charmeleon->attacks[1],$pikachu);

?>
