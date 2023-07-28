<?php
include('../includes/connect.php');
    if(isset($_POST['insert_brand'])){
        $brand_title=$_POST['brand_title'];
        $select_query = "SELECT * FROM brands WHERE brand_title = '$brand_title'";
        $select_result = mysqli_query($connect, $select_query);
        if ($select_result) {
            // query executed successfully
            $number = mysqli_num_rows($select_result);
            if ($number > 0) {
                echo "<script>alert('This Brand is already present in database')</script>";
            }
            else{
                $insert_query="insert into brands (brand_title) values ('$brand_title')";
                $result = mysqli_query($connect,$insert_query);
                if($result){
                    echo "<script>alert('This Brand is Inserted Successfully')</script>";
                }
                else{
                    echo "Error: " . mysqli_error($connect);
                } 
            }
        } 
        
    }
   
?>




<h2 class="text-center">Insert Categories</h2>





<form action="" method="post" class="mb-2">
    <div class="input-group w-90 mb-2">
        <span class="input-group-text bg-info" id="basic-addon1">
            <i class="fa-solid fa-receipt"></i>
        </span>
        <input type="text" class="form-control" name="brand_title" placeholder="Insert Brands" aria-label="Brands" aria-describedby="basic-addon1">
    </div>

    <div class="input-group w-10 mb-2 m-auto">
        <!-- <input type="submit" class="form-control bf-info" name="insert_cat" value ="Insert categories"> -->
        <input type="submit" class="bg-info border-0 p-2 my-3" name="insert_brand" value ="Insert Brands">
       <!-- <button class="bg-info p-3 my-3 border-0">Insert Brands</button> -->
    </div>

    
</form>