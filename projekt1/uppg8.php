<?php

//besöksräknaren
$myfile = fopen("besok.txt", "a") or die("Unable to open file!");
//short circuit evaluation är dåligt, använd throw/catch

//skriv vem som besökte sidan
$ip = $_SERVER['REMOTE_ADDR'];
fwrite($myfile, $ip.", ".date("j.n.Y, H:i:s")."\n");
fclose($myfile);
print("Ditt besök har loggats")
?>