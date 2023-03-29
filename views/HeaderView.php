<!-- header -->
    <header>
        <!-- Header-Top -->
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                        <span>
                            <i class="fas fa-phone-alt"></i>
                            09.8888.8888
                        </span>
                        <span style="margin-left: 10px;">
                            <a href="">
                                <i class="far fa-envelope"></i>
                                suport@gmail.com
                            </a>
                        </span>
                    </div>
                    <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6" style="text-align: right;">
                        <?php if(isset($_SESSION['customer_email'])): ?>
                        <a href="#">Xin Chào <?php echo $_SESSION['customer_email']; ?></a>
                        <span>
                            <a href="index.php?controller=account&action=logout">
                                <i class="fas fa-user"></i>
                                Đăng Xuất
                            </a>
                        </span>
                        <?php else: ?>
                        <span>
                            <a href="index.php?controller=account&action=login">
                                <i class="fas fa-user"></i>
                                Đăng Nhập
                            </a>
                        </span>
                        <span style="margin-left: 10px;">
                            <a href="index.php?controller=account&action=login">
                                <i class="fas fa-sign-out-alt"></i>
                                Đăng Kí
                            </a>
                        </span>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header-Top -->
        <!-- ################################################################ -->
        <!-- Header-Middle -->
        <div class="header-middle" style="padding: 5px 0 5px 0;">
           <div class="container">
               <div class="row" style="margin: 5px 0;">
                    <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 logo" style="align-self: center;">
                        <div class="logo-img">
                            <img style="width: 80px;" src="assets/frontend/images/1630155619_132218026418235444_8.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 header-search" style="align-self: center;">
                        <!-- <form method="post" id="frm" action=""> -->
                          <div style="position:relative;">
                            <input type="text" value="" placeholder="Nhập từ khóa tìm kiếm..." id="key" class="input-control" autocomplete="off">
                            <button type="button"> <i class="fa fa-search" id="btnSearch"></i> </button>
                            <div class="smart-search">
                              <ul>
                                <li><img src="assets/upload/products/1629293073_132195017985165066_1.jpg"> <a href="#">18 - 16 - MacBook Pro 16 Touch Bar 2.6GHz Core i7-</a></li>
                                <li><img src="assets/upload/products/1629293073_132195017985165066_1.jpg"> <a href="#">18 - 16 - MacBook Pro 16 Touch Bar 2.6GHz Core i7-</a></li>
                                <li><img src="assets/upload/products/1629293073_132195017985165066_1.jpg"> <a href="#">18 - 16 - MacBook Pro 16 Touch Bar 2.6GHz Core i7-</a></li>
                              </ul>
                            </div>
                          </div>
                        <!-- </form> -->
                    </div>
                    <!--  -->
                    <style type="text/css">
                      .smart-search{position: absolute; width: 80%; background: white; height: 350px;overflow: scroll; z-index: 1; display: none;}
                      .smart-search ul{padding: 0px; margin: 0px; list-style: none;}
                      .smart-search ul li{border-bottom: 1px solid #dddddd;}
                      .smart-search img{width: 50px; height: 50px; margin: 10px; margin-right: 5px;}
                      .smart-search ul li a{
                        color: black;font-size: 16px;
                        text-decoration: none;
                      }
                      .smart-search ul li a:hover{
                        color: #ff1a1a;
                      }
                    </style>
                    <script type="text/javascript">
                        //tinh nang nay phai dung ket hop voi jquery -> phai load thu vien jquery
                        //neu bai project tung ban chua co thi phai load jquery, kiem tra jquery co hoat dong hay khong bang cach them alert("ok") vao ben trong tag: $(document).ready(function(){ alert("ok"); });
                        $(document).ready(function(){ 
                           //bat su kien click cua id=btnSearch
                           $("#btnSearch").click(function(){
                              var key = $("#key").val();
                              //di chuyen den url tim kiem
                              location.href = "index.php?controller=search&action=name&key="+key;
                           });
                           //-----------------
                           $(".input-control").keyup(function(){
                              var strKey = $("#key").val();
                              if(strKey.trim() == "")
                                  $(".smart-search").attr("style","display:none");
                              else{
                                  $(".smart-search").attr("style","display:block");
                                  //---
                                  //su dung ajax de lay du lieu
                                  $.get("index.php?controller=search&action=ajaxSearch&key="+strKey,function(data){
                                      //clear cac the li ben trong the ul
                                      $(".smart-search ul").empty();
                                      //them su lieu vua lay duoc bang ajax vao the ul
                                      $(".smart-search ul").append(data);
                                  });
                                  //---
                              }
                           });
                           //-----------------
                            $('.input-control').keypress(function(e){
                                if(e.keyCode==13)
                                    $('#btnSearch').click();
                            });
                        });
                    </script>
                    <!--  -->
                    <?php 
                        $ProductNumberInCart = 0;
                        if(isset($_SESSION['cart']))
                          foreach($_SESSION['cart'] as $product)
                            $ProductNumberInCart++;
                    ?>
                    <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 mini-cart" style="align-self: center;font-size: 16px;position: relative;">
                        <div class="wrapper-mini-cart"> <span class="icon"><i class="fa fa-shopping-cart" style="color: #00b300;"></i></span> <a style="text-decoration: none; color: black;" href="cart"> <span class="mini-cart-count"><?php echo $ProductNumberInCart; ?></span> Sản phẩm <i class="fa fa-caret-down"></i></a>
                        <div class="content-mini-cart">
                          <div class="has-items">
                            <ul class="list-unstyled">
                              <?php if(isset($_SESSION['cart'])): ?>
                                <?php foreach($_SESSION['cart'] as $product): ?>
                                <li class="clearfix" id="item-1853038" style="display: flex; margin: 5px;border-bottom: 1px solid #e6e6e6;">
                                <div class="image" style="align-self: center;"> <a href="index.php?controller=products&action=detail&id=<?php echo $product["id"]; ?>"> <img alt="<?php echo $product["name"]; ?>" class="img-thumbnail" src="assets/upload/products/<?php echo $product["photo"]; ?>" title="<?php echo $product["name"]; ?>" class="img-responsive"> </a> </div>
                                <div class="info" style="margin-left: 10px;">
                                  <h3><a href="index.php?controller=products&action=detail&id=<?php echo $product["id"]; ?>"><?php echo $product["name"]; ?></a></h3>
                                  <p><?php echo $product["number"]; ?> x <?php echo number_format($product["price"]); ?>₫</p>
                                </div>
                                <div style="margin-right: 10px; flex: 1; align-self: center;"> 
                                    <a href="index.php?controller=cart&action=delete&id=<?php echo $product["id"]; ?>"> <i class="fa fa-times"></i></a> </div>
                              </li>
                                <?php endforeach; ?>
                              <?php endif; ?>
                            </ul>
                            <?php if(isset($_SESSION['cart'])): ?>
                            <a style="margin-bottom: 10px;float: right;margin-right: 10px;font-size: 16px;background-color: #77ca64;border: none;" href="index.php?controller=cart&action=checkout" type="button" class="btn btn-primary btn-lg">Thanh toán</a> </div>
                            <?php endif; ?>
                        </div>
                      </div>
                    </div>
               </div>
           </div>
        </div>
        <!-- End Header-Middle -->
        <!-- ################################################################ -->
        <!-- Header-Bottom -->
        <div class="header-bottom">
            <div class="container">
                <div class="menu">
                    <div class="list" id="menu-list" onclick="clickFunction()">
                        <i class="fas fa-list-ul"></i>
                    </div>
                    <ul class="nav-menu" id="menu-nav">
                        <li>
                            <a href="home" class="a1">Trang Chủ</a>
                        </li>
                        <li>
                            <a href="">Sản Phẩm
                                <i class="fas fa-caret-down"></i>
                            </a>
                            <ul class="sub-menu">
                                  <?php 
                                      $conn = Connection::getInstance();
                                      $query = $conn->query("select * from categories where parent_id = 0");
                                      $categories = $query->fetchAll();
                                   ?>  
                                   <?php foreach($categories as $rows): ?>
                                    <li><a href="index.php?controller=products&action=category&id=<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a></li>
                                    <?php 
                                        $querySub = $conn->query("select * from categories where parent_id = {$rows->id} order by id desc");
                                        $categoriesSub = $querySub->fetchAll();
                                     ?>
                                          <?php foreach($categoriesSub as $rowsSub): ?>
                                              <li style="padding-left:20px;"><a href="index.php?controller=products&action=category&id=<?php echo $rowsSub->id; ?>"><?php echo $rowsSub->name; ?></a></li>
                                          <?php endforeach; ?>
                                    <?php endforeach; ?>
                                 </ul>
                        </li>
                         <li>
                            <a href="cart">Rỏ Hàng</a>
                        </li>
                        <li>
                            <a href="news">Tin Tức</a>
                        </li>
                         <li>
                            <a href="contact">Liên Hệ</a>
                        </li>
                         <li>
                            <a href="">Giới Thiệu</a>
                        </li>
                    </ul>
                    
                </div>
            </div>
        </div>
        <!-- End Header-Bottom -->
        <script>
            var show_menu = true;
            function clickFunction() {
                if(show_menu == true){
                    document.getElementById("menu-nav").style.display = "block";
                    show_menu = false;
                }else{
                    document.getElementById("menu-nav").style.display = "none";
                    show_menu = true;
                }
                

            }
        </script>
    </header>
    <!-- End Header -->