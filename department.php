<?php
require('db.php');
require('homepage.html');

// 2. Do a query
$query  = "SELECT id, name "; 
$query .= "FROM department ";

$result = mysqli_query($connection, $query);

if (!$result) {
    die("query is wrong");
}

?>

<html>
    <head>
        <title>Hello manager</title>
        <link type="text/css" rel="stylesheet" href="style.css">
    </head>
	
    <body>
        <table width="80%" border="double" cellpadding="2" cellspacing="1" align="center" >
     <tr>

            <thead>
			    <td>ID</td>
                <td>Name</td>
                <td>update</td>
            </thead>

<?php

// 3. use/show data
while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
	echo "<td>" . $row["id"] . "</td>" ;
    echo "<td>" . $row["name"] . "</td>" ;
	echo "<td><a href='updatedepartment.php?id=" . $row["id"] . "'>update department</a></td>";     
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