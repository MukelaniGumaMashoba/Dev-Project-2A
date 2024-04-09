<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <title>DONATE WITH SERVICES</title>
       <link rel="Stylesheet" href="DVH_Style.css">
   </head>
           
   <body>
<?php
define('CSSPATH', 'template/css/');
$cssItem = 'DVH_Style.css';

$nameError = "";
$surnameError = "";
$emailError = "";
$contactError = "";
$name = "";
$surname ="";
$email = ""; 
$message = "";
$contact = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameError = "Name is required";
  }

  if (empty($_POST["surname"])) {
    $surnameError = "Surname is required";
  }
  
  if (empty($_POST["email"])) {
    $emailError = "Email is required";
  } 
    
  if (empty($_POST["contact"])) {
      $contactError = "Contact is required ";
    }

  if (empty($_POST["message"])) {
    $message = "";
  }
}
if(isset($_POST["submit"]))
    {

    $to = 'mihlalindongana@gmail.com';
	$email_subject = "New Form submission for VOUCHER DONATION \r\n";
	$email_body = "You have received a new message from the user $name $surname .\n".
     "Here is the message:\n $message";
     $headers = "From: $email \r\n";

     mail($to,$email_subject,$email_body,$headers);
       echo "Detais Sent";

    }
    else{
        echo "something is wrong";
    }
?>
 

<form method="post" action="<?php echo ($_SERVER["PHP_SELF"]);?>">  
<h2>Contact Details</h2><p id= "hint">(personal or Business Details)</p>
<p><span class="error">* required field</span></p>
  Name: <input type="text" name="name" class ="field">
  <span class="error">* <?php echo $nameError;?></span>
  <br><br>
  Surname: <input type="text" name="surname" class ="field">
  <span class="error">* <?php echo $surnameError;?></span>
  <br><br>
  E-mail: <input type="text" name="email" class ="field" >
  <span class="error">* <?php echo $emailError;?></span>
  <br><br>

  Contact Number: <input type="cellphone" name="contact" class ="field">
  <span class="error"><?php echo $contactError;?></span>
  <br><br>

  Message: <textarea name="message" rows="7" cols="40"></textarea>
  <br><br>

  <input type="submit" name="submit" value="Submit" class = "BTN">  
</form>
   </body>

 </html>