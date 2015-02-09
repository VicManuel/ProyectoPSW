<?php
  $last_visit = isset($_COOKIE['last_visit']) ? $_COOKIE['last_visit'] : "Primera vez";
  $current_visit = date("C");
  setcookie("last_visit", $current_visit, (time()+60*60*24*30));
  session_start();
?>
