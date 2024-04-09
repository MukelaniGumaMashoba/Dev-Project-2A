<?php
	
  	
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f0f0f0;
            background-image: linear-gradient(white, lightblue);
		}

		h1 {
			text-align: center;
			margin-top: 50px;
			margin-bottom: 30px;
            color:blue;
		}

		form {
			background-color: #fff;
			border-radius: 5px;
			box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
			padding: 30px;
			max-width: 500px;
			margin: 0 auto;
		}

		label {
			display: block;
			margin-bottom: 10px;
		}

		input[type="text"],
		input[type="email"] {
			width: 100%;
			padding: 10px;
			border-radius: 5px;
			border: 1px solid #ccc;
			font-size: 16px;
			margin-bottom: 20px;
		}

		input[type="file"] {
			width: 100%;
			padding: 10px;
			border-radius: 5px;
			border: 1px solid #ccc;
			font-size: 16px;
			margin-bottom: 20px;
		}

		input[type="submit"] {
			background-color: blue;
			color: #fff;
			border: none;
			border-radius: 5px;
			padding: 10px 20px;
			font-size: 16px;
			cursor: pointer;
			margin-top: 20px;
		}

		input[type="submit"]:hover {
			background-color: lightblue;
		}
        #intro{
            text-align:center;
            color:blue;
        }
	</style>
    
    <h1>Job Posting</h1>
    <p id="intro">Provide all the relevant details about the job below</p>

    <form action="submit_job_posting.php" method="post">
    <label for="job_title">Job Title:</label>
    <input type="text" id="job_title" name="job_title"><br><br>

    <label for="job_location">Job description:</label>
    <input type="text" id="job_description" name="job_description"><br><br>

    <label for="job_location">Job Requirements:</label>
    <input type="text" id="job_requirements" name="job_requirements"><br><br>

    <label for="job_location">Required documents:</label>
    <input type="text" id="required_documents" name="required_documents"><br><br>
    
    <label for="job_location">Location:</label>
    <input type="text" id="job_location" name="job_location"><br><br>

    <label for="job_school">School:</label>
    <input type="text" id="job_school" name="job_school"><br><br>

    <label for="job_email">School Email:</label>
    <input type="email" id="job_email" name="job_email"><br><br>

    <label for="preffered_method">Preferred method for applying to the position:</label>
    <input type="text" id="preferred_method" name="preferred_method"><br><br>

    <input type="submit" name="submit" value="Post Job">
</form>
</body>
</html>