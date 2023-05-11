<?php

include 'db_connect.php';

$msg=$_POST['text'];
$room=$_POST['room'];
$ip=$_POST['ip'];

$sql="INSERT INTO `msgss` ( `msg`, `room`, `stime`, `ip`) VALUES ('$msg', '$room', CURRENT_TIMESTAMP, '1');";
mysqli_query($conn,$sql);
mysqli_close($conn);


?>