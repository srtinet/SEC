<?php
class Agenda_model extends CI_Model {
	public function listar($where=array()){
		$this->db->order_by("Nome", "asc");
		return $this->db->get_where("Agenda", $where)->result_array();
	}

	public function salvar($agenda){
		if ($agenda['idAgenda']>0){
			$this->db->where("idAgenda",$agenda['idAgenda']);
			$this->db->update("Agenda",$agenda);
			// return 0;

		}else{
			$this->db->insert("Agenda",$agenda);
			// return $this->db->insert_id();
		}

	}
	public function excluir($id){
		$this->db->where('idAgenda', $id);
		$this->db->delete('Agenda');
	}
}