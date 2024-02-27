<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM</title>

</head>
<body>
    <form action="new 8.php" method="post">
    <input type="text"name="name" placeholder="enter your name"><br><br>
    <input type="text" name="age" placeholder="enter your age"><br><br>
    <input type="submit" name="submit">
  
   </form>
  <pre> <?php
  if (isset($_POST['submit'])) {
  
  
      print_r($_POST);
      $name=$_POST['name'];
      echo "$name<br>";
  
      $age=$_POST['age'];
      echo "$age<br>";
    }
   ?>
 
   </pre>
</body>
</html>