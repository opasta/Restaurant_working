<html>
<body>

<form action="users.php" method="GET">
<input id="search" type="text" placeholder="Type here">
<input id="submit" type="submit" value="Search">
</form>
</body>

<?php 

$connection = mysql_connect("localhost","root","");

mysql_select_db("blog1")or die(mysql_error());


$result = mysql_query("SELECT username FROM member");
 while ($row = mysql_fetch_assoc($result)) {
echo "<div id='link' onClick='addText(\"".$row['username']."\");'>" . $row['username'] . "</div>";  
 }


  ?>