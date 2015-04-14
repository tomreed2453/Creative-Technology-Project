<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="collector.css"> 
    
   <!--google font links-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300|Raleway:400,800,900' rel='stylesheet' type='text/css'>
      

      <title> Cassette / collector.com </title> 
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
    <p> <a href="randomcassette.php">RANDOM</a></p>
    </div>
      <p class="pagenames"> Cassette</p>  

          <div class="cassettemain">
           <img class="iconimg" src="img/mycassette.png">
             
             <p> <a href="addalbumcassette.html">ADD TO</a></p> 
         </div>                
<div class="echo">	
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

$sql = "SELECT artist, title, year, genre, cover, recordlabel FROM cassette ORDER BY artist ASC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row

    while($row = $result->fetch_assoc()) {
		echo "<td>" . "  " .'<img src="' . $row["cover"] . '" width="50px"' .'/>' . "  " ;
        echo "</td></tr><tr>" . "<td>" . $row["artist"] . "</td>" 
		. "<td>" . " - " . $row["title"] . " - " . $row["year"] . " - " . $row["genre"] . " - " . $row["recordlabel"] .  "</td>" . "<br>" ;
		

    }

} else {
    echo "Nothing Added Yet!";
}
$conn->close();
?>
		 
		 
		 
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