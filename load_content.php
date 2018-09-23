<?php
include("database.class.php");

$db = new database();

$sql2 = "UPDATE COUNTER SET NUM = NUM + 1";
$db->query($sql2);

$sql = "SELECT NUM from COUNTER";
$stmt = $db->query($sql);

while($row = $stmt->fetchArray(SQLITE3_ASSOC) ){
	echo "<h1>";
	echo $row['NUM'];
	echo "</h1>"; 
}

echo "</table>";

$db->close();
?>