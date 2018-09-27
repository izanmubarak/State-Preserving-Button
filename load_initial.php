<?php
// Load and instantiate the initial database, so we can view it.
include("database.class.php");
$db = new database();

// Get the value stored in the database. This is done once when the page is first loaded.
$sql = "SELECT NUM from COUNTER";
$stmt = $db->query($sql);

// Display the result to the user.
while($row = $stmt->fetchArray(SQLITE3_ASSOC) ){
	echo "<h1>";
	echo $row['NUM'];
	echo "</h1>"; 
}

$db->close();
?>