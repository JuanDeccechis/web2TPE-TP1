<?php 
/**
 * 
 */

define('HOME', 'Location: //'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']));
abstract class AbstractController {

	protected $view;
	protected $model;
	protected $Titulo;

	function __construct($view, $model, $Titulo) {
		$this->view = $view;
    	$this->model = $model;
    	$this->Titulo = $Titulo;
	}
}
?>