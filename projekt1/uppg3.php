
<?php
if(!empty($_REQUEST["name"]) && isset($_REQUEST["email"])) {

    //Använder test_input för att undvika XSS fara
    $skadligdata = $_REQUEST["name"];
    $ofarligdata = test_input($skadligdata);

    print "<br>Welcome " . $ofarligdata; 
    print "<br>Your email address is: " . $_REQUEST["email"];
}

