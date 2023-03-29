<?php 
    //load file Layout.php vao day
    $this->fileLayout = "LayoutTrangChu.php";
 ?>

  <!-- Hot Product -->
            <div class="hot-product">
                <h1 style="border-bottom: 1px solid gray;font-weight: 900;margin-bottom: 20px;margin-top: 15px;"><span style="color: red;">HOT</span> PRODUCT</h1>
                <div class="card-hot-product" style="margin-left: 20px;">
                    <div class="row">
                        <?php 
                            $hotProduct = $this->modelHotProduct();
                        ?>
                        <style type="text/css">
                             .discount{
                                position: absolute;line-height: 50px;width: 50px;background-color: black;
                                text-align: center;color: white;border-radius: 50px;
                                background: red;
                             }
                        </style>
                         <?php foreach($hotProduct as $rows): ?>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-2" style="display: flex;position: relative;">
                            <div class="card" style="margin-right: 20px;">
                                <!-- discount -->
                                    <div class="discount">
                                        <?php echo $rows->discount ?>%
                                    </div>
                                 <!-- end discount -->
                                <div class="card-img">
                                    <img src="assets/upload/products/<?php echo $rows->photo; ?>" title="<?php echo $rows->name; ?>" alt="<?php echo $rows->name; ?>" class="card-img-top" >
                                </div>
                                <div class="card-body">
                                    <h5 style="font-size: 16px;" class="card-title"><a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a></h5>
                                    <p class="price-box"> <span class="special-price"> <span class="price product-price" style="text-decoration:line-through;"> <?php echo number_format($rows->price); ?></span> ₫ </span> </p>
                                    <p class="price-box"> <span class="special-price"> <span class="price product-price"> <?php echo number_format($rows->price - ($rows->price * $rows->discount)/100); ?> </span>₫ </span> </p>
                                    <p class="price-box"> <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=1"><img src="assets/frontend/images/star.jpg"></a> <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=2"><img src="assets/frontend/images/star.jpg"></a> <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=3"><img src="assets/frontend/images/star.jpg"></a> <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=4"><img src="assets/frontend/images/star.jpg"></a> <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=5"><img src="assets/frontend/images/star.jpg"></a> </p>
                                    <a href="index.php?controller=cart&action=create&id=<?php echo $rows->id; ?>" style="font-size: 16px;" class="btn btn-primary">Mua Ngay</a>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <!-- End Hot Product -->
            <style type="text/css">
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
            </style>

            <div class="sale-img">
                
                    <img src="assets/frontend/images/sale.jpg" alt="">
                
                    <img src="assets/frontend/images/sale.jpg" alt="">
                
                
                    <img src="assets/frontend/images/sale.jpg" alt="">
                
                
            </div>

            <!-- Remain Product -->
            <?php 
                $categories = $this->modelCategories();
            ?>
            <?php foreach($categories as $itemCategories): ?>
            <div class="remain-product">
                <h1 style="border-bottom: 1px solid gray;font-weight: 900;margin-bottom: 20px;"><span style="color: red;"><?php echo $itemCategories->name; ?></span> </h1>
                <div class="card-hot-product" style="margin-left: 20px;">
                    <div class="row">
                        <?php 
                            $products = $this->modelProducts($itemCategories->id);
                         ?>  
                        <?php foreach($products as $rows): ?>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-2" style="display: flex;position: relative;justify-content: space-between;">
                            <div class="card" style="margin-right: 20px;">
                                 <!-- discount -->
                                    <div class="discount">
                                        <?php echo $rows->discount ?>%
                                    </div>
                                 <!-- end discount -->
                                <div class="card-img">
                                    <img src="assets/upload/products/<?php echo $rows->photo; ?>" title="<?php echo $rows->name; ?>" alt="<?php echo $rows->name; ?>" class="card-img-top"  style="overflow: hidden;">
                                </div>
                                <div class="card-body">
                                    <h5 style="font-size: 16px;" class="card-title"><a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a></h5>
                                    <p class="price-box"> <span class="special-price"> <span class="price product-price" style="text-decoration:line-through;"> <?php echo number_format($rows->price); ?></span> ₫ </span> </p>
                                    <p class="price-box"> <span class="special-price"> <span class="price product-price"> <?php echo number_format($rows->price - ($rows->price * $rows->discount)/100); ?> </span>₫ </span> </p>
                                    <p class="price-box"> <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=1"><img src="assets/frontend/images/star.jpg"></a> <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=2"><img src="assets/frontend/images/star.jpg"></a> <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=3"><img src="assets/frontend/images/star.jpg"></a> <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=4"><img src="assets/frontend/images/star.jpg"></a> <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=5"><img src="assets/frontend/images/star.jpg"></a> </p>
                                    <a href="index.php?controller=cart&action=create&id=<?php echo $rows->id; ?>" style="font-size: 16px;" class="btn btn-primary">Mua Ngay</a>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <!-- End Remain Product -->
            <?php endforeach; ?>

            <div class="sale-img">
                <img src="assets/frontend/images/sale.jpg" alt="">
                <img src="assets/frontend/images/sale.jpg" alt="">
                <img src="assets/frontend/images/sale.jpg" alt="">
            </div>
    <!-- News -->
                        <div class="content_blog">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="container" style="padding:0;">
            
            <div class="row">
                <?php 
                $news = $this->modelHotNews();
               ?>
               <?php foreach($news as $rows): ?>
                <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4" style="display: flex;"> 
                    <div class="card" style="margin-right: 40px;">
                        <img class="card-img-top" style="height: 300px;" src="assets/upload/news/<?php echo $rows->photo; ?>" alt="<?php echo $rows->name; ?>" title="<?php echo $rows->name; ?>">
                        <div class="card-body">
                        
                        <p class="card-text" style="margin: 0;"><div  style="font-size: 14px; height: 229px; overflow: hidden;" class="info">
                    <h3 style="line-height: 16px;height: 60px;"><a style="text-decoration:none; font-size: 17px; color:black;" class="text3line" href="index.php?controller=news&action=detail&id=<?php echo $rows->id; ?>" style="font-weight: bold;"><?php echo $rows->name; ?></a></h3>
                    <p class="desc"><?php echo $rows->description; ?></p>
                  </div></p>
                        
                        <a style="text-decoration:none;" href="index.php?controller=news&action=detail&id=<?php echo $rows->id; ?>" class="btn-primary">Đọc thêm >></a>
                        </div>
                    </div> 
                </div>
                <?php endforeach; ?>
            </div>

            </div>
    </div>
    <!-- NEWS -->
    <div class="carousel-item">
        <div class="container"style="padding:0;">
            <div class="row">
                <?php 
                $news = $this->modelHotNews();
               ?>
               <?php foreach($news as $rows): ?>
                <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4" style="display: flex;"> 
                    <div class="card">
                        <img class="card-img-top" style="height: 300px;" src="assets/upload/news/<?php echo $rows->photo; ?>" alt="<?php echo $rows->name; ?>" title="<?php echo $rows->name; ?>">
                        <div class="card-body">
                        
                        <p class="card-text" style="margin: 0;"><div  style="font-size: 14px; height: 229px; overflow: hidden;" class="info">
                    <h3 style="line-height: 16px;height: 60px;"><a style="text-decoration:none; font-size: 17px; color:black;" class="text3line" href="index.php?controller=news&action=detail&id=<?php echo $rows->id; ?>" style="font-weight: bold;"><?php echo $rows->name; ?></a></h3>
                    <p class="desc"><?php echo $rows->description; ?></p>
                  </div></p>
                        
                        <a style="text-decoration:none;" href="index.php?controller=news&action=detail&id=<?php echo $rows->id; ?>" class="btn-primary">Đọc thêm >></a>
                        </div>
                    </div>  
                </div>
                <?php endforeach; ?>
            </div>

            </div>
        </div>
        <div class="carousel-item">
            <div class="container"style="padding:0;">
            <div class="row"    >
                <?php 
                    $news = $this->modelHotNews();
                ?>
                <?php foreach($news as $rows): ?>
                <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4" style="display: flex;"> 
                    <div class="card">
                        <img class="card-img-top" style="height: 300px;" src="assets/upload/news/<?php echo $rows->photo; ?>" alt="<?php echo $rows->name; ?>" title="<?php echo $rows->name; ?>">
                        <div class="card-body">
                        
                        <p class="card-text" style="margin: 0;">
                            <div  style="font-size: 14px; height: 229px; overflow: hidden;" class="info">
                                <h3 style="line-height: 16px;height: 60px;"><a style="text-decoration:none; font-size: 17px; color:black;" class="text3line" href="index.php?controller=news&action=detail&id=<?php echo $rows->id; ?>" style="font-weight: bold;"><?php echo $rows->name; ?></a></h3>
                                <p class="desc"><?php echo $rows->description; ?></p>
                            </div>
                        </p>
                        <a style="text-decoration:none;" href="index.php?controller=news&action=detail&id=<?php echo $rows->id; ?>" class="btn-primary">Đọc thêm</a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

            </div>
        </div>
  </div>
  <div >
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
                
            </div>