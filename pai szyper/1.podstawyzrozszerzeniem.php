<?php
  $name='Janusz';
  $surname='Nowak';
  //konkatenacja .
  echo 'Cześć $name'.'<br>';
  echo "Cześć $name";
  //echo 'test';
  //typy danych
//boolean
$prawda=true;
$falsz=false;
echo $prawda;
echo $falsz;

//integer
$bin=0b010101;
echo "</br>$bin";
$oct=012;
echo "</br>$oct";
$dec=12;
echo "</br>$dec";
$hex=0xff;
echo "</br>$hex</br></br>";

$name='Anna';

$text=<<<LABEL
<hr>
Heredoc 1
<br>
Imię: $name
<hr>
LABEL;

echo $text;

echo <<<L
    Heredoc 2<br>
    Imię: $name
    <br>
    Nazwisko: $surname
    <hr>
L;

//skladnia nowdoc
echo <<<'L'
    Nowdoc<br>
    Imię: $name
    <br>
    Nazwisko: $surname
    <hr>
L;

$city='Poznań';
echo "Nazwa miasta: \$city wartość city $city";

?>
