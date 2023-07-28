<?php
    // include connection file
    include('./includes/connect.php');
    // function to show products
    function getproducts(){
        global $connect;
        //  condition to check isset or not
                if(!isset($_GET['category'])){
                    if(!isset($_GET['brand'])){
                $select_query = "SELECT * FROM products order by rand() limit 0,9";
                $result = mysqli_query($connect,$select_query);
                while($row_data = mysqli_fetch_assoc($result)){
                    $product_id = $row_data['product_id'];
                    $product_title = $row_data['product_title'];
                    $product_description = $row_data['product_description'];
                    $product_img = $row_data['prodect_image1'];
                    $product_price = $row_data['product_price'];
                    $category_id = $row_data['category_id'];
                    $brans_id = $row_data['brand_id'];
                    echo"<div class='col-md-4 mb-3'>
                        <div class='card'>
                            <img src='Product_img/$product_img' class='card-img-top' alt='$product_title'>
                            <div class='card-body'>
                                <h5 class='card-title'>$product_title</h5>
                                <p class='card-text'>$product_description</p>
                                <p class='card-text'>Price : $product_price /-</p>
                                <a href='index.php?add_to_cart=$product_id;' class='btn btn-info'>Add to Cart</a>
                                <a href='view_details.php?product_id=$product_id' class='btn btn-secondary'>View more > </a>
                            </div>
                        </div>
                    </div>";
                }
            }
        }
    }

    // products by categories
    function get_products_byCategory(){
        // echo "Hello Category";
        global $connect;
        if(isset($_GET['category'])){
            $cat_id = $_GET['category'];
            // echo $cat_id;
        $select_query = "SELECT * FROM products where category_id= $cat_id";
        $result = mysqli_query($connect,$select_query);
        $num_of_rows = mysqli_num_rows($result);
        echo "<h2 class='text-center text-danger' > Category bikes </h2>";
        if($num_of_rows==0){
            echo "<h2 class='text-center text-danger' > No stock for this Category</h2>";
        }
        while($row_data = mysqli_fetch_assoc($result)){
            $product_id = $row_data['product_id'];
            $product_title = $row_data['product_title'];
            $product_description = $row_data['product_description'];
            $product_img = $row_data['prodect_image1'];
            $product_price = $row_data['product_price'];
            $category_id = $row_data['category_id'];
            $brans_id = $row_data['brand_id'];
            echo"<div class='col-md-4 mb-2'>
                <div class='card'>
                    <img src='Product_img/$product_img' class='card-img-top' alt='$product_title'>
                    <div class='card-body'>
                        <h5 class='card-title'>$product_title</h5>
                        <p class='card-text'>$product_description</p>
                        <p class='card-text'>Price : $product_price</p>
                        <a href='#' class='btn btn-info'>Add to Cart</a>
                        <a href='view_details.php?product_id=$product_id' class='btn btn-secondary'>View more > </a>
                    </div>
                </div>
            </div>";
           }
        }
    }

    // products by brand
    function get_products_bybrand(){    
        global $connect;
        if(isset($_GET['brand'])){
            $brnd_id = $_GET['brand'];
            // echo $brnd_id;
        $select_query = "SELECT * FROM products where brand_id= $brnd_id";
        $result = mysqli_query($connect,$select_query);
        $num_of_rows = mysqli_num_rows($result);
        // echo "<h1> num of rows  $num_of_rows </h1>";
        // echo "<h2 class='text-center text-danger' > Brand bikes </h2>";
        if($num_of_rows==0){
            echo "<h2 class='text-center text-danger' > No stock for this Brand</h2>";
        }
        while($row_data = mysqli_fetch_assoc($result)){
            $product_id = $row_data['product_id'];
            $product_title = $row_data['product_title'];
            $product_description = $row_data['product_description'];
            $product_img = $row_data['prodect_image1'];
            $product_price = $row_data['product_price'];
            $category_id = $row_data['category_id'];
            $brans_id = $row_data['brand_id'];
            echo"<div class='col-md-4 mb-2'>
                <div class='card'>
                    <img src='Product_img/$product_img' class='card-img-top' alt='$product_title'>
                    <div class='card-body'>
                        <h5 class='card-title'>$product_title</h5>
                        <p class='card-text'>$product_description</p>
                        <p class='card-text'>Price : $product_price</p>
                        <a href='#' class='btn btn-info'>Add to Cart</a>
                        <a href='view_details.php?product_id=$product_id' class='btn btn-secondary'>View more > </a>
                    </div>
                </div>
            </div>";
           }
       }
    }
    // function to show brands
    function getbrands(){
        global $connect;
        $select_brands="select * from brands order by brand_title";
        $result_brands=mysqli_query($connect,$select_brands);
        while($row_data = mysqli_fetch_assoc($result_brands)){
            $brand_title = $row_data['brand_title'];
            $brand_id = $row_data['brand_id'];
            // echo $row_data['brand_title'];
            echo " <li class='nav-item'>
                    <a href='index.php?brand=$brand_id' class='nav-link text-light'> <h4> $brand_title </h4> </a>
                  </li>";
        }
    }

    // function to show categories
    function getCategories(){
        global $connect;
        $select_cats="select * from categories order by category_title";
        $result_catss=mysqli_query($connect,$select_cats);
        while($row_data = mysqli_fetch_assoc($result_catss)){
            $category_title = $row_data['category_title'];
            $category_id = $row_data['category_id'];
            echo " <li class='nav-item'>
            <a href='index.php?category=$category_id' class='nav-link text-light'> <h4> $category_title </h4> </a>
            </li>";
        }
    }

    // searching products
    function search_product(){
        global $connect;
        if(isset($_GET['search_data'])){
            $search_data_value = $_GET['search_data'];
            $search_query = "SELECT * FROM products where product_keywords like '%$search_data_value%' ";
            $result_query = mysqli_query($connect, $search_query);
            while($row_data = mysqli_fetch_assoc($result_query)){
                $product_id = $row_data['product_id'];
                $product_title = $row_data['product_title'];
                $product_description = $row_data['product_description'];
                $product_img = $row_data['prodect_image1'];
                $product_price = $row_data['product_price'];
                $category_id = $row_data['category_id'];
                $brans_id = $row_data['brand_id'];
                echo "<div class='col-md-10 mb-3'>
        <div class='row p-2 bg-white border rounded'>
            <div class='col-md-3 mt-1'>
            <img class='img-fluid img-responsive rounded product-image'  src='Product_img/$product_img'>
            </div>
            <div class='col-md-6 mt-1'>
                <h5>$product_title</h5>
                <div class='d-flex flex-row'>
                    <div class='ratings mr-2 text-warning'><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='far fa-star'></i></div><span class='mx-2'>892</span>
                </div>
                <div class='mt-1 mb-1 spec-1'>
                <p class='card-text'>$product_description</p>
                <span>100% cotton</span><span class='dot'></span><span>Light weight</span><span class='dot'></span><span>Best finish<br></span></div>
                
        </div>
            <div class='align-items-center align-content-center col-md-3 border-left mt-1'>
                <div class='d-flex flex-row align-items-center'>
                    <h4 class='mr-1'> $product_price</h4><span class='strike-text mx-2'>201900</span>
                </div>
                <h6 class='text-success'>Free shipping</h6>
                <div class='d-flex flex-column mt-4'>
                <a href='view_details.php?product_id=$product_id' class='btn btn-dark'>View more > </a>

                <a href='index.php?add_to_cart=$product_id;' class='btn btn-warning my-2'>Add to Cart</a>
                </div>
            </div>
        </div>          
        
    </div>";
            }
        }
    }
    
// function to show some random data
    function someproducts(){
        
        global $connect;
        //  condition to check isset or not
                $select_query = "SELECT * FROM products order by rand() limit 0,4";
                $result = mysqli_query($connect,$select_query);
                while($row_data = mysqli_fetch_assoc($result)){
                    $product_id = $row_data['product_id'];
                    $product_title = $row_data['product_title'];
                    $product_description = $row_data['product_description'];
                    $product_img = $row_data['prodect_image1'];
                    $product_price = $row_data['product_price'];
                    $category_id = $row_data['category_id'];
                    $brans_id = $row_data['brand_id'];
                    echo" <div class='col-md-6 col-lg-3 mb-4 mb-lg-0'>
                    <div class='card'>
                      <div class='d-flex justify-content-between p-3'>
                        <p class='lead mb-0'>Book now @999/-</p>
                        <div
                          class='bg-info rounded-circle d-flex align-items-center justify-content-center shadow-1-strong'
                          style='width: 35px; height: 35px;'>
                          <p class='text-white mb-0 small'>x4</p>
                        </div>
                      </div>
                      
                      <img src='product_img/$product_img'
                                class='card-img-top' alt='$product_title' />
                              <div class='card-body'>
                                <div class='d-flex justify-content-between'>
                                  <p class='small'><a href='#!' class='text-muted'>$product_title</a></p>
                                  <p class='small text-danger'><s>$product_price</s></p>
                                </div>
                    
                                <div class='d-flex justify-content-between mb-3'>
                                  <h5 class='mb-0'>$product_title</h5>
                                
                                </div>
                                <div class='d-flex justify-content-between mb-2'>
                          <p class='text-muted mb-0'>Available: <span class='fw-bold'>7</span></p>
                          <div class='ms-auto text-warning'>
                            <i class='fas fa-star'></i>
                            <i class='fas fa-star'></i>
                            <i class='fas fa-star'></i>
                            <i class='fas fa-star'></i>
                            <i class='far fa-star'></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>";
                   
        
                }
    }


    // view details function
    function view_details(){
        global $connect;
        //  condition to check isset or not
                if(isset($_GET['product_id'])){
                    $p_id = $_GET['product_id'];
                $select_query = "SELECT * FROM products where product_id=$p_id";
                $result = mysqli_query($connect,$select_query);
                while($row_data = mysqli_fetch_assoc($result)){
                    $product_id = $row_data['product_id'];
                    $product_title = $row_data['product_title'];
                    $product_description = $row_data['product_description'];
                    $product_img1 = $row_data['prodect_image1'];
                    $product_img2 = $row_data['prodect_image2'];
                    $product_img3 = $row_data['prodect_image3'];
                    $product_price = $row_data['product_price'];
                    $category_id = $row_data['category_id'];
                    $brans_id = $row_data['brand_id'];
                    echo"<div class='container-fliud'>
                    <div class='wrapper row'>
                        
                  <div class='preview col-md-6'>
						
                    <div class='preview-pic tab-content'>
                      <div class='tab-pane active' id='pic-1'><img src='Product_img/$product_img1' /></div>
                      <div class='tab-pane' id='pic-2'><img src='Product_img/$product_img2' /></div>
                      <div class='tab-pane' id='pic-3'><img src='Product_img/$product_img1' /></div>
                      <div class='tab-pane' id='pic-4'><img src='Product_img/$product_img2' /></div>
                      <div class='tab-pane' id='pic-5'><img src='Product_img/$product_img3' />
                      </div>
                    </div>
                    <ul class='preview-thumbnail nav nav-tabs'>
                      <li class='active'><a data-target='#pic-1' data-toggle='tab'><img src='Product_img/$product_img2' /></a></li>
                      <li><a data-target='#pic-2' data-toggle='tab'><img src='Product_img/$product_img3' /></a></li>
                      <li><a data-target='#pic-3' data-toggle='tab'><img src='Product_img/$product_img1' /></a></li>
                      <li><a data-target='#pic-4' data-toggle='tab'><img src='Product_img/$product_img2' /></a></li>
                      <li><a data-target='#pic-5' data-toggle='tab'><img src='Product_img/$product_img3' /></a></li>
                    </ul>
                    
                </div>
                <div class='details col-md-6'>
                    <h3 class='product-title'>$product_title</h3>
                    <div class='rating'>
                        <div class='stars'>
                            <span class='fa fa-star checked'></span>
                            <span class='fa fa-star checked'></span>
                            <span class='fa fa-star checked'></span>
                            <span class='fa fa-star'></span>
                            <span class='fa fa-star'></span>
                        </div>
                        <span class='review-no'>41 reviews</span>
                    </div>
                    <p class='product-description'>$product_description</p>
                    <h4 class='price'>current price: <span>$product_price/-</span></h4>
                    <p class='vote'><strong>91%</strong> of buyers enjoyed this product! <strong>(87 votes)</strong></p>
                    <h5 class='sizes'>EMI starts :
                        <span class='size' data-toggle='tooltip' title='small'> INR 54,624 / month</span>
                        
                    </h5>
                    <p class='product-description'>Mileage-Range : 145 km enc ||  Power (w): 4400Motor|| Front Brake : Disc || Rear Brake : Drum || Battery charging time	5 Hrs || Rated Powe :3000 W  || Seat Height : 770 mm</p>
                    <h5 class='colors'>colors:
                        <span class='color orange not-available' data-toggle='tooltip' title='Not In store'></span>
                        <span class='color black'></span>
                        <span class='color blue'></span>
                        <span class='color green'></span>
                        <span class='color red'></span>
                    </h5>
                    <div class='action'>
                        <button class='add-to-cart btn btn-default' type='button'>add to cart</button>
                        <button class='like btn btn-default' type='button'><span class='fa fa-heart'></span></button>
                    </div>
                </div>
                </div>
                </div>";
                }
            }
        }

// get IP adress function
    function getIPAddress() {  
            //whether ip is from the share internet  
        if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
                    $ip = $_SERVER['HTTP_CLIENT_IP'];  
        }  
            //whether ip is from the proxy  
        elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
                    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
        }  
            //whether ip is from the remote address  
        else{  
                $ip = $_SERVER['REMOTE_ADDR'];  
        }  
        return $ip;  
}  

// cart function
function cart(){
    if(isset($_GET['add_to_cart'])){
        global $connect;
        
        $get_ip_add = getIPAddress();
        
        $get_product_id = $_GET['add_to_cart'];
        
        $select_query = "SELECT * FROM `cart_details` WHERE `ip_address`='$get_ip_add' AND `product_id`='$get_product_id'";

        $result_query = mysqli_query($connect, $select_query);
        
        $num_of_rows = mysqli_num_rows($result_query); 
        if($num_of_rows > 0){
            echo "<script>alert('This item is already present inside cart')</script>";
            echo "<script>window.open('index.php', '_self')</script>";
        }        
        else{
            $insert_query = "INSERT INTO `cart_details` (`product_id`, `ip_address`, `quantity`) VALUES ('$get_product_id', '$get_ip_add', 0)";
            $result_query = mysqli_query($connect, $insert_query);
            echo "<script>alert('Item is added to cart')</script>";        
            echo "<script>window.open('index.php', '_self')</script>";
        }
    }    
}

// get cart item numbers
function total_cart_item(){
    if(isset($_GET['add_to_cart'])){
        global $connect;
        $get_ip_add = getIPAddress();
        $select_query = "SELECT * FROM `cart_details` WHERE `ip_address`='$get_ip_add' ";
        $result_query = mysqli_query($connect, $select_query);        
        $count_cart_items = mysqli_num_rows($result_query);   
    }    
    else{
        global $connect;
        $get_ip_add = getIPAddress();
        $select_query = "SELECT * FROM `cart_details` WHERE `ip_address`='$get_ip_add' ";
        $result_query = mysqli_query($connect, $select_query);        
        $count_cart_items = mysqli_num_rows($result_query);   
    }
    echo $count_cart_items;
}
// add total price
function total_cart_price() {
    global $connect;
    $get_ip_add = getIPAddress();
    $total_price = 0;
    $cart_query = "SELECT * FROM `cart_details` WHERE ip_address='$get_ip_add'";
    $result = mysqli_query($connect, $cart_query);
    while ($row = mysqli_fetch_array($result)) {
        $product_id = $row['product_id']; 
        $select_products = "SELECT * FROM products WHERE product_id='$product_id'"; 
        $result_products = mysqli_query($connect, $select_products);
        while ($row_product_price = mysqli_fetch_array($result_products)) {
            $product_price = array($row_product_price['product_price']);
            $product_values = array_sum($product_price);
            $total_price += $product_values;
        }    
    }
    echo $total_price;
}

?>