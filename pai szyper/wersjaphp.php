<?php
//wersja PHP
echo PHP_VERSION, '<br>';
//echo phpinfo();
//interpolacja ,
echo 'a', 'b', 'c';//show a show b show c
echo 'a'. 'b'. 'c';//add a+b+c show abc
echo '<hr>';
echo 'Potęgowanie';

//potęgowanie

$pow=2**10;
echo "<br>$pow";
echo '<hr>';
echo 'Operatory bitowe';

//operatory bitowe
//and &, or |, not ~, xor ^, <<,>>
$bin=0b1010;
echo "$bin<br>"; //10

$bin=$bin << 2; //101000;
echo $bin; //40

$bin=$bin >> 3;//101
echo $bin;
echo '<hr>';
echo 'Porównania';
//porównanie
echo '<br><br><br>';
$x=1;
$y=1.0;
if($y==$x){
    echo 'zmienna $x = $y<br>';
}else{
    echo 'zmienna $x != $y<br>';
}

if($y === $x){
    echo 'zmienna $x = $y<br>';
}else{
    echo 'zmienna $x nie ma tego samego typu co $y<br>';
}



echo gettype($x);
echo gettype($y);
$x=-100;
$y=10;

echo $x<=>$y;

$x=1;
$x=$x++;
echo $x;//1

$x=++$x;
echo $x;//2

$y=$x++;
echo $x;//3
echo $y;//2

$y=++$x*2-1;
echo $x;//4
echo $y;//7
echo '<hr>';
echo 'Operatory rzutowania';
//bool, int, float, string, array, object, unset
$test1='123abc4';
$test2=0;
$test3=20;
echo "<br><br>test1 = $test1<br>";
echo 'Typ danych $test1: ',gettype($test1),"<br>";
$test1=(int)$test1;
echo "<br>test1 = $test1<br>";
echo "Typ danych $test1: ",gettype($test1);

echo "<br><br>test2 = $test2<br>";
echo 'Typ danych $test2: ',gettype($test2),"<br>";
$test2=(bool)$test2;
echo "<br>test2 = $test2<br>";
echo "Typ danych $test2: ",gettype($test2);

echo "<br><br>test3 = $test3<br>";
echo 'Typ danych $test3: ',gettype($test3),"<br>";
$test3=(float)$test3;
echo "<br>test3 = $test3<br>";
echo "Typ danych $test3: ",gettype($test3),"<br>","<br>";

//rozmiar typu integer
echo PHP_INT_SIZE,'<hr>';//8

//kontrola typu zmiennych
//is_int(), is_float(), is_numeric(), is_bool(), is_null(), is_string(),
echo '<hr>kontrola typu zmiennych';
$x=1;
echo is_int($x);
echo is_float($x);
echo is_numeric($x);
$y;
echo is_null($y);
$w;
echo @gettype($w);//NULL, @ - operator ignorowania błędów

?>