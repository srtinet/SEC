<?php 
class Usuarios_model extends CI_Model {


	public function salvar ($usuario){
		if ($usuario['idUsuario']>0){
			$this->db->where("idUsuario",$usuario['idUsuario']);
			$this->db->update("Usuario",$usuario);

		}else{
			$this->db->insert("Usuario",$usuario);
		}

	}
	public function excluir($id){
		$this->db->where('idUsuario', $id);
		$this->db->delete('Usuario'); 

	}
	public function listar($where=array()){

		return $this->db->get_where('Usuario',$where)->result_array();


	}
	public function buscaPorUsuarioESenha($usuario,$senha){
		$this->db->where("login",$usuario);
		$this->db->where("senha",$senha);
		$usuario= $this->db->get("Usuario")->row_array();

		return   $usuario;
	}

}

