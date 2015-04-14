<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="collector.css"> 
    
   <!--google font links-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300|Raleway:400,800,900' rel='stylesheet' type='text/css'>
      

      <title> Vinyl / collector.com </title> 
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"> 
  </head>
<header>

<div class="pageheaders">

         <nav class="navmenu">
        <ul>
          <li><a href="index.html">Logout</a></li>
        </ul>  
       </nav>  
          <a href="mainscreen.html">
           <img class="logo" src="img/logowhite.png"> 
          </a>    
    </div>
</header>
<body>
    <div id="main">
    <div class="randombutton">
<ul id="drop-nav">

  <li><a href="#">Random</a>
    <ul>
      <li><a href="randomseveninch.php">Seven Inch</a></li>
      <li><a href="randomteninch.php">Ten Inch</a></li>
      <li><a href="randomtwelveinch.php">Twelve Inch</a></li>
    </ul>
  </li>
</ul>

    </div>
      <p class="pagenames"> Vinyl </p>

          <div class="seveninch">


			 <?php
$servername = "mysql5";
$username = "fet12010351";
$password = "nCXx2555";
$dbname = "fet12010351";
if(isset($_GET['idseveninch'])){

}else{

}
// Create connection

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "SELECT cover FROM seveninch ORDER BY RAND() LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
	

    while($row = $result->fetch_assoc()) {

		echo "<td>" . "  " .'<img src="' . $row["cover"] . '" width="120px"' .'/>' . "<br>" ;

    }

} else {
    echo "0 results";
}
$conn->close();
?>

           <h3><a href="javascript:ShowContent('echoseven')">7 Inch</a></h3>
             <p><a href="addalbumseveninch.html"> ADD TO</a></p> 
	 
	 <!--help from http://www.willmaster.com/blog/css/show-hide-div-layer.php-->
	 
	 
		<script type="text/javascript" language="JavaScript"><!--
function HideContent(d) {
document.getElementById(d).style.display = "none";
}
function ShowContent(d) {
document.getElementById(d).style.display = "block";
}
function ReverseDisplay(d) {
if(document.getElementById(d).style.display == "none") { document.getElementById(d).style.display = "block"; }
else { document.getElementById(d).style.display = "none"; }
}
//--></script>


 
			 
			 
			 
			 
 <div id="echoseven" style="display:none;">	
<?php
$servername = "mysql5";
$username = "fet12010351";
$password = "nCXx2555";
$dbname = "fet12010351";
//help from http://www.w3schools.com/php/php_mysql_select.asp
// Create connection

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT artist, title, year, genre, cover, recordlabel, pressing, colour FROM seveninch ORDER BY artist ASC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row

    while($row = $result->fetch_assoc()) {
		echo "<td>" . "  " .'<img src="' . $row["cover"] . '" width="50px"' .'/>' . "  " ;
        echo "</td></tr><tr>" . "<td>" . $row["artist"] . "</td>" 
		. "<td>" . " - " . $row["title"] . " - " . $row["year"] . " - " . $row["genre"] . " - " . $row["recordlabel"] . " - " . $row["pressing"] . " - " . $row["colour"] . "</td>" . "<br>" ;
		

    }

} else {
    echo "0 results";
}
$conn->close();
?>
		 
		 
		 
	</div>
         </div>
		 

		 
		 
          <div class="teninch">
		  
		  			 <?php
$servername = "mysql5";
$username = "fet12010351";
$password = "nCXx2555";
$dbname = "fet12010351";
if(isset($_GET['idteninch'])){

}else{

}
// Create connection

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "SELECT cover FROM teninch ORDER BY RAND() LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
	

    while($row = $result->fetch_assoc()) {

		echo "<td>" . "  " .'<img src="' . $row["cover"] . '" width="160px"' .'/>' . "<br>" ;

    }

} else {
    echo "0 results";
}
$conn->close();
?>
		  
		  
		  
           <h3><a href="javascript:ShowContent('echoten')">10 Inch</a></h3>         
             <p> <a href="addalbumteninch.html">ADD TO</a></p> 


		  
		  <div id="echoten" style="display:none;">	
<?php
$servername = "mysql5";
$username = "fet12010351";
$password = "nCXx2555";
$dbname = "fet12010351";
//help from http://www.w3schools.com/php/php_mysql_select.asp
// Create connection

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT artist, title, year, genre, cover, recordlabel FROM teninch ORDER BY artist ASC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row

    while($row = $result->fetch_assoc()) {
		echo "<td>" . "  " .'<img src="' . $row["cover"] . '" width="50px"' .'/>' . "  " ;
        echo "</td></tr><tr>" . "<td>" . $row["artist"] . "</td>" 
		. "<td>" . " - " . $row["title"] . " - " . $row["year"] . " - " . $row["genre"] . " - " . $row["recordlabel"] .  "</td>" . "<br>" ;
		

    }

} else {
    echo "0 results";
}
$conn->close();
?>
		 
		 
		 
	</div>
		 
		 
		 </div>
		 
		 
		 
		 
          <div class="twelveinch"> 
		  
		  		  			 <?php
				$servername = "mysql5";
				$username = "fet12010351";
				$password = "nCXx2555";
				$dbname = "fet12010351";
				if(isset($_GET['idtwelveinch'])){

				}else{

				}
				// Create connection

				$conn = new mysqli($servername, $username, $password, $dbname);
				// Check connection
				if ($conn->connect_error) {
					die("Connection failed: " . $conn->connect_error);
				} 


				$sql = "SELECT cover FROM twelveinch ORDER BY RAND() LIMIT 1";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
					// output data of each row
					

					while($row = $result->fetch_assoc()) {

						echo "<td>" . "  " .'<img src="' . $row["cover"] . '" width="200px"' .'/>' . "<br>" ;

					}

				} else {
					echo "0 results";
				}
				$conn->close();
				?>
		  
		  
		  
		  
           <h3><a href="javascript:ShowContent('echotwelve')">12 Inch</a></h3>           
             <p> <a href="addalbumtwelveinch.html">ADD TO</a></p> 

			 <div id="echotwelve" style="display:none;">	
<?php
$servername = "mysql5";
$username = "fet12010351";
$password = "nCXx2555";
$dbname = "fet12010351";
//help from http://www.w3schools.com/php/php_mysql_select.asp
// Create connection

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT artist, title, year, genre, cover, recordlabel FROM twelveinch ORDER BY artist ASC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row

    while($row = $result->fetch_assoc()) {
		echo "<td>" . "  " .'<img src="' . $row["cover"] . '" width="50px"' .'/>' . "  " ;
        echo "</td></tr><tr>" . "<td>" . $row["artist"] . "</td>" 
		. "<td>" . " - " . $row["title"] . " - " . $row["year"] . " - " . $row["genre"] . " - " . $row["recordlabel"] .  "</td>" . "<br>" ;
		

    }

} else {
    echo "0 results";
}
$conn->close();
?>
		 
		 
		 
	</div> 
			 
         </div>                 



    </div>

		<footer>
		<div id="foot">
	<p>Useful Links</p>
	  <ul>		
		<li><a href="mainpage.html">Main Page</a></li>
		<li><a href="cd.php">CD Page</a></li>
		<li><a href="vinyl.php">Vinyl Page</a></li>
		<li><a href="cassette.php">Cassette Page</a></li>
	  </ul>
	  
	  <p class="name"> Thomas Reed - 12010351</p>
		</div>
	</footer>
	
	
	
	
</body>

  </html>