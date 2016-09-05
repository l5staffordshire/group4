<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Staff Info</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	
</head>
<body>
	<div class="header">
      <div class="jumbotron">
        <div class="container well">
          <h1><center>Add Staff</center></h1>
        </div>
      
      </div>
    </div>
    	<div class="container well">
        <div class="row">
          
          <form>
            <div class="col-lg-6">
              <div class="form-group">
                <label for="fname">First Name</label>
                <input type="text" name="fname" class="form-control" required>
              </div>

               <div class="form-group">
                <label for="lname">Last Name</label>
                <input type="text" name="lname" class="form-control" required>
               </div>
               
                <div class="form-group">
                <label for="lname">Other names</label>
                <input type="text" name="oname" class="form-control">
                </div>

               <div class="form-group">
                <label for="dob">Date Of Birth</label>
                <input type="date" name="dob" class="form-control" required>
              </div>
              
               <div class="form-group">
           	
				<label>Gender:</label>
		        <input type="radio" value="male" name="sex" /> <label> Male </label>
		        <input type="radio" value="female" name="sex"/> <label> Female </label>
			    
			  </div>

               <div class="form-group">
                <label for="level">Department</label>
                <input type="text" name="level" class="form-control" required>
              </div>
              
               <div class="form-group">
                <label for="phone">Rank</label>
                <input type="text" name="phone" class="form-control" required>
              </div>

               

              </div>

              <div class="col-lg-6">
               
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
                <input type="text" name="paddress" class="form-control" required>
               </div>
              
               <hr>

               <p>  
               <input type="submit"  value="Add" name="submit" class="btn btn-primary">
               </P>     
              
              </div>
          </form>
       
        </div>
        	  <div class="container">
         		<em>
         			<center>
         				<strong><h4>To Update Staff Profile Click <a href="Index2.jsp">Update</a></h4></strong>
         			</center>
         		</em>
        </div>
      </div>
    	

</body>
</html>