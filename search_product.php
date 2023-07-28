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
    <link rel="stylesheet" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Bike : search</title>
</head>
<body>
<?php
include('includes/menu.php');
cart();
?>

<!-- navbar  ends -->

     
        <section id="cartSection ">
            <section id="welcomeStore">
               
                <div id="productbox">
                    <a href="">Electric Bikes</a>
                    <div class="dash"></div>
                    <a href="">Scooters</a>
                    <div class="dash"></div>
                    <a href="">Off-Road Bikes</a>
                </div>
            </section>


            <div class="row">
            <div class="col-md-1"></div>
            <!-- products -->
                <div class="col-md-8">
                    <!-- products -->
                    <div class="row">
                        <!-- php code for fetching data -->
                        <?php
                        search_product();
                        get_products_byCategory();
                        get_products_bybrand();
                        ?>
                    
                    </div>
                    <!-- row end -->
                    
                </div>
                <!-- col end -->
                        <!-- sidenav -->
                        <div class="col-md-2 bg-secondary p-0">
                            <!-- brands  -->
                            <ul class="navbar-nav me-auto text-center">
                                <li class="nav-item bg-info">
                                    <a href="#" class="nav-link text-light"> <h4>Delivery Brands</h4> </a>
                                </li>
                                <?php
                                 getbrands();
                                    
                                ?>
                            </ul>

                            <!-- categories -->
                            <ul class="navbar-nav me-auto text-center">
                                <li class="nav-item bg-info">
                                    <a href="#" class="nav-link text-light"> <h4>Categories</h4> </a>
                                </li>
                                <?php
                                     getCategories();
                                ?>
                                
                            </ul>
                        </div>
                        
                <div class="col-md-1"></div>
            </div>
        </section>

 
    
    <div style="height:20vh"></div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html>