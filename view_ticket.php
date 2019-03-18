<?php

	require "light_head.php";
	require "utils_header.php";
	// echo "<h2 class='blue'> AYY LMAO <h2>\n";


 	$id = htmlspecialchars($_GET["id"]);

	$sql = "SELECT id, name, client, details, submit_time, due_date, status, sev, notes FROM tickets WHERE id=$id";


	echo "ayyy lmao $id";

	// Check for rating and board checks if ($query[0] === "/") {
	//echo $sql;

	$result = $conn->query($sql);



	if ($result->num_rows > 0)
		while($row = $result->fetch_assoc())
		{
			print_ticket_full($row["id"], $row["name"], $row["details"], $row["client"], $row["submit_time"], $row["due_date"],
			                  $row["status"], $row["sev"], $row["notes"]);
		}
	/*else
		echo "<h1>0 results for ".$sql."</h1><br/>";*/

	$conn->close();
?>
