<?php 
/**
 * 
 */
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