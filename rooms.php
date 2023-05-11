<?php
//get para
$roomname=$_GET['roomname'];

//connecting to database

include 'db_connect.php';

$sql="SELECT * FROM `rooms` WHERE roomname='$roomname'";

$result=mysqli_query($conn,$sql);
if($result)
{
    if(mysqli_num_rows($result)==0)
    {
        $msg="this room is not exist kindly create room";
        echo '<script lang="javascript">';
        echo 'alert(" '.$msg.' ");';
        echo 'window.location="https://chatboxmlr.000webhostapp.com";';
        echo '</script>';
    }


}
else
{
    echo "Error : ".mysqli_error($conn);
}
?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Bootstrap core CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

<!-- Custom styles for this template -->
<link href="css/product.css" rel="stylesheet">
<style>
body {
  margin: 0 auto;
  max-width: 800px;
  padding: 0 20px;
}

.container {
  border: 2px solid #dedede;
  background-color: #f1f1f1;
  border-radius: 5px;
  padding: 10px;
  margin: 10px 0;
}

.darker {
  border-color: #ccc;
  background-color: #ddd;
}

.container::after {
  content: "";
  clear: both;
  display: table;
}

.container img {
  float: left;
  max-width: 60px;
  width: 100%;
  margin-right: 20px;
  border-radius: 50%;
}

.container img.right {
  float: right;
  margin-left: 20px;
  margin-right:0;
}

.time-right {
  float: right;
  color: #aaa;
}

.time-left {
  float: left;
  color: #999;
}

.anyclass {
    height:350px;
    overflow-y: scroll;
    overflow-y: auto;

}

.blue{
  background:blue;
  height:50px;
  width:50%;
}

</style>


<style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    <!--back ground image -->
    <style>
body {
  background-image: url('img/bg.jpg');
}
</style>
</head>
<body>


<br>
<div style="background-image: url('img/bg.jpg');">
<h2>Chat Messages from : <?php echo " [ ".$roomname. " ]";?></h2>




<div class="container darker">
<div class="anyclass">




  
</div>
</div>


</div>







<input type="text" class="form-control" name="usermsg" id="usermsg" placeholder="Add message"><br>
<button class="btn btn-default" name="submitmsg" id="submitmsg" >Send</button>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>


<script type="text/javascript">

//check for new messages every 1 second


















setInterval(runFunction,1000);
function runFunction()
{
  $.post("htcont.php",{room:'<?php echo $roomname?>'},
  function(data, status)
  {
    document.getElementsByClassName('anyclass')[0].innerHTML=data;
  }
  )

}



var input = document.getElementById("usermsg");

// Execute a function when the user releases a key on the keyboard
input.addEventListener("keyup", function(event) {

  event.preventDefault();
  if(event.keyCode===13){
    document.getElementById("submitmsg").click();
  }
});



  $("#submitmsg").click(function(){
    var clientmsg=$("#usermsg").val();
  $.post("postmsg.php", {text: clientmsg, room:'<?php echo $roomname ?>', ip:'<?php echo $_SERVER['REMOTE_ADDR']?>'},
  function(data, status){
    document.getElementsByClassName('anyclass')[0].innerHTML=data;});
  $("#usermsg").val("");
  return false;
  
  
  
  });





</script>










</body>
</html>