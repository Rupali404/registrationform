<?php
	session_start();

	//initialize variables
	$username = "";
	$email = "";
	

	//connect  to database

	$db = mysqli_connect('localhost', 'root','','regg');
	//if save button clicked

	if(isset($_POST['submit'])){
		$username = $_POST['username'];
		$email = $_POST['email'];
		$query = "INSERT INTO reg_form(name, email) VALUES('$username', '$email')";
		mysqli_query($db, $query);
		header('Location:index.php'); //redirect to index page after inserting 

	}



