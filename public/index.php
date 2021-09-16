<?php
    require("../resources/php/head.php");
?>

<?php
    $charmeleon = new Charmeleon("Char");
    $pikachu = new Pikachu("Pika");
    
    


    pokemon::battle($pikachu,$pikachu->attacks[0],$charmeleon);
    echo "<br>";
    pokemon::battle($charmeleon,$charmeleon->attacks[1],$pikachu);





?>

<div>
<br><br><br><br><br><br>
    <h1>HTML uitwerking</h1>
    <a>Charmeleon hitpoins: 60</a><br>
    <a>Pikachu hitpoins: 60</a><br>
    <br>
    <a>Pikachu valt Charmeleon aan met Electric Ring</a><br>
    <a>Charmeleon hitpoins van 60 naar 10</a><br>
    <a>Charmeleon valt Pikachu aan met flare</a><br>
    <a>Pikachu hitpoins van 60 naar 30</a><br>
    
</div>
