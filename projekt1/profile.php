<?php
include "handy_methods.php";

if (isset($_SESSION["username"])) {
    print("Välkommen ".$_SESSION["username"]);
}else{
    header("refresh:5;url=../index.php");
    echo "You are not logged in. You will be redirected in 5 seconds";
}

