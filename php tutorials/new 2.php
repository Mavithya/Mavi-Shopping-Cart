<?php

//constants case sensitive

define("NAME", "Mavi Mihi");
echo constant("NAME");
echo "<br>";
define("Age", 21);
echo constant("Age");
echo "<br>";


$word = "hELLo wORLd";
echo "$word";
echo "<br>";
echo 'strlen =';
echo strlen($word);
echo "<br>";
echo "str_word_count =";
echo str_word_count($word);
echo "<br>";

echo ' strrev =';
echo strrev($word);
echo "<br>";

echo 'strpos =';

echo strpos($word, "w");
echo "<br>";

echo 'strpos =';

echo strpos($word, "h");
echo "<br>";
echo 'strpos =';

echo strpos($word, "O");
echo "<br>";

echo 'strpos =';

echo strpos($word, "OR");
echo "<br>";

echo 'str replace =';

echo str_replace("wORLd", "WORLD MAVI", "$word");
echo "<br>";
echo "<br>";

$num1=12;
$num2=10;
$num=$num1+$num2;
echo "sum= $num";
echo "<br>";
echo "sub= ".($num1-$num2);
echo "<br>";

echo "mul= ".($num1*$num2);
echo "<br>";

echo "dev= ".($num1/$num2);
echo "<br>";

echo "mod= ".($num1%$num2);
echo "<br>";

$num1++;
echo "increment= ".($num1);
echo "<br>";

$num2--;
echo "decrement= ".($num2);
echo "<br>";

$num3=2;
echo "power= ".($num1**$num3);
echo "<br>";
echo "<br>";

//comparision operators
$a=2;
$b=3;
var_dump($a==$b);
echo "<br>";
echo "<br>";
$a=2;
$b=2;
var_dump($a==$b);
echo "<br>";
echo "<br>";
$a=2;
$b="2";          #string 2
var_dump($a==$b);# data type eka samana venna ona nh
echo "<br>";
echo "<br>";
$a=2;
$b="2";
var_dump($a===$b);# === ekata data type ekath samana venna ona
echo "<br>";
echo "<br>";
$a=2;
$b=2;
var_dump($a===$b);
echo "<br>";
echo "<br>";
$a=2;
$b=3;
var_dump($a!=$b);
echo "<br>";
echo "<br>";
$a=2;
$b=2;
var_dump($a<>$b);
echo "<br>";
echo "<br>";
$a=2;
$b="2";
var_dump($a!==$b);
echo "<br>";
echo "<br>";
$a=2;
$b=3;
var_dump($a>$b);
echo "<br>";
echo "<br>";
$a=2;
$b=3;
var_dump($a<$b);
echo "<br>";
echo "<br>";
$a=2;
$b=3;
var_dump($a>=$b);
echo "<br>";
echo "<br>";
$a=2;
$b=3;
echo($a<=>$b);
echo "<br>";
echo "<br>";
$a=3;
$b=3;
echo($a<=>$b);
echo "<br>";
echo "<br>";
$a=3;
$b=2;
echo($a<=>$b);
echo "<br>";
echo "<br>";
$a=2;
$b=3;
var_dump($a<=>$b);
echo "<br>";
echo "<br>";
$a=2;
$b=3;
var_dump($a and $b);
echo "<br>";
echo "<br>";
$a=2;
$b=0;
var_dump($a and $b);
echo "<br>";
echo "<br>";
$a=-2;
$b=3;
var_dump($a && $b);
echo "<br>";
echo "<br>";
$a=2;
$b=3;
var_dump($a and $b);
echo "<br>";
echo "<br>";
$a=2;
$b=3;
var_dump($a or $b);
echo "<br>";
echo "<br>";
$a=0;
$b=0;
var_dump($a || $b);
echo "<br>";
echo "<br>";
$a=0;
$b=3;
var_dump($a or $b);
echo "<br>";
echo "<br>";
$a=2;
$b=3;
var_dump($a xor $b);
echo "<br>";
echo "<br>";
$a=0;
$b=3;
var_dump($a xor $b);
echo "<br>";
echo "<br>";
$a=0;
$b=0;
var_dump($a xor $b);
echo "<br>";
echo "<br>";
$a=2;
$b=3;
var_dump(!$a);
?>