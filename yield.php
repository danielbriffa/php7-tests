<?php
//Yield
echo '<br><br>'.'Yield'.'<br>';

function get_value(){
    yield 'test';
}

foreach(get_value() as $value){
    echo $value;
}


//time differences

function loop_value(){
    $test_array = [];
    for ($i=0; $i <= 999999; $i++){
        $test_array[] = $i;
        if ($i % 20000 === 0) echo '1 - '.(memory_get_usage(false)/1024/1024).'<br>';
    }

    return $test_array;
}
loop_value();

echo '<br><br><br>';

function loop_value2(){
    $test_array = [];
    for ($i=0; $i <= 999999; $i++){
        yield $i;
        if ($i % 20000 === 0) echo '2 - '.(memory_get_usage(false)/1024/1024).'<br>';
    }
}
foreach(loop_value2() as $value){};
?>