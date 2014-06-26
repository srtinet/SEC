<?php
class Ligacao_model extends CI_Model{
	public function salvar($ligacao){
		$this->db->insert('Telefonema', $ligacao);
	}
}