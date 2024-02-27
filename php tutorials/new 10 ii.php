<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessions</title>
</head>
<body>
    <?php
    print_r($_SESSION);
    
    $name=$_SESSION['name'];
    $age=$_SESSION['age'];
    echo "<br>";
    echo "$name $age"
    ?>
</body>
</html>