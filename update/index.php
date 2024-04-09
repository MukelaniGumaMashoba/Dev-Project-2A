<?php
session_start();

$conn = mysqli_connect("localhost", "root", "", "eclectic");
if (isset($_POST["submit"])) {

    if (count($_POST) > 0) {

        // Retrieve the usersId of the currently logged-in user from the session
        $usersId = $_SESSION["usersId"];

        // Hash the new password encrypting the password
        $new_password = password_hash($_POST["newPassword"], PASSWORD_DEFAULT);

        // Prepare the UPDATE statement for the user
        $stmt = $conn->prepare("UPDATE users SET usersPassword=? WHERE usersId=?");

        // Bind parameters
        $stmt->bind_param('si', $new_password, $usersId);

        $stmt->execute();

        // Check if the password was successfully updated
        if ($stmt->affected_rows > 0) {
            $message = "Your Password updated successfully.";
        } else {
            $message = "We could not update the password.";
        }
    }
} else {
    $message = "Invalid session. Please log in again.";
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Change Password</title>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="css/form.css" />

<script src="update.js"></script>

</head>
<body>
	<div class="phppot-container tile-container">
		<form name="frmChange" method="post" action="../Home.php"
			onSubmit="return validatePassword()">

			<div class="validation-message text-center"><?php if(isset($message)) { echo $message; } ?></div>
			<h2 class="text-center">Change Password</h2>
			<div>
				<div class="row">
					<label class="inline-block">Current Password</label> <span
						id="currentPassword" class="validation-message"></span> <input
						type="password" name="currentPassword" class="full-width">

				</div>
				<div class="row">
					<label class="inline-block">New Password</label> <span
						id="newPassword" class="validation-message"></span><input
						type="password" name="newPassword" class="full-width">

				</div>
				<div class="row">
					<label class="inline-block">Confirm Password</label> <span
						id="confirmPassword" class="validation-message"></span><input
						type="password" name="confirmPassword" class="full-width">

				</div>
				<div class="row">
					<input type="submit" name="submit" value="Submit"
						class="full-width">
				</div>
				<div class="row">
					<button class="full-width"><a href="../Home.php">Back</a></button>
				</div>
			</div>

		</form>
	</div>
</body>
</html>

