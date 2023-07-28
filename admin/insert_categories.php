<?php
include('../includes/connect.php');
    if(isset($_POST['insert_cat'])){
        $cat_title=$_POST['cat_title'];
        $select_query = "SELECT * FROM categories WHERE category_title = '$cat_title'";
        $select_result = mysqli_query($connect, $select_query);
        if ($select_result) {
            // query executed successfully
            $number = mysqli_num_rows($select_result);
            if ($number > 0) {
                echo "<script>alert('Category already present in database')</script>";
            }
            else{
                $insert_query="insert into categories (category_title) values ('$cat_title')";
                $result = mysqli_query($connect,$insert_query);
                if($result){
                    echo "<script>alert('Category Inserted Successfully')</script>";
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
        <input type="text" class="form-control" name="cat_title" placeholder="Insert categories" aria-label="Categories" aria-describedby="basic-addon1">
    </div>

    <div class="input-group w-10 mb-2 m-auto">
        <input type="submit" class="bg-info border-0 p-2 my-3" name="insert_cat" value ="Insert categories">
        <!-- <button class="bg-info p-3 my-3 border-0">Insert Categories</button> -->
    </div>

    
</form>