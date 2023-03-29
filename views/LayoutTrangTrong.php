<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Đặt lại đường dẫn root -->
    <base href="http://localhost/PHP56/BaiTap/project/">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi Tiết Sản Phẩm</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
 	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/frontend/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/frontend/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/frontend/css/product.css">
    <link rel="stylesheet" type="text/css" href="assets/frontend/css/categories.css">

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
            background-color: #ff6666;   
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
            padding-left: 20px;
        }
        .header-bottom .menu ul li:hover .sub-menu li{
            width: 210px;
            border-bottom: 1px solid black;
            z-index: 1;
        }
        .header-bottom .menu .list{
            display: none;
        }
        .table-responsive table tbody td{
            vertical-align: middle;
            border-collapse: collapse;

        }
        .table-responsive table tbody td i{
            color: #464646;
        }
        .table-responsive table tfoot .button{
            border: 1px solid;
            padding: 10px 25px;
            background-color: #77ca64;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
        .total-cart{
            text-transform: uppercase;
            font-size: 20px;
            text-align: right;
        }
        .total-cart .button{
            border: 1px solid;
            text-decoration: none;
            padding: 10px 25px;
            border-radius: 5px;
            background-color: #464646;
            color: white;
            font-size: 16px;
            text-transform: none;  
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

        .card .card-body .card-title  a{
            word-break: break-all;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
            text-decoration: none;
            word-break: break-all;
            font-size: 14px;
            color: black;
            
        }
        .card .card-body .card-title  a:hover{
            color: #77ca64;
        }
        .card .price-box{
            color: #ee4d2d;
        }

        .card:hover{
            box-shadow: 5px 5px 10px 0px gray;
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
        .has-items .image img{
            width: 75px;
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
            .has-items .image img{
                width: 200px;
                height: 70px;
            }
            .has-items .info{
                margin-left: 1px;
            }
        }
        
       
        @media (max-width: 1200px) {
            .has-items .image img{
                width: 200px;
            }
            .has-items .info h3{
                font-size: 14px;
            }
            .has-items .info p{
                font-size: 12px;
            }
            .online_support p{
                font-size: 12px;

            }
            .card{
                margin-bottom: 35px;
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
                background-color: #ff6666;
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
    <header>
       <?php 
  			include "views/HeaderView.php";
 		?>
    </header>   

    <div class="content">
        <div class="container">
          <div class="row">
            <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3"> 
                 <!-- box search -->
                 <?php 
                    $conn = Connection::getInstance();
                    $query = $conn->query("select * from categories where parent_id = 0 order by id desc");
                    $categories = $query->fetchAll();
                ?>  
                <div class="panel panel-default" style="border: 1px solid black;">
                    <div class="panel-heading" style="background: #FFCC00;"> <h3>Tìm theo sản phẩm </h3></div>
                    <div class="panel-body">
                        <ul class="list-group" style="border:0px;">
                            <?php foreach($categories as $rows): ?>
                            <li class="list-group-item" style="border:0px;">
                                <input type="checkbox" id="gia1" onclick="location.href='index.php?controller=products&action=category&id=<?php echo $rows->id; ?>';"> <a href="index.php?controller=products&action=category&id=<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a>
                            </li>
                            <?php 
                                $querySub = $conn->query("select * from categories where parent_id = {$rows->id} order by id desc");
                                $categoriesSub = $querySub->fetchAll();
                             ?>
                              <?php foreach($categoriesSub as $rowsSub): ?>
                                  <li class="list-group-item" style="border:0px;">
                                    <input type="checkbox" id="gia1" onclick="location.href='index.php?controller=products&action=category&id=<?php echo $rowsSub->id; ?>';">
                                    <a href="index.php?controller=products&action=category&id=<?php echo $rowsSub->id; ?>"><?php echo $rowsSub->name; ?></a></li>
                              <?php endforeach; ?>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>


                 <!-- box search -->
                <div class="panel panel-default" style="margin-top:30px;border: 1px solid black;">
                    <div class="panel-heading" style="background: #FFCC00;"> <h3>Tìm theo mức giá </h3></div>
                    <div class="panel-body">
                        <ul class="list-group" style="border:0px;">
                            <li class="list-group-item" style="border:0px;">
                                <input type="checkbox" id="gia1" onclick="location.href='index.php?controller=search&action=price&fromPrice=0&toPrice=2000000';"> <label for="gia1">Dưới 2 triệu</label>
                            </li>
                            <li class="list-group-item" style="border:0px;">
                                <input type="checkbox" id="gia2" onclick="location.href='index.php?controller=search&action=price&fromPrice=2000000&toPrice=4000000';"> <label for="gia2">Từ 2 triệu đến 4 triệu</label>
                            </li>
                            <li class="list-group-item" style="border:0px;">
                                <input type="checkbox" id="gia3" onclick="location.href='index.php?controller=search&action=price&fromPrice=4000000&toPrice=6000000';"> <label for="gia2">Từ 4 triệu đến 6 triệu</label>
                            </li>
                            <li class="list-group-item" style="border:0px;">
                                <input type="checkbox" id="gia4" onclick="location.href='index.php?controller=search&action=price&fromPrice=6000000&toPrice=8000000';"> <label for="gia4">Từ 6 triệu đến 8 triệu</label>
                            </li>
                        </ul>
                    </div>
                </div>
                <style type="text/css">
                    .panel-body ul li label:hover{
                        cursor: pointer;
                        color: #ff0000;
                    }
                    .panel-body ul li input:hover{
                        cursor: pointer;
                    }
                    .panel-body ul li a{
                        text-decoration: none;
                        color: black;
                        font-weight: 700;
                    }
                    .panel-body ul li a:hover{
                        color: #ff0000;
                    }
                </style>
              <!-- end box search -->
              
              <!-- box search -->
              <div class="panel panel-default" style="margin-top:30px;border: 1px solid black;">
                    <div class="panel-heading" style="background: #FFCC00;"> <h3>Tìm theo mức giá </h3></div>
                    <div class="panel-body">
                  <ul class="list-group" style="border:0px;">
                    <li class="list-group-item" style="border:0px;">Giá từ &nbsp;&nbsp;
                      <input style="font-size: 16px;" type="number" min="0" value="0" id="fromPrice" class="form-control" />
                    </li>
                    <li class="list-group-item" style="border:0px;">Đến &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <input style="font-size: 16px;" type="number" min="0" value="0" id="toPrice" class="form-control"/>
                    </li>
                    <li class="list-group-item" style="border:0px; text-align:center">
                      <input style="font-size: 16px;" type="button" class="btn btn-warning" value="Tìm mức giá" onclick="location.href = 'index.php?controller=search&action=price&fromPrice=' + document.getElementById('fromPrice').value + '&toPrice=' + document.getElementById('toPrice').value;" />
                    </li>
                  </ul>
                    </div>
              </div>
              <!-- end box search -->
         
              <!-- end support -->
                <div style="border: 1px solid black;" class="online_support block">
                    <div class="new_title">
                        <h3>Hỗ trợ trực tuyến</h3>
                    </div>
                    <div class="block-content">
                        <div class="sp_1">
                            <i class="fas fa-phone-volume"></i>
                            <p>Tư vấn bán hàng 1</p>
                            <p>Mrs. Dung: (04) 3786 8904</p>
                        </div>
                        <div class="sp_1">
                            <i class="fas fa-phone-volume"></i>
                            <p>Tư vấn bán hàng 2</p>
                            <p>Mr. Tuấn: (04) 3786 8904</p>
                        </div>
                        <div class="sp_1">
                            <i class="fas fa-phone-volume"></i>
                            <p>Email liên hệ</p>
                            <p>support@mail.com</p>
                        </div>
                    </div>
                </div>
              <!-- end support online --> 


              

            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-9 col-xl-9"> 
            	<?php echo $this->view; ?>
            </div>
          </div>
          
        </div>
      </div>




    <footer>
        <div class="content-footer" style="padding-top: 30px;">
            <div class="container">
                <div class="row">
                    <div class="col-4 col-sm-4 col-md-4" style="font-size: 16px; color: orangered"> 
                        <h1>CONTACT</h1>
                        <p>319 C16 Lý Thường Kiệt, Phường 15, Quận 11, Tp.HCM</p>
                        <p>076 922 0162</p>
                        <p>demonhunterg@gmail.com</p>
                        <p>mon@mona.meida</p>
                        <p>demonhunterp</p>
                        
                    </div>
                    <div class="col-4 col-sm-4 col-md-4" style="font-size: 16px; color: orangered">
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
                    <div class="col-4 col-sm-4 col-md-4" style="font-size: 16px; color: orangered">
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