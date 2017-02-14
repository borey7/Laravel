<?php
	echo "Name : ".$_GET['name'];	
	echo "Gender : ".$_GET['gender'];	
	$age = 2017 - $_GET['birth_year'];
	echo "Age : ".$age;
?>