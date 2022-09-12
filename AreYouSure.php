<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Are You Sure?</title>
	<link rel="stylesheet" href="Window.css"/>
	<link rel="stylesheet" href="AreYouSure.css"/>	
</head>
<body>
	<?php 
	session_start();
	if(!array_key_exists('PartName', $_SESSION))   {
	    header('Location: InquiziteStartPage.php');
	    exit;
	}
	
	$conn=mysqli_connect("localhost", "root", "", "inquizite");
	
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}
	
	$q="SELECT * FROM inq_participant_attempted WHERE PartID=".
	$_SESSION['PartID'];
	$rs=mysqli_query($conn, $q);
	$n=mysqli_num_rows($rs);
	
	mysqli_close($conn);
	?>
	
	<div id="info">
		<div class="msg">Are you sure you want to end the test?</div>
		<div class="msg">Attempted : <?php echo $n; ?></div>
		<div class="msg">Not attempted : <?php echo 15-$n; ?></div>
		<br/>
		<button id="yes" onclick="quitTest()">Yes</button>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<button id="no" onclick="backToTest()">No</button>
	</div>
	
	<script src="AreYouSure.js"></script>
</body>
</html>