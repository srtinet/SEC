<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mensagem extends CI_Controller{
	public function listar(){
		$this->load->model("mensagem_model");
		$this->mensagem_model->listar();
	}
}