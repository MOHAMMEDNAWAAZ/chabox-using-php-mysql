<?php
//get para
$roomname=$_POST['room'];
$link="https://chatboxmlr.000webhostapp.com/rooms.php?roomname=";
$l=$link.$roomname;
echo "$li";
echo "<script>";
echo "window.location='$l';";
echo "</script>";
?>