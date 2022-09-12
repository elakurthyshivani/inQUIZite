<?php
    session_start();
    require_once '../ValidateInput.php';
    
    $ques=testInput($_POST['ques']);
    $opt=testInput($_POST['opt']);
    
    // Connection to the database.
    $conn=mysqli_connect("localhost", "root", "", "inquizite");
    
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    $q="INSERT INTO inq_participant_attempted VALUES(".$_SESSION['PartID'].
    ", ".$ques.", ".$opt.")";
    $rs=mysqli_query($conn, $q);
    if(!$rs) {
        $q="UPDATE inq_participant_attempted SET SelectedOption=".$opt.
        " WHERE PartID=".$_SESSION['PartID']." AND QuesID=".$ques;
        echo mysqli_query($conn, $q);
    }
    else    echo $rs;
    
    mysqli_close($conn);
?>