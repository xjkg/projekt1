<?php
$datum = date("d.M.Y");
print("<p>Dagens datum är: <br> " . $datum . "</p>");
// Arrays
$veckodag = array("Måndag", "Tisdag", "Onsdag", "Torsdag", "Fredag", "Lördag", "Söndag");
print ("<p>Idag är det veckodag nummer: " . date("l")) . "</p>";
print("<p>Är det veckodag nummer " . date("m") . " då? </p>");
print("<p>veckodag nummer 1 betyder att det är " . $veckodag[1] . "</p>");
