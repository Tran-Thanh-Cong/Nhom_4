<?php  
	// load model
	include "models/LoginModel.php";
	// su dung class model
	
	class LoginController extends Controller
    {
		use LoginModel;		
		public function index()
        {
			$this->view("LoginView.php");
		}
		
		public function login()
		{
			$this->modelLogin();
			//quay lai trang index
			header("location:index.php");
		}

		public function logout()
		{
			// huy session
			unset($_SESSION["student"]);
			header("location:index.php");
		}
	}
?>

