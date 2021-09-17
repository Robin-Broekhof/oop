<?php
class Pokemon{
    public $name;
    public $energyType;
    public $hitpoints;
    public $attacks;
    public $weakness;
    public $resistance;

    public static $population = 0;

    public function __construct($name, $energyType, $hitpoints, $attacks, $weakness, $resistance)
    {
        $this->name = $name;
        $this->energyType = $energyType;
        $this->hitpoints = $hitpoints;
        $this->attacks = $attacks;
        $this->weakness = $weakness;
        $this->resistance = $resistance;
        pokemon::$population++;
        $this->health = $hitpoints;
    }

    /**
     * function for making a pokemon attack another pokemon
     * subtracts health from pokemon after receiving attack
     * 
     */
    public function battle($attacker, $attackNumber, $defender){
        echo get_class($defender), " health: ", $defender->health = $defender->hitpoints, "<br>";
        echo get_class($attacker), " valt ", get_class($defender), " aan met ", $attackNumber->name, "<br>";
        self::damageCalculator($attacker, $attackNumber, $defender);  
        echo "<br><br>";
    }

    /**
     * calculates the damage according to the energytypes, resistance en weaknesses
     */
    public function damageCalculator($attacker, $attackNumber, $defender){



        if($attacker->energyType->name == $defender->weakness->energyType){
            $finalDamage = $attackNumber->damage * $defender->weakness->mutiplier;
            echo get_class($defender)," health: ", $defender->health - $finalDamage, "<br>";
        }
        elseif($attacker->energyType->name == $defender->resistance->energyType){
            $finalDamage = $attackNumber->damage / $defender->resistance->mutiplier;
            echo get_class($defender)," health: ", $defender->health - $finalDamage, "<br>";
        }
        else{
            echo get_class($defender)," health: ", $defender->health - $attackNumber->damage, "<br>";
        }
    }


    /**
     * checks if health is 0 or not
     * if pokemon health <= 0 population --
     */
    public function checkHealth($defender){
        if($defender->health <= 0){
            pokemon::$population--;
            echo pokemon::getPopulation();
        }
        else{
            echo pokemon::getPopulation();
        }
    }

    /**
     * get the current pokemon population
     */
    public function getPopulation(){
        return pokemon::$population;
    }



}
?>