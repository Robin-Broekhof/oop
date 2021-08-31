<?php
class Pokemon{


    $public $name;
    $public $energyType;
    $public $hitpoints;
    $public $health;
    $public $attack;
    $public $weakness;
    $public $resistance;




    public function __construct($name, $energyType, $hitpoints, $health, $attack, $weakness, $resistance)
    {
        $this->name = $name;
        $this->energyType = $energyType;
        $this->hitpoints = $hitpoints;
        $this->health = $health;
        $this->attack = $attack;
        $this->weakness = $weakness;
        $this->resistance = $resistance;
    }
    public function sayOneliner(){
        echo '<h2>' . $this->name . '</h2>';
    }


}
?>