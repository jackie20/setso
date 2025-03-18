<?php  

if(isset($_GET['id'])){

    $recordId = $_GET['id'];


    include 'config.php';

    $sql  = "UPDATE venues set venue_status = 'deleted' WHERE venue_id = '$recordId'   "; 
    if ($conn->query($sql) === TRUE) {
    
        header('location:venues.php');

    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

 
    header('location:venues.php');
}

?>