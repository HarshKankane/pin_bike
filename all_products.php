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
    <link rel="stylesheet" href="all_products.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>All Products</title>
</head>
<body>
<?php
include('includes/menu.php'); 
cart();
?>
  <h1 class="text-center mt-5 text-danger">ALL PRODUCTS </h1>
<div class="container mt-5 mb-5">
    <div class="d-flex justify-content-center row">

    <?php
    if(!isset($_GET['category'])){
        if(!isset($_GET['brand'])){
    $select_query = "SELECT * FROM products order by rand()";
    $result = mysqli_query($connect,$select_query);
    while($row_data = mysqli_fetch_assoc($result)){
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
                    <div class='ratings mr-2'><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i></div><span class='mx-2'>892</span>
                </div>
                <div class='mt-1 mb-1 spec-1'>
                <p class='card-text'>$product_description</p>
                <span>100% cotton</span><span class='dot'></span><span>Light weight</span><span class='dot'></span><span>Best finish<br></span></div>
                <div class='mt-1 mb-1 spec-1'><span>Unique design</span><span class='dot'></span><span>For men</span><span class='dot'></span><span>Casual<br></span></div>
                <p class='text-justify text-truncate para mb-0'>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which do not look even slightly believable.<br><br></p>
            </div>
            <div class='align-items-center align-content-center col-md-3 border-left mt-1'>
                <div class='d-flex flex-row align-items-center'>
                    <h4 class='mr-1'> $product_price</h4><span class='strike-text mx-2'>201900</span>
                </div>
                <h6 class='text-success'>Free shipping</h6>
                <div class='d-flex flex-column mt-4'>
                
                <a href='view_details.php?product_id=$product_id' class='btn btn-dark'>Details > </a>
                <a href='index.php?add_to_cart=$product_id;' class='btn btn-danger my-2'>Add to Cart</a>
        
                </div>
            </div>
        </div>          
        
    </div>";
      
    }
}
}
    ?>
        
    </div>
</div>
<?php
include('includes/footer.php');
?>
</body>
</html>