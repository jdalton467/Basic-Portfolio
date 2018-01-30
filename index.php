<?php
$curl = curl_init();
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
curl_setopt_array($curl, array(
CURLOPT_URL => "https://api.sendgrid.com/v3/mail/send",
CURLOPT_RETURNTRANSFER => true,
CURLOPT_ENCODING => "",
CURLOPT_MAXREDIRS => 10,
CURLOPT_TIMEOUT => 30,
CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
CURLOPT_CUSTOMREQUEST => "POST",
CURLOPT_POSTFIELDS => "{\n  \"personalizations\": [\n    {\n      \"to\": [\n        {\n          \"email\": \"jamesdalton463@gmail.com\"\n        }\n      ],\n      \"subject\": \"New Contact\"\n    }\n  ],\n  \"from\": {\n    \"email\": \"jamesdalton463@gmail.com\"\n  },\n  \"content\": [\n    {\n      \"type\": \"text/html\",\n      \"value\": \"$name<br>$email<br>$subject<br>$message\"\n    }\n  ]\n}",
CURLOPT_HTTPHEADER => array(
"authorization: Bearer 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",
"cache-control: no-cache",
"content-type: application/json"
),
));
$response = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);
// header('Location: index.php');
if ($err) {
echo "cURL Error #:" . $err;
} else {
echo $response;
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
					<center><h2>Contact Me</h2>
					<form class="contact" action="index.php" method="post">
						<p>Name:</p> <!-- Can choose to customize form.html inputs starting here as needed, but be sure to reference any changes in mailer.php post fields-->
						<input type="text" name="name" />
						<p>E-mail:</p>
						<input type="text" name="email" />
						<p>Subject:</p>
						<input type="text" name="subject" />
						<p>Message:</p>
					<textarea name="message" syle="width: 45%; text-align: center;">Please leave a short message here</textarea></p>
					<input class="send" type="submit" value="Send"> <!-- Send button-->
				</form></center>
			</div>
		</div>
	</div>
	<div class="container" id="footer-container"> &copy; James Dalton</div>
</body>
</html>