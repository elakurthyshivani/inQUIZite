<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Are You Sure?</title>
	<link rel="stylesheet" href="Window.css"/>
	<style>
	   body    {
	       display:flex;
	       justify-content:space-around;
	       align-items:flex-start;
	   }
	
	   div    {
    	   font-family:'Special Elite';
    	   font-size:2em;
    	   color:white;
    	   background-color:#ff634799;
    	   border:3px solid #ff6347;
    	   text-align:center;
    	   
    	   display:block;
    	   width:50%;
    	   
    	   padding:3%;
    	   margin-top:10%;
        }
	</style>
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
	
	$q="INSERT INTO inq_r1_finished_quiz VALUES(".$_SESSION['PartID'].
	")";
	mysqli_query($conn, $q);
	
	mysqli_close($conn);
	
	session_unset();
	session_destroy();
	?>

	<div>Thank you for participating!</div>
	
</body>
</html>