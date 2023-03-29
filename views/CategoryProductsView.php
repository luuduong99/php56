<?php 
    //load file Layout.php vao day
    $this->fileLayout = "LayoutTrangTrong.php";
 ?>

 <div class="col-xs-12 col-md-12">
               <div class="row" style="border-bottom: 1px solid black;">
                    <div class="col-6 col-sm-6 col-md-9 col-lg-9 col-xl-9" style="padding-bottom: 5px;">
                        <h2><?php 
                            $category = $this->modelGetCategory($id);
                            echo isset($category->name) ? $category->name : "";
                        
                        ?></h2>
                    </div>
                    <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                        <?php 
                            $order = isset($_GET["order"]) ? $_GET["order"] : "";
                        ?>
                        <select  class="form-control" onchange="location.href = 'index.php?controller=products&action=category&id=<?php echo $id; ?>&order='+this.value;" style="font-size: 16px;padding: 0;">
                            <option value="0">Sắp xếp</option>
                            <option <?php if($order == "priceAsc"): ?> selected <?php endif; ?> value="priceAsc">Giá tăng dần</option>
                            <option <?php if($order == "priceDesc"): ?> selected <?php endif; ?>value="priceDesc">Giá giảm dần</option>
                            <option <?php if($order == "nameAsc"): ?> selected <?php endif; ?> value="nameAsc">Sắp xếp A-Z</option>
                            <option <?php if($order == "nameDesc"): ?> selected <?php endif; ?> value="nameDesc">Sắp xếp Z-A</option>
                        </select>
                    </div>
                </div>
                <div class="hot-product">
                    <!-- <h1 style="border-bottom: 1px solid gray;font-weight: 900;"><span style="color: red;">HOT</span> PRODUCT</h1> -->
                    <div class="card-hot-product" style="margin-top: 35px;margin-left: 20px;">
                        <div class="row">
                            <style type="text/css">
                                 .discount{
                                    position: absolute;line-height: 50px;width: 50px;background-color: black;
                                    text-align: center;color: white;border-radius: 50px;
                                    background: red;
                                 }
                            </style>
                            <?php foreach($data as $rows): ?>
                            <div class="col-md-4">
                                <div class="card" style="margin-bottom: 35px;margin-right: 20px;">
                                    <!-- discount -->
                                    <div class="discount">
                                        <?php echo $rows->discount ?>%
                                    </div>
                                     <!-- end discount -->
                                    <img src="assets/upload/products/<?php echo $rows->photo; ?>" title="<?php echo $rows->name; ?>" alt="<?php echo $rows->name; ?>" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 style="font-size: 16px;" class="card-title"><a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a>
                                        </h5>
                                        <p class="price-box"> <span class="special-price"> <span class="price product-price" style="text-decoration:line-through;"> <?php echo number_format($rows->price); ?></span> ₫ </span> </p>
                                        <p class="price-box"> <span class="special-price"> <span class="price product-price"> <?php echo number_format($rows->price - ($rows->price * $rows->discount)/100); ?> </span>₫ </span> </p>
                                        <p class="price-box"> <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=1"><img src="assets/frontend/images/star.jpg"></a> <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=2"><img src="assets/frontend/images/star.jpg"></a> <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=3"><img src="assets/frontend/images/star.jpg"></a> <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=4"><img src="assets/frontend/images/star.jpg"></a> <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=5"><img src="assets/frontend/images/star.jpg"></a> </p>
                                        <a href="index.php?controller=cart&action=create&id=<?php echo $rows->id; ?>" style="font-size: 16px;" class="btn btn-primary">Mua Ngay</a>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                            <!-- paging -->
                            <div style="clear: both;"></div>
                            <div style="margin-top: 20px;margin-left: 10px;"  class="&#x70;&#x61;&#x67;&#x69;&#x6E;&#x61;&#x74;&#x69;&#x6F;&#x6E;&#x2D;&#x63;&#x6F;&#x6E;&#x74;&#x61;&#x69;&#x6E;&#x65;&#x72;">
                              <ul class="pagination">
                                <li class="page-item"><span>Trang</span></li>
                                <?php for($i = 1; $i <= $numPage; $i++): ?>
                                <li class="page-item"><a class="page-link" href="index.php?controller=products&action=category&id=<?php echo $id; ?>&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                                <?php endfor; ?>
                              </ul>
                            </div>
                            <!-- end paging -->
                        </div>
                    </div>
                </div>
            </div>