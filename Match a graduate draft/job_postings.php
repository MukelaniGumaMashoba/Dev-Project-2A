<!DOCTYPE html>
<html>
<head>
  <title>Job Posting</title>
  
  <style>
   
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
      background-color: #333;
      color: #fff;
    }
  </style>
</head>
<body>
 
  <nav>
    <ul>
      <li><a href="job_application_form.php">Apply for a Job</a></li>
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
