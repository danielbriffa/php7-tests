<?php
//new operators
echo '<br><br>'.'New Operators'.'<br>';

$test = null ?? 'default';
echo $test.'<br>'; // default

$test2 = null ?? 'Middle One' ?? null ?? 'Last One';
echo $test2.'<br>'; // middle one

$test3 = null ?? null ?? null ?? 'Last One';
echo $test3.'<br>'; // last one

$spaceship_op = 3 <=> 3;
echo $spaceship_op.'<br>';

$spaceship_op = 2 <=> 3;
echo $spaceship_op.'<br>';

$spaceship_op = 3 <=> 2;
echo $spaceship_op.'<br>';

$spaceship_op = 'a' <=> 'a';
echo $spaceship_op.'<br>';

$spaceship_op = 'a' <=> 'z';
echo $spaceship_op.'<br>';

$spaceship_op = 'z' <=> 'a';
echo $spaceship_op.'<br>';

$spaceship_op = 'a' <=> 'A';
echo $spaceship_op.'<br>';

$spaceship_op = '1' <=> 'A';
echo $spaceship_op.'<br>';

assert(true, true);
?>