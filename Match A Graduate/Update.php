<?php

require("./Config/server.php");

if($_SERVER["REQUEST_METHOD"] == "GET"){
   
    $id = $_GET["ID"];
    $sql = "SELECT * FROM `jobs` WHERE ID = $id";
    $result = $connection->query($sql);
    $row = $result->fetch_assoc();
    $jobId = $row['ID'];
    $title = $row['JobTitle'];
    $description = $row['JobDescription'];
    $requirements = $row['JobRequirements'];
    $email = $row['Email'];
    $contact = $row['Contact'];

}
else{
    $id = $_GET["ID"];
    $job_id = $_POST['job_id'];
    $new_job_title = $_POST['new_job_title'];
    $new_job_description = $_POST['new_job_description'];
    $new_job_requirements = $_POST['new_job_requirements'];
    $new_email = $_POST['new_email'];
    $new_contact = $_POST['new_contact'];
    $sql = "UPDATE `jobs` SET `JobTitle` = '$new_job_title',`JobDescription` = '$new_job_description', `JobRequirements` = '$new_job_requirements', `Email` = '$new_email', `Contact` = '$new_contact'  WHERE ID = $id";
    $result = $connection->query($sql);
    if(!$result){
        die("Could not update job" . $connection->error);
    }
    else{
        header("Location: jobposts.php");
    }
}
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="menu.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Update</title>
    <style>
        body {
            background: linear-gradient(to right, #2696E9, #11142a);
        }
        h2{
            color: white;

        }
        label{
            color: white;
            font-size: 20px;
            font-weight: 400;
        }
        input{
            margin-bottom: 6px;
        }
    </style>
</head>

    <form method="POST" action="" class="container">
    <h2>Update Post</h2>
    <div class="form-group">
        <label for="job_id">Job ID</label>
        <input type="text" class="form-control" value="<?php echo $jobId?>" id="" name="job_id">
    </div>
    <div class="form-group">
        <label for="new_job_title">New Title</label>
        <input type="text" class="form-control" value="<?php echo $title?>" id="" name="new_job_title">
    </div>
    <div class="form-group">
        <label for="new_job_description">New description</label>
        <input type="text" class="form-control" value="<?php echo $description?>" id="" name="new_job_description">
    </div>
    <div class="form-group">
        <label for="new_job_requirements">New requirements</label>
        <input type="text" class="form-control" value="<?php echo $requirements?>" id="" name="new_job_requirements">
    </div>
    <div class="form-group">
        <label for="new_email">New E-mail</label>
        <input type="text" class="form-control" value="<?php echo $email?>" id="" name="new_email">
    </div>
    <div class="form-group">
        <label for="new_contact">New Contact</label>
        <input type="text" class="form-control" value="<?php echo $contact?>" id="" name="new_contact">
    </div>
        <input class='btn btn-secondary' type="submit" value="Update" name="update">
        <button class='btn btn-info' href="jobPosts.php">Back</button>
	</form>
    </body>
</html>