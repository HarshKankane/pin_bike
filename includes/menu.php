<style>
    .Nav-bar{position: sticky;
    top: 0;
    z-index:1;}
    .logo{
      width:55px;
      height:55px
    }
</style>

<section class="Nav-bar">
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <div class="container-fluid">
                <img src="pics/pyb3.png" alt="" class="logo">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav me-auto mb-3 mb-lg-0">
                    <li class="nav-item "><a class="nav-link active mx-2" href="index.php"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php">About us</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="all_products.php">Products</a></li>
                    <li class="nav-item">
                        <a class="nav-link" href="cart.php">
                            <i class="fa-sharp fa-solid fa-cart-shopping"></i>
                            <sup class="text-warning"><?php total_cart_item() ?></sup>
                        </a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#"> Total : 
                    <?php total_cart_price() ?> /-
                    </a></li>
                    <li class="nav-item"><a class="nav-link" href="users/user_register.php">Register</a></li>
                   
                    
                </ul>
                <form class="d-flex" role="search" action="search_product.php" method="get">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search_data">
                    <!-- <button class="btn btn btn-light" type="submit">Search</button> -->
                    <input type="submit" value = "search" class="btn btn-outline-light" name="search_data_product">
                </form>
            </div>
        </nav>
    </div>
</section>