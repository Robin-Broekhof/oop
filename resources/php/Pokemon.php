<?php
class Pokemon{

    public static $population = 0;
    public $name;
    public $energyType;
    public $hitpoints;
    public $attacks;
    public $weakness;
    public $resistance;

    public static $health;


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

    public function getHitpoints(){
        return pikachu::$hitpoints;
    }



    public function battle($attacker, $attackNumber){


        /*
        return $this->health = $this->hitpoints - $this->attacks[0]->damage;    //pakt de damage van de aanval en haalt het van de health af
        */
        
        return Pikachu::health = Pikachu::hitpoints - Pikachu::attacks[0]->damage;
        
        /*
        return $pikachu->health = $pikachu->hitpoints - $pikachu->attacks[0]->damage;
        */

        
        


    }


    public function checkHealth(){
        if($this->health <= 0){
            $population--;
        }
        else{

        }

    }





    //not used
    public function getEnergyType(){
        return $this->energyType->name;
    }

}
?>