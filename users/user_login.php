<?php
include('../includes/connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- <link rel="stylesheet" href="index.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
   
</head>
<body class="bg-light">

    
    <div class="container-fluid my-3">
        <h2 class="text-center">Login Here</h2>
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-lg-12 col-xl-6">
                <form action="" method="post">
                    <!-- user name -->
                    <div class="form-outline mb-4">
                        <label for="user_username" class="form-label">Username</label>
                        <input type="text" id="user-username" class="form-control" placeholder="Enter User name" autocomplete="off" required= "required" name="user_username"/> 
                    </div>
                    <!-- password -->
                    <div class="form-outline mb-4">
                        <label for="user_password" class="form-label">Password </label>
                        <input type="varchar" id="user-password" class="form-control" placeholder="Enter Password" autocomplete="off" required= "required" name="user_password"/> 
                    </div>

            
            <div class="mt-4 pt-2xv9e">
                <input type="submit" class="bg-info py-2 px-3 border-0" value = "Login" name="user_login">

                <p class="small fw-bold mt-2 pt-1">Do not have an account ?  <a href="user_register.php">Register</a>  </p>
                
            </div>
            </div>
            </form>

            </div>
        </div>               
    </div>

    <?php
include('../includes/footer.php');
?>
</body>
</html>

<?php
function getIPAddress() {
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}
if(isset($_POST['user_login'])){
    $user_username=$_POST['user_username']; 
    $user_password=$_POST['user_password'];
    $select_query="SELECT * FROM users WHERE username='$user_username' AND user_password='$user_password'";
    $result = mysqli_query($connect, $select_query);
    $row_count = mysqli_num_rows($result);
    $row_data = mysqli_fetch_assoc($result);

    $user_ip = getIPAddress();
    // cart query
    $select_cart = "SELECT * FROM cart_details where ip_address = '$user_ip'";
    $result_cart = mysqli_query($connect,$select_cart);
    $row_count_cart = mysqli_num_rows($result_cart);
    if($row_count>0){ 
        if($row_count_cart==0){
            echo "<script>alert('Login Successful')</script>";
            echo "<script>window.open('profile.php','_self')</script>";
        }
        else{
            echo "<script>alert('Login Successful')</script>";
            echo "<script>window.open('payment.php','_self')</script>";
        }
    }

    else{
        echo "<script>alert('Invalid Credentials')</script>";
    }
}


?>