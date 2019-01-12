<?php
//Enforce Return Type
echo '<br><br>'.'Enforce Return Type'.'<br>';


function add($number1, $number2) : int {
    return $number1 + $number2;    
    //return (int)'qwerty'; //this does not throw error !
}

echo add(1,2).'<br>'; // this will return : 3


class animal{
    public $legs;
    public $length;
    public $height;
}

class dog extends animal{
    function __construct(){
        $this->legs = 4;        
    }    
}

function animal_type(animal $animal) : int {
    return $animal->legs;
}
echo animal_type(new dog()).'<br>'; //this will return : 4

?>