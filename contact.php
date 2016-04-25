<!DOCTYPE html>
<head>
	<title>Contact</title>
	<link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="styles/contact.css">
	<meta charset="utf-8">
</head>
<body>
<?php 
include 'menu.html';
?>
	<main>
    <h1>Contact</h1>
    <p>Have a question? Want to say hello? Contact me through this form!</p>
<?php 

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$message = $_POST['message'];
$error = FALSE;

if ($_SERVER['REQUEST_METHOD'] == 'POST'){

if(!preg_match("/^[A-Z][a-zA-Z ]*$/",$firstName)) {
	$error = TRUE;
	echo "<p class=\"errorMessage\">Please enter a valid first name with the first letter capitalized.</p>";
}

if(!preg_match("/^[A-Z][a-zA-Z ]*$/",$lastName)) {
	$error = TRUE;
	echo "<p class=\"errorMessage\">Please enter a valid last name with the first letter capitalized.</p>";
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { 
	$error = TRUE;
	echo "<p class=\"errorMessage\">Invalid email.</p>";
}

if (empty($_POST['message'])) {
	$error = TRUE;
	echo "<p class=\"errorMessage\">Don't forget your message!</p>";
} 

if(!$error) {
	echo "<p>Thank you, $firstName! Your message has been received.</p>";
	$_POST=array();
}

} //end of parent if-loop
?>

    <form name="email_form" action="contact.php" method="post">

        <label for="firstName">First Name</label>
        <input type="text" name="firstName" id="firstName" value="<?php if (isset($_POST['firstName'])) { print $firstName; } ?>">

        <label for="lastName">Last Name</label>
        <input type="text" name="lastName" id="lastName" value="<?php if (isset($_POST['lastName'])) { print $lastName; } ?>">

        <label for="email">Email</label>
        <input type="text" name="email" id="email" value="<?php if (isset($_POST['email'])) { print $email; } ?>">

        <label for="message">Message</label>
        <textarea name="message" id="message"><?php if (isset($_POST['message'])) { echo htmlentities($_POST['message']); } ?></textarea>
		<input type="submit" name="submit" value="submit">

    </form>
	</main>
	<?php 
	include 'footer.html';
	?>
</body>
</html>
