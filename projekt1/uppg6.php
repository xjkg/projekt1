<?php 
if (isset($_SESSION["username"])) {
    print("Välkommen tillbaka ".$_SESSION["username"]."<br>");

//profilbilds upload

function scan_dir($dir) {
    $ignored = array('.', '..', '.svn', '.htaccess'); // -- ignore these file names
    $files = array(); //----------------------------------- create an empty files array to play with
    foreach (scandir($dir) as $file) {
        if ($file[0] === '.') continue; //----------------- ignores all files starting with '.'
        if (in_array($file, $ignored)) continue; //-------- ignores all files given in $ignored
        $files[$file] = filemtime($dir . '/' . $file); //-- add to files list
    }
    arsort($files); //------------------------------------- sort file values (creation timestamps)
    $files = array_keys($files); //------------------------ get all files after sorting
    return ($files) ? $files : false;
}

$katalog = "../pictures/";
$bilder = scan_dir($katalog, 1);
//print_r($bilder);
print("<img src='../pictures/".$bilder[0]."' alt='din profilbild' height=100/>");

foreach(array_slice($bilder,1) as $index){
     print("<img src='../pictures/".($index)."' alt='din gamla profilbild' height=50/>");
}

}
else{
    header("refresh:5;url=./index.php");
    echo "You are not logged in. You will be redirected in 5 seconds";
}
?>