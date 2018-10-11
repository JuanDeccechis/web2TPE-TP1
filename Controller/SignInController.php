<?php 
	require_once  "./View/SignInView.php";
	require_once  "./Model/UsuarioModel.php";
	require_once "AbstractController.php";

	class SignInController extends AbstractController {
		
		function __construct() {
			parent::__construct(new SignInView(), new UsuarioModel(), "Usuario");
		}

		function signIn() {
			$this->view->mostrar('Registrarse', "", 'newUser');
		}

		function agregar() {
			$nombre = $_POST["Usuario"];
    		$pass = $_POST["Password"];
    		
			$dbUser = $this->model->getUser($nombre);
			if(isset($dbUser[0]))
				$this->view->mostrar("Registrarse", "ya existe el usuario", 'newUser');
      		else {
        		//No existe el usario
        		$this->model->agregar($nombre,$pass);
        		header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
      		}

		}
	}
?>