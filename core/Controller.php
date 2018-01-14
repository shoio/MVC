<?php
class Controller{
	public function loadView($viewName, $viewData = array()){

		//EXTRACT transforma as keys do array em variáveis com seus respectivos valores.
		extract($viewData); 
		include 'views/'.$viewName.'.php';
	}

	public function loadTemplate($viewName, $viewData = array()){
		include 'views/template.php';
	}

	public function loadViewInTemplate($viewName, $viewData = array()){
		extract($viewData);
		include 'views/'.$viewName.'.php';
	}
}