
<!DOCTYPE html>
<html>

<?php include("includes/header.php"); ?>


<body>
  <!-- Sidenav -->
<?php include("includes/sidenav.php"); ?>
  
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
   <?php include("includes/upernav.php"); ?>

    <!-- Header -->
    <!-- Header -->
    <div class="header bg-dark pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            
            
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col">
          <div class="card">
            <!-- Card header -->
            
               <form action="" method="get">
            <div class="row">
              <div class="col-sm-8">
                <div class="card-header border-0">
              <h3 class="mb-0">Booking List</h3>
            </div>
              </div>
              <div class="col-sm-2">
              <label for=""></label>
              <input type="date" name="start" class="form-control">

              </div>
              <div class="col-sm-2">
              <label for=""></label><br>
              <button type="submit" class="btn btn-primary">Filter</button>
              </div>
              
            </div>
            </form>
            
            <!-- Light table -->
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col" class="sort" data-sort="completion">Email</th>

                    <th scope="col" class="sort" data-sort="name">Items Detail</th>
                    <th scope="col" class="sort" data-sort="budget">Date</th>
                    <th scope="col" class="sort" data-sort="status">Time</th>
                    <th scope="col" class="sort" data-sort="status">Total</th>
                    <th scope="col" class="sort" data-sort="status">Service</th>
                    <th scope="col" class="sort" data-sort="status">Status Confirmation</th>


                    <th scope="col"></th>
                  </tr>
                </thead>
                 <?php 
                 if(isset($_GET['start'])!='')
  {
    $start=$_GET['start'];
    $query="SELECT * from booking where date='$start'";
$query_run=mysqli_query($connection,$query);

}else{
                                    
                                    $query="SELECT * from booking";
                                    $query_run=mysqli_query($connection,$query);}
                                    
                                    if(mysqli_num_rows($query_run)>0){

                                    while ($row=mysqli_fetch_assoc($query_run)){
                                                            
                                    ?>

                <tbody class="list">
                  <tr>
                    <th scope="row">
                      <div class="media align-items-center">
                        
                        <div class="media-body">
                          <span class="name mb-0 text-sm"><?php echo $row['userEmail']; ?></span>
                        </div>
                      </div>
                    </th>
                    <td class="budget">
                    <?php echo $row['description']; ?>
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-warning"></i>
                        <span class="status"><?php echo $row['date']; ?></span>
                      </span>
                    </td>
                    
                    <td>
                      <div class="align-items-center">
                        <span class=""><?php echo $row['time']; ?></span>
                        <div>
                          <div class="">
                          </div>
                        </div>
                      </div>
                    </td>
                      <td>
                      <div class="align-items-center">
                        <span class=""><?php echo $row['total']; ?></span>
                        <div>
                          <div class="">
                          </div>
                        </div>
                      </div>
                    </td>
                    <td>
                      <div class="align-items-center">
                        <span class=""><?php echo $row['service']; ?></span>
                        <div>
                          <div class="">
                          </div>
                        </div>
                      </div>
                    </td>
                    <td>
                      <div class="align-items-center">
                       
<button class="btn btn-danger" type="button" name="bookingConfirmation" data-toggle="modal" data-target="#bd-example-modal<?php echo $row['id']; ?>"><?php echo $row['status']; ?></button>
                      
<div class="modal fade bd-example-modal-lg" id="bd-example-modal<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <form method="POST" action="code.php"  enctype="multipart/form-data">
<div class="container">
<input type="hidden" name="bookingId" value="<?php echo $row['id']; ?>">
<input type="hidden" name="firestoreId" value="<?php echo $row['token']; ?>">

                       
<br><br>
   <select name="confirmation" id="" class="form-control">
   <option value="Your Booking is Confirmed! Please Proceed The Payment">Confirmed</option>
   <option value="Your Booking is Cancelled">Cancelled</option>
   
   </select><br>
  <button type="submit" class="btn btn-danger" name="updateBooking">Add</button>
</div>
  <br>
</form>
    </div>
  </div>
</div>
                      </div>
                    </td>
                  </tr>
                 
                </tbody>

                <?php } }
                else{
        echo "<script>alert('No records found at selected date!');</script>";            

                } ?>
              </table>
            </div>
            <!-- Card footer -->
            <div class="card-footer py-4">
              <nav aria-label="...">
               
              </nav>
            </div>
          </div>
        </div>
      </div>
      <!-- Dark table -->
     
      <!-- Footer -->
      
    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="../assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="../assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Argon JS -->
  <script src="../assets/js/argon.js?v=1.2.0"></script>
  
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>
</body>


</html>