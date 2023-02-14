<?php

//besöksräknaren
$myfile = fopen("besok.txt", "a") or die("Unable to open file!");
//short circuit evaluation^, använd throw/catch

//skriv vem som besökte sidan
$ip = $_SERVER['REMOTE_ADDR'];

fwrite($myfile,$ip.", ".date("j.n.Y, H:i:s")."\n");
fclose($myfile);
print("Ditt besök har loggats");

$besok = ("visitors.txt");
$visits = file($besok);
$visits[0] ++;

$visitorfile = fopen($besok , "w");
fwrite($visitorfile , "$visits[0]");
fclose($visitorfile);
print "<br>Totalt antal besök: ".$visits[0];

?>