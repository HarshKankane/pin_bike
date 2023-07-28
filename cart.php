<?php
    include('includes/connect.php');
    include('functions/common_function.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <title>Cart</title>
</head>
<body>
<?php
include('includes/menu.php');
?>
<section class="h-100 gradient-custom">
  <div class="container py-5">
    <div class="row d-flex justify-content-center my-4">
      <div class="col-md-8">
        <form action="" method="post">
        <div class="card mb-4">
          <div class="card-header py-3">
            <h5 class="mb-0">My Cart</h5>
          </div>
          <div class="card-body">
            <!-- Single item -->
            <?php
              global $connect;
              $get_ip_add = getIPAddress();
              $total_price = 0;
              $cart_query = "SELECT * FROM `cart_details` WHERE ip_address='$get_ip_add'";
              $result = mysqli_query($connect, $cart_query);
              $cart_query = "SELECT * FROM `cart_details` WHERE ip_address='$get_ip_add'";
              $result_cart = mysqli_query($connect, $cart_query);
              while ($row = mysqli_fetch_array($result_cart)) {
                  $product_id = $row['product_id']; 
                  $select_products = "SELECT * FROM products WHERE product_id='$product_id'"; 
                  $result_products = mysqli_query($connect, $select_products);
                  while ($row_product_price = mysqli_fetch_array($result_products)) {
                      $product_price = $row_product_price['product_price'];
                      $product_table = $row_product_price['product_price'];
                      $product_title = $row_product_price['product_title'];
                      $product_image1 = $row_product_price['prodect_image1'];
                      $product_values = $product_price;
                      $total_price += $product_values;
            ?>
            <div class="row">
              <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                <!-- Image -->
                <div class="bg-image hover-overlay hover-zoom ripple rounded" data-mdb-ripple-color="light">
                  <img src="Product_img/<?php echo  $product_image1  ?>"
                    class="w-100" alt="Blue Jeans Jacket" />
                    <p class='card-text'>Price : <?php echo $product_price?> /-</p>
                  <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                  </a>
                </div>
                <!-- Image -->
              </div>

              <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                <!-- Data -->
                <p><strong><?php echo  $product_title  ?></strong></p>
                <p>Color: blue</p>
                <p>Size: M</p>
                <!-- remove button -->
                <input type="checkbox" name="removeitem[]" value="<?php echo $product_id?>">
                <input type="submit" class="bg-danger text-white border-0 px-3 ms-2" value="Remove" style="max-height: 40px" name="remove_cart">
                <!-- Data -->
              </div>

              <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <!-- Quantity -->
                <div class="d-flex mb-4 ml-5" style="max-width: 200px">
                  <label class="form-label my-1 mx-2" for="form1">Quantity</label>
                  <div class="form-outline text-center" style="max-width: 120px;">
                    <input id="form1" min="0" name="qty" value="1" type="text" class="form-control" style="width: 40px;"/>
                    <?php
                      $get_ip_add = getIPAddress();
                      if(isset($_POST['update_cart'])){
                        $quantities = $_POST['qty'];
                        $update_cart = "UPDATE cart_details SET quantity = $quantities WHERE ip_address = '$get_ip_add'";
                        $result_quantity = mysqli_query($connect,$update_cart);
                        $total_price =  $total_price * $quantities;
                        }
                      ?>
                  </div>

                  <input type="submit" class="bg-info px-3 ms-2" value="Update" style="max-height: 40px" name="update_cart">
                  
                </div>
                <!-- Quantity -->       
                  <!-- Price -->
                  <p class="text-start text-md-center"> Total : 
                  <strong><?php echo   $total_price?></strong>
                </p>
                <!-- Price -->        
              </div>
            </div>
            <hr class="my-4" />
            <!-- Single item -->
            <?php 
            }
          }
          ?>
          </div>
        </div>
        </form>
        <?php
      function remove_cart_item(){
        global $connect;
        if(isset($_POST['remove_cart'])){
            // Get the product ID from the form data
            foreach($_POST['removeitem'] as $remove_id){
                echo $remove_id;
                $delete_query = "DELETE FROM cart_details WHERE product_id = '$remove_id'";
                $run_delete = mysqli_query($connect,$delete_query);
                if($run_delete){
                  echo " <script>window.open('cart.php','_self')</script>";
                }
            }
      }
    }
    
    $call = remove_cart_item();
        
        ?>
        <div class="card mb-4">
          <div class="card-body">
            <p><strong>Expected shipping delivery :  </strong> 12/05/2023 - 14/05/2023</p>
          </div>
        </div>
        <div class="card mb-4 mb-lg-0">
          <div class="card-body">
            <p><strong>We accept</strong></p>
            <img class="me-2" width="45px"
              src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/visa.svg"
              alt="Visa" />
            <img class="me-2" width="45px"
              src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/amex.svg"
              alt="American Express" />
            <img class="me-2" width="45px"
              src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/mastercard.svg"
              alt="Mastercard" />
            <img class="me-2" width="45px"
              src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce/includes/gateways/paypal/assets/images/paypal.webp"
              alt="PayPal acceptance mark" />
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-4">
          <div class="card-header py-3">
            <h5 class="mb-0">Summary</h5>
          </div>
          <div class="card-body">
            <ul class="list-group list-group-flush">
              <li
                class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                Total
                <span><?php echo $total_price?> /-</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                Shipping
                <span>Free Shipping</span>
              </li>
              <li
                class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                <div>
                  <strong>Total amount</strong>
                  <strong>
                    <p class="mb-0">(including VAT)</p>
                  </strong>
                </div>
                <span><strong><?php echo $total_price?> /-</strong></span>
              </li>
            </ul>

            <button type="button" class="btn btn-info btn-lg btn-block">
             <a href="users/checkout.php" class="text-decoration-none text-dark"> Buy Now</a>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
include('includes/footer.php');
?>
</body>
</html>