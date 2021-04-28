
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
              <h3 class="mb-0">Feedback List</h3>
            </div>
            <!-- Light table -->
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col" class="sort" data-sort="completion">Promo name</th>

                    <th scope="col" class="sort" data-sort="name">Discount</th>
                    <th scope="col" class="sort" data-sort="name">Expiry Date</th>
                    <th scope="col" class="sort" data-sort="name">Edit</th>
                    <th scope="col" class="sort" data-sort="name">Delete</th>


                    
                    
                    <th scope="col"></th>
                  </tr>
                </thead>
                  <?php 
                                    $query="SELECT * from promo";
                                    $query_run=mysqli_query($connection,$query);
                                    
                                    if(mysqli_num_rows($query_run)>0){

                                    while ($row=mysqli_fetch_assoc($query_run)){
                                    ?>

                <tbody class="list">
                  <tr>
                    <th scope="row">
                      <div class="media align-items-center">
                        
                        <div class="media-body">
                        <a href="s">
                          <span class="name mb-0 text-sm"><?php echo $row['name']; ?></span>
                          </a>
                        </div>
                      </div>
                    </th>
                    <td>
                    <?php echo $row['discount'].'%'; ?>
                    </td>
               <td>
                    <?php echo $row['expiryDate']; ?>
                    </td>
                    <td>
                   <form action="editpromo.php" method="POST">
                   <input type="hidden" name="promoId" value="<?php echo $row['promoId']; ?>">
                   <button class="btn btn-danger" type="submit" name="changePromo">Change</button>
                   </form></td>
                   <td>
                   <form action="code.php" method="post">
                   <input type="hidden" name="promoIds" value="<?php echo $row['promoId']; ?>">
                   <button class="btn btn-danger" type="submit" name="deletePromo">Delete</button>
                   </form></td>
                </tbody>
                <?php } } ?>
              </table>

            </div>
            <!-- Card footer -->
            <div class="card-footer py-4">
       
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