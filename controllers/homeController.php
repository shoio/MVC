<?php
class homeController extends Controller{
	
	public function __construct(){
		$u = new Usuarios();

		if (!$u->isLogged()) {
			header("location: /twitter/login");
		}
	}
	
	public function index(){
		
		$dados = array();
		
		$this->loadTemplate('home', $dados);
	}


}