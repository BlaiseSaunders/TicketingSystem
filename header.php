<?php
	require "light_head.php";

	echo file_get_contents("header.html");
	$img_dir = file_get_contents("/etc/dandyl/dandyl_config");
	str_replace(array("\r", "\n"), '', $img_dir);





?>
