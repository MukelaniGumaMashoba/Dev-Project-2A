<?php
    $job_title = $_POST['job_title'];
    $job_description = $_POST['job_description'];
    $job_requirements = $_POST['job_requirements'];
    $required_documents = $_POST['required_documents'];
    $job_location = $_POST['job_location'];
    $job_school = $_POST['job_school'];
    $job_email = $_POST['job_email'];
    $preferred_method = $_POST['preferred_method'];

    //database connection
    $conn = new mysqli('localhost' , 'root' , '' , 'jobposts');
    if($conn->connect_error){
        die('Connection failed :' .$conn->connect_error);
    }else{
        $stmt = $conn->prepare("INSERT INTO posts (jobTitle, jobDescription, jobRequirements, requiredDocuments, jobLocation, jobSchool, jobEmail, preferredMethod)
        values(?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssssss",$job_title, $job_description, $job_requirements, $required_documents, $job_location, $job_school, $job_email, $preferred_method);
        $stmt->execute();
        $stmt->close();
        $conn->close();
    }

    //time posted
    $timestamp = time();
    $date_posted = date("F j,Y, g:i a",$timestamp);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display job postings</title>
</head>
<body>
<style>
        h1{
            text-align:center;
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
            color:blue;
        }
        .job-post {
        background-color: lightblue;
        border: 1px solid #ddd;
        padding: 20px;
        margin-bottom: 20px;
        }

        nav {
      background-color: #f1f1f1;
      padding: 10px;
        }

        nav ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        }

        nav li {
        display: inline;
        }

        nav a {
        display: inline-block;
        padding: 10px;
        text-decoration: none;
        color: #333;
        }

        nav a:hover {
        background-color: lightblue;
        color: #fff;
        }

    </style>

    <nav>   
        <ul>
        <li><a href="job_posting_form.php">Post a Job</a></li>
        </ul>
  </nav>

    <h1>Job Posting Display</h1>
    <div class="job-post">
        <p><strong>Job title:</strong> <?php echo $job_title; ?></p>
        <p><strong>Description:</strong> <?php echo $job_description ; ?></p>
        <p><strong>Requirements:</strong> <?php echo $job_description; ?></p>
        <p><strong>Required documents:</strong> <?php echo $required_documents; ?></p>
        <p><strong>Location:</strong> <?php echo $job_location; ?></p>
        <p><strong>School Name:</strong> <?php echo $job_school; ?></p>
        <p><strong>School email:</strong> <?php echo $job_email; ?></p>
        <p><strong>Preferred method of applying:</strong> <?php echo $preferred_method; ?></p>

        <?php echo "Posted on: " . $date_posted; ?> <br>
	    <?php echo "Job posted successfully!"; ?>
        
    </div>
    <br><br>
</body>
</html>