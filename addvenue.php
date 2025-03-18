<?php 


include 'site_header.php';
 
include 'config.php';
if(isset($_POST['venue_name']) && isset($_POST['venue_address'])){

    

    $venue_name = $_POST['venue_name'];
    $venue_address = $_POST['venue_address'];
    $venue_email = $_POST['venue_email'];
    $venue_cellphone = $_POST['venue_cellphone'];
    $venue_max_capacity = $_POST['venue_max_capacity'];
    $venue_latitude = $_POST['venue_latitude'];
    $venue_longitude = $_POST['venue_longitude'];
    $venue_status = $_POST['venue_status'];
    $venue_about = $_POST['venue_about'];
    $venue_ratings = $_POST['venue_ratings'];
    $venue_discount_price = $_POST['venue_discount_price'];
    $venue_sale_price = $_POST['venue_sale_price'];
    $venue_createdBy  = 1; 

    $target_dir = "assets/img/";
    $target_file = $target_dir . basename($_FILES["venue_image"]["name"]);
    move_uploaded_file($_FILES["venue_image"]["tmp_name"], $target_file);
 
 
    $sql = "INSERT INTO venues (venue_name, venue_address, venue_image_url,venue_email, venue_cellphone, venue_max_capacity, venue_latitude , venue_longitude, venue_status, venue_createdBy, venue_about, venue_discount_price, venue_sale_price, venue_ratings)
    VALUES ('$venue_name', '$venue_address', '$target_file', '$venue_email', '$venue_cellphone', '$venue_max_capacity', '$venue_latitude', '$venue_longitude', '$venue_status', '$venue_createdBy', '$venue_about', '$venue_discount_price', '$venue_sale_price', '$venue_ratings')";

    if ($conn->query($sql) === TRUE) { 

    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

    echo '<script type="text/javascript">window.location.href = "venues.php";</script>';
    exit();
   
}
$conn->close();

?>

<div class="container-fluid py-2">
  <div class="row">
    <div class="col-lg-12">
      <div class="row">
        <div class="col-md-12 mb-lg-0 mb-4">
          <div class="card mt-4">
            <div class="card-header pb-0 p-3">
              <h6 class="mb-0">Add New Venue</h6>
            </div>
            <div class="card-body p-3">
              <form action="addvenue.php" method="POST" enctype="multipart/form-data">
                <div class="row">
                  <div class='col-md-6'>
                    <div class='input-group input-group-outline my-3'>
                      <label class='form-label'>Venue Name</label>
                      <input type='text' class='form-control' id='venue_name' name='venue_name' required>
                    </div>
                  </div>
                  <div class='col-md-6'>
                    <div class='input-group input-group-outline my-3'>
                      <label class='form-label'>Venue Address</label>
                      <input type='text' class='form-control' id='venue_address' name='venue_address' required>
                    </div>
                  </div>
                  <div class='col-md-6'>
                    <div class='input-group input-group-outline my-3'>
                      <label class='form-label'>Venue Email</label>
                      <input type='email' class='form-control' id='venue_email' name='venue_email' required>
                    </div>
                  </div>
                  <div class='col-md-6'>
                    <div class='input-group input-group-outline my-3'>
                      <label class='form-label'>Venue Cellphone</label>
                      <input type='text' class='form-control' id='venue_cellphone' name='venue_cellphone' required>
                    </div>
                  </div>
                  <div class='col-md-6'>
                    <div class='input-group input-group-outline my-3'>
                      <label class='form-label'>Venue Max Capacity</label>
                      <input type='number' class='form-control' id='venue_max_capacity' name='venue_max_capacity' required>
                    </div>
                  </div>
                  <div class='col-md-6'>
                    <div class='input-group input-group-outline my-3'>
                      <label class='form-label'>Venue Latitude</label>
                      <input type='text' class='form-control' id='venue_latitude' name='venue_latitude' required>
                    </div>
                  </div>
                  <div class='col-md-6'>
                    <div class='input-group input-group-outline my-3'>
                      <label class='form-label'>Venue Longitude</label>
                      <input type='text' class='form-control' id='venue_longitude' name='venue_longitude' required>
                    </div>
                  </div>
                  <div class='col-md-6'>
                    <div class='input-group input-group-outline my-3'>
                      <label class='form-label'>Venue Status</label>
                      <select class='form-control' id='venue_status' name='venue_status' required>
                        
                        <option selected disabled > </option>
                        <option value="active">Active </option>
                        <option value="deleted"> Deleted</option>
                        <option value="suspended">Suspended </option>
                      </select>
                    </div>
                  </div>
                  <div class='col-md-6'>
                    <div class='input-group input-group-outline my-3'>
                      <label class='form-label'>Venue About</label>
                      <input type='text' class='form-control' id='venue_about' name='venue_about' required>
                    </div>
                  </div>
                  <div class='col-md-6'>
                    <div class='input-group input-group-outline my-3'>
                      <label class='form-label'>Venue Ratings</label>
                      <input type='number' step='0.1' class='form-control' id='venue_ratings' name='venue_ratings' required>
                    </div>
                  </div>
                  <div class='col-md-6'>
                    <div class='input-group input-group-outline my-3'>
                      <label class='form-label'>Venue Discount Price</label>
                      <input type='number' step='0.01' class='form-control' id='venue_discount_price' name='venue_discount_price' required>
                    </div>
                  </div>
                  <div class='col-md-6'>
                    <div class='input-group input-group-outline my-3'>
                      <label class='form-label'>Venue Sale Price</label>
                      <input type='number' step='0.01' class='form-control' id='venue_sale_price' name='venue_sale_price' required>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="input-group input-group-outline my-3">
                      <label class="form-label">Venue Image</label>
                      <input type="file" class="form-control" id="venue_image" name="venue_image" accept="image/*" required>
                    </div>
                  </div>
                  <div class="col-md-12 text-end">
                    <button type="submit" class="btn bg-gradient-dark">Add Venue</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>




<?php 
 include 'site_footer.php';
?>