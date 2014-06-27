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
	public function listar($where=array(),$tipo=0){
if ($tipo==0){
		return $this->db->get_where('Usuario',$where)->result_array();
}else{

return $this->db->get_where('Usuario',$where)->row_array();

}

	}
	public function buscaPorUsuarioESenha($usuario,$senha){
		$this->db->where("login",$usuario);
		$this->db->where("senha",$senha);
		$usuario= $this->db->get("Usuario")->row_array();

		return   $usuario;
	}

		public function listarGestorJoin($where=array()){

		$this->db->select(" GestorSetor.*,Setor.descricao as setorDescricao , Usuario.nome");
		$this->db->from(" GestorSetor");
	
		$this->db->join("Setor", "Setor.idSetor =  GestorSetor.Setor_idSetor");
		$this->db->join("Usuario", "Usuario.idUsuario =  GestorSetor.Usuario_idUsuario");
		$this->db->where($where);

		return $this->db->get()->result_array();
	}



	public function cadGestor($gestor){

		if ($gestor['idGestorSetor']>0){
			$this->db->where("idGestorSetor",$gestor['idGestorSetor']);
			$this->db->update("GestorSetor",$gestor);

		}else{
			$this->db->insert("GestorSetor",$gestor);

		}
	}
	public function excluirgestor($id){
		$this->db->where("idGestorSetor",$id);
		$this->db->delete('GestorSetor'); 

	}



}

