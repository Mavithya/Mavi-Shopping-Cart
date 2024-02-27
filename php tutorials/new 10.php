<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $_SESSION['name']="mavi";

    $_SESSION['age']="21";
    /*to remove session
    session_unset();or session_destroy(;)
    */
    ?>
</body>
</html>