<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>new 6.php</h1>
   
   <pre>
    <?php
    print_r($_GET);
    $name=$_GET['name'];
    echo "$name<br>";
    
    $age=$_GET['age'];
    echo "$age<br>";
    
    $for=$_GET['form'];
    echo "$for<br>";
    echo "<br>";
   
    ?>
    </pre>
</body>
</html>