<?php
if (!empty($_REQUEST["namn"]) && isset($_REQUEST["comment"])) {
    $name = test_input($_REQUEST["namn"]);
    $comment = test_input($_REQUEST["comment"]);

    $myfile = fopen("comments.txt", "a") or die("Unable to open file!");
    fwrite($myfile, $name . " - " . date("j.n.Y, H:i:s") . ": " . $comment . "\n");
    fclose($myfile);
    header("refresh:0.1;url=index.php");

    
}
$lines = file("comments.txt", FILE_IGNORE_NEW_LINES| FILE_SKIP_EMPTY_LINES);
    foreach(array_reverse($lines) as $comments){
        print $comments."<br><br>";
    }