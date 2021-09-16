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
        self::$population++;
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

    /**
     *  
     */

    public function battle($attacker, $attackNumber, $attackTarget){

        
        echo get_class($attackTarget), " hitpoints: ", $attackTarget->hitpoints, "<br>";
        echo get_class($attacker), " valt ", get_class($attackTarget), " aan met ", 
            $attackNumber->name, "(", $attackNumber->damage ,"dmg)", "<br>";
        echo get_class($attackTarget)," ", $attackTarget-> health = $attackTarget->hitpoints - $attackNumber->damage;
        echo "<br><br>";



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