<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>inQUIZite!</title>
	<link rel="stylesheet" href="Window.css"/>
	<link rel="stylesheet" href="InquiziteStartPage.css"/>	
</head>
<body>
	<?php 
	session_start();
	if(array_key_exists("PartID", $_SESSION))   {
	    header('Location: ProceedToQuiz.php');
	    exit;
	}
	
	require_once 'ValidateInput.php';
	
	$conn=mysqli_connect("localhost", "root", "", "inquizite");
	
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	    extract($_POST);
	    if(isset($submit))    {
            $q="SELECT PartID, Name FROM inq_participant_details WHERE MobileNo=".
            $mobno;
            $r=mysqli_query($conn, $q);
            if(mysqli_num_rows($r)==1)  {
                $row=mysqli_fetch_assoc($r);
                $_SESSION['PartID']=$row['PartID'];
                $_SESSION['PartName']=$row['Name'];
                $q="SELECT * FROM inq_r1_finished_quiz WHERE PartID="
	           .$_SESSION['PartID'];
                $n=mysqli_num_rows(mysqli_query($conn, $q));
                if($n==1)   {?>
                	<script>
                		window.alert('You have already attempted the test!');
                	</script>
                <?php 
                session_unset();
                session_destroy();
                }
                else    header('Location: ProceedToQuiz.php');
            }
            else    {
            ?>
            <script>window.alert("Invalid Mobile No. Did not register?"+
                    " Register by clicking on the provided link!")</script>
            <?php
            }
	    }
	}
	mysqli_close($conn);
	?>

	<div id="full-screen-img"></div>
	
	<div id="imp">* Scroll down for instructions and rules. Make sure you read
	them before logging in!</div>
	
	<form method="post" name="f"
	action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<div class="topic">Login</div>
		<label>Enter Mobile No.</label>
		<input type="number" name="mobno" id="mobno" placeholder="Mobile Number"/>
		<button class="btn" onclick="validation()" type="submit" name="submit">Enter Test</button>
		<a href="https://goo.gl/forms/nXb8aAsqr5fCzwF33">Not Registered?</a>
	</form>
	
	<section>
		<div class="heading">About inQUIZite</div>
		<p>
			<span class="sides">in</span>
			<span class="middle">QUIZ</span>
			<span class="sides">ite</span>
			is a technical quiz competition going to be organised by computer science and 
			engineering department of JNTUH. The quiz competition is based on technical 
			questions related to computer science and technology. It contains total of 3 
			rounds. The team should consist atmost 2 members. Both the team mates(if the
			team consists 2 members) should participate in the first round which is an 
			online round from March 4th onwards available in this official website of 
			quest. All the participants are required to register in the link given below.
			The participants will get participation certificates.
		</p>	
	</section>
	
	<section>
		<div class="heading">Instructions</div>
		<ul>
			<li>Register here:<a style="color:tomato;"href="https://goo.gl/forms/nXb8aAsqr5fCzwF33">
				Registration Form Link</a></li>
			<li>The team should consist of one or two members.</li>
			<li>If the team has 2 members , both of them should attempt the first 
			round.</li>
			<li>The fee for a team is 200.</li>
			<li>The selected candidates are called for second round.</li>
			<li>We will contact the selected teams through your mobile numbers and
			mail ids given while registering.</li>
			<li>Out of which only 4 teams are selected for third round which is 
			going to be held on March 14th.</li>
		</ul>
	</section>
	
	<section>
		<div class="heading">Rules For Online Test</div>
		<ul>
			<li>Do not use mobile phones while attempting the online round.</li>
			<li>Read all the questions carefully.</li>
			<li>First round consists of 15 questions.</li>
			<li>The online round(first round) duration is 20 minutes.</li>
			<li>Attempt all the questions.</li>
			<li>Each correct answer is rewarded with one mark.</li>
			<li>No negative marking on any question , so attempt as many questions as you can.</li>
			<li>The criteria of selection is the best of scores of team members(if two).</li>
		</ul>	
	</section>
	
	<div class="highlight">
		Come , participate and win exciting prizes!
	</div>
	
	<div id="contact">
	    <div class="heading" style="color:black;font-size:2em;text-shadow:0 0 0;">
	    	Contact Us
	    </div>
	    <div class="member">
	    	<h4 class="name">Harika</h4>
	      	<h4 class="phone">+91 9912040995</h4>
	    </div>
	    <div class="member">
	    	<h4 class="name">Aishwarya</h4>
	       	<h4 class="phone">+91 8499032268</h4>
	    </div>
	    <div class="member">
			<h4 class="name">Shivani</h4>
			<h4 class="phone">+91 9866604319</h4>
	    </div>
	    <div class="member">
	    	<h4 class="name">Deekshita</h4>
	    	<h4 class="phone">+91 9030017559</h4>
	    </div>
	    <div class="member">
	       	<h4 class="name">Indu Alekhya</h4>
	       	<h4 class="phone">+91 9515716217</h4>
	    </div>
	    <div class="member">
	       	<h4 class="name">Priyanka</h4>
	 		<h4 class="phone">+91 7032100454</h4>
	    </div>
		<br/><br/>
		<div class="member" style="margin:auto;">
			<h4 class="name">Mail us at:</h4>
			<h4 class="phone">inquizitequest2k18@gmail.com</h4>
		</div>
    </div>
    
	<div class="highlight">
		Make Your Talent Shine Through The Day.
		<br/>
		Let Your Skills Win Its Worth!
	</div>
	
	
	<script>
		function validation()
		{
			var mno=document.getElementById("mobno").value;
   			var mnochk=/^[0-9]{10}$/;
			if(!mnochk.test(mno))
   			{	window.alert("Mobile number must contain 10 digits");
    				document.getElementById("mno").focus();
   			}
			else
			{
				document.forms["f"].submit();
			}
		}
	</script>
</body>
</html>