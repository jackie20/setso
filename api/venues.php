<?php 
 include '../config.php';


 $output = array(); 
 $sql  = "SELECT * ,  ";
 $sql .= " (SELECT COUNT(*) FROM `venue_bookings` vb WHERE vb.venue_booking_venueID = v.venue_id ) AS venue_total_bookings ";
 $sql .= "FROM venues v";
 $sql .= " WHERE v.venue_status = 'active' ";
 $result = $conn->query($sql);
 if ($result->num_rows > 0) {
     while ($row = $result->fetch_assoc()) {

        $output[] = $row;
       
    }
 } 
         

  echo json_encode($output);
        
         ?>