<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Proceed To Quiz</title>
	<link rel="stylesheet" href="Window.css"/>
	<link rel="stylesheet" href="ProceedToQuiz.css"/>
</head>
<body>
	<?php 
	session_start();
	if(!array_key_exists('PartName', $_SESSION))   {
	    header('Location: InquiziteStartPage.php');
	    exit;
	}
	?>
	
	
	<header><div id="time" title="Test will start in"></div></header>
	
	<article><span>Hey <?php echo $_SESSION['PartName']; ?>! Hope you have read
	 the instructions and rules.</span></article>
	<article><span>The test starts in the above remaining seconds!</span></article>
	<article><span>Till then, take a deep breath and relax.</span></article>
	<article><span>Or else, you can start the quiz by clicking the 'Start 
	Test' button!</span></article>
	<article><span>ALL THE BEST!</span></article>
	
	<footer>
		<button onclick="goToPage()">Start Test</button>
	</footer>
	
	<div id="l"></div>
	<div id="r"></div>
	
	<script src="ProceedToQuiz.js"></script>
</body>
</html>