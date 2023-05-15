<?php

setcookie("fav_food", "pizza", time() + 86400, "/");
setcookie("fav_epl", "MU", time() + (86400 * 2), "/");
setcookie("fav_anime", "Kembar Lima", time() - 0, "/");
setcookie("fav_donghua", "TOS", time() + (86400 * 4) , "/");


// foreach($_COOKIE as $key => $value){
//   echo "{$key} => {$value} <br/>";
// }

if(isset($_COOKIE["fav_anime"])){
  echo"your fav anime is kembar lima";
}else{
  echo"tidak ada anime fav yang dipilih";
}


?>