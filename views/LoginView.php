<!DOCTYPE html>
<html>

<!-- Head -->
<head>

<title>Login</title>

<!-- Meta-Tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<!-- <meta name="keywords" content="Existing Login Form Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design"> -->
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //Meta-Tags -->

<link href="assets/admin/css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
<!-- Style --> 
<link rel="stylesheet" href="assets/admin/css/login.css" type="text/css" media="all">
<!-- Fonts -->
<link href="//fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
<!-- //Fonts -->
<style type="text/css">
	.submit-w3l a{
		border: 1px solid;
    	padding: 8px 53px;
    	background-color: white;
    	color: #537b35;
	}
	.submit-w3l a:hover{
		color: black;
	}
</style>
</head>
<!-- //Head -->
<!-- Body -->
<body>
	<h1>ĐĂNG NHẬP</h1>
	<div class="w3layoutscontaineragileits">
	<h2>ĐĂNG NHẬP TẠI ĐÂY</h2>
		<form action="index.php?controller=account&action=loginPost" method="post">
			<input type="email" name="email" placeholder="EMAIL" required="">
			<input type="password" name="password" placeholder="PASSWORD" required="">
			<ul class="agileinfotickwthree">
				<li>
					<input type="checkbox" id="brand1" value="">
					<label for="brand1"><span></span>Remember me</label>
					<a href="#">Quên Mật Khẩu?</a>
				</li>
			</ul>
			<div class="aitssendbuttonw3ls">
				<input type="submit" value="Đăng Nhập">
				<p> Đăng Kí Tài Khoản <span>→</span> <a class="w3_play_icon1" href="#small-dialog1"> Register</a></p>
				<div class="clear"></div>
			</div>
		</form>
	</div>
	
	<!-- for register popup -->
	<div id="small-dialog1" class="mfp-hide">
		<div class="contact-form1">
			<div class="contact-w3-agileits">
				<h3>Đăng Kí Tài Khoản</h3>
				<?php if(isset($_GET["notify"])&&$_GET["notify"]=="error"): ?>
		        <p style="color:red;">Đăng ký chưa thành công, bạn hãy kiểm tra lại thông tin!</p>
		        <?php else: ?>
		        <p> Nếu bạn chưa có tài khoản, hãy đăng ký ngay để nhận thông tin ưu đãi cùng những ưu đãi từ cửa hàng.</p>
		        <?php endif; ?>
				<form action="index.php?controller=account&action=registerPost" method="post">
						<div class="form-sub-w3ls">
							<input placeholder="Họ Và Tên"  type="text" name="name" required="">
							<div class="icon-agile">
								<i class="fa fa-user" aria-hidden="true"></i>
							</div>
						</div>
						<div class="form-sub-w3ls">
							<input placeholder="Email" class="mail" name="email" type="email" required="">
							<div class="icon-agile">
								<i class="fa fa-envelope-o" aria-hidden="true"></i>
							</div>
						</div>
						<div class="form-sub-w3ls">
							<input placeholder="Địa Chỉ" name="address" type="text" required="">
							<div class="icon-agile">
								<i class="fa fa-unlock-alt" aria-hidden="true"></i>
							</div>
						</div>
						<div class="form-sub-w3ls">
							<input placeholder="Số Điện Thoại" name="phone" type="text" required="">
							<div class="icon-agile">
								<i class="fa fa-unlock-alt" aria-hidden="true"></i>
							</div>
						</div>
						<div class="form-sub-w3ls">
							<input placeholder="Password" name="password" type="text" required="">
							<div class="icon-agile">
								<i class="fa fa-unlock-alt" aria-hidden="true"></i>
							</div>
						</div>
					<div class="login-check">
						 <label class="checkbox"><input type="checkbox" name="checkbox" checked="">I Accept Terms & Conditions</label>
					</div>
					<div class="submit-w3l">
						<input type="submit" value="Register">
					</div>
					<div class="submit-w3l">
						<a href="index.php?controller=account&action=login" class="button">Đăng nhập</a>
					</div>
				</form>
			</div>
		</div>	
	</div>
	<!-- //for register popup -->
	
	<!-- <div class="w3footeragile">
		<p> &copy; 2017 Existing Login Form. All Rights Reserved | Design by <a href="http://w3layouts.com" target="_blank">W3layouts</a></p>
	</div> -->
	<script type="text/javascript" src="assets/admin/js/jquery-2.1.4.min.js"></script>
	<!-- pop-up-box-js-file -->  
		<script src="assets/admin/js/jquery.magnific-popup.js" type="text/javascript"></script>
	<!--//pop-up-box-js-file -->
	<script>
		$(document).ready(function() {
		$('.w3_play_icon,.w3_play_icon1,.w3_play_icon2').magnificPopup({
			type: 'inline',
			fixedContentPos: false,
			fixedBgPos: true,
			overflowY: 'auto',
			closeBtnInside: true,
			preloader: false,
			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-zoom-in'
		});
																		
		});
	</script>

</body>
<!-- //Body -->

</html>