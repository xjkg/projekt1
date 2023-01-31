<?php 
if (isset($_SESSION["username"])) {
    print("Välkommen tillbaka ".$_SESSION["username"]."<br>");

//profilbilds upload

$katalog = "../pictures/";
$bilder = scandir($katalog);
//print_r($bilder);
print("<img src='../pictures/".$bilder[2]."' alt='din profilbild' height=100/>");


}
else{
    header("refresh:5;url=../index.php");
    echo "You are not logged in. You will be redirected in 5 seconds";
}
?>