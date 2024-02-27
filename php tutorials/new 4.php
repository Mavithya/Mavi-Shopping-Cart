<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aRRAy</title>
</head>

<body>

    <?php
    $salary = array(
        "Kamal" => 1000,
        "Sunil" => 2000, "Amara" => 3000
    );
    echo $salary["Kamal"];
    echo "<br>";

    echo $salary["Sunil"];
    echo "<br>";
    echo $salary["Amara"];
    echo "<br>";
    print_r($salary);

    echo "<br>";
    $age['mavi'] = 21;
    $age['nemi'] = 32;
    echo "<br>";
    print_r($age);
    echo "<br>";
    echo $age['mavi'];
    echo "<br>";
    echo $age['nemi'];
    echo "<br>";
//multidimensional array
$class = array("Maths"=>array(12,21,32.3),"English"=>array(54,54,'ass'),"Science"=>array(75,89,95));
print_r($class);
echo "<br>";
$class['Maths'][0]=100.5;
echo "<br>";
print $class['Maths'][0];
    

?>
<pre>
    <?php
    print_r($class);
    $marks = array(12,21,32);
    foreach($marks as $x){
        echo $x."<br>";
    }
 
 ?>
</pre>


</body>

</html>