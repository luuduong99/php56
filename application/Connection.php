<?php 
	//ket noi csdl
	class Connection{
		//ham ket noi csdl, tra ket qua ve mot bien -> bien nay la bien object
		public static function getInstance(){
			//new PDO(host,username;password)
			// $conn = new PDO("mysql:host=sql107.byethost8.com;dbname=b8_29666710_project_pet","b8_29666710","Luuduong_99");
			$conn = new PDO("mysql:hostname=localhost;dbname=php56_project","root","");
			//lay du lieu theo kieu unicode
			$conn->exec("set names utf8");
			//lay ket qua tra ve theo object
			$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
			return $conn;
		}
	}
 ?>