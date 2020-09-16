<?php
//wersja PHP
echo PHP_VERSION, '<br>';
//echo phpinfo();
//interpolacja ,
echo 'a', 'b', 'c';//show a show b show c
echo 'a'. 'b'. 'c';//add a+b+c show abc

//potęgowanie

$pow=2**10;
echo "<br>$pow";

//operatory bitowe
//and &, or |, not ~, xor ^, <<,>>
$bin=0b1010;
echo "$bin<br>"; //10

$bin=$bin << 2; //101000;
echo $bin; //40

$bin=$bin >> 3;//101
echo $bin;
?>
