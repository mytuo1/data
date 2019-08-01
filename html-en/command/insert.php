<html>
<body>
<?php
$con = mysql_connect("l2mythras1gs","l2mythrasgs","password123");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("cis_id", $con);
$sql="INSERT INTO nametable (fname, lname)
VALUES
('$_POST[fname]','$_POST[lname]')";
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
mysql_close($con)
?>
</body>
</html>
