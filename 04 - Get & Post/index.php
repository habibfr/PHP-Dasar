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

    <label for="makanan">Makanan : </label>
    <select name="makanan" id="makanan">
      <option value="1">Tahu</option>
      <option value="2">Tempe</option>
    </select><br>
    <label for="quantity">Quantity : </label>
    <input type="text" name="quantity" />
    <button type="submit">beli</button>
  </form>
</body>

</html>

<?php 

  $priceTahu = 2.4;
  $priceTempe = 3;
  // var_dump($_GET["quantity"]);
  // var_dump($_GET["makanan"]); 

  $price = null;
  $qty = $_POST["quantity"];

  if ($_POST["makanan"] == 1) {
    $price = $priceTahu *  $qty;
  } else {
    $price = $priceTempe * $qty;
  }



  



  echo "Total : " . abs($price);



  


  