<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Đặt lại đường dẫn root -->
    <base href="http://localhost/PHP56/BaiTap/project/">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Điện Thoại</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
 	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/frontend/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/frontend/css/style.css">
    <link rel="stylesheet" href="assets/frontend/css/products">
    <link rel="stylesheet" href="assets/frontend/css/categories.css">

        <style type="text/css">
        .header-bottom .menu ul li{
            position: relative;
            margin: 0;
            padding: 0;
            
        }

        .header-bottom .menu ul li > .sub-menu{
            display: none;
            position: absolute;
            z-index: 1;
            background-color: #464646;
            
        }
        
        .header-bottom .menu ul li:hover .sub-menu{
            margin-left: 4px;
            display: block;
            padding: 0px;
            margin-top: 1px;
        }
        .header-bottom .menu ul li:hover .sub-menu a{
            font-size: 16px;
            text-transform: none;
            color: #ffffff;
            padding-left: 15px;

        }
        .header-bottom .menu ul li:hover .sub-menu li{
            width: 210px;
            border-bottom: 1px solid black;
            z-index: 1;
        }
        .header-bottom .menu .list{
            display: none;
        }
        .carousel-item a{
            border: none;
        }
        .gird-product{
            grid-template-rows: 350px 200px 200px 200px;
            grid-gap: 10px;
            overflow: hidden;
            margin-bottom: 50px;
        }
        .card:hover{
            box-shadow: 5px 5px 10px 0px gray;
        }
        .card{
            display: flex;
            width: 100%;
        }
        .card .card-img{
            object-fit: cover;
            flex-shrink: 0;
        } 
        .has-items{
            display: none;
        }
        .wrapper-mini-cart:hover .has-items{
            display: block;
            position: absolute;
            z-index: 2;
            border: 1px solid #e6e6e6;
            background-color: white;

        }
        .mini-cart a{
            text-decoration: none;
            color: black;
        }
        a{
            text-decoration: none;
        }
        .card:hover{
            margin-top: -5px;
        }  
        .header-middle .header-search button{
            right: unset;
            border: 1px solid;
            padding: 6px 10px;
            margin-top: 0px;
        }
        .header-middle .header-search input{
            border-radius: 0;
            
        }
         .item-img1{
                float: right;
            
            }
            .item-img1 img{
                height: 150px;
                width: 200px;
            }
            .item-left{
                align-self: center;
            }
            .item-right{
                padding-right: 100px;
            }
            .card{
                margin-top: 10px;
                margin-bottom: 15px;
            }


        @media (max-width: 576px) {
            footer p{
                font-size: 14px;
            }
            footer input{
                width: 90%;
            }
            .item-left{
                display: flex;
            }
            .item-left .item-img1 img {
                height: 150px;
                width: 100%;
            }
            .item-right {
                padding-right: 0px;
            }
            .wrapper-mini-cart{
                font-size: 15px;
            }
            .sale-img img {
                width: 30%;
            }
            .card{
                margin-bottom: 25px;
            }
        }

        @media (min-width: 576px) {
            footer p{
                font-size: 14px;
            }
            .item-right{
                padding-right: 0;
            }
            .sale-img img {
                width: 30%;
            }
            
        }
        @media (max-width: 768px) {
             .item-left{
                display: flex;
            }
            .item-left .item-img1 img {
                height: 150px;
                width: 100%;
            }
            .item-right {
                padding-right: 0px;
            }
            .wrapper-mini-cart{
                font-size: 15px;
            }
            .sale-img img {
                width: 30%;
            }
            .card{
                margin-bottom: 25px;
            }
        }


        @media (min-width: 768px) {
            .sale-img img {
                width: 30%;
            }
            
        }

        @media (min-width: 992px) { 
            .sale-img img {
                width: 30%;
            }
        }
        @media (max-width: 992px) { 
            .item-left {
                padding-left: 15px;
            }
            .item-right {
                padding-left: 50px;
            }
            .card{
                margin-bottom: 25px;
            }
        }
        
       
        @media (max-width: 1200px) {
            .card{
                margin-bottom: 25px;
            }
            .header-bottom .menu .list{
                display: block;
                color: white;
                font-size: 26px;
                position: relative;
            }
            .header-bottom .menu .list:hover{
                cursor: pointer;
            }
            .nav-menu{
                display: none;
                position: absolute;
                z-index: 3;
                background-color: #464646;
                padding: 0;

            }
            .menu ul li{
                display: unset;
            }
            .nav-menu ul li{
                display: block;
                position: relative;
                display: inline-block;
            }
            
            .header-bottom .menu ul li > .sub-menu{
                display: unset;

            }
            
            .header-bottom .menu ul li > .sub-menu{
                display: none;
                position: absolute;
                z-index: 1;
                background-color: #464646;
                left: 167px;
                top: 0;
            }
            .menu ul > li > a:hover{
                background-color: #64beca;
                
            }
            .menu ul > li .a1{
                background-color: #64beca;
            }
            
            .menu ul > li > a {
                display: block;
                padding: 20px 50px;
                text-transform: uppercase;
                font-size: 12px;
                line-height: 12px;
                color: #fff;
            }
            .item-right {
                padding-right: 25px;
            }
        }
        @media (max-width: 768px) {
            .item-right {
                padding-left: 19px;
                padding-right: 12px;
            }
        }

        @media (min-width: 1200px) {}


        @media (min-width: 1400px) {}

    </style>

</head>
<body>
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/613c98dc25797d7a89fe6db9/1ffaba7g7';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->
    
    <!-- Header -->
    	<?php include "views/HeaderView.php"; ?>
    <!-- End Header -->
    <!-- Main -->
    <main>
        
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 item-left">
                    <div class="item-img1 img-thumbnail">
                        <img src="assets/frontend/images/1630155535_132195020344748063_7.jpg" alt="">
                    </div>
                    <div class="item-img1 img-thumbnail">
                        <img src="assets/frontend/images/1630155596_132218025263764024_5.jpg" alt="">
                    </div>
                    <div class="item-img1 img-thumbnail">
                        <img src="assets/frontend/images/1630155619_132218026418235444_8.jpg" alt="">
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-9 col-lg-9 col-xl-9 item-right" >
                    <div class="img2" style="margin-top: 2px;">
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img style="width: 100%;height: 465px;" src="assets/frontend/images/1629293073_132195017985165066_1.jpg" class="d-block w-100" alt="...">
                              </div>
                              <div class="carousel-item">
                                <img style="width: 100%; height: 465px;" src="assets/frontend/images/1629293081_132195018346013007_2.jpg" class="d-block w-100" alt="...">
                              </div>
                              <div class="carousel-item">
                                <img style="width: 100%; height: 465px;" src="assets/frontend/images/1629293089_132195018673480610_3.jpg" class="d-block w-100" alt="...">
                              </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Next</span>
                            </button>
                          </div>
                    </div>
                </div>
            </div>
        </div>
        

        <div class="container">
            <!-- Hot Product -->
            <!-- load dong MVC o day -->
            <?php echo $this->view; ?>
            <!-- End Hot Product -->
            <!-- <div class="sale-img">
                <img src="assets/frontend/images/sale.jpg" alt="">
                <img src="assets/frontend/images/sale.jpg" alt="">
                <img src="assets/frontend/images/sale.jpg" alt="">
            </div> -->
            <!-- Remain Product -->
            <!-- <div class="remain-product">
                <h1 style="border-bottom: 1px solid gray;font-weight: 900;"><span style="color: red;">Dành Cho Bạn</span> </h1>
                <div class="card-hot-product">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card" style="width: 100%;">
                                <img src="assets/frontend/images/husky2.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 style="font-size: 16px;" class="card-title"><span style="font-size: 16px;" class="badge bg-info text-dark">Sibirian Husky Thuần Chủng</span></h5>
                                    <p class="card-text"><span class="badge bg-warning text-dark">Số lượng có hạn</span> <span class="badge bg-primary">mua ngay hôm nay</span></p>
                                    <p class="card-text">Giá Bán: <span class="badge bg-danger">6.000.000đ</span></p>
                                    <p class="price-box"> 
                                        <span>Đánh Giá: </span>
                                        <a href="index.php?controller=products&amp;action=rating&amp;id=20&amp;star=1">
                                            <img src="assets/frontend/images/star.jpg">
                                        </a> 
                                        <a href="index.php?controller=products&amp;action=rating&amp;id=20&amp;star=2">
                                            <img src="assets/frontend/images/star.jpg">
                                        </a> 
                                        <a href="index.php?controller=products&amp;action=rating&amp;id=20&amp;star=3">
                                            <img src="assets/frontend/images/star.jpg">
                                        </a> 
                                        <a href="index.php?controller=products&amp;action=rating&amp;id=20&amp;star=4">
                                            <img src="assets/frontend/images/star.jpg">
                                        </a> 
                                        <a href="index.php?controller=products&amp;action=rating&amp;id=20&amp;star=5">
                                            <img src="assets/frontend/images/star.jpg">
                                        </a>
                                     </p>
                                    <a href="#" style="font-size: 16px;" class="btn btn-primary">Mua Ngay</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card" style="width: 100%;">
                                <img src="assets/frontend/images/meo2.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 style="font-size: 16px;" class="card-title"><span style="font-size: 16px;" class="badge bg-info text-dark">Mèo Munchkin Chân Ngắn</span></h5>
                                  <p class="card-text"><span class="badge bg-warning text-dark">Số lượng có hạn</span> <span class="badge bg-primary">mua ngay hôm nay</span></p>
                                  <p class="card-text">Giá Bán: <span class="badge bg-danger">5.000.000đ</span></p>
                                  <p class="price-box"> 
                                    <span>Đánh Giá: </span>
                                    <a href="index.php?controller=products&amp;action=rating&amp;id=20&amp;star=1">
                                        <img src="assets/frontend/images/star.jpg">
                                    </a> 
                                    <a href="index.php?controller=products&amp;action=rating&amp;id=20&amp;star=2">
                                        <img src="assets/frontend/images/star.jpg">
                                    </a> 
                                    <a href="index.php?controller=products&amp;action=rating&amp;id=20&amp;star=3">
                                        <img src="assets/frontend/images/star.jpg">
                                    </a> 
                                    <a href="index.php?controller=products&amp;action=rating&amp;id=20&amp;star=4">
                                        <img src="assets/frontend/images/star.jpg">
                                    </a> 
                                    <a href="index.php?controller=products&amp;action=rating&amp;id=20&amp;star=5">
                                        <img src="assets/frontend/images/star.jpg">
                                    </a>
                                 </p>
                                  <a href="#" style="font-size: 16px;" style="font-size: 16px;" class="btn btn-primary">Mua Ngay</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card" style="width: 100%;">
                                <img src="assets/frontend/images/nhim2.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 style="font-size: 16px;" class="card-title"><span style="font-size: 16px;" class="badge bg-info text-dark">Hedgehog - Nhím Cảnh</span></h5>
                                    <p class="card-text"><span class="badge bg-warning text-dark">Số lượng có hạn</span> <span class="badge bg-primary">mua ngay hôm nay</span></p>
                                    <p class="card-text">Giá Bán: <span class="badge bg-danger">200.000đ</span></p>
                                    <p class="price-box"> 
                                        <span>Đánh Giá: </span>
                                        <a href="index.php?controller=products&amp;action=rating&amp;id=20&amp;star=1">
                                            <img src="assets/frontend/images/star.jpg">
                                        </a> 
                                        <a href="index.php?controller=products&amp;action=rating&amp;id=20&amp;star=2">
                                            <img src="assets/frontend/images/star.jpg">
                                        </a> 
                                        <a href="index.php?controller=products&amp;action=rating&amp;id=20&amp;star=3">
                                            <img src="assets/frontend/images/star.jpg">
                                        </a> 
                                        <a href="index.php?controller=products&amp;action=rating&amp;id=20&amp;star=4">
                                            <img src="assets/frontend/images/star.jpg">
                                        </a> 
                                        <a href="index.php?controller=products&amp;action=rating&amp;id=20&amp;star=5">
                                            <img src="assets/frontend/images/star.jpg">
                                        </a>
                                     </p>
                                    <a href="#" style="font-size: 16px;" style="font-size: 16px;" class="btn btn-primary">Mua Ngay</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card" style="width: 100%;">
                                <img src="assets/frontend/images/ca.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 style="font-size: 16px;" class="card-title"><span style="font-size: 16px;" class="badge bg-info text-dark">Osteogleossidae - Cá Rồng</span></h5>
                                    <p class="card-text"><span class="badge bg-warning text-dark">Số lượng có hạn</span> <span class="badge bg-primary">mua ngay hôm nay</span></p>
                                    <p class="card-text">Giá Bán: <span class="badge bg-danger">10.000.000đ</span></p>
                                    <p class="price-box"> 
                                        <span>Đánh Giá: </span>
                                        <a href="index.php?controller=products&amp;action=rating&amp;id=20&amp;star=1">
                                            <img src="assets/frontend/images/star.jpg">
                                        </a> 
                                        <a href="index.php?controller=products&amp;action=rating&amp;id=20&amp;star=2">
                                            <img src="assets/frontend/images/star.jpg">
                                        </a> 
                                        <a href="index.php?controller=products&amp;action=rating&amp;id=20&amp;star=3">
                                            <img src="assets/frontend/images/star.jpg">
                                        </a> 
                                        <a href="index.php?controller=products&amp;action=rating&amp;id=20&amp;star=4">
                                            <img src="assets/frontend/images/star.jpg">
                                        </a> 
                                        <a href="index.php?controller=products&amp;action=rating&amp;id=20&amp;star=5">
                                            <img src="assets/frontend/images/star.jpg">
                                        </a>
                                     </p>
                                    <a href="#" style="font-size: 16px;" style="font-size: 16px;" class="btn btn-primary">Mua Ngay</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- End Remain Product -->
           
            <!-- tin tức -->
            <!-- <div class="carousel-item">
                        <div class="container">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4"> 
                                        <div class="card">
                                            <img class="card-img-top" style="height: 300px;" src="../assets/frontend/images/meo1.jpg" alt="Card image cap">
                                            <div class="card-body">
                                            <h5 class="card-title">A LUBRICANT-FREE WATCH FOR MAN</h5>
                                            <p>3 Tháng Mười Hai, 2018</p>
                                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipiscing elit, sed do...</p>                                          
                                            <a href="News.html" class="btn-primary">Đọc thêm &gt;&gt;</a>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="col-xl-4 col-lg-4"> 
                                        <div class="card">
                                            <img class="card-img-top" style="height: 300px;" src="../assets/frontend/images/meo2.jpg" alt="Card image cap">
                                            <div class="card-body">
                                            <h5 class="card-title">DIGITAL JUMPING-SECONDS DISPLAY</h5>
                                            <p>3 Tháng Mười Hai, 2018</p>
                                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipiscing elit, sed do...</p>                                           
                                            <a href="News.html" class="btn-primary">Đọc thêm&gt;&gt;</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4">
                                        <div class="card">
                                            <img class="card-img-top" style="height: 300px;" src="../assets/frontend/images/meo3.jpg" alt="Card image cap">
                                            <div class="card-body">
                                            <h5 class="card-title">CREATORS OF THE MAN MADE</h5>
                                            <p>3 Tháng Mười Hai, 2018</p>
                                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipiscing elit, sed do...</p>                                                                  
                                            <a href="News.html" class="btn-primary">Đọc thêm&gt;&gt;</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item active">
                        <div class="container">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4"> 
                                        <div class="card">
                                            <img class="card-img-top" style="height: 300px;" src="../assets/frontend/images/ca.jpg" alt="Card image cap">
                                            <div class="card-body">
                                            <h5 class="card-title">A LUBRICANT-FREE WATCH FOR MAN</h5>
                                            <p>3 Tháng Mười Hai, 2018</p>
                                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipiscing elit, sed do...</p>
                                            <a href="News.html" class="btn-primary">Đọc thêm &gt;&gt;</a>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="col-xl-4 col-lg-4"> 
                                        <div class="card">
                                            <img class="card-img-top" style="height: 300px;" src="../assets/frontend/images/ca1.jpg" alt="Card image cap">
                                            <div class="card-body">
                                            <h5 class="card-title">DIGITAL JUMPING-SECONDS DISPLAY</h5>
                                            <p>3 Tháng Mười Hai, 2018</p>
                                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipiscing elit, sed do...</p>
                                            
                                            <a href="News.html" class="btn-primary">Đọc thêm&gt;&gt;</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4">
                                        <div class="card">
                                            <img class="card-img-top" style="height: 300px;" src="../assets/frontend/images/nhim.jpg" alt="Card image cap">
                                            <div class="card-body">
                                            <h5 class="card-title">CREATORS OF THE MAN MADE</h5>
                                            <p>3 Tháng Mười Hai, 2018</p>
                                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipiscing elit, sed do...</p>                      
                                            <a href="News.html" class="btn-primary">Đọc thêm&gt;&gt;</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                    </div>
                </div>
                    
            </div> -->
            
            <!-- tin tức -->
        </div>

    </main>
    <!-- End Main -->
    <footer>
        <div class="content-footer" style="padding-top: 30px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-4" style="font-size: 16px; color: orangered"> 
                        <h1>CONTACT</h1>
                        <p>319 C16 Lý Thường Kiệt, Phường 15, Quận 11, Tp.HCM</p>
                        <p>076 922 0162</p>
                        <p>demonhunterg@gmail.com</p>
                        <p>mon@mona.meida</p>
                        <p>demonhunterp</p>
                        
                    </div>
                    <div class="col-md-4" style="font-size: 16px; color: orangered">
                        <div class="center_footer">
                            <h3>FOLLOW US</h3>
                            <br>
                            <ul>
                                <li>
                                    <a style="text-decoration: none;color: orangered;font-size: 16px;" href="">Follow để không bỏ lỡ bất kì ưu đãi nào từ chúng tôi</a>
                                </li>
                                <li>
                                    <div class="icon" style="font-size: 40px;">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                        <a href="#"><i class="fab fa-pinterest"></i></a>
                                        <a href="#"><i class="fab fa-youtube">	</i></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4" style="font-size: 16px; color: orangered">
                        <div class="right_footer">
                            <h3>ĐĂNG KÍ</h3>
                            <br>
                            <li style="list-style: none;">
                                Đăng kí để nhận được nhiều thông tin mới nhất từ chúng tôi.
                            </li>
                            <li style="list-style: none;">
                                <input type="text" name="" placeholder="Email....">
                                <button type="button"><i class="fas fa-paper-plane"></i></button>
                            </li>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script type="text/javascript" src="assets/frontend/js/script.js"></script>
    <script>
        $(document).ready(function(){
            $(window).scroll(function(){
                if($(this).scrollTop()){
                    $('header').addClass('sticky');
                }else{
                    $('header').removeClass('sticky');
                }
            });
        });
    </script>
</body>
</html>