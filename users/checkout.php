<!DOCTYPE html>
<?php
include('../includes/connect.php')
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
</head>
<body>
    <div>
        <?php
        if(!isset($_SESSION['username'])){
            include('user_login.php');
        }
        else{
            include('payment.php');
        }
        ?>
    </div>
</body>
</html>