<?php

//setcookie(name,value,expiration);
setcookie('item','bag',time()+60*60);
print_r($_COOKIE);
echo "<br>";
$value=$_COOKIE['item'];
echo "$value";
//cookie deletion
/*setcookie('item',null,-time()); */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cookies</title>
</head>
<body>
    <h1>cookies</h1>
    
</body>
</html>