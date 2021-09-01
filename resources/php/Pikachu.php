<?php
class Pikachu extends Pokemon{

    public $name;

    public function __construct($name)
    {
        $this->name = $name;
        $energytype = new EnergyType("electric");
        $hitpoints = 60;
        $attack = array(   
            new Attack("Electric Ring", 50),
            new Attack("Pika Punch", 20)
        );
        $weakness = new Weakness("Fire", 2);
        $restistance = new Resistance("Fighting", 10);

        parent::__construct($name, $energytype, $hitpoints, $attack, $weakness, $restistance);
        
    }



}