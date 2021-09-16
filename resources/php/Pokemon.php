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

    /**
     * function for making a pokemon attack another pokemon
     * subtracts health from pokemon after receiving attack
     * 
     */

     

    public function battle($attacker, $attackNumber, $defender){

        
    //echo "pokemons:", (self::getPopulation()), "<br>";

        //echos health of pokemon
        echo get_class($defender), " health: ", $defender->health = $defender->hitpoints, "<br>";

        //get pokemons and the attack that will be receive by the defender
        echo get_class($attacker), " valt ", get_class($defender), " aan met ", $attackNumber->name, "(", $attackNumber->damage ,"dmg)", "<br>";
        
        //activates functions with self
        self::damageCalculator($attacker, $attackNumber, $defender);  

        //echos a br in between battle function and restitanceChecker function
        echo "<br><br>";

        
    //echo "pokemons:", (self::getPopulation()), "<br>";

        //echos br
        echo "<br><br><br><br><br><br>";

    }

    
    public function damageCalculator($attacker, $attackNumber, $defender){
        if($attacker->energyType->name == $defender->weakness->energyType){
            $finalDamage = $attackNumber->damage * $defender->weakness->mutiplier;
            echo get_class($defender)," health: ", $defender-> health = $defender->hitpoints - $finalDamage, "<br>";
            //self::checkHealth();
        }
        if($attacker->energyType->name == $defender->resistance->energyType){
            $finalDamage = $attackNumber->damage / $defender->resistance->mutiplier;
            echo get_class($defender)," health: ", $defender-> health = $defender->hitpoints - $finalDamage, "<br>";
            //self::checkHealth();
        }
        if($attacker->energyType->name != $defender->weakness->energyType && $attacker->energyType->name != $defender->resistance->energyType){
            echo get_class($defender)," health: ", $defender-> health = $defender->hitpoints - $attackNumber->damage, "<br>";
            //self::checkHealth();
        }
    }


    /**
     * checks if health is 0 or not
     * if 0 pokemon is considered fainted and cannot fight further
     */
    public function checkHealth(){
        if(pokemon::$health <= 0){
            $population--;
        }
        else{
        }
    }

    public function getPopulation(){
        return pokemon::$population;
    }



}
?>