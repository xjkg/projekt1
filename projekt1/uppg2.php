<?php
print("<p>Dagens datum: ".date("j.n.Y, H:i</p>"));
// Arrays
$month = array("test","Januari", "Februari", "Mars", "April", "Maj", "Juni", "Juli","Augusti", "September","November","December");
$manad = $month[date("n")];

$veckodag = array("test","Måndag", "Tisdag", "Onsdag", "Torsdag", "Fredag", "Lördag", "Söndag");
$dag = $veckodag[date("N")];

print($dag." den ".date("j ").$manad.", Vecka ".date("W"));
