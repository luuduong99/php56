<?php 
	include "models/CartModel.php";
	class CartController extends Controller{
		use CartModel;
		public function __construct(){
			//kiểm tra rỏ hàng chưa tồn tại thì khởi tạo nó
			if(isset($_SESSION["cart"]) == false){
				$_SESSION['cart'] = array();
			}
		}
			//hiển thị các sản phẩm trong rỏ hàng
		public function index(){
			$this->loadView("CartView.php");
		}
		//thêm sản phẩm vào rỏ
		public function create(){
			$id = isset($_GET["id"]) ? $_GET['id'] : 0;
			//gọi hàm trong model
			$this->cartAdd($id);
			header("location:index.php?controller=cart");
		}
		//xóa sản phẩm vào rỏ hàng
		public function delete(){
			$id = isset($_GET["id"]) ? $_GET['id'] : 0;
			//gọi hàm trong model
			$this->cartDelete($id);
			header("location:index.php?controller=cart");
		}
		//xóa tất cả sản phẩm ở rỏ hàng
		public function destroy(){
			//gọi hàm trong model
			$this->cartDestroy();
			header("location:index.php?controller=cart");
		}
		//cập nhật số lượng sản phẩm 
		public function update(){
			foreach($_SESSION['cart'] as $product){
				$name = "product_".$product["id"];
				$number = $_POST[$name];
				$this->cartUpdate($product["id"],$number);
			}
			header("location:index.php?controller=cart");
		}
		//thanh toán giỏ hàng
		public function checkOut(){
			//kiểm tra nếu chưa đăng nhập yêu cầu đăng nhập
			if(isset($_SESSION["customer_email"]) == false)
				header("location:index.php?controller=account&action=login");
			else{
				//gọi hàm checkOut trong model
				$this->cartCheckOut();
				header("location:index.php?controller=cart");
			}
		}
		
	}
	

 ?>