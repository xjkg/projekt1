<?php
if(!empty($_REQUEST["name"]) && isset($_REQUEST["email"])) {

    //Använder test_input för att undvika XSS fara
    $skadligtnamn = $_REQUEST["name"];
    $ofarligtnamn = test_input($skadligtnamn);
    $username = $ofarligtnamn;

    $skadligmail = $_REQUEST["email"];
    $ofarligmail = test_input($skadligmail);

    $mail = $ofarligmail;

    print "<br>Welcome: " . $username; 
    print "<br>Your email address is: " . $mail;
    mail($mail, "Lösenord", rand());
    print "<br>Signing up as " . $username ."<br>Check your email for password<br>";

    //Spara användarmanet i sessionsvariabeln
    $_SESSION["username"] = $username;

    header("refresh:5;url=index.php");
    echo "You will be redirected in 5 seconds";
}

