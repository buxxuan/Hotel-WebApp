<?php
require('db.php');
require('homepage.html');

// 2. Do a query
$query  = "SELECT manager.id, manager.manager_name, manager.department, staff.name, staff.id "; 
$query .= "FROM manager ";
$query .= "LEFT JOIN staff ";
$query .= "ON manager.id = staff.m_id ";
//echo $query;

$result = mysqli_query($connection, $query);

if (!$result) {
    die("query is wrong");
}

?>

<html>
    <head>
        <title>Hello Manager</title>
        <link type="text/css" rel="stylesheet" href="style.css">
    </head>
	
    <body>
        <table width="80%" border="double" cellpadding="2" cellspacing="1" align="center" >
     <tr>

            <thead>
			    <td>ID</td>
                <td>Name</td>
                <td>Department</td>
                <td>Manager Name</td>
                <td>Add employee</td>
                <td>Delete employee</td>
            </thead>


<?PHP
// 3. use/show data
while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row["id"] . "</td>";
    echo "<td>" . $row["name"] . "</td>"; 
    echo "<td>" . $row["department"] . "</td>"; 
    echo "<td>" . $row["manager_name"] . "</td>"; 
    echo "<td><a href='updatestaff.php?id=" . $row["staff_id"] . "'>Update Staff</a></td>";
    echo "<td><a href='deletestaff.php?id=" . $row["staff_id"] . "'>Delete Staff</a></td>";
    echo "</tr>";
}
?>
        
  </table>
  <a href= "addstaff.php"> Add employee </a>  
<?php   
// 4. free results
mysqli_free_result($result);

// 5. close db connection
mysqli_close($connection);
?>
</body>
</html>