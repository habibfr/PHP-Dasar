<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  Login Page
  <form method="post">
    username: 
    <input type="text" name="username"/> <br>
    password: 
    <input type="password" name="password"><br>

    <input type="submit" name="login" id="login" value="login">
  </form>

</body>
</html>

<?php

if(isset($_POST["login"])){
  if(!empty($_POST["username"] && $_POST["password"])){
    $_SESSION["username"] = $_POST["username"];
    $_SESSION["password"] = $_POST["password"];

    header("Location: home.php");
    echo $_SESSION["username"] . "<br>"; 
    echo $_SESSION["password"];
  }else{
    echo"missing username/password";
  }
}

