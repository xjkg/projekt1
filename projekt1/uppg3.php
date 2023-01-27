<?php
// Lite övningar med time() och mktime()
if(!empty($_REQUEST["tid"])){

    $tid = test_input($_REQUEST["tid"]);
    print("<p>Du matade in tiden " . $tid . "</p>");

    $split = explode("/", $tid);

    $tidnu = time();
    print("Just nu är det " . date("l,M,Y", $tidnu));

    $inmatadtid = date("l,M,Y", mktime(0,0,0,$split[0],$split[1],$split[2]));
    print("<br>Ditt datum är " . $inmatadtid ."<br> ");

    $tidemellan = (time())-(mktime(0,0,0,$split[0],$split[1],$split[2]));
    $s = $tidemellan%60;
    $m = floor(($tidemellan%3600)/60);
    $h = floor(($tidemellan%86400)/3600);
    $d = floor(($tidemellan%2592000)/86400);
    
    $s1 = abs($tidemellan)%60;
    $m1 = floor((abs($tidemellan)%3600)/60);
    $h1 = floor((abs($tidemellan)%86400)/3600);
    $d1 = floor((abs($tidemellan)%2592000)/86400);

    if($tidemellan<0){
        print("Det är " . (abs($tidemellan)) . " sekunder tills det datumet<br>Det motsvarar:<br>Dygn: "
        . $d1 . "<br>Timmar: " . $h1 . "<br>Minuter: " . $m1) . "<br>Sekunder: " . $s1;
    }
    else print("Det är " . $tidemellan . " sekunder sedan det datumet<br>Det motsvarar:<br>Dygn: "
    . $d . "<br>Timmar: " . $h . "<br>Minuter: " . $m) . "<br>Sekunder: " . $s;
}
?>