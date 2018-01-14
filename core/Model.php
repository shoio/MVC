<?php 
class model{

	
	protected $db;
	
	public function __construct(){
		global $config;
		try{
		$this->db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'].";charset=".$config['charset'],$config['dbuser'],$config['dbpass']);
		$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		}catch(PDOException $e){
			echo "Falhou a conexão".$e->getMessage()." -  confira a linha: ".$e->getLine();
		}
	}
}



?>