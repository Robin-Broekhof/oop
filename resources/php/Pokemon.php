<?php
class Pokemon{
    public function __construct($name, $energyType, $hitpoints, $health, $attack, $weakness, $resistance){
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