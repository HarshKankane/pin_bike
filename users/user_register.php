<?php
include('../includes/connect.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
   
</head>
<body class="bg-light">

    <div class="container-fluid my-3">
        <h2 class="text-center">New User Registration</h2>
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-lg-12 col-xl-6">
            <form action="user_register.php" method="post" enctype="multipart/form-data">
                    <!-- user name -->
                    <div class="form-outline mb-4">
                        <label for="user_username" class="form-label">Username</label>
                        <input type="text" id="user-username" class="form-control" placeholder="Enter User name" autocomplete="off" required= "required" name="user_username"/> 
                    </div>
                    <!-- email -->
                    <div class="form-outline mb-4">
                        <label for="user_email" class="form-label">Email</label>
                        <input type="email" id="user-email" class="form-control" placeholder="Enter email" autocomplete="off" required= "required" name="user_email"/> 
                    </div>
                    <!-- phone  -->
                    <div class="form-outline mb-4">
                        <label for="user_phone" class="form-label">Contact No. </label>
                        <input type="varchar" id="user-phone" class="form-control" placeholder="Enter Phone number" autocomplete="off" required= "required" name="user_phone"/> 
                    </div>
                    <!-- password -->
                    <div class="form-outline mb-4">
                        <label for="user_password" class="form-label">Password </label>
                        <input type="varchar" id="user-password" class="form-control" placeholder="Enter Password" autocomplete="off" required= "required" name="user_password"/> 
                    </div>
                    <!-- Address -->

                    <div class="row">
                  <div class="col-md-6 mb-4">
                  <label for="user_state" class="form-label me-2">State</label>
                    <select class="select" name="user_state">
                      <option value="1">State</option>
                      <option value="2">Option 1</option>
                      <option value="3">Option 2</option>
                      <option value="4">Option 3</option>
                    </select>

                  </div>
                  <div class="col-md-6 mb-4">
                    <label for="user_city" class="form-label me-2">City</label>
                    <select class="select" name="user_city">
                      <option value="1">City</option>
                      <option value="2">Option 1</option>
                      <option value="3">Option 2</option>
                      <option value="4">Option 3</option>
                    </select>
                  </div>
                  <!-- pincode -->
                  <div class="form-outline mb-4">
                        <label for="user_pincode" class="form-label">Pincode</label>
                        <input type="text" id="user-pincode" class="form-control" placeholder="Enter pincode" autocomplete="off" required= "required" name="user_pincode"/> 
                    </div>
            </div>
            <div class="mt-4 pt-2">
                <input type="submit" class="bg-info py-2 px-3 border-0" value = "Register" name="user_register">

                <p class="small fw-bold mt-2 pt-1">Already have an account ?  <a href="user_login.php">Login</a>  </p>
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

<!-- php code -->
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

if(isset($_POST['user_register']))
{
    $user_username = $_POST['user_username'];
    $user_email = $_POST['user_email'];
    $user_contact = $_POST['user_phone'];
    $user_password = $_POST['user_password'];
    $user_state = $_POST['user_state'];
    $user_city = $_POST['user_city'];
    $user_pincode = $_POST['user_pincode'];
    $user_ip = getIPAddress();

    // Select query
    $select = "SELECT * FROM users WHERE username='$user_username' OR user_email='$user_email'";
    $run_select = mysqli_query($connect, $select);
    $row_count = mysqli_num_rows($run_select);
    if($row_count > 0) {
        echo "<script>alert('This Username and email already exist, go to login')</script>";
        exit();
    }
    else {
        // Insert query
        $insert_query = "INSERT INTO users (username, user_email, user_phone, user_password, user_city, user_state, user_pincode, user_ip) VALUES ('$user_username', '$user_email', '$user_contact', '$user_password', '$user_city', '$user_state', '$user_pincode', '$user_ip')";
        $sql_execute = mysqli_query($connect, $insert_query);
        if ($sql_execute) {
            echo"<script>window.open('user_login.php','_self')</script>";
          }
          

        else {
            die(mysqli_error($connect));
        }
    }

    // selecting cart items
    // $select_cart_items = "Select * from 'cart_details' where ip_address = '$user_ip'";
    $select_cart_items = "SELECT * FROM cart_details WHERE ip_address = '$user_ip'";

    $result_cart = mysqli_query($connect, $select_cart_items);
    $rows_count = mysqli_num_rows($result_cart);
    if($rows_count>0){
        $_SESSION['username']=$user_username;
        echo"<script>alert('You have items in your cart')</script>";
        echo"<script>window.open('checkout.php','_self')</script>";
    }else{
        echo"<script>window.open('../index.php','_self')</script>";
    }
}

?>