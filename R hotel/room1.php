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
						<h3 class="heading-section">Single room type</h3>
						
					</div>
					<div class="col-md-9">
						<div class="row">
							<div class="bbb">
								<div class="fh5co-grid animate-box" style="background-image: url(https://i02picsos.sogoucdn.com/40e9d452ed99e132);">

								</div>
							</div>
							<div class="bbb">
								<div class="fh5co-grid animate-box" style="background-image: url(https://i02picsos.sogoucdn.com/d0f36ba524d69894);">
									
								</div>
							</div>
							<div class="bbb">
								<div class="fh5co-grid animate-box" style="background-image: url(https://i03picsos.sogoucdn.com/6ab409e9fb01ae3b);">
									
								</div>
							</div>
							<div class="bbb">
								<div class="fh5co-grid animate-box" style="background-image: url(https://i04picsos.sogoucdn.com/f59414991419413f);">
								</div>
							</div>
                            <div class="bbb">
								<div class="fh5co-grid animate-box" style="background-image: url(https://i04picsos.sogoucdn.com/56ad63eac155254d);">
								</div>
							</div>
                            <div class="bbb">
								<div class="fh5co-grid animate-box" style="background-image: url(https://i02picsos.sogoucdn.com/dae04cdd37397d43);">
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