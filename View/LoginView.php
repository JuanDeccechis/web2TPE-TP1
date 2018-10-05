<?php 
	/**
	 * 
	 */
	class LoginView extends AbstractView {
		private $Smarty;

		function __construct() {
			$this->Smarty = new Smarty();
		}

		function mostrar($Titulo, $mensaje){
    		$this->Smarty->assign('Titulo',"Login");
    		$this->Smarty->assign('Mensaje', $mensaje);
    		$this->Smarty->assign('Accion',$Titulo); // Accion = Login
    		$this->Smarty->display('templates/userForm.tpl');
  		}
	}
?>