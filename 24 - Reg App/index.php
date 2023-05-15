<?php
  include("database.php");

  
  // $result = mysqli_query($conn, $sql);
  // // echo mysqli_num_rows($result);

  // if(mysqli_num_rows($result) > 0){
  //   // foreach($row as $key => $value){
  //   //     echo "{$key} => {$value} <br/>";
  //   // }

  //   while( $row = mysqli_fetch_assoc($result)){
  //     echo "{$row["user"]} <br>";
  //     echo "{$row["password"]} <br/>";
  //     echo "{$row["reg_date"]} <br/>";
  //   }
   

  // }else{
  //   echo "no users found";
  // }

 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fakebook</title>
</head>
<body>

<form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    username : 
    <input type="text" name="username" id="username"><br/>
    password : 
    <input type="password" name="password" id="password"><br/>
    <input type="submit" name="register" value="register"/>
</form>


  
</body>
</html>


<?php

  if($_SERVER["REQUEST_METHOD"] === "POST"){
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

    if(empty($username)){
      echo "please input username";
    }else if(empty($password)){
      echo "please input password";
    }else{
      $hash = password_hash($password, PASSWORD_DEFAULT);


      try{
        $sql = "INSERT INTO users(user, password) values ('{$username}', '{$hash}')";
        mysqli_query($conn, $sql);
        echo " youre registered!!";

      }catch(mysqli_sql_exception){
        echo "username sudah ada";
      }

    }


    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);
  // // echo mysqli_num_rows($result);

    $no = 1;
    if(mysqli_num_rows($result) > 0){
    //   // foreach($row as $key => $value){
    //   //     echo "{$key} => {$value} <br/>";
    //   // }

      echo "<table border='1'> <tr><th>no</th> <th>id</th> <th>user</th></tr>";
        while( $row = mysqli_fetch_assoc($result)){
          echo "<tr><td>{$no}</td><td>{$row["id"]}</td><td>{$row["user"]}</td></tr>";
          $no += 1;
        }
      echo"</table>";
    }else{
          echo "no users found";
    }

  }

  mysqli_close($conn);

?>