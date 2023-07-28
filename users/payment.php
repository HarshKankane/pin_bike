<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />


<style>
    body {
    font: 300 18px/1.5 'Muli', sans-serif;
    color: rgb(0, 0, 0);
    background: linear-gradient(138deg, #EC407A 60%, #7C4DFF 60%);
    overflow-x: hidden;
    padding-bottom: 0 !important;
    height: 100%;
    position: relative
}

.container {
    margin-top: 50px;
    margin-bottom: 50px
}

.cc-number.identified {
    background-repeat: no-repeat;
    background-position-y: 11px;
    background-position-x: 99%
}

.right-card {
    border-top: 10px blue solid;
    padding-top: 1rem;
    width: fit-content
}

.btn-group-lg>.btn,
.btn-lg {
    width: -webkit-fill-available
}

li.borderless {
    border-top: 0 none !important;
    font-size: 15px;
    padding: 0;
    padding-top: 5%
}

.fa-check {
    color: rgb(0, 195, 255)
}

.card,
.card-header,
.card-footer {
    background-color: white !important
}

.card-header {
    border-bottom: none
}

.cursor-pointer {
    cursor: pointer
}

.second-card,
.first-card {
    border-top: 1px solid #ccc !important;
    padding-top: 2rem
}

.card-image {
    width: 45px;
    margin-top: -9px
}

@media (max-width: 1000px) {
    .card {
        padding: 0 !important
    }
}
</style>
</head>
<body>
    <div class="container my-container ">
    <div class="card bg-white px-5">
        <div class="card-header">
            <div class="jumbotron mb-1 bg-white ">
                <h1 class="display-5"><b>Enter Payment details</b></h1>
            </div>
        </div>
        <div class="card-body">
            <div class="row ">
                <!-- Left Half -->
                <div class="col-md-10 ">

                    <div class="card mt-2 border-0 second-card">
                        <!-- Form -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-auto col-sm-auto ">
                                    <div class="custom-control custom-radio custom-control-inline "> <input id="customRadioInline11" type="radio" name="customRadioInline11" class="custom-control-input" checked="true"> <label for="customRadioInline11" class="custom-control-label label-radio"><img src="https://img.icons8.com/color/48/000000/visa.png" class="card-image"> </label> </div>
                                </div>
                                <div class="col-md-auto col-sm">
                                    <div class="custom-control custom-radio custom-control-inline "> <input id="customRadioInline22" type="radio" name="customRadioInline11" class="custom-control-input"> <label for="customRadioInline22" class="custom-control-label label-radio"><img src="https://img.icons8.com/officel/48/000000/discover.png" class="card-image"></label> </div>
                                </div>
                            </div> <!-- Payment Form -->
                            <form method="get" action="">
                                <div class="form-group "> 
                                    <label for="cc-number" class="control-label mt-3">Card number</label> 
                                        <input id="cc-number" name="cc-number" type="tel" placeholder="xxxx-xxxx-xxxx-xxxx" class="form-control form-control-lg cc-number identified visa my-2 mb-3" value="" data-val="true" data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number" autocomplete="cc-number"> 
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6 col-sm-6"> <label for="cc-exp" class="control-label ">Expiration date</label> <input id="cc-exp" type="tel" class=" form-control form-control-lg cc-exp my-2 mb-3" autocomplete="cc-exp" placeholder="MM / YY" required> </div>
                                    <div class="form-group col-md-6 col-sm-6"> <label for="cc-cvc" class="control-label ">CVV<span><i class="fa fa-info-circle px-2" aria-hidden="true"></i> </span> </label> <input id="cc-cvc" type="tel" class="form-control-lg form-control cc-cvc my-2 mb-3" autocomplete="off" placeholder="&bull;&bull;&bull;" required> </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-8 col-sm-6"> <label for="inputState">Country</label> <select id="inputState" class="form-control form-control-lg my-2 mb-3">
                                            <option selected>United State</option>
                                            <option>India</option>
                                            <option>UK</option>
                                            <option>China</option>
                                        </select> </div>
                                    <div class="form-group col-md-4 col-sm-6"> <label for="inputZip">Zip</label> <input type="text" class="form-control form-control-lg my-2 mb-3" id="inputZip" placeholder="111111"> </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                
            </div>
            <button type="button" class="btn btn-warning mx-3 mb-5">Confirm Payment</button>
        </div>
    </div>
    
</div>

<?php
include('../includes/footer.php');
?>
</div>
</body>
</html>