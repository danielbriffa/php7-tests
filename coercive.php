<?php
//Coercive Mode
echo '<br><br>'.'Coercive Mode'.'<br>';

function int_test_function(int ...$array_int){
    return array_sum($array_int);
}

echo int_test_function(1,2,3,4,5,6).'<br>'; // this will return : 21

function string_test_function(string ...$array_string){
    return implode(';', $array_string);
}

echo string_test_function('This', 'is', 'a', 'test').'<br>'; // this will return : This;is;a;Test

function array_test_function (array ...$array_param){
    return implode(';', array_merge(...$array_param)); //merge array of arrays
}

echo array_test_function([1,2,3], [4,5,6], ['a','b','c']).'<br>';
?>