<?php
    session_start();
    require_once '../ValidateInput.php';
    
    $rt=testInput($_POST['rt']);
    
    // Connection to the database.
    $conn=mysqli_connect("localhost", "root", "", "inquizite");
    
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    $q="UPDATE inq_participant_remaining_time SET RemainingTime=".$rt.
    " WHERE PartID=".$_SESSION['PartID'];
    echo mysqli_query($conn, $q);
    
    mysqli_close($conn);
?>