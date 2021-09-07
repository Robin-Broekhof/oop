<?php
class Pokemon{

    public static $population = 0;
    public $name;
    public $energyType;
    public $hitpoints;
    public $attacks;
    public $weakness;
    public $resistance;

    public $health;


    public function __construct($name, $energyType, $hitpoints, $attacks, $weakness, $resistance)
    {
        $this->name = $name;
        $this->energyType = $energyType;
        $this->hitpoints = $hitpoints;
        $this->attacks = $attacks;
        $this->weakness = $weakness;
        $this->resistance = $resistance;
        $this->min = 20;
        self::$population++;
    }

    
    public function __toString(){
        return json_encode($this);
    }
    public function hitpointChecker(){
        print_r($this->hitpoints);
    }
    public function attacks(){
        return $this->attacks[0]->name;
    }
    public function getPopulation(){
        return pokemon::$population;
    }



    public function attacksTemp(){
        return $this->attacks[0]->name;
    }

    public function getHealth(){
        $this->health = $this->hitpoints - 20;
        $this->health = $this->health - 20;
        return $this->health;
    }

    public function battleStart(){
        $this->attacks[0]->name;    //electric ring
        $this->attacks[1]->name;    //flare
        $this->health

    }





    //not used
    public function getEnergyType(){
        return $this->energyType->name;
    }

}
?>