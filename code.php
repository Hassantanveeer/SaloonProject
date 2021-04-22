<?php
include("db.php");


if(isset($_POST['Add_item'])){
    // $currentDir = getcwd();
    // $uploadDirectory = "/upload/";  
    // $picturename=$_FILES['myimage']['name'];
    // @$fileName = $_FILES['myimage']['name'];
    // @$fileTmpName  = $_FILES['myimage']['tmp_name'];
    // $uploadPath = $currentDir . $uploadDirectory . basename($fileName);
    
    $packageId=$_POST['pId'];
    $itemName=$_POST['itemName'];
    $price=$_POST['price'];
    $timeRequire=$_POST['timeRequire'];

    $query="INSERT into item(itemName,itemPrice,timeRequire,packageId) values('$itemName','$price','$timeRequire','$packageId')";
    $query_run=mysqli_query($connection,$query);
            if($query_run){
                
            echo "<script>alert('New Item Added!');</script>";            
            echo "<script>window.location.href='categories.php';</script>";  
           // echo "Done";

            }  
            else{
                 echo "<script>alert('New Item Not Added!');</script>";            
            echo "<script>window.location.href='categories.php';</script>";  

            }
    

}
if(isset($_POST['Add_package'])){
    $currentDir = getcwd();
    $uploadDirectory = "/upload/";  
    $picturename=$_FILES['myimage']['name'];
    @$fileName = $_FILES['myimage']['name'];
    @$fileTmpName  = $_FILES['myimage']['tmp_name'];
    $uploadPath = $currentDir . $uploadDirectory . basename($fileName);


    $itemName=$_POST['packageName'];

    $query="INSERT into package(pname,packagePic) values('$itemName','$picturename')";
    $query_run=mysqli_query($connection,$query);
    if(move_uploaded_file($fileTmpName, $uploadPath)){
            if($query_run){
                
            echo "<script>alert('New Package Added!');</script>";            
            echo "<script>window.location.href='categories.php';</script>";  

            }  
        }else{
             echo "<script>alert('Pic Not Uploaded!');</script>";            
            echo "<script>window.location.href='categories.php';</script>";  
        }

}
if(isset($_POST['edit_package'])){
    $currentDir = getcwd();
    $uploadDirectory = "/upload/";  
    $picturename=$_FILES['myimage']['name'];
    @$fileName = $_FILES['myimage']['name'];
    @$fileTmpName  = $_FILES['myimage']['tmp_name'];
    $uploadPath = $currentDir . $uploadDirectory . basename($fileName);


    $itemName=$_POST['packageName'];
    $id=$_POST['hiddenId'];

    $query="UPDATE package set pname='$itemName',packagePic='$picturename' where packageId='$id'";
    $query_run=mysqli_query($connection,$query);
    if(move_uploaded_file($fileTmpName, $uploadPath)){
            if($query_run){
                
            echo "<script>alert('Package Updated!');</script>";            
            echo "<script>window.location.href='categories.php';</script>";  

            }  
        }else{
             echo "<script>alert('Pic Not Uploaded!');</script>";            
            echo "<script>window.location.href='categories.php';</script>";  
        }

}

if(isset($_POST['edit_item'])){


    $itemName=$_POST['itemName'];
    $id=$_POST['hiddenId'];
    $price=$_POST['price'];
    $time=$_POST['time'];

    $query="UPDATE item set itemName='$itemName',timeRequire='$time',itemPrice='$price' where itemId='$id'";
    $query_run=mysqli_query($connection,$query);
            if($query_run){
                
            echo "<script>alert('item Updated!');</script>";            
            echo "<script>window.location.href='categories.php';</script>";  

            }  
        else{
             echo "<script>alert('Pic Not Uploaded!');</script>";            
            echo "<script>window.location.href='categories.php';</script>";  
        }

}

if (isset($_POST['addExpense'])){
    $expense=$_POST['expense'];
    $name=$_POST['name'];
    $query="INSERT into expense(name,expense) values('$name','$expense')";
    $query_run=mysqli_query($connection,$query);
    if($query_run){
        
        echo "<script>alert('New Expense Added!');</script>";            
        echo "<script>window.location.href='home.php';</script>";  

     }
    
}
if(isset($_POST['UpdateProfile'])){
    $email=$_POST['email'];
    $pass=$_POST['pass'];
      $query="UPDATE admin set email='$email', password='$pass'";
    $query_run=mysqli_query($connection,$query);
    if($query_run){
        
        echo "<script>alert('Profile Updated!');</script>";            
        echo "<script>window.location.href='home.php';</script>";  

     }
  
}

if(isset($_POST['signin'])){
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $query="SELECT email,password from admin where email='$email' and password='$pass'";
    $query_run=mysqli_query($connection,$query);
if(mysqli_num_rows($query_run)>0){
    
    if($query_run){
        
        echo "<script>alert('Loging in!');</script>";            
        echo "<script>window.location.href='home.php';</script>";  

     }
    }
    else{
        
        echo "<script>alert('email or password  incorrect!');</script>";            
        echo "<script>window.location.href='index.php';</script>";
    }
}

if (isset($_POST['addPromo'])){
    $promo=$_POST['promo'];
    $discount=$_POST['discount'];
    $expiry=$_POST['expiry'];
    $query="INSERT into promo(name,discount,expiryDate) values('$promo','$discount','$expiry')";
    $query_run=mysqli_query($connection,$query);
    if($query_run){
        
        echo "<script>alert('New Promo Added!');</script>";            
        echo "<script>window.location.href='home.php';</script>";  

     }
    
}
?>