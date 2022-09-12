<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>inQUIZite ROUND 1</title>
	<link rel="stylesheet" href="../Window.css"/>
	<link rel="stylesheet" href="QuestionBar.css"/>
	<link rel="stylesheet" href="Row-2.css"/>
	<link rel="stylesheet" href="Q-Container.css"/>
	<link rel="stylesheet" href="ButtonGroup.css"/>
	<link rel="stylesheet" href="Modal.css"/>
	<style>*   {   user-select:none;   }</style>
</head>
<body>
	<?php
	// Go the home page if user didn't log in..
	session_start();
	if(!array_key_exists('PartName', $_SESSION))   {
	    header('Location: ../InquiziteStartPage.php');
	    exit;
	}
	
	require_once '../ValidateInput.php';
	
	// Connection to the database.
	$conn=mysqli_connect("localhost", "root", "", "inquizite");
	
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}
	
	$att=[];
	for($i=1; $i<=15; $i++)    $att[$i]=0;
	
	$q="SELECT * FROM inq_participant_attempted WHERE PartID=".$_SESSION['PartID'];
	$rs=mysqli_query($conn, $q);
	if(mysqli_num_rows($rs)>0) {
	    while($r=mysqli_fetch_assoc($rs))
	        $att[$r['QuesID']]=$r['SelectedOption'];
	}
	?>

	<header>
		<?php
		// Display the question numbers.
		for($i=1; $i<=15; $i++) {
		?>
		<div class="qNo" onclick="saveOption();changeQues(<?php echo $i; ?>)">
			<div class="<?php if($att[$i]!=0) echo 'attempted'; ?>">
				<?php echo $i; ?>
			</div>
		</div>
		<?php 
		}
		?>
	</header>
	
	<aside>
		<div id="attem">
			<span>-</span> Attempted
		</div>
		<div id="time"></div>
		<div id="notattem">
			<span>-</span> Not Attempted
		</div>
	</aside>
	
	<section>
		<?php
		// Display the questions and answers.
		$q="SELECT * FROM inq_questions";
		$rs=mysqli_query($conn, $q);
		for($i=1; $i<=15; $i++)   {
		    $r=mysqli_fetch_assoc($rs);
		?>
		<div id="Q-container-<?php echo $i; ?>">
			<div class="q">
    			<div>
    			<?php 
    			echo ucfirst(stripslashes($r['Question']));
    			?>
    			</div>
			</div>
			<div class="a">
    			<?php 
    			for($j=1; $j<=4; $j++)   {
    			?>
    				<div class="a-options">
        				<input type="radio" value="option-<?php echo $i.'-'.$j; ?>"
        				name="option-<?php echo $i; ?>"
        				onchange="selectOption(<?php echo $i.', '.$j; ?>)"
        				<?php if($att[$i]==$j) echo 'checked'; ?>/>
        				<?php 
        			    echo ucfirst(stripslashes($r['Opt'.$j])); 
        			    ?>
    			    </div>
    			<?php
    			}
    			?>
			</div>
		</div>
		<?php 
		}
		?>
	</section>
	
	<footer>
		<button id="prev" type="button" 
		onclick="saveOption();changeDisplayQNos(-1);">
			<span>Prev </span>
		</button>
		<button id="goto" type="button" onclick="openAllQues()">
			Go To Question
		</button>
		<button id="finish" type="button" onclick="saveOption();saveRT();finishTest();">
			Finish Quiz
		</button>		
		<button id="next" type="button" 
		onclick="saveOption();changeDisplayQNos(1);">
			<span>Next </span>
		</button>
	</footer>
	
	<div id="modal-outside">
		<div id="modal">
			<div id="allQ">All Questions</div>
			<div id="x" onclick="closeAllQues()">x</div>
			<div id="qnos">
			<?php 
			for($i=1; $i<=15; $i++)   {
			?>
				<div class="qunos <?php if($att[$i]!=0) echo 'attempted'; ?>" 
				onclick="saveOption();changeQues(<?php echo $i; ?>);closeAllQues();">
					<?php echo $i; ?>
				</div>
			<?php    
			}
			?>
			</div>
		</div>
	</div>
	
	<script src="QuestionBar.js"></script>
	<script src="Row-2.js"></script>
	<script src="Q-Container.js"></script>
	<script src="Modal.js"></script>
	
	<?php
	$q="SELECT RemainingTime FROM inq_participant_remaining_time".
	" WHERE PartID=".$_SESSION['PartID'];
	$rs=mysqli_query($conn, $q);
	if(mysqli_num_rows($rs)==1)    {
	    $row=mysqli_fetch_assoc($rs);
	    $time=$row['RemainingTime'];
    }
	?>
	
	<script>
	window.onload=function()	{
		timer(<?php echo $time; ?>);
	};
	
	window.onresize=window.onzoom=function()	{
		setHeightForQNos();
		setQAEqualHeight();
	};

	document.body.onhashchange=function()	{
		setQAEqualHeight();
	};

	window.onbeforeunload=function()	{
		saveRT();
	};

	function saveRT()	{
		saveToDB("SaveRT.php", "rt="+rt);
	}

	function saveOption()	{
		saveToDB("SaveAttempted.php", "ques="+ques+"&opt="+opt);
	}

	function saveToDB(url, data)	{
		var x=new XMLHttpRequest();
		x.onreadystatechange=function()	{
			if(this.readyState==4 && this.status==200)	{
			}
		};
		x.open("POST", url, true);
		x.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		x.send(data);
	}

	function finishTest()	{
		window.location="../AreYouSure.php";
	}
	</script>
	
	<?php 
	mysqli_close($conn);
	?>
</body>
</html>