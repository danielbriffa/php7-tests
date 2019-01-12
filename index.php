<?php

error_reporting(E_STRICT);

function int_test_function(int ...$array_int){
    return array_sum($array_int);
}

echo int_test_function(1,2,3,4,5,6).PHP_EOL; // this will return : 21

function string_test_function(string ...$array_string){
    return implode(';', $array_string);
}

echo string_test_function('This', 'is', 'a', 'test').PHP_EOL; // this will return : This;is;a;Test

?>