<?php
	if ( (!empty($_GET["firstName"])) && (!empty($_GET["email"])) )
	{
		$firstName=$_GET["firstName"];
		$email=$_GET["email"];
		echo "<h3>" . "Welcome " . $firstName . ", thanks for subscribing our newsletter!" . "</h3>";
		echo "<br />";
		echo "<br />";
		echo "<h3>" . "We will send our newsletter to " . "<b>" . $email . "</b>" . " on the second Monday of every month." . "</h3>";
	}
	else
		{
			echo "<h3>" . "Please enter valid user name or email address!" . "</h3>";
		}
		
?>


