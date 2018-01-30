<?php
$errors = '';
$myemail = 'yourname@website.com';//<-----Put Your email address here.
if(empty($_POST['name'])  ||
empty($_POST['email']) ||
empty($_POST['message']))
{
$errors .= "\n Error: all fields are required";
}
$name = $_POST['name'];
$email_address = $_POST['email'];
$message = $_POST['message'];
if (!preg_match(
"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i",
$email_address))
{
$errors .= "\n Error: Invalid email address";
}
if( empty($errors))
{
$to = $myemail;
$email_subject = "Contact form submission: $name";
$email_body = "You have received a new message. ".
" Here are the details:\n Name: $name \n ".
"Email: $email_address\n Message \n $message";
$headers = "From: $myemail\n";
$headers .= "Reply-To: $email_address";
mail($to,$email_subject,$email_body,$headers);
//redirect to the 'thank you' page
header('Location: contact-form-thank-you.html');
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Portfolio</title>
		<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	</head>
	<body>
		<div class="container" id="nav-container">
			<div id="nav-bar">
				<h2>James Dalton</h2>
				<ul id="nav-list">
					<li>About</li>
					<li>Projects</li>
					<li>Contact</li>
				</ul>
			</div>
		</div>
		<div class="container" id="about-container">
			<img src="assets/images/ProfilePic.png" alt="profile-pic">
			<div id="bio-wrapper">
				<h2>About</h2>
				<p>Hello, my name is James, and I am an aspiring web-developer. One of the main reasons I decided to get into web-devlopment, was because I love coding and I wante to make my mark on the world by providing a useful service</p>
				<p>My core compentencies reside in the fundamentals of HTML, CSS, and JavaScript. Libraries are fine, but for right now, I want to become an expert in those three cornerstone technologies</p>
				<p>I love to learn everyday, as I am always surprised by the amount of information that is out there. I contribute to GitHub on a regular basis and I hope one day to become a senior developer with an expertise in JavaScript</p>
				<p>Feel free to peruse my projects shown below, and if interested, contact me about any questions or comments you might have!</p>
			</div>
		</div>
		<br><br>
		<div class="container" id="projects-container">
			<ul class="project-list">
				<li><div class="project-panel">WorldScoop</div></li>
				<li><div class="project-panel">WorldScoop2</div></li>
				<li><div class="project-panel">Trivia</div></li>
			</ul>
			<ul class="project-list">
				<li><div class="project-panel">LIRI</div></li>
				<li><div class="project-panel">Bamazon</div></li>
				<li><div class="project-panel">Octagon</div></li>
			</ul>
		</div>
		<!-- BEGINNING OF CONTACT FORM -->
		<div class="section-page-landing" id="contact">
			<div class="inner-section">
				<div class="contain">
					<form method="post" name="contact_form"
						action="contact-form-handler.php">
						Your Name:
						<input type="text" name="name">
						Email Address:
						<input type="text" name="email">
						Message:
						<textarea name="message"></textarea>
						<input type="submit" value="Submit">
					</form>
				</div>
			</div>
		</div>
		<div class="container" id="footer-container"> &copy; James Dalton</div>
	</body>
</html>