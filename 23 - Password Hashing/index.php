<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
</body>
</html>

<?php

  $pass = "habib123";

  $hash = password_hash($pass, PASSWORD_DEFAULT);

  if(password_verify("habib123", $hash)){
    echo "Anda telah login";
  }else{
    echo "Maaf anda belum login";
  }

?>