<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Staff Profile</title>
	 <link href="css/bootstrap.min.css" rel="stylesheet">
     <script src="js/html5shiv.min.js"></script>
     <script src="js/respond.min.js"></script>

</head>
<body>
	<div class="header">
      
        <div class="container well">
          		<h5><strong>	
          		<% 
          		String Fname = request.getParameter("fname");
          		session.setAttribute("name", Fname);
          		
          		String wNme = (String) session.getAttribute("name");
          		out.print("Hi " + wNme);
          		%>
          		</strong></h5>
        </div>
      
    
    </div>
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading"><center><strong><h4>View Profile</h4></strong></center></div>
			<table class="table table-striped tables-hover table-bordered ">
				<tr>
					<th class="col-lg-3">Name</th>
					<td><%= request.getParameter("fname") %></td>
					<td><%= request.getParameter("lname") %></td>
					<td><%= request.getParameter("oname") %></td>
				</tr>
				
				<tr>
					<th class="col-lg-3">Date Of Birth</th>
					<td colspan="3"><%= request.getParameter("dob") %></td>
				
				</tr>
				
				<tr>
					<th class="col-lg-3">Gender</th>
					<td colspan ="3"><%= request.getParameter("sex") %></td>
					
				</tr>
				
				<tr>
					<th class="col-lg-3">Department</th>
					<td colspan="3"><%= request.getParameter("level") %></td>
					
				</tr>
				
				<tr>
					<th class="col-lg-3">Rank</th>
					<td colspan="3"><%= request.getParameter("rank") %></td>
					
				</tr>
				
				<tr>
					<th class="col-lg-3">Phone</th>
					<td colspan="1.5"><%= request.getParameter("phone") %></td>
					<td colspan="1.5"></td>
					
				</tr>
				
				<tr>
					<th class="col-lg-3">Email</th>
					<td colspan="3"><%= request.getParameter("mail") %></td>
					
				</tr>
				
				<tr>
					<th class="col-lg-3">Residential Address</th>
					<td colspan="3"><%= request.getParameter("raddress") %></td>
				
				</tr>
				
				<tr>
					<th class="col-lg-3">Postal Address</th>
					<td colspan="3"><%= request.getParameter("paddress") %></td>
					
				</tr>
		
			</table>
		</div>
		<div class="container">
         		<em>
         			<center>
         				<strong><h4>To Update Your Profile Click <a href="Index2.jsp">Update</a></h4></strong>
         			</center>
         		</em>
        </div>
	</div>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
</body>
</html>