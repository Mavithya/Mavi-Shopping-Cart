<?php include'connection.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>
</head>
<body>
  <!-- ctrl + / -->
  <?php
  if (isset($_POST['submit'])) {
    
  
  $fname=$_POST['firstName'];
  $lname=$_POST['lastName'];
  $phone=$_POST['phone'];
  $password=$_POST['password'];
  $en_password=sha1($password); //to encrypt password

  // echo "$fname $lname $phone $password $en_password";
  
  $dbQuery="INSERT INTO student(first_name,last_name,phone,password,status) VALUES ('$fname','$lname','$phone','$en_password',1)";
 
$result=mysqli_query($con,$dbQuery);
if ($result) {
  echo "Record is added";
}
else
    echo "Record is not added";


}
  ?>
  <br><br>
    <form action="insert.php" method="post">
      First Name :  <input type="text" name="firstName" ><br><br>
      Last Name :  <input type="text" name="lastName" ><br><br>
      Phone :  <input type="text" name="phone" ><br><br>
      Password :  <input type="password" name="password" ><br><br>
      <input type="submit" name="submit" >
    </form>



</body>
</html>
<?php mysqli_close($con); #to close the connection?>