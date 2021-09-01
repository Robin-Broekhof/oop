<?php
class Charmeleon extends Pokemon{

    public $name;

    public function __construct($name)
    {
        $this->name = $name;
        $energytype = new EnergyType("fire");
        $hitpoints = 60;
        $attack = array(   
            new Attack("Head Butt", 10),
            new Attack("Flare", 30)
        );
        $weakness = new Weakness("Water", 1.5);
        $restistance = new Resistance("Electric", 20);

        parent::__construct($name, $energytype, $hitpoints, $attack, $weakness, $restistance);
    }



}