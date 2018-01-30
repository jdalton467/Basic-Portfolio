<?php
    require '../vendor/autoload.php';
    use Mailgun\Mailgun;
    session_start();
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message =  $_POST['message'];
        # Instantiate the client.
        $mgClient = new Mailgun('key-xxxxxxxx');
        $domain = "mail.laurenfazah.com";
        # Make the call to the client.
        $result = $mgClient->sendMessage($domain, array(
            'from'    => $name . ' <' . $email . '>',
            'to'      => 'Lauren <example@gmail.com>',
            'subject' => 'Portfolio Message',
            'text'    => $message
        ));
    }
    header( 'Location: /' ) ;
    session_destroy();
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
		<form  method="post" name="contact_form" action="form.php">
			<h1>want to chat?</h1>
			<input type="text" name="name" placeholder="name" required>
			<input type="email" name="email" placeholder="email" required>
			<textarea name="message" cols="30" rows="10" placeholder="drop a message..." required></textarea>
			<input type="submit" value="send off" name="submit">
			<h1 class="email-thanks"></h1>
		</form>
		<div class="container" id="footer-container"> &copy; James Dalton</div>
	</body>
</html>