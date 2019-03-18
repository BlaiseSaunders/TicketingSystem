<?php

	require "light_head.php";
	require "utils_header.php";
	// echo "<h2 class='blue'> AYY LMAO <h2>\n";


 	//$query = htmlspecialchars($_GET["term"]);

	$sql = "SELECT id, name, client, details, submit_time, due_date, status, notes FROM tickets WHERE open IS null";


	// Check for rating and board checks if ($query[0] === "/") {
	//echo $sql;

	$result = $conn->query($sql);



	if ($result->num_rows > 0)
		while($row = $result->fetch_assoc())
		{
			print_ticket(strval($row["id"]), $row["name"], $row["details"]);
		}
	/*else
		echo "<h1>0 results for ".$sql."</h1><br/>";*/

	print_js_button("new_ticket()", "printer", "Add Ticket");

	$conn->close();
?>
