<?php
class Charmeleon extends Pokemon{

    public $name;

    public function __construct($name)
    {
        $this->name = $name;
        $energyType = new EnergyType("fire");
        $hitpoints = 60;
        $attacks = array(   
            "atk1" => new Attacks("Head Butt", 10),
            "atk2" => new Attacks("Flare", 30)
        );
        $weakness = new Weakness("Water", 1.5);
        $restistance = new Resistance("Electric", 20);

        parent::__construct($name, $energyType, $hitpoints, $attacks, $weakness, $restistance);
    }



}