<?php

$num = 10;
if($num>10)
{
    echo "number is greater than 10";
}
elseif($num == 10){
    echo "number is equal to 10";
}
else
    {
        echo "number is not greater than 10";
    }
    echo "<br>";
    echo "<br>";

$color ="red";
switch ($color) {
    case 'red':
        echo "color is red";
        break;
    
    default:
    echo "color is not red";
    break;
}
echo "<br>";
echo "<br>";

$color ="green";
switch ($color) {
    case 'red':
        echo "color is green";
        break;
    
    default:
    echo "color is not red";
    break;
}
echo "<br>";
echo "<br>";
$i;
for ($i=0; $i <= 10 ; $i++) { 
    echo "i = $i <br>";
 
}

echo "<br>";
echo "<br>";
$x = 10;
while ($x >= 0) {
    print "x = $x <br>";
$x--;
}

echo "<br>";
echo "<br>";
$x =0;
do {
    print "x = $x <br>";
    $x++;
} while ($x >= 10);

echo "<br>";
echo "<br>";
$x =0;
do {
    print "x = $x <br>";
    $x++;
} while ($x <= 5);
echo "<br>";

$marks=array(12,45,15,48,79,46,11);
echo "$marks[0]";
echo "<br>";
echo "<br>";
$age[0]=21;
$age[1]=31;
$age[2]=11;
$age[3]=21;

print_r($age);
$age[0]=22;
echo "<br>";
print_r($age);
echo "<br>";
$colors=array("blue","red","black");
print_r($colors);
$colors[2]="white";
echo "<br>";
print_r($colors);







?>