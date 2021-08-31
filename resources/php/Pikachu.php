<?php
class Pikachu extends Pokemon{

    public $name;

    public function __construct($name)
    {
        $this->name = $name;
        $energytype = new EnergyType("electric");
        $hitpoints = 60;
        $attack = new Attack array(   
            new Attack("Electric Ring", 50),
            new Attack("Pika Punch", 20)
        )
        $weakness = new Weakness("Fire")
        $restistance = new Resistance("Fighting")
        
    }



}