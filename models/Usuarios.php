<?php
class Usuarios extends Model{

	public function __construct(){
		parent::__construct();
	}
	
	public function isLogged(){
		if (isset($_SESSION['twlg']) && !empty($_SESSION['twlg'])) {
			return true;
		} else{
			return false;
		}
	}

	public function usuarioExiste($email){
		$sql = "SELECT * FROM usuarios WHERE email = '$email'";
		$sql = $this->db->query($sql);

		if ($sql->rowCount() > 0) {
			return true;
		}else{
			return false;
		}
	}

	public function inserirUsuario($nome, $email, $senha){
		$sql = "INSERT INTO usuarios SET nome = '$nome', email = '$email', senha = '$senha'";
		$this->db->query($sql);

		$id = $this->db->lastInsertId();

		return $id;
	}

}

