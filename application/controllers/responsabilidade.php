<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Responsabilidade extends CI_Controller{

public function listar() {
	$this->load->model("responsabilidade_model");
	$responsabilidadeTp=$this->responsabilidade_model->listar();





}


}