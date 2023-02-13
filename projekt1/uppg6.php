<?php 
if (isset($_SESSION["username"])) {
    print("Välkommen tillbaka ".$_SESSION["username"]."<br>");

//profilbilds upload

function scan_dir($dir) {
    $ignored = array('.', '..', '.svn', '.htaccess'); // -- ignorerar dessa filer
    $files = array(); //----------------------------------- skapa tom array
    foreach (scandir($dir) as $file) {
        if ($file[0] === '.') continue; //----------------- hoppar över alla filer som börjar med '.'
        if (in_array($file, $ignored)) continue; //-------- hoppar över alla filer i $ignored
        $files[$file] = filemtime($dir . '/' . $file); //-- sätter filen i $files array, sorterar last modified?
    }
    arsort($files); //------------------------------------- ?sort file values (creation timestamps)?
    $files = array_keys($files); //------------------------ ?get all files after sorting?
    return ($files) ? $files : false;
}//Förstår inte ännu helt hur funktionen fungerar

$katalog = "../pictures/";
$bilder = scan_dir($katalog, 1);
//print_r($bilder);
print("<img src='../pictures/".$bilder[0]."' alt='din profilbild' height=300/><br>");

foreach(array_slice($bilder,1) as $index){
     print("<img src='../pictures/".($index)."' alt='din gamla profilbild' height=50/>");
}

}
else{
    header("refresh:5;url=./index.php");
    echo "You are not logged in. You will be redirected in 5 seconds";
}
?>