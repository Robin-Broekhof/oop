<?php
class Pokemon{


    public $name;
    public $energyType;
    public $hitpoints;
    public $attacks;
    public $weakness;
    public $resistance;




    public function __construct($name, $energyType, $hitpoints, $attacks, $weakness, $resistance)
    {
        $this->name = $name;
        $this->energyType = $energyType;
        $this->hitpoints = $hitpoints;
        $this->attacks = $attacks;
        $this->weakness = $weakness;
        $this->resistance = $resistance;
    }

    

    public function __toString(){
        return json_encode($this);
    }

    public function hitpointChecker(){
        print_r($this->hitpoints);
    }

    public function attacks(){
        return $this->attacks;
    }
    
    public function attacksNames(){
        return $this->attacks->name;
    }





}
?>