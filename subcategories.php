
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
              
            <div class="card-header border-0">
              <h3 class="mb-0">Nails List</h3>
            </div>
            <!-- Light table -->
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col" class="sort" data-sort="completion">Name</th>
                    <th scope="col" class="sort" data-sort="completion">Price</th>
                    <th scope="col" class="sort" data-sort="completion">Time Require</th>

                    <th scope="col" class="sort" data-sort="name">Edit</th>
                    <th scope="col" class="sort" data-sort="name">Delete</th>
                    
                    
                    <th scope="col"></th>
                  </tr>
                </thead>
                
                                   <?php  
                                    $id=$_GET['packageid'];
                                    $query="SELECT * from item where packageId='$id'";
                                    $query_run=mysqli_query($connection,$query);
                                    
                                    if(mysqli_num_rows($query_run)>0){

                                    while ($row=mysqli_fetch_assoc($query_run)){
                                                            
                                    ?>
                <tbody class="list">
                  <tr>
                    <th scope="row">
                      <div class="media align-items-center">
                        <!-- <a href="subcategories.php" class="avatar rounded-circle mr-3">
                          <img alt="Image placeholder" src="upload/<?php echo $row['itemPicture']; ?>">
                        </a> -->
                        <div class="media-body">
                          <span class="name mb-0 text-sm"><?php echo $row['itemName']; ?></span>
                        </div>
                      </div>
                    </th>
                    <td>
                      <div class="d-flex align-items-center">
                        <p><?php echo $row['itemPrice']; ?></p>
                      </div>
                    </td>
                    <td>
                      <div class="d-flex align-items-center">
                        <p><?php echo $row['timeRequire']; ?></p>
                      </div>
                    </td>
                    <td>
                      <div class="d-flex align-items-center">
                            <form action="editItem.php" method="GET">
                            <input type="hidden" name="itemId" value="<?php echo $row['itemId']; ?>">
                            <button class="btn btn-danger" type="submit" name="edit_item">Edit</button>
                      </form>
                      </div>
                    </td>
                    <td>
                      <div class="d-flex align-items-center">
                            <form action="code.php" method="POST">
                            <input type="hidden" name="itemDeleteId" value="<?php echo $row['itemId']; ?>">
                            <button class="btn btn-danger" type="submit" name="delete_item">Delete</button>
                      </form>
                      </div>
                    </td>
                  </tr>
                </tbody>
                <?php }} ?>
              </table>

            </div>
            <!-- Card footer -->
            <div class="card-footer py-4">
              <nav aria-label="...">
             <ul class="pagination justify-content-end mb-0">
               
                  <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">
                      <i class="fas fa-angle-left"></i>
                      <span class="sr-only">Previous</span>
                    </a>
                  </li>
                  <li class="page-item active">
                    <a class="page-link" href="#">1</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#">
                      <i class="fas fa-angle-right"></i>
                      <span class="sr-only">Next</span>
                    </a>
                  </li>
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
</body>

</html>