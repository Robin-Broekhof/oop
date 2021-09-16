<?php
class Pikachu extends Pokemon{

    public $name;

    public function __construct($name)
    {
        $this->name = $name;
        $energyType = new EnergyType(ELECTRIC);
        $hitpoints = 60;
        $attacks = array(   
            new Attacks("Electric Ring", 50),
            new Attacks("Pika Punch", 20)
        );
        $weakness = new Weakness(ELECTRIC, 2);
        $restistance = new Resistance(FIGHTING, 10);

        parent::__construct($name, $energyType, $hitpoints, $attacks, $weakness, $restistance);
        
    }



}