<?php
$servername = "localhost";
$server="localhost";
$user="id16825909_chatbox1";
$pwd="Ed[c?GC|V?1ZxP2x";
$db="id16825909_chatbox";


//create connection
$conn=new mysqli($server,$user,$pwd,$db);

//check connection
if($conn->connect_error)
{
    die("connection failed".$conn->connect_error);
}

?>