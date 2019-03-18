<?php

	require "light_head.php";
	require "utils_header.php";
	// echo "<h2 class='blue'> AYY LMAO <h2>\n";


	$id = htmlspecialchars($_GET["id"]);
	$sql = "SELECT id, name, client, details, submit_time, due_date, status, sev, notes FROM tickets WHERE id=$id";
	$result = $conn->query($sql);
	if ($result->num_rows > 0)
	{
		$row = $result->fetch_assoc();
		$details = $row["details"];
		$client = $row["client"];
		$submit_time = $row["submit_time"];
		$due_date = $row["due_date"];
		$staus = $row["status"];
		$sev = $row["sev"];
		$notes = $row["notes"];
		$name = $row["name"];
	}


?>
<div class='ticket'>
	<center>
		<form action='update_ticket.php' method='post' id='ticket_form'>

			<h3 class='blue'>Name</h3>
			<input class='medium_input' type='text' name='name' value="<?php echo $name;?>"/><br/>

			<h3 class='blue'>Client</h3>
			<input class='medium_input' type='text' name='client' value="<?php echo $client;?>"/><br/>

			<!--<h3 class='blue'>Due Date</h2>
			<input class='' type='datetime-local' name='date' value="<?php echo $date;?>"/><br/>-->

			<h3 class='blue'>Severity</h3>
			<h1>
				<input type='radio' name='sev' value='1' <?php if ($sev=="1") echo "checked";?>/> Sev 1 <br/>
				<input type='radio' name='sev' value='2' <?php if ($sev=="2") echo "checked";?>/> Sev 2 <br/>
				<input type='radio' name='sev' value='3' <?php if ($sev=="3") echo "checked";?>/> Sev 3 <br/>
				<input type='radio' name='sev' value='4' <?php if ($sev=="4") echo "checked";?>/> Sev 4 <br/>
			</h1>


			<h3 class='blue'>Details</h3>
			<textarea form_id='ticket_form' class='medium_input' rows='4' name='details' /><?php echo $details;?></textarea><br/>


			<h3 class='blue'>Notes</h3>
			<textarea form_id='ticket_form' class='medium_input' rows='4' name='notes' /><?php echo $notes;?></textarea><br/>


			<input type="hidden" name="id" value="<?php echo "$id";?>">
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