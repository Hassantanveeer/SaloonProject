
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
             
               <form method="POST" action="code.php"  enctype="multipart/form-data">
               <?php
               if(isset($_POST['changePromo'])){
                   $id=$_POST['promoId'];
                   $query="SELECT * from promo where promoId='$id'";
                   $query_run = mysqli_query($connection,$query);
                      if(mysqli_num_rows($query_run)>0){
                        while ($row=mysqli_fetch_assoc($query_run)){
               
               ?>
<div class="container">
    <div class="form-group">
    <label for="exampleFormControlFile1">Promo Name</label>
    <input type="hidden" name="promoId" value="<?php echo $row['promoId']; ?>">
    <input type="text" name="promoName" class="form-control" id="exampleFormControlFile1" value="<?php echo $row['name']; ?>">
  </div>
  
    <div class="form-group">
    <label for="exampleFormControlFile1">Discount</label>
    
    <input type="text" name="discount" class="form-control" id="exampleFormControlFile1" value="<?php echo $row['discount'].'%'; ?>">
  </div>
     <div class="form-group">
    <label for="exampleFormControlFile1">Expiry Date</label>
    
    <input type="date" name="expiryDate" class="form-control" id="exampleFormControlFile1" value="<?php echo $row['expiryDate']; ?>">
  </div>
  <button type="submit" class="btn btn-danger" name="edit_promo">Add</button>
</div>
  <br>
  <?php } } } ?>
</form> 
                
            
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