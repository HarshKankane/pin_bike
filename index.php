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
    <title>Bike BaAzar</title>
</head>
<body>

<!-- Section Navbar starts -->
<?php
include('includes/menu.php');
cart();
?>
<section class="secTwo" >
            <h1 class="my-3">Welcome to our Bike store</h1>
        
            <!-- <input type="text" placeholder="Search for any bike.."> -->
            <div class="box" >
                <div class="col15">
                    <div class="pics">
                        <figure id="fig1" class="gall" >
                            <p> Hero Xtreme</p>
                            <figcaption>
                                Sometimes we <br> the clock<br> to face<br> Search back <br> to find out 
                                <br>
                                <div class="author">― David Harris</div>
                            </figcaption>
                        </figure>                   
                    </div>
                    <div class="pics">
                        <figure id="fig2" class="gall">
                            <p> Suzuki Hayabussa </p>
                            <figcaption>
                                Sometimes we <br> the clock<br> to face<br> Search back <br> to find out 
                                <br>
                                <div class="author">― David Harris</div>
                            </figcaption>
                        </figure>                   
                    </div>
                </div>
                <div class="col24">
                    <div class="pics">
                        <figure id="fig3" class="gall">
                            <p> Sizuki Gixxer SF</p>
                            <figcaption>
                            Sometimes we <br> the clock<br> to face<br> Search back <br> to find out 
                                <br>
                                <div class="author">― David Harris</div>
                            </figcaption>
                        </figure>                   
                    </div>
                    <div class="pics">
                        <figure id="fig4" class="gall">
                            <p>HONDA CL175</p>
                            <figcaption>
                            Sometimes we <br> the clock<br> to face<br> Search back <br> to find out 
                                <br>
                                <div class="author">― David Harris</div>
                            </figcaption>
                        </figure>                   
                    </div>
                </div>
                <div class="col3">
                    <div class="pics" >
                        <figure style="width: 220px; height: 420px; border-radius: 12px;" id="fig5" class="gall">
                            <p> 38 Kawasaki 110cc .</p>
                            <figcaption>
                            Sometimes we <br> the clock<br> to face<br> Search back <br> to find out 
                                <br>
                                <div class="author">― David Harris</div>
                            </figcaption>
                        </figure>                   
                    </div>
                </div>
                <div class="col24">
                    <div class="pics">
                        <figure id="fig6" class="gall">
                            <p>Honda. BGauss.</p>
                            <figcaption>
                            Sometimes we <br> the clock<br> to face<br> Search back <br> to find out 
                                <br>
                                <div class="author">― David Harris</div>
                            </figcaption>
                        </figure>                   
                    </div>
                    <div class="pics">
                        <figure id="fig7" class="gall">
                            <p> Duke 390</p>
                            <figcaption>
                            Sometimes we <br> the clock<br> to face<br> Search back <br> to find out 
                                <br>
                                <div class="author">― David Harris</div>
                            </figcaption>
                        </figure>                   
                    </div>
                </div>
                <div class="col15">
                    <div class="pics">
                        <figure  id="fig8" class="gall">
                            <p> BMW HP5.</p>
                            <figcaption>
                            Sometimes we <br> the clock<br> to face<br> Search back <br> to find out 
                                <br>
                                <div class="author">― David Harris</div>
                            </figcaption>
                        </figure>                   
                    </div>
                    <div class="pics">
                        <figure id="fig9" class="gall">
                            <p> KTM BIKE   </p>
                            <figcaption>
                            Sometimes we <br> the clock<br> to face<br> Search back <br> to find out 
                                <br>
                                <div class="author">― David Harris</div>
                            </figcaption>
                        </figure>                   
                    </div>
                </div>
            </div>
        </section>
<!-- section banner -->
<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2500">
  <div class="carousel-inner">
    <div class="carousel-item">
      <img src="pics/dash1.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
        <img src="pics/dash2.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item ">
         <img src="pics/dash3.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item active">
        <img src="pics/dash4.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="pics/dash5.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item ">
      <img src="pics/dash6.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item ">
      <img src="pics/dash7.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item ">
      <img src="pics/dash8.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- section banner ends -->

<!-- navbar  ends -->

     
        <section id="cartSection ">
            <section id="welcomeStore">
                <span id="welcometext">Welcome to our store</span> <br>
                <h1>Pin Your Bike</h1>
                <div id="productbox">
                    <a href="">Featured Products</a>
                    <div class="dash"></div>
                    <a href="">Latest products</a>
                    <div class="dash"></div>
                    <a href="">Special Products</a>
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
                        getproducts();
                        get_products_byCategory();
                        get_products_bybrand();
                        // $ip = getIPAddress();  
// echo 'User Real IP Address - '.$ip;  
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

 
    <section id="slashedPrices">
        <h1>BRANDS AT SLASHED PRICES</h1>

        <div id="storecontainer">
            <div class="line" >
                <div class="bikeimg">
                    <img src="pics/hero_splender_plus.jpg" alt="">
                    <h3>Hero Splendor Plus</h3>
                    <h4><del>$89.00</del> $86.00 </h4>
                </div>
                <div class="bikeimg">
                    <img src="pics/bajaj_pulsur_150.png" alt="">
                    <h3>Bajaj Pulsor 150</h3>
                    <h4><del>$89.00</del> $86.00 </h4>
                </div>
                <div class="bikeimg">
                    <img src="pics/TVS_radeon.jpg" alt="">
                    <h3>TVS Radeon</h3>
                    <h4><del>$89.00</del> $86.00 </h4>
                </div>
                <div class="bikeimg">
                    <img src="pics/Harley_Davidson_Road_King.jpg" alt="">
                    <h3>Harley-Davidson </h3>
                    <h4><del>29.00 lakh</del> 26.99 lakh </h4>
                </div>
            </div>

            <div class="line" id="line2">
                <div class="bikeimg">
                    <img src="pics/Royal_Enfield_Himalayan_Glacier_Blue.jpg" alt="">
                    <h3>RE Himalayan </h3>
                    <h4><del>$89.00</del> $86.00 </h4>
                </div>
                <div class="bikeimg">
                    <img src="pics/Kawasaki_Ninja_650.jpg" alt="">
                    <h3>Kawasaki Ninja 650</h3>
                    <h4><del>$89.00</del> $86.00 </h4>
                </div>
                <div class="bikeimg">
                    <img src="pics/Royal_Enfield_hunter_350.jpg" alt="">
                    <h3>Royal Enfield Hunter 350</h3>
                    <h4><del>$89.00</del> $86.00 </h4>
                </div>
               
                <div class="bikeimg">
                    <img src="pics/tvs_apache_rtr_160.jpg" alt="">
                    <h3>TVS Apache rtr 160</h3>
                    <h4><del>$89.00</del> $86.00 </h4>
                </div>
            </div>
        </div>
        <button onclick="relocate()">View All</button>
    </section> 
<!-- Fresh Arrivals -->
<section style="background-color: #eee;" class="shadow-sm p-3 mb-5 bg-white rounded mx-5 border ">
    <h1 class="mx-4">Fresh Arrivals</h1>
        <div class="container py-3 px-0 ">   
            <div class="row">
                <?php someproducts(); ?>
            </div>        
        </div>
        <!-- ************************ -->

        <button type="button" class="btn btn-outline-primary m-4" style="width:200px" onclick="relocate()">View more <i class="fa fa-arrow-right" aria-hidden="true" ></i></button>
        <!-- ************************************************************* -->
        </div>
    </div>

</section>

<section style="background-color: #eee;" class="shadow-sm p-3 mb-5 bg-white rounded mx-5 border ">
    <h1 class="mx-4">Popular in India</h1>
    <div class="container py-3 px-0 ">
   
        <div class="row">
            <?php someproducts(); ?>
        </div>        
    </div> 

    <button type="button" class="btn btn-outline-primary m-4" style="width:200px"  onclick="relocate()">View more <i class="fa fa-arrow-right" aria-hidden="true"></i></button>

    </div>
  </div>

</section>


<section style="background-color: #eee;" class="shadow-sm p-3 mb-5 bg-white rounded mx-5 border ">
    <h1 class="mx-4">Upcoming Bikes</h1>
        <div class="container py-3 px-0 ">   
            <div class="row">
                <?php someproducts(); ?>
            </div>        
        </div>
        <button type="button" class="btn btn-outline-primary m-4" style="width:200px"  onclick="relocate()">View more <i class="fa fa-arrow-right" aria-hidden="true" ></i></button>
        </div>
    </div>
</section>
<section >
        <div id="offerszone">

            <div class="offerimage" id="img1"></div>
            <div class="offerimage" id="img2"></div>
            <div class="offerimage" id="img3"></div>
        </div>
</section>
    
<section id="servicesection">
            <div id="serviceBox">
                <div class="serviceimage">
                    <div class="icons">  <i class="fa fa-truck" aria-hidden="true"></i></div>

                    <div class="icontxt">  
                        <span> 
                            <h1>Free Shipping</h1>Lorem ipsum dummy text  
                        </span>
                    </div>                  
                </div>

                <div class="serviceimage">
                    <div class="icons">  <i class="fa fa-paper-plane" aria-hidden="true"></i></div>

                    <div class="icontxt">  
                        <span> 
                            <h1>Support 24/7</h1>Lorem ipsum dummy text  
                        </span>
                    </div>                  
                </div>
                <div class="serviceimage">
                    <div class="icons">  <i class="fa fa-usd" aria-hidden="true"></i></div>

                    <div class="icontxt">  
                        <span> 
                            <h1>Cash Back</h1>Lorem ipsum dummy text  
                        </span>
                    </div>                  
                </div>
                <div class="serviceimage">
                    <div class="icons">  <i class="fa fa-fighter-jet" aria-hidden="true"></i></div>

                    <div class="icontxt">  
                        <span> 
                            <h1>Fast Delivery</h1>Lorem ipsum dummy text  
                        </span>
                    </div>                  
                </div>
            </div>                        
            
</section>

<section id="subscribeSection"  class="border py-4 mx-3"> 
        <div id="subscribe">
            <div id="leftdiv" class="sebs">
                <img src="pics/yamaha1.jpg" alt="">
            </div>
            <div id="rightdiv" class="sebs">
                <h1>SUBSCRIBE & GET DISCOUNT!</h1>
                <span>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Soluta aut sit temporibus, dicta suscipit sed cumque animi nesciunt id, repellendus quidem? Corporis doloribus dicta iste expedita delectus sint rerum perspiciatis. </span> <br>
                <input type="text" placeholder="Enter you E-mail"> 
                <button>Subscribe</button>  <br>
                <span>Get the latest and best bikes right Here ! </span>
            </div>
        </div>
</section>


 <!-- ======= Call To Action Section ======= -->
<section id="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-lg-9 text-center text-lg-start">
            <h3 class="cta-title">Call To Action</h3>
            <p class="cta-text"> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#">Call To Action</a>
          </div>
        </div>

      </div>
      
</section><!-- End Call To Action Section -->

    
    <!-- ======= Brands Section ======= -->
<section id="clients">
      <div class="container" data-aos="fade-up">

        <div class="row border border">

          <div class="col-md-2">
            <img src="Brands_img/re_brand.jpg" alt="">
          </div>

          <div class="col-md-2 border">
            <img src="Brands_img/ktm_brand.png"alt="">
          </div>

          <div class="col-md-2 border">
            <img src="Brands_img/yamaha_brand.png"alt="">
          </div>

          <div class="col-md-2 border">
            <img src="Brands_img/Kawasaki_brand.jpg" alt="">
          </div>

          <div class="col-md-2 border">
            <img src="Brands_img/tvs_brand.png" alt="">
          </div>

          <div class="col-md-2 border">
            <img src="Brands_img/keeway_brand.png" alt="">
          </div>

        </div>
        <!-- ************** row 2 ************ -->
        <div class="row border">

          <div class="col-md-2 border">
            <img src="Brands_img/bajaj_brand.jpg" alt="">
          </div>

          <div class="col-md-2 border">
            <img src="Brands_img/Hero_brand.png"alt="">
          </div>

          <div class="col-md-2 border">
            <img src="Brands_img/suzuki_brand.png"alt="">
          </div>

          <div class="col-md-2 border">
            <img src="Brands_img/benelli_brand.png" alt="">
          </div>

          <div class="col-md-2 border">
            <img src="Brands_img/Honda_brand.png" alt="">
          </div>

          <div class="col-md-2 border">
            <img src="Brands_img/bmw_brand.png" alt="">
          </div>

        </div>
      </div>
</section><!-- End Brands Section -->
    
    <div style="height:20vh"></div>

    <script>
        function relocate(){
            location.href="all_products.php";
        }
    </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    
<?php
include('includes/footer.php');
?>
</body>
</html>