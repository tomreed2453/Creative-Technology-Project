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
    <div id="addalbummain">
          <p class="pagenames"> CD </p>
 
 
<?php
$con = mysql_connect("mysql5","fet12010351","nCXx2555");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
 
mysql_select_db("fet12010351", $con);
 
$sql="INSERT INTO seveninch (artist, title, year, genre, recordlabel, cover, pressing, colour)
VALUES
('$_POST[artist]','$_POST[title]','$_POST[year]','$_POST[genre]','$_POST[recordlabel]','$_POST[cover]','$_POST[pressing]','$_POST[colour]' )";
 
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";
 
mysql_close($con)
?>

<div class="back">
<a href="mainscreen.html">Back To Main Page</a>
</div>




</div>
</body>
</html>