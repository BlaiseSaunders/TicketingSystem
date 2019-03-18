<?php

	// Drop in the default header stuff
	require "header.php";
	require "utils_header.php";

	echo "<style>body { background-repeat: no-repeat; }</style>";


/*	print_button("add_ticket.php", "Add Ticket");

	echo "<br/>";
	echo "<br/>";*/


	echo "<div id='big_boy_container'>";
	echo "</div>";


	echo "<script>print_tickets()</script>";


	// Close the sql connection
	$conn->close();

?>
