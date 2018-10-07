<?php 
	/**
	 * 
	 */
	class SignInView
	{
		
		private $Smarty;

		function __construct() {
			$this->Smarty = new Smarty();
		}

		function mostrar($Titulo){
			$this->Smarty = new Smarty();
		    $this->Smarty->assign('Titulo',$Titulo);
		    $this->Smarty->assign('Mensaje', '');
		    $this->Smarty->assign('Accion',$Titulo);
		    $this->Smarty->assign('sesion_activa', isset($_SESSION["User"]));
		    $this->Smarty->display('templates/userForm.tpl');
		}
	}

 ?>