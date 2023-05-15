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
  this is home page. <br>

  <a href="index.php">back to login page</a><br>

  <form method="post">
    <input type="submit" name="logout" id="logout" value="logout">
  </form>
</body>
</html>

<?php

echo $_SESSION["username"] . "<br>"; 
echo $_SESSION["password"];

if(isset($_POST["logout"])){
  session_destroy();

  header("Location: index.php");
}