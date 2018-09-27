<?php
// Opens the clickedtimes.db file.
include("database.class.php");

// Instantiates the clickedtimes.db file, so we can modify it.
$db = new database();

// SQL query to actually increment the value.
$sql2 = "UPDATE COUNTER SET NUM = NUM + 1";
$db->query($sql2);

// Get the new number after it is incremented in the SQL table.
$sql = "SELECT NUM from COUNTER";
$stmt = $db->query($sql);

// Display the newly incremented number on the webpage - keep this in a loop to keep it going
while($row = $stmt->fetchArray(SQLITE3_ASSOC) ){
	echo "<h1>";
	echo $row['NUM'];
	echo "</h1>"; 
}

// Close the database once finished.
$db->close();
?>