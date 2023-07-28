<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- bootstrap css link -->
    <link rel="stylesheet" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   
</head>
<body>
    <!-- navbar -->
        <div class="container-fluid p-0">
            <nav class="navbar navbar-expand-lg navbar-light bg-info">
                <div class="container-fluid">
                    <img src="../pics/pyb3.png" alt="" class="logo">
                    <nav class="navbar navbar-expand-lg ">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="" class="nav-link">Welcome Guest</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </nav>
        </div>
    <!-- second child -->

    <div class="bg-light">
        <h3 class="text-center p-2"> Manage Details</h3>
       
    </div>

    <!-- 3rd child -->
    <div class="row">
        <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
            <div class="p-3 px-5">
                <a href="#"> <img src="../pics/bajaj_pulsur_150.png" alt="" class="admin-img"> </a>
                <p class="text-light text-center">Admin Name</p>
            </div>
            <div class="button text-center">
                <button class="my-3 px-1"><a href="insert_product.php" class="nav-link text-light bg-info my-1  p-2">  Insert Products</a></button>
                <button class="px-1"><a href="" class="nav-link text-light bg-info my-1 p-2">View Products</a></button>
                <button class="px-1"><a href="index.php?insert_category" class="nav-link text-light bg-info my-1 p-2">Insert Categories</a></button>
                <button class="px-1"><a href="" class="nav-link text-light bg-info my-1 p-2">View Categories</a></button>
                <button class="px-1"><a href="index.php?insert_brand" class="nav-link text-light bg-info my-1 p-2">Insert Brands</a></button>
                <button class="px-1"><a href="" class="nav-link text-light bg-info my-1 p-2">View Brands</a></button>
                <button class="px-1"><a href="" class="nav-link text-light bg-info my-1 p-2">All Orders</a></button>
                <button class="px-1"><a href="" class="nav-link text-light bg-info my-1 p-2">All Payments</a></button>
                <button class="px-1"><a href="" class="nav-link text-light bg-info my-1 p-2">List users </a></button>
                <button class="px-1"><a href="" class="nav-link text-light bg-info my-1 p-2">Logout</a></button>
            </div>
        </div>
    </div>
    <!-- 4thnchild -->
    <div class="container my-5">
        <?php 
            if(isset($_GET['insert_category'])){
                include'insert_categories.php';
            }
            if(isset($_GET['insert_brand'])){
                include'insert_brands.php';
            }
        ?>
    </div>
    <!-- bootstrap js link -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  
</body>
</html>