<?php include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show</title>
</head>
<body>
<?php
$query="SELECT * FROM student";
$result=mysqli_query($con,$query);
if ($result) {/*
   echo mysqli_num_rows($result);
  $r= mysqli_fetch_assoc($result);
  echo "<pre>";
  print_r($r);
  echo "/<pre>";
   // or use loops

  $r= mysqli_fetch_assoc($result);
  echo "<pre>";
  print_r($r);
  echo "/<pre>";

  $r= mysqli_fetch_assoc($result);
  echo "<pre>";
  print_r($r);
  echo "/<pre>";

  $r= mysqli_fetch_assoc($result);
  echo "<pre>";
  print_r($r);
  echo "/<pre>";*/  

  while ($r= mysqli_fetch_assoc($result)) {
    $fname=$r['first_name'];
    echo "$fname <br>";
  }
}else
echo "There is no data found";
?>
    
</body>
</html>
<?php mysqli_close($con);#to close the connection?>