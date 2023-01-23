<?php
// Lite övningar med time() och mktime()
if(!empty($_REQUEST["tid"])){

    $tid = ($_REQUEST["tid"]);
    print("<p>Du matade in tiden " . $tid . "</p>");

    $split = explode("/", $tid);

    $tidnu = time();
    print("Just nu är det " . date("l,M,Y", $tidnu));

    $inmatadtid = date("l,M,Y", mktime(0,0,0,$split[0],$split[1],$split[2]));
    print("<br>Ditt datum är " . $inmatadtid ."<br> ");
    print("Det är " . ((time())-(date($inmatadtid))) . " sekunder till ditt datum");
}
?>