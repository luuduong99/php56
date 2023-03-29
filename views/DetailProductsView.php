<?php 
    //load file Layout.php vao day
    $this->fileLayout = "LayoutTrangTrong.php";
 ?>
<!-- main -->
  <!-- <div class="product-detail" itemscope itemtype="http://schema.org/Product"> -->
    <div class="top">
      <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 product-image ">
          <div class="media-body"> 
            <img src="assets/upload/products/<?php echo $record->photo; ?>" style="width: 100%;" class="img-responsive"/>
          </div>
          
          
          
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 info">
          	<h1 itemprop="name"><?php echo $record->name; ?></h1>
          	<p class="vendor"> Category:&nbsp; <span>
          		<?php 
                	$category = $this->modelGetCategory($record->category_id);
                	echo isset($category->name) ? $category->name : "";
             	?>
          	</span></p>
          	<p itemprop="price" class="price-box product-price-box" style="color: #ee4d2d;"> <span class="special-price"> <span class="price product-price" style="text-decoration:line-through;"> <?php echo number_format($record->price); ?>₫ </span></span></p>
        	<p itemprop="price" class="price-box product-price-box" style="color: #ee4d2d;"> <span class="special-price"> <span class="price product-price"> <?php echo number_format($record->price - $record->price * $record->discount/100); ?>₫ </span></span></p>
      		</p>
        <a href="index.php?controller=cart&action=create&id=<?php echo $record->id; ?>" style="font-size: 16px;" class="btn btn-primary">Cho vào giỏ hàng</a>
        <!-- rating -->
        <div style="border:1px solid #dddddd; margin-top: 15px;">
          <h4 style="padding-left: 10px;">Rating</h4>
          <table style="width: 100%;">
            <tr>
              <td style="width: 80%; padding-left: 10px;"><img src="assets/frontend//images/star.jpg"></td>
              <td><span class="label label-primary" style="background-color: #1ad1ff; color: white; padding: 3px 20px; border-radius: 5px;"><?php echo $this->modelGetStar($record->id,1); ?> vote</span></td>
            </tr>
            <tr>
              <td style="width: 80%; padding-left: 10px;"><img src="assets/frontend//images/star.jpg"> <img src="assets/frontend//images/star.jpg"></td>
              <td><span class="label label-warning" style="background-color: #ffa31a; color: white; padding: 3px 20px; border-radius: 5px;"><?php echo $this->modelGetStar($record->id,2); ?> vote</span></td>
            </tr>
            <tr>
              <td style="width: 80%; padding-left: 10px;"><img src="assets/frontend//images/star.jpg"> <img src="assets/frontend//images/star.jpg"> <img src="assets/frontend//images/star.jpg"> </td>
              <td><span class="label label-danger" style="background-color: #00ff00; color: white; padding: 3px 20px; border-radius: 5px;"><?php echo $this->modelGetStar($record->id,3); ?> vote</span></td>
            </tr>
            <tr>
              <td style="width: 80%; padding-left: 10px;"><img src="assets/frontend//images/star.jpg"> <img src="assets/frontend//images/star.jpg"> <img src="assets/frontend//images/star.jpg"> <img src="assets/frontend//images/star.jpg"> </td>
              <td><span class="label label-info" style="background-color: #e60000; color: white; padding: 3px 20px; border-radius: 5px;"><?php echo $this->modelGetStar($record->id,4); ?> vote</span></td>
            </tr>
            <tr>
              <td style="width: 80%; padding-left: 10px;"><img src="assets/frontend//images/star.jpg"> <img src="assets/frontend//images/star.jpg"> <img src="assets/frontend//images/star.jpg"> <img src="assets/frontend//images/star.jpg"> <img src="assets/frontend//images/star.jpg"> </td>
              <td><span class="label label-success" style="background-color: #ff33cc; color: white; padding: 3px 20px; border-radius: 5px;"><?php echo $this->modelGetStar($record->id,5); ?> vote</span></td>
            </tr>
          </table>
          <br>
        </div>
        <!-- /rating -->
      </div>
    </div>
  </div>
  <div class="middle">
   <!-- chi tiet -->
  <?php echo $record->description; ?>
  <?php echo $record->content; ?>
  <!-- chi tiet -->
  </div>
  <!-- end main -->