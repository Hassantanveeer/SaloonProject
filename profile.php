
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
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
             
            </div>
            <div class="col-lg-6 col-5 text-right">
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row mt--5">
        <div class="col-md-10 ml-auto mr-auto">
          <div class="card card-upgrade">
            <div class="card-header text-center border-bottom-0">
            </div>
            <div class="card-body">
            <?php
            $query="Select * from admin limit 1";
            $query_run=mysqli_query($connection,$query);
            
                                    if(mysqli_num_rows($query_run)>0){

                                    while ($row=mysqli_fetch_assoc($query_run)){
            
            ?>
             <form method="POST" action="code.php">
                <h6 class="heading-small text-muted mb-4">Update Profile</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">email</label>
                        <input type="email" id="input-username" class="form-control" name="email"
                         placeholder="Expense" value="<?php echo $row['email'];?>">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Password</label>
                        <input type="text"  name="pass" class="form-control" value="<?php echo $row['password']; ?>" placeholder="0000">
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary" name="UpdateProfile"> Update </button>
                  </div>
                </div>
                <hr class="my-4" />
                <!-- Address -->
               
                
              </form>
              <?php } } ?>
            </div>
          </div>
        </div>
      </div>
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
</body>

</html>