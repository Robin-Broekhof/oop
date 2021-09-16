<?php
class Charmeleon extends Pokemon{

    public $name;

    public function __construct($name)
    {
        $this->name = $name;
        $energyType = new EnergyType(FIRE);
        $hitpoints = 80;    //normall hp is 60
        $attacks = array(   
            new Attacks("Head Butt", 10),
            new Attacks("Flare", 30)
        );
        $weakness = new Weakness(WATER, 1.5);
        $restistance = new Resistance(ELECTRIC, 20);

        parent::__construct($name, $energyType, $hitpoints, $attacks, $weakness, $restistance);
    }



}