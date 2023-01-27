<?php
if(!isset($_COOKIE["time"])) {
  print "Cookie time is not set!";
  $cookietime = date("j.n.Y, H:i");
  setcookie("time", $cookietime, time() + (86400), "/");
} else {
  if(isset($_SESSION["username"])) {
    print "Welcome back " . $_SESSION["username"] ."! Your first visit was: " . $_COOKIE["time"];
  }
  else print "Welcome back! Your first visit was: " . $_COOKIE["time"];
}
?>