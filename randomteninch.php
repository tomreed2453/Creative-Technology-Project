<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="collector.css"> 
    
   <!--google font links-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300|Raleway:400,800,900' rel='stylesheet' type='text/css'>
      

      <title> CD / collector.com </title> 
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"> 
  </head>
<header>

<div class="pageheaders">

         <nav class="navmenu">
        <ul>
          <li><a href="">Logout</a></li>
        </ul>  
       </nav>  

          <a href="mainscreen.html">
           <img class="logo" src="img/logowhite.png"> 
          </a>  
    </div>
</header>
<body>
    <div id="main">


          <p class="pagenames"> Random </p>



<div class="echorandom">

<?php
$servername = "mysql5";
$username = "fet12010351";
$password = "nCXx2555";
$dbname = "fet12010351";
if(isset($_GET['idteninch'])){
	$idcd = $_GET['idteninch'];
}else{
	$idteninch = '';
}
// Create connection

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "SELECT idteninch, artist, title, year, genre, cover, recordlabel FROM teninch WHERE idteninch != '$idteninch' ORDER BY RAND() LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
	

    while($row = $result->fetch_assoc()) {
	$idcd = $row["idteninch"];
		echo "<td>" . "  " .'<img src="' . $row["cover"] . '" width="200px"' .'/>' . "<br>" ;
        echo "</td></tr><tr>" . "<td>" . $row["artist"] . "<br>" . "</td>" 
		. "<td>" .  $row["title"] . "<br>" . $row["year"] . "<br>" . $row["genre"] . "<br>" . $row["recordlabel"] .  "</td>" . "<br>". "<br>" ;
		
echo '<form action="randomteninch.php?idteninch='. $idteninch.'" method="post">
<input class="button" type="submit" />
</form>';
    }

} else {
    echo "0 results";
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
