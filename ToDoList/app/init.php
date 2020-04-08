<?php 

	$error = "";

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dB = "todo";
	$port = 3308;

	//connect to database
	$db = mysqli_connect($servername, $username, $password, $dB, $port );

	//if statement to see if connect is true 
	// if ($db->connect_error) {
	// 	die("Connection failed: " . $db->connect_error); 
	// }
	// echo "Connected successfully";

	//Inserts into the database
	if (isset($_POST['submit'])) {
		$tasks = $_POST['tasks'];
		if(empty($tasks)) {
			$error = "You must fill in the task";
		}else {
			mysqli_query($db, "INSERT INTO tasks (tasks) VALUES ('$tasks')");
			header('location: index.php');
		}

	}	

	//Deletes tasks
	if (isset($_GET['del_tasks'])) {
		$id = $_GET['del_tasks'];
		mysqli_query($db, "DELETE FROM tasks WHERE id=$id"); 
		header('location: index.php');		
	}	

	$tasks = mysqli_query($db, "SELECT * FROM tasks");	

?>
