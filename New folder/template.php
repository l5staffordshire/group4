<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>studentInfo</title>

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
          <h1><center>Personal Information</center></h1>
        </div>
        <div class="container">
          <a href="template2.php"><strong>Login</strong></a>
        </div>
      </div>
    </header>
      
      <div class="container well">
        <div class="row">
          
          <form method="post" action="validate.php">
            <div class="col-lg-6">
              <div class="form-group">
                <label for="fname">First Name</label>
                <input type="textbox" name="fname" class="form-control" required>
              </div>

               <div class="form-group">
                <label for="lname">Last Name</label>
                <input type="textbox" name="lname" class="form-control" required>
               </div>

               <div class="form-group">
                <label for="dob">Date Of Birth</label>
                <input type="date" name="dob" class="form-control" required>
              </div>

               <div class="form-group">
                <label for="level">Programme Level</label>
                <input type="number" name="level" class="form-control" required>
              </div>

               <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="number" name="phone" class="form-control" required>
              </div>

               <div class="form-group">
                <label for="mail">Email</label>
                <input type="email" name="mail" class="form-control" required>
              </div>

               <div class="form-group">
                <label for="raddress">Residential Address</label>
                <input type="text" name="raddress" class="form-control" required>
              </div>

               <div class="form-group">
                <label for="paddress">Postal Address</label>
                <input type="textbox" name="paddress" class="form-control" required>
               </div>

                  <input type="password" name="pass" class="form-control" placeholder="password" required>
                <hr>
                  <input type="password" name="pass-1" class="form-control" placeholder="confirm password" required>
          
              </div>

              <div class="col-lg-6">
                <hr>
                <p><em><center>Enter Personal Details Of Next Of Kin</center></em></p>
                <hr>

                <div class="form-group">
                <label for="fname-1">First Name</label>
                <input type="textbox" name="fname-1" class="form-control" required>
              </div>

              <div class="form-group">
                <label for="lname-1">Last Name</label>
                <input type="textbox" name="lname-1" class="form-control" required>
              </div>

              <div class="form-group">
                <label for="mail-1">Email</label>
                <input type="email" name="mail-1" class="form-control" required>
              </div>

              <div class="form-group">
                <label for="phone-1">Phone Number</label>
                <input type="number" name="phone-1" class="form-control" required>
              </div>

              <div class="form-group">
                <label for="relation">Relation</label>
                <input type="textbox" name="relation" class="form-control" required>
              </div>
              
              <hr>

               <p>  
               <input type="submit"  name="submit" class="btn btn-primary">
               </P>     
              
              </div>
          </form>
        
        </div>
      </div>

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>