<?php 
require_once  "./View/LoginView.php";
require_once  "./Model/UsuarioModel.php";
require_once  "AbstractController.php";

	class LoginController extends AbstractController {
		
		function __construct() {
			parent::__construct(new LoginView(), new UsuarioModel(), "Login");
		}

		function login() {
			$this->view->mostrar($this->Titulo, "");
		}

		function verify(){
			$user = $_POST["Usuario"];
			$pass = $_POST["Password"];
			$dbUser = $this->model->getUser($user);

			if(isset($dbUser[0])){
				if (password_verify($pass, $dbUser[0]["pass"])){
					session_start();
              		$_SESSION["User"] = $user;
              		header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
          		}
          		else {
		            $this->view->mostrar("Login", "Contraseña incorrecta");
				}
      		}
      		else {
        		//No existe el usario
        		$this->view->mostrar("Login", "No existe el usario");
      		}
		}

		function logout(){
			session_start();
			session_destroy();
			header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
  		}
	}
?>