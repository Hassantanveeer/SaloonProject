
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
<div class="container">
    <div class="form-group">
    <label for="exampleFormControlFile1">Add Picture</label>
    <input type="file" name="myimage" class="form-control" id="exampleFormControlFile1" required>
  </div>
  
    <div class="form-group">
    <label for="exampleFormControlFile1">Package Name</label>
    <input type="hidden" name="hiddenId" value="<?php echo $_GET['packageId']; ?>">
    
    <input type="text" name="packageName" class="form-control" id="exampleFormControlFile1">
  </div>

  <button type="submit" class="btn btn-danger" name="edit_package">Add</button>
</div>
  <br>
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