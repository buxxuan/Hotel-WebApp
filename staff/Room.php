<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
    <title>Staff schedules</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <!-- Le styles -->
    <link href="http://fonts.googleapis.com/css?family=Oxygen|Marck+Script" rel="stylesheet" type="text/css">
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <link href="assets/css/admin.css" rel="stylesheet">
    
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
	    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>    
<body>

<div class="container">
		
	<div class="row">
		
		<div class="span2">
		
		<div class="main-left-col">
		
			<h1><i class="icon-shopping-cart icon-large"></i>
                Royal Hotel</h1>
			
			<ul class="side-nav">

				<li class="dropdown">
					<a href="index.html"><i class="icon-home"></i> Hoom Page</a>
				</li>
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="collapse" data-target="#store-dropdown" href="listing.html"><i class="icon-time"></i> Schedule </a>
				</li>
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="collapse" data-target="#help-dropdown" href="Room.php"><i class="icon-user"></i> Room </a>
				</li>
			</ul>
		
		</div> <!-- end main-left-col -->
	
	</div> <!-- end span2 -->
	
	<div class="span10">
		
	<div class="secondary-masthead">
	
		<ul class="nav nav-pills pull-right">
			<li>
				<a href="index.html"><i class="icon-globe"></i> View Website</a>
			</li>
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="logout.php"><i class="icon-user"></i> Log out
				</a>
				<ul class="dropdown-menu">
					<li><a href="profile.html">Your Profile</a></li>
					<li class="active"><a href="form.html">Account Settings</a></li>
					<li class="divider"></li>
					<li><a href="">Logout</a></li>
				</ul>
			</li>
		</ul>

		<ul class="breadcrumb">
			<li>
				<a href="#">Admin</a> <span class="divider">/</span>
			</li>
			<li class="active">Dashboard</li>
		</ul>
		
	</div>
	
	<div class="main-area dashboard">
			
			<div class="row">
				
				<div class="span10">
				
				<?php

// 1. Open database connection
require ('DB.php');

// 2. Do a query
$query  = "SELECT id, room_name, clear, reservation "; 
$query .= "FROM room";
$result = mysqli_query($connection,$query);

if (!$result) {
    die("query is wrong");
}
?>


<html>
<head>
  <style type="text/css"> 
div{
    text-align:center;
      }       
       /* Border styles */
table.gridtable {
	font-family: verdana,arial,sans-serif;
	font-size:20px;
	color:#333333;
	border-width: 1px;
	border-color: #666666;
	border-collapse: collapse;
    margin: 0 auto;
}
table.gridtable th {
	border-width: 1px;
	padding: 8px;
	border-style: solid;
	border-color: #666666;
	background-color: #dedede;
}
table.gridtable td {
	border-width: 1px;
	padding: 8px;
	border-style: solid;
	border-color: #666666;
	background-color: #ffffff;
}
 
  </style>
</head>
<body>    
    <table class="gridtable">
         
        <tr>
          <th>Room name</th>
          <th>Clearer</th>
          <th>Reservation</th>
          <td>Add time</td>
          <td>Update time</td>
          <td>Delete time</td>
        </tr>


<?PHP
// 3. use/show data
while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row["room_name"] . "</td>";  
    echo "<td>" . $row["clear"] . "</td>";
    echo "<td>" . $row["reservation"] . "</td>";
     echo "<td><a href='Illness.php?id=" . $row["id"] . "'>Show Illness</a></td>";
    echo "<td><a href='Locations.php?id=" . $row["location_id"] . "'>Show Location</a></td>";
    echo "<td><a href='Medicine.php?id=" . $row["id"] . "'>Show Medicine</a></td>";
    echo "<td><a href='Addanimals.php?id=" . $row["id"] . "'>Add animal</a></td>";
    echo "<td><a href='Updateanimals.php?id=" . $row["id"] . "'>Update animal</a></td>";
    echo "<td><a href='Deleteanimals.php?id=" . $row["id"] . "'>Delete animal</a></td>";    
    echo "</tr>";
}
?>    
  </table>
<?php   
// 4. free results
mysqli_free_result($result);

// 5. close db connection
mysqli_close($connection);
?>
</body>
</html>
				
				</div>
				
				<div class="modal hide fade" id="removeItem">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">×</button>
						<h3>Remove Item</h3>
					</div>
					<div class="modal-body">
						<p>Are you sure you would like to remove this item?</p>
					</div>
					<div class="modal-footer">
						<a href="#" class="btn" data-dismiss="modal">Close</a>
						<a href="#" class="btn btn-danger">Remove</a>
					</div>
				</div>
				
			</div>
			
		<div class="row">
		
			<div class="span10 footer">
			
				<p>&copy; Dark dragon</p>
			
			</div>
		
		</div>
		
	</div>
	
	</div> <!-- end span10 -->
		
	</div> <!-- end row -->
		
</div> <!-- end container -->

<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script src="assets/js/bootstrap.js"></script>


</body>
</html>