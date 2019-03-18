<?php
	function print_ticket($id, $name, $details, $client = "", $submit_time = "",
	                      $due_date = "", $status = "", $sev = "", $notes = "")
	{
		echo "<br/>";
		echo "<div class='ticket' id='$id'>";
		echo "<h2 class='blue'>$name</h2>";
		echo "<div class='ticket_body'>";

		echo "<h1 class='red'> $details </h1>";

		echo "<br/>";
		echo "<div class='buttons'>";
		// func, id, text
		print_js_button("view_ticket($id)", "view_$id", "View Ticket");
		print_js_button("update_ticket($id)", "update_$id", "Update Ticket");
		print_js_button("close_ticket($id)", "close_$id", "Close Ticket");
		echo "</div>";

		echo "</div>"; // Ticket body
		echo "</div>";
		echo "<br/>";
		echo "<br/>";
	}


	function print_ticket_full($id, $name, $details, $client = "", $submit_time = "",
	                           $due_date = "", $status = "", $sev = "", $notes = "")
	{
		echo "<div class='ticket' id='$id'>";
		echo "<h2 class='blue'>$name</h2>";
		echo "<div class='ticket_body'>";

		echo "<h3 class='blue'> Client </h3>";
		echo "<h1 class='red'> $client </h1>";

		echo "<h3 class='blue'> Details </h3>";
		echo "<h1 class='red'> $details </h1>";

		echo "<h3 class='blue'> Notes </h3>";
		echo "<h1 class='red'> $notes </h1>";

		echo "<h3 class='blue'> Due Date </h3>";
		echo "<h1 class='red'> $due_date </h1>";

		echo "<h3 class='blue'> Status </h3>";
		echo "<h1 class='red'> $status </h1>";

		echo "<br/>";
		echo "<div class='buttons'>";
		// func, id, text
		print_js_button("print_tickets()", "", "Back");
		print_js_button("update_ticket($id)", "update_$id", "Update Ticket");
		print_js_button("close_ticket($id)", "close_$id", "Close Ticket");
		echo "</div>";

		echo "</div>"; // Ticket body
		echo "</div>";
		echo "<br/>";
		echo "<br/>";
	}





	function print_single_submit_form($title, $form, $placeholder, $term = "term")
	{
		echo "<div class='submit_div'>\n";

		echo "<div class='pack_div'>\n";
		echo "<h1> $title </h1>\n";

		echo "<form class='searchForm' method='get' action='$form'>\n";
		echo "  <input class='searchBar'\n";
		echo "  type='text' name='$term' placeholder='$placeholder' search_/>\n";
		echo "  <br/>\n";
		echo "  <br/>\n";
		echo "  <input class='btn' type='submit' value='Submit'/>\n";
		echo "</form>\n";

		echo "</div>\n";
		echo "</div>\n";

	}

	function print_double_submit_form($title, $form, $placeholder1, $placeholder2,
	                                  $term1 = "term", $term2 = "term")
	{
		echo "\n<div class='submit_div'>\n";

		echo "<div class='pack_div'>\n";
		echo "<h1> $title </h1>\n";

		echo "<form class='searchForm' method='get' action='$form'>\n";
		echo "  <input class='searchBar'\n";
		echo "  type='text' name='$term1' placeholder='$placeholder1' search_/>\n";
		echo "  <input class='searchBar'\n";
		echo "  type='text' name='$term2' placeholder='$placeholder2' search_/>\n";
		echo "  <br/>\n";
		echo "  <br/>\n";
		echo "  <input class='btn' type='submit' value='Submit'/>\n";
		echo "</form>\n";

		echo "</div>\n";
		echo "</div>\n";

	}

	function print_button($href, $text)
	{
		echo "<li class='button buttonGrey'>\n";
		echo "<a href='$href'><h1> $text </h1></a>\n";
		echo "</li>\n";
	}

	function print_js_button($func, $id, $text)
	{
		echo "<li class='button buttonGrey'>\n";
		echo "<a href='#' id='$id' onclick='$func'><h1> $text </h1></a>\n";
		echo "</li>\n";
	}
?>
