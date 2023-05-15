<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <form action="index.php" method="post">
    <label for="x">X : </label>
    <input type="number" name="x"/>
    <button type="submit">calculate</button>
  </form>
  
</body>
</html>

<?php

  $total = null;
  $luas = null;
  $volume = null;
  $x = $_POST["x"];

  // $total = abs($x);
  // $total = round($x);
  // $total = floor()
  // $total = ceil($x);
  // $total = sqrt()
  // $total = pow()
  // $total = max()
  // $total = min()
  // $total = pi()
  // $total = rand()

  $total = $x * 2 * pi();
  $total = round($total, 2);

  $luas = pi() * pow($x, 2);
  $luas = round($luas, 2);

  $volume = 4/3 * pi() * pow($x, 3);
  $volume = round($volume, 2);

  echo "Keliling : " . $total . "<br>";
  echo "Luas : " . $luas . "<br>";
  echo "Volume : " . $volume;



