<?php include ('database.php');
include ('login.php');\


if (isset($)) ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Login</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    
     <!-- <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
       -->
  </head>
  <body>
    <header>
      <div class="jumbotron">
        <div class="container well">
          <h1>Hello World</h1>
        </div>
        <div class="container">
          <a href="template.php"><strong>sign in</strong></a>
        </div>
      </div>
    </header>
      
      <div class="container well">
        <div class="row">
          <form action="" metod="post">
            <div class="col-lg-6">
              <div class="form-group">
                <label for="mail-2">Email</label>
                <input type="email" name="mail" class="form-control" >
              </div>

               <div class="form-group">
                <label for="pass-2">Password</label>
                <input type="password" name="pass" class="form-control" required>
              </div>
               <p>  
               <input type="submit" value="submit"  name="submit" class="btn btn-primary" required>
               </P> 
           </div>

          </div>

          </form>
        
        </div>
      </div>

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>