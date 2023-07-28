<?php
    include('../includes/connect.php');
     if(isset($_POST['insert_product'])){
        $product_title = $_POST['product_title'];        
        $product_description = $_POST['product_description'];        
        $product_keywords = $_POST['product_Keywords'];        
        $product_category = $_POST['product_categories'];        
        $product_brands = $_POST['product_brands']; 
        $product_price = $_POST['product_price'];
        $product_status = 'true';
        
        $product_image1_name = $_FILES['product_image1']['name'];        
        $product_image2_name = $_FILES['product_image2']['name']; 
        $product_image3_name = $_FILES['product_image3']['name'];      
        // checking empty condition
        if($product_title=='' or $product_description=='' or $product_keywords=='' or $product_category=='' or $product_brands=='' or $product_price=='' or $product_image1_name=='' or $product_image2_name=='' or $product_image3_name=='')
            {
                echo "<script>alert('Please fill all the available fields')</script>";
                exit();              
        }
        else{
            // insert query
            $insert_products = "INSERT INTO products (product_title, product_description, product_keywords, category_id,brand_id, prodect_image1, prodect_image2, prodect_image3, product_price,dates,stat) 
            VALUES ('$product_title', '$product_description', '$product_keywords', '$product_category', '$product_brands', '$product_image1_name', '$product_image2_name', '$product_image3_name', '$product_price', NOW(), '$product_status')";
            
            $result_query = mysqli_query($connect, $insert_products);
            
            if($result_query) {
                echo "<script>alert('Products inserted successfully')</script>";
            }
            else{

            }
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin : Insert Products</title>
    <!-- <link rel="stylesheet" href="index.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   
</head>
<body class="bg-light">
    <div class="container mt-3">
    <a class="nav-link" href="index.php"><i class="fa fa-home" aria-hidden="true"></i></a>
        <h1 class="text-center">Insert Products </h1>
        <!-- form  -->
        <form action="" method="post" enctype="multipart/form-data">           
             <!-- Product title -->
            <div class="form-group mb-4 m-auto w-50">
                <label for="product_title">Product Title</label>
                <input type="text" class="form-control mt-1" id="product_title" placeholder="Enter product Title" name="product_title" autocomplete="off" required>
            </div>
            <!-- Product description -->
            <div class="form-group mb-4 m-auto w-50">
                <label for="product_description">Product Description</label>
                <input type="text" class="form-control mt-1" id="product_description" placeholder="Enter product description" name="product_description" autocomplete="off" required>
            </div>
            <!-- Keywords -->
            <div class="form-group mb-4 m-auto w-50">
                <label for="product_Keywords">Product Keywords</label>
                <input type="text" class="form-control mt-1" id="product_Keywords" placeholder="Enter product Keywords" name="product_Keywords" autocomplete="off" required>
            </div>
            <!-- Catogeries -->
            <div class="form-group mb-4 m-auto w-50">
                <select name="product_categories" id="" class="form-select">
                    <option value="">Select Category </option>
                    <?php
                                    $select_cats="select * from categories order by category_title";
                                    $result_catss=mysqli_query($connect,$select_cats);
                                    // $row_data = mysqli_fetch_assoc($result_catss);
                                    while($row_data = mysqli_fetch_assoc($result_catss)){
                                        $category_title = $row_data['category_title'];
                                        $category_id = $row_data['category_id'];
                                        // echo $row_data['brand_title'];
                                        echo "<option value='$category_id'>$category_title</option>";
                                    }
                                ?>
                </select>
            </div>
             <!-- Brands -->
             <div class="form-group mb-4 m-auto w-50">
                <select name="product_brands" id="" class="form-select">
                    <option value="">Select Brand </option>
                    <?php
                        $select_brands="select * from brands order by brand_title";
                        $result_brands=mysqli_query($connect,$select_brands);
                        while($row_data = mysqli_fetch_assoc($result_brands)){
                              $brand_title = $row_data['brand_title'];
                              $brand_id = $row_data['brand_id'];
                              echo "<option value='$category_id'>$brand_title</option>";
                            }
                                    
                    ?>
                </select>
            </div>
            <!-- Image 1 -->
            <div class="form-group mb-4 m-auto w-50">
                <label for="product_image1">Product Image 1</label>
                <input type="file" class="form-control mt-1" id="product_image1" name="product_image1"  required>
            </div>
             <!-- Image 2 -->
             <div class="form-group mb-4 m-auto w-50">
                <label for="product_image2">Product Image 2</label>
                <input type="file" class="form-control mt-1" id="product_image2" name="product_image2"  required>
            </div>
             <!-- Image 3 -->
             <div class="form-group mb-4 m-auto w-50">
                <label for="product_image3">Product Image 3</label>
                <input type="file" class="form-control mt-1" id="product_image3" name="product_image3"  required>
            </div>
            <!-- Product Price -->
            <div class="form-group mb-4 m-auto w-50">
                <label for="product_price">Product Price</label>
                <input type="text" class="form-control mt-1" id="product_price" placeholder="Enter product price" name="product_price" autocomplete="off" required>
            </div>
            <!-- Submit button -->
            <div class="form-group mb-4 m-auto w-50">
                <input type="submit" name="insert_product" class="btn btn-info mb-3 px-3" value="Insert Product">
            </div>
        </form>
    </div>
</body>
</html>