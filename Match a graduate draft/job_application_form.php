<?php
  session_start();

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION["name"] = $_POST["name"];
    $_SESSION["surname"] = $_POST["surname"];
    $_SESSION["specialties"] = $_POST["specialties"];
    $_SESSION["about"] = $_POST["about"];
    $_SESSION["gender"] = $_POST["gender"];
    $_SESSION["birthday"] = $_POST["birthday"];
    $_SESSION["phone"] = $_POST["phone"];
    $_SESSION["email"] = $_POST["email"];
    $_SESSION["moreInfo"] = $_POST["moreInfo"];
  

    header("Location: user_profile.php ");
    exit();
  }


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
        background-color: #f2f2f2;
        font-family: Arial, sans-serif;
        background-image: linear-gradient(white, lightblue);
      }
      
      form {
        max-width: 500px;
        margin: 0 auto;
      }
      
      h1, h2 {
        text-align: center;
        color: #333;
        margin: 20px 0;
        color:blue;
      }
      
      label {
        display: block;
        margin-bottom: 10px;
        font-weight: bold;
      }
      
      input[type="text"],
      input[type="email"],
      textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
      }
      
      input[type="submit"] {
        background-color: blue;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
      }
      
      input[type="submit"]:hover {
        background-color: #45a049;
      }
    </style>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
      <h1>Job Application Form</h1>

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="surname">Surname:</label>
        <input type="text" id="surname" name="surname" required>

        <label for="gender">Gender:</label>
        <input type="text" id="gender" name="gender" required>

        <label for="birthday">Birthday:</label>
        <input type="text" id="birthday" name="birthday" required>

        <label for="phone">Home phone:</label>
        <input type="text" id="phone" name="phone" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
      
        <label for="specialties">Specialties:</label>
        <input type="text" id="specialties" name="specialties" required>
      
        <label for="about">About:</label>
        <input type="text" id="about" name="about" required>
      
        <label for="moreInfo">More about yourself:</label>
        <textarea id="moreInfo" name="moreInfo" rows="8" required></textarea>

        <input type="submit" name="submit" value="Submit Profile">
    </form>
</body>
</html>