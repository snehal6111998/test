<!DOCTYPE html>
<html>
      <title>form</title>
      <head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/all.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/jquery.slim.min.js"></script>
<style>
  
  input{
  height: 30px;
  width: 50%;
  padding: 5px 10px;
  font-size: 16px;
  border-radius: 5px;
  border:3px solid gray;
  background: transparent;
  margin-left: 10%;

}

form{
  width: 50%;
  margin: 0px auto;
  padding: 20px;
  border:1px solid#80C4DE;
  background: white;
  border-radius:0px 0px 10px 10px;
  background: rgba(0,0,0,0.1);
  margin-top: 10%;
}
body{
  font-size: 120%;
  background: #F8F8FF;
  background-image: url("img15.jpeg");
  background-size: cover;
  background-repeat: no-repeat;

}


</style>


</head>
<body>
  <center>

  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
          
            
            <form class="form-signin" method = "POST" action = "show.php">
              <div class="form-label-group">
                <input type="text" name = "show" class="form-control" placeholder="Your code here" required autofocus><BR>
             

           
            </div>
              <button class="btn btn-lg btn-success btn-block text-uppercase" type="submit" name = "submit" value ="submit">SHOW POST</button>
              
              <hr class="my-4">
            </center>
             

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php

?>
</body>

<p id = "result"></p>




</body>
</html>
