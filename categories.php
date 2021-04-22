
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
            <div class="card-header border-0">
              <h3 class="mb-0">Categories List</h3>
            </div>
            <!-- Light table -->
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col" class="sort" data-sort="completion">Name</th>

                    <th scope="col" class="sort" data-sort="name">Edit</th>
                    
                    
                    <th scope="col"></th>
                  </tr>
                </thead>
                  <?php 
                                    $query="SELECT * from package";
                                    $query_run=mysqli_query($connection,$query);
                                    
                                    if(mysqli_num_rows($query_run)>0){

                                    while ($row=mysqli_fetch_assoc($query_run)){
                                                            
                                    ?>

                <tbody class="list">
                  <tr>
                    <th scope="row">
                      <div class="media align-items-center">
                        <a href="subcategories.php?packageid=<?php echo $row['packageId']; ?>" class="avatar rounded-circle mr-3">
                          <img alt="Image placeholder" src="upload/<?php echo $row['packagePic']; ?>">
                        </a>
                        <div class="media-body">
                        <a href="subcategories.php?packageid=<?php echo $row['packageId']; ?>">
                          <span class="name mb-0 text-sm"><?php echo $row['pname']; ?></span>
                          </a>
                        </div>
                      </div>
                    </th>
                    <td>
                      <div class="d-flex align-items-center">
                      <form action="edit.php" method="GET">
                      <input type="hidden" name="packageId" value="<?php echo $row['packageId']; ?>">
                        <button class="btn btn-danger" type="submit" name="edit_category">Edit</button>
                      
                      </form>
                      </div>
                    </td>
               
                   
                </tbody>
                <?php } } ?>
              </table>

            </div>
            <!-- Card footer -->
            <div class="card-footer py-4">
              <nav aria-label="...">
                <ul class="pagination justify-content-end mb-0">
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#bd-example-modal-lg">Add New Item</button>
               <div class="modal fade bd-example-modal-lg" id="bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <form method="POST" action="code.php"  enctype="multipart/form-data">
<div class="container">
    
  <div class="form-group">
    <label for="exampleFormControlFile1">Select Package</label>
    <select name="pId" class="form-control" id="">
    
                  <?php 
                                    $query="SELECT * from package";
                                    $query_run=mysqli_query($connection,$query);
                                    
                                    if(mysqli_num_rows($query_run)>0){

                                    while ($row=mysqli_fetch_assoc($query_run)){
                                                            
                                    ?>
    <option value="<?php echo $row['packageId']; ?>"><?php echo $row['pname']; ?></option>
    <?php } }?></select>
  </div>
    <div class="form-group">
    <label for="exampleFormControlFile1">Item Name</label>
    <input type="text" name="itemName" class="form-control" id="exampleFormControlFile1">
  </div>
  <div class="form-group">
    <label for="exampleFormControlFile1">Add Price</label>
    <input type="number" name="price" class="form-control" id="exampleFormControlFile1">
  </div>
    <div class="form-group">
    <label for="exampleFormControlFile1">Time Require</label>
    <input type="text" name="timeRequire" class="form-control" id="exampleFormControlFile1">
  </div>
  <button type="submit" class="btn btn-danger" name="Add_item">Add</button>
</div>
  <br>
</form>
    </div>
  </div>
</div>
<button class="btn btn-danger" data-toggle="modal" data-target="#bd-example-modal-lg-a">Add New Category</button>
  <div class="modal fade bd-example-modal-lg" id="bd-example-modal-lg-a" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <form method="POST" action="code.php"  enctype="multipart/form-data">
<div class="container">
    <div class="form-group">
    <label for="exampleFormControlFile1">Add Picture</label>
    <input type="file" name="myimage" class="form-control" id="exampleFormControlFile1">
  </div>
  
    <div class="form-group">
    <label for="exampleFormControlFile1">Package Name</label>
    <input type="text" name="packageName" class="form-control" id="exampleFormControlFile1">
  </div>

  <button type="submit" class="btn btn-danger" name="Add_package">Add</button>
</div>
  <br>
</form>
    </div>
  </div>
</div>
                  
                </ul>
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