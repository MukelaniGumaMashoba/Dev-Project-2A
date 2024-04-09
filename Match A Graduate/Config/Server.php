<?php
$connection = new mysqli("localhost","root","","eclectic");

if($connection->connect_error){
    die("Connection failed " . $connection->connect_error);
}

session_start();

	if(isset($_POST['post'])){
		$title = $_POST['job_title'];
		$description = $_POST['job_description'];
		$requirements = $_POST['job_requirements'];
		$lacation = $_POST['location'];
		$email= $_POST['email'];
		$contact= $_POST['contact'];

		$sql = "INSERT INTO `jobs`(`JobTitle`, `JobDescription`, `JobRequirements`, `Location`, `Email`, `Contact`) VALUES ('$title','$description','$requirements','$lacation','$email','$contact')";
        $result = $connection->query($sql);

		header("Location: ./jobPosts.php");
		exit;

	}

	
?>
