<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Agenda  extends CI_Controller{
	public function listar(){
		$this->output->enable_profiler(TRUE);
		$this->load->model("agenda_model");
		$agenda=$this->agenda_model->listar();
		$dados=array('agendas'=>$agenda);
		$this->load->template("agenda/lista",$dados);

	}
}