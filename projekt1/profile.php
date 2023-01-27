<?php
include "handy_methods.php";

if (isset($_SESSION["username"])) {
    print("Välkommen ".$_SESSION["username"]);
}

