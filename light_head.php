<?php

	if (isset($_SERVER["HTTP_USER_AGENT"]))
	{
		$u_agent = $_SERVER["HTTP_USER_AGENT"];
		if ((preg_match('/MSIE/i',$u_agent) && !preg_match('/Opera/i',$u_agent))
		 || (preg_match('/Safari/i',$u_agent)))
			$webm_support = true;
		else
			$webm_support = true;
	}

	function load_json($location)
        {
                if (($file_data = file_get_contents($location)) == False)
                        return False;
                $settings = json_decode($file_data);
                return $settings;
        }

	$settings = load_json("/etc/dandyl/sql_settings");
	$home_settings = load_json("/etc/dandyl/home_settings");
	if ($settings != False && $home_settings != False)
	{

		if ($home_settings->home_active == 1)
			$home = true;
		else
			$home = false;

		$servername = $settings->host;
		$username   = $settings->username;
		$password   = $settings->password;
		$db_name    = "DDIT";

		$conn = new mysqli($servername, $username, $password, $db_name);

		if ($conn->connect_error)
			die("MySQL connection failure: " . $conn->connect_error);
	}




?>
