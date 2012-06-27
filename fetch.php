<?php
$str = $_GET['flag'];
$dbc = mysql_connect("localhost","root","ambigous") or die ("Could not connect" . mysql_error());
mysql_select_db("test",$dbc);
$query = "SELECT * FROM gravitas where id = " . $str ;
$result = mysql_query($query) or die ("Could not query" . mysql_error());
$row = mysql_fetch_array($result);
echo "<h2>" . $row['event_name'] . "</h2>";
echo "Cost = " . $row['fees'];
mysql_close($dbc);
?>

