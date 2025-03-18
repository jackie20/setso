    <?php 


include 'site_header.php';

?>
    <div class="container-fluid py-2">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Venue List</h6>
                
                
            </div>

             
            </div>
            
            <div class="card-body px-0 pb-2">
            
            <a style="margin:20px;" href= "addvenue.php" class="btn btn-success" >Add Venue</a>


              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Venue Name</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Address</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Contact Details</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Capacity </th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Total Bookings </th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action </th>
                     
                    </tr>
                  </thead>
                  <tbody>


                  <?php 
                    include 'config.php';
                    $sql  = "SELECT * ,  ";
                    $sql .= " (SELECT COUNT(*) FROM `venue_bookings` vb WHERE vb.venue_booking_venueID = v.venue_id ) AS venue_total_bookings ";
                    $sql .= "FROM venues v";
                    $sql .= " WHERE v.venue_status = 'active' ";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {

                    ?>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="<?php echo $row['venue_image_url'] ?>" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm"><?php echo $row['venue_name'] ?></h6>
                            <p class="text-xs text-secondary mb-0"><?php echo $row['venue_address'] ?></p>
                          </div>
                        </div>  
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Location </p>
                        <p class="text-xs text-secondary mb-0"><?php echo $row['venue_address'] ?></p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success"><?php echo $row['venue_cellphone'] ?></span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold"><?php echo $row['venue_max_capacity'] ?></span>
                      </td>

                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold"><?php echo $row['venue_total_bookings'] ?></span>
                      </td>


                      <td class="align-middle">
                      <a href="editvenue.php?id=<?php echo $row['venue_id'] ?>" class="text-white font-weight-bold text-xs btn btn-success" data-toggle="tooltip" data-original-title="Edit venue">
                          Edit
                        </a>

                        <a href="deletevenue.php?id=<?php echo $row['venue_id'] ?>" class="text-white font-weight-bold text-xs btn btn-danger" data-toggle="tooltip" data-original-title="Delete venue">
                          Delete
                        </a>
                      </td>

                      
                    </tr>

                    <?php } } ?>
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

      <?php 


include 'site_footer.php';
?>
