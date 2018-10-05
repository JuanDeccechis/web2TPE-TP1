<?php 
	require_once  "./View/SignInView.php";
	require_once  "./Model/UsuarioModel.php";
	require_once "AbstractController.php";

	class SignInController extends AbstractController {
		
		function __construct() {
			parent::__construct(new SignInView(), new UsuarioModel(), "Usuario");
		}

		function signIn() {
			$this->view->mostrar('SignIn');
		}

		function agregar() {
			$nombre = $_POST["Usuario"];
    		$pass = $_POST["Password"];
    		$this->model->agregar($nombre,$pass);
			header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
		}
	}
?>