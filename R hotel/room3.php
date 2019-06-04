<?php
 $dbhost = "localhost";
 $dbuser = "tan-yongquan";
 $dbpass = "e2qxet00";
 $dbname = "2201613130113";


$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (mysqli_connect_errno()) {
    die("Database connection failed: " .
        mysqli_connect_error() .
        " (" . mysqli_connect_errno() . ")" 
    );
}
$query  = "SELECT id, name, comment "; 
$query .= "FROM room";

$result = mysqli_query($connection, $query);

if (!$result) {
    die("query is wrong");
}

?>

<html>
    <head>
        <link type="text/css" rel="stylesheet" href="room.css">
    </head>
    <body>
      <div class="a">
          <header id="aa">
          <div class="a">
            <div class="aaa">  
              <a class="c" href="#totop">ROYAL HOTEL</a>
              </div>
         </div>
      </header>  
      </div>
   <div id="b">
			<div class="container">
				<div class="row">
					<div class="col-md-3 animate-box">
						<h3 class="heading-section">King room type</h3>
						
					</div>
					<div class="col-md-9">
						<div class="row">
							<div class="bbb">
								<div class="fh5co-grid animate-box" style="background-image: url(https://i04picsos.sogoucdn.com/8b90406295be2d19);">

								</div>
							</div>
							<div class="bbb">
								<div class="fh5co-grid animate-box" style="background-image: url(https://i04picsos.sogoucdn.com/61efafa9b73e96b7);">
									
								</div>
							</div>
							<div class="bbb">
								<div class="fh5co-grid animate-box" style="background-image: url(https://i03picsos.sogoucdn.com/72e18152887b0c61);">
									
								</div>
							</div>
							<div class="bbb">
								<div class="fh5co-grid animate-box" style="background-image: url(https://i02picsos.sogoucdn.com/49d9fdcb7a2ee0e0);">
								</div>
							</div>
                            <div class="bbb">
								<div class="fh5co-grid animate-box" style="background-image: url(https://i01picsos.sogoucdn.com/23806abff48e0d4d);">
								</div>
							</div>
                            <div class="bbb">
								<div class="fh5co-grid animate-box" style="background-image: url(https://i02picsos.sogoucdn.com/7c46076e567c217b);">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
    
    <div class="d">
        <div><p>Comment</p></div>
        </div>
     <div class="d">
        <table>
            <thead>
                <td>Name</td>
                <td class="dd">comment</td>
            </thead>
    <?php
   while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row["name"] . "</td>";
    echo "<td>" . $row["comment"] . "</td>";
    echo "</tr>";
}
    
?>
             
    
         </table>
    
        </div>
    
    <?php

mysqli_free_result($result);

mysqli_close($connection);

?>

        <div class="e">
            <a href="">Add Comment</a>
        </div>
    <div class="f">
        <a href="">Book now</a>
        </div>
    
    </body>
</html>