<?php

	require "light_head.php";
	require "utils_header.php";
	// echo "<h2 class='blue'> AYY LMAO <h2>\n";


 	$id = htmlspecialchars($_GET["id"]);

	$sql = "UPDATE tickets SET open=-1 WHERE id=$id";


	echo "ayyy lmao $id";

	// Check for rating and board checks if ($query[0] === "/") {
	//echo $sql;

	$result = $conn->query($sql);


	/*else
		echo "<h1>0 results for ".$sql."</h1><br/>";*/

	$conn->close();
?>
