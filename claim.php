<?php
$room=$_POST['room'];

//echo $room;

if(strlen($room)>20 or strlen($room)<=2)
{
    $msg="your name should be more than 2 and less than 20 characters";
    echo '<script lang="javascript">';
    echo 'alert(" '.$msg.' ");';
    echo 'window.location="https://chatboxmlr.000webhostapp.com";';
    echo '</script>';
}
else if(!ctype_alnum($room))
{
    $msg="special char not alllowed";
    echo '<script lang="javascript">';
    echo 'alert(" '.$msg.' ");';
    echo 'window.location="https://chatboxmlr.000webhostapp.com/";';
    echo '</script>';  
}
else
{
    include 'db_connect.php';

}

//checking if room already exists
$sql="SELECT * FROM `rooms` WHERE roomname='$room'";
$result=mysqli_query($conn,$sql);
if($result)
{
    if(mysqli_num_rows($result)>0)
    {
        $msg="room name is already exits plz choose other name";
        echo '<script lang="javascript">';
        echo 'alert(" '.$msg.' ");';
        echo 'window.location="https://chatboxmlr.000webhostapp.com/";';
        echo '</script>';
    }
    else
    {
        $sql="INSERT INTO `rooms` ( `roomname`, `stime`) VALUES ( '$room', CURRENT_TIMESTAMP);";
        if(mysqli_query($conn,$sql))
        {
            $msg="your room is ready";
            echo '<script lang="javascript">';
            echo 'alert(" '.$msg.' ");';
            echo 'window.location="https://chatboxmlr.000webhostapp.com/rooms.php?roomname=' .$room.'";';
            echo '</script>';
        }

    }

}
else
{
    echo "Error :" .mysqli_error($conn);

}



?>