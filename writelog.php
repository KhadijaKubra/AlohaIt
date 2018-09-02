<?php
session_start();
if(isset($_SESSION['un'])){
    $text = $_POST['text'];
     
    $fp = fopen("chatlog/log.html", 'a');
    fwrite($fp, "<div class='msgln'>(".date("g:i A").") <b>".$_SESSION['un']."</b>: ".stripslashes(htmlspecialchars($text))."<br></div>");
    fclose($fp);
}
?>