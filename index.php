
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.82.0">
    <title>free chat room</title>

    <link rel="icon" href="img/icon.jpg">

    

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="css/product.css" rel="stylesheet">


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

<style>
body
{
  margin:0;
  padding:0;
  text-align:center;
}
.centered
{
  margin: 0 auto;
  text-align: left;
  width:900px;
}

</style>

    
    
  </head>
  <body>
    

<main>

  
    <div class="col-md-5 p-lg-5 mx-auto my-5">
      <h1 class="display-4 fw-normal">chat with friends</h1>
      <p class="lead fw-normal">no need to login, to chat with your friends</p>
     
    </div>




	<form method="post" action="claim.php">
	<h6>create your new chatroom : <input type="text" name="room"></h6>
  <!--<button type="submit" class="btn btn-primary">chat now</button>-->
  <button type="submit" class="btn btn-outline-danger" href="#">create now</button>
	</form>

<br>
<br>

<form method="post" action="created.php">
	<h6>if created, enter room name : <input type="text" name="room"></h6>
  <!--<button type="submit" class="btn btn-primary">chat now</button>-->
  <button type="submit" class="btn btn-outline-success" href="#">chat now </button>
</form>

  
</main>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>


      
  </body>
</html>
