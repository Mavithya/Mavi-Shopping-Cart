<?php include'connection.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DELETE</title>
</head>
<body>

  <?php

$query ="DELETE FROM student WHERE id= 1";
$result = mysqli_query($con,$query);
if($result)
{    
        echo mysqli_affected_rows($con);
}
else{
echo "Query is failed";
}

?>
</body>
</html>
<?php mysqli_close($con);#to close the connection ?>