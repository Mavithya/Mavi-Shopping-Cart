<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
</head>
<body>
<?php

function print1(){
    echo "this is a function";

}
print1();
function show(){
    print "<br>";
    echo print1();
}

show();
print "<br>"; print "<br>";
function sum($a,$b){
    $s=$a+$b;
    echo "Sum =".$s."<br>";
}

sum(4,5);
sum(1000,216473);
$num=885;
function sub($a,$b){
    $s=$a-$b-$GLOBALS['num'];#calling for global variable
    echo "Sub = ".$s."<br>";
}
sub(9,9);
sub(100,25);
function mul($a,$b,$c){
    $m=$a*$b*$c;
    return $m;
}

$A=mul(1,2,3);
echo $A."<br>";
echo mul(10,10,10)."<br>";

function show1(){
    $count=0;
    $count++;
    echo $count."<br>";
}
show1();
show1();
show1();
echo "<br>";
function show2(){
    static $count=0;     #static variabels
    $count++;
    echo $count."<br>";
}
show2();
show2();
show2();
//include "new 1.php"; 
//require "new 2.php";

$num="mihi";
$nil=12;
?>

<a href="new 6.php?name=mavi&age=21">Click here to go new 6.php file</a>
<br>
<a href="new 7.php?num=<?php echo $num ?>&age=<?php echo $nil ?>">CLICK</a>
</body>
</html>
