<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml"
      xmlns:fb="http://ogp.me/ns/fb#">
<head>
<title>Home</title>
	<link rel="stylesheet" href="css/styles.css">
	<link rel="icon" type="image/x-icon" href="images/bullet-point.png">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1" property="og:image" content="images/bullet-point.png">
</head>
<body>
	<header>
		<img class="profile-image" src="images/photo.png">
		<section class="nav-container">
			<nav>
				<a href="index.php">Home</a>
				<a href="#about-container">About</a>
				<a href="#portfolio-container">Portfolio</a>
				<a href="#contact-container">Contact</a>
			</nav>
		</section>
		<section class="hamburger-section">
			<div class="hamburger-icon">
				<div class="bar"></div>
				<div class="bar"></div>
				<div class="bar"></div>
			</div>
		</section>
	</header>
	
	<div class="hamburger-overlay">
		<nav>
			<li class="hamburger-list">
				<a class="hamburger-home" href="index.php">Home</a>
				<a class="hamburger-about" href="#about-container">About</a>
				<a class="hamburger-portfolio" href="#portfolio-container">Portfolio</a>
				<a class="hamburger-contact" href="#contact-container">Contact</a>
			</li>
		</nav>
	</div>
	
	<section class="index-container">
		<section class="intro-container">
			<h1 class="intro-header">Hello</h1>
			<p class="intro-text">Thanks for visiting my portfolio! My name is Talya and I'm a recent Macquarie University graduate (Bachelor of IT majoring in Game Development).</p>
			<p class="intro-text">I have a passion for all aspects of development and have had the opportunity to work on a number of back-end and front-end projects over the past few years.</p>
			<span><a href="#portfolio-container" class="brk-btn">See my work</a></span>
		</section>
	</section>
	
	<section class="about-container" id="about-container">
		<section class="about-content-container">
			<section class="about-text-container">
				<section class="about-header-container">
					<h1 class="about-header-text">About Me</h1>
					<div class="slant"></div>
				</section>
				<p class="about-text">I've been fortunate enough to be able to explore many avenues of programming throughout my degree, from object-oriented coding with Java to learning how to create a phone app with React Native and Expo Go.</p>
				<p class="about-text">I'm currently on the lookout for full-time opportunities in Sydney, particularly in a front-end development role.</p>
				<p class="about-text">I have experience with the following development languages and applications:</p>
				<section class="experience-container">
					<section class="experience-left">
						<li>Java</li>
						<li>C#</li>
						<li>HTML</li>
						<li>CSS</li>
						<li>JavaScript</li>
						<li>React Native</li>
					</section>
					<section class="experience-right">
						<li>GitHub</li>
						<li>Unity</li>
						<li>Adobe Dreamweaver</li>
						<li>Eclipse</li>
						<li>Visual Studio Code</li>
						<li>Expo Go</li>
					</section>
				</section>
			</section>
			<span class="brk-btn-photo">
				<div class="photo-color"></div>
				<img class="photo" src="images/photo-large.png">
			</span>
		</section>
	</section>
	
	<section class="portfolio-container" id="portfolio-container">
		<section class="portfolio-header-container">
			<h1 class="portfolio-header-text">Portfolio</h1>
			<div class="slant"></div>
		</section>
		<section class="portfolio-card-container">
			<a class="project-link" href="https://talya-entwistle.github.io/Flouriish-Me/" target="_blank">
				<section class="portfolio-card">
					<section class="portfolio-image-container">
						<img class="portfolio-image" src="images/flouriish-me.png" alt="Flouriish Me">
					</section>
					<section class="portfolio-listing-bottom-container">
						<section class="portfolio-listing-text-container">
							<h1 class="portfolio-listing-header">Flouriish Me</h1>
							<p class="portfolio-listing-languages">HTML | CSS | JS | Adobe Dreamweaver</p>
							<p class="portfolio-listing-summary">During the 2021/2022 summer semester break I enrolled in General Assembly's Web Development course to expand on the skills I'd learned throughout my uni degree. For our final assignment, we were required to design and develop a website from scratch using HTML, CSS and JavaScript. I chose to develop a website for my mum’s recently founded interior design business.</p>
						</section>
							<a class="github-link" href="https://github.com/talya-entwistle/Flouriish-Me" target="_blank"><i class="fa fa-github-square github-icon"></i></a>
					</section>
				</section>
			</a>

			<a class="project-link" href="https://talya-entwistle.github.io/Recursion/" target="_blank">
				<section class="portfolio-card">
					<section class="portfolio-image-container">
						<img class="portfolio-image" src="images/recursion.png" alt="Recursion">
					</section>
					<section class="portfolio-listing-bottom-container">
						<section class="portfolio-listing-text-container">
							<h1 class="portfolio-listing-header">Recursion</h1>
							<p class="portfolio-listing-languages">C# | Unity | Visual Studio Code</p>
							<p class="portfolio-listing-summary">For my major game development unit, I was part of a group of 4 students who spent an entire semester creating a game we called 'Recursion'. Fondly named after its coding counterpart, players must get the cyborg ninja character through each level by deliberately 'dying' and respawning. Each time the ninja respawns, momentum from prior to the death is carried over, making it possible to access previously hard-to-reach places.</p>
						</section>
						<a class="github-link" href="https://github.com/talya-entwistle/Recursion" target="_blank"><i class="fa fa-github-square github-icon"></i></a>
					</section>
				</section>
			</a>

			<a class="project-link" href="https://talya-entwistle.github.io/Kiandra-Rae-Makeup-Artistry/index.html" target="_blank">
				<section class="portfolio-card">
					<section class="portfolio-image-container">
						<img class="portfolio-image" src="images/krma.png" alt="Kiandra Rae Makeup Artistry">
					</section>
					<section class="portfolio-listing-bottom-container">
						<section class="portfolio-listing-text-container">
							<h1 class="portfolio-listing-header">Kiandra Rae Makeup Artistry</h1>
							<p class="portfolio-listing-languages">HTML | CSS | JS | Adobe Dreamweaver</p>
							<p class="portfolio-listing-summary">The first website I ever created as part of a web development elective I took at university. For my final assignment, we were tasked with creating a website of our choice from scratch. I developed a website for my sister who is currently training to be a makeup artist and wishes to start her own artistry business one day.</p>
						</section>
						<a class="github-link" href="https://github.com/talya-entwistle/Kiandra-Rae-Makeup-Artistry" target="_blank"><i class="fa fa-github-square github-icon"></i></a>
					</section>
				</section>
			</a>

			<a class="project-link" href="https://talya-entwistle.github.io/UnityPhysics/" target="_blank">
				<section class="portfolio-card">
					<section class="portfolio-image-container">
						<img class="portfolio-image" src="images/unity-physics.png" alt="Unity Physics">
					</section>
					<section class="portfolio-listing-bottom-container">
						<section class="portfolio-listing-text-container">
							<h1 class="portfolio-listing-header">Unity Physics</h1>
							<p class="portfolio-listing-languages">C# | Unity | Visual Studio Code</p>
							<p class="portfolio-listing-summary">As part of a game development unit at university, we were required to create a mini game which tested the capabilities of Unity's 3D physics engine. The aim of the mini game is to travel through all the yellow 'checkpoints' until the finish line is reached without knocking into obstacles and destroying the car. Game time is recorded so that players can attempt to beat their fastest time.</p>
						</section>
						<a class="github-link" href="https://github.com/talya-entwistle/Unity-Physics" target="_blank"><i class="fa fa-github-square github-icon"></i></a>
					</section>
				</section>
			</a>
		</section>
	</section>
	
	<?php
	include("webform.php")
	?>
	
	<footer>
		<p class="footer-text">Designed and developed by Talya Entwistle</p>
		<section class="footer-link-container">
		<a class="footer-icons" href="https://github.com/talya-entwistle" target="_blank"><i class="fa fa-github-square"></i></a>
		<a class="footer-icons" href="https://www.linkedin.com/in/talya-entwistle-45640a20b/" target="_blank"><i class="fa fa-linkedin-square"></i></a>
		</section>
	</footer>
	<script src="js/scripts.js"></script>
</body>
</html>
