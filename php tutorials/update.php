<?php include'connection.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE</title>
</head>
<body>

  <?php

$query ="UPDATE student SET first_name='oshee' WHERE id= 1";
$result = mysqli_query($con,$query);
if($result)
{    
        echo mysqli_affected_rows($con);
}
else{
echo "Query is wrong";
}

?>
</body>
</html>
<?php mysqli_close($con);#to close the connection ?>