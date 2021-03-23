<?php
	try{
		$conn = new PDO('mysql:host=localhost;dbname=hero', 'root', 'mysql');
	}

	catch(PDOExeption $e){
		print "Error!" . $e->getMessage() . "<br/>";
		die();
	}

?>