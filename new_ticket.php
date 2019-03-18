<?php

	require "light_head.php";
	require "utils_header.php";
	// echo "<h2 class='blue'> AYY LMAO <h2>\n";


 	//$query = htmlspecialchars($_GET["term"]);

?>
<div class='ticket'>
	<center>
		<form action='add_ticket.php' method='post' id='ticket_form'>

			<h3 class='blue'>Name</h3>
			<input class='medium_input' type='text' name='name' /><br/>

			<h3 class='blue'>Client</h3>
			<input class='medium_input' type='text' name='client' /><br/>

			<h3 class='blue'>Due Date</h3>
			<input class='' type='datetime-local' name='date' /><br/>

			<h3 class='blue'>Severity</h3>
			<h1>
				<input type='radio' name='sev' value='1' checked /> Sev 1 <br/>
				<input type='radio' name='sev' value='2' /> Sev 2 <br/>
				<input type='radio' name='sev' value='3' /> Sev 3 <br/>
				<input type='radio' name='sev' value='4' /> Sev 4 <br/>
			</h1>


			<h3 class='blue'>Details</h3>
			<textarea form_id='ticket_form' class='medium_input' rows='4' name='details' /></textarea><br/>


			<h3 class='blue'>Notes</h3>
			<textarea form_id='ticket_form' class='medium_input' rows='4' name='notes' /></textarea><br/>


			<input type='submit' value='Submit'>

		</form>
		<br/>
	</center>
</div>
<br/>
<div class='buttons'>
<?php
print_js_button("print_tickets()", "", "Back");
?>
</div>