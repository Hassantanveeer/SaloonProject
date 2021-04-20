
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
              <h3 class="mb-0">Booking List</h3>
            </div>
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

                    <th scope="col"></th>
                  </tr>
                </thead>
                 <?php 
                                    $query="SELECT * from booking";
                                    $query_run=mysqli_query($connection,$query);
                                    
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
                  </tr>
                 
                </tbody>

                <?php } } ?>
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