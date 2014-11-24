<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Agenda extends CI_Controller{
	public function listar(){
		// $this->output->enable_profiler(TRUE);
		$this->load->model("agenda_model");
		$agenda=$this->agenda_model->listar();
		$dados=array('agendas'=>$agenda);
		$this->load->template("agenda/lista",$dados);

	}

	public function form($id=0){
		$this->load->model("agenda_model");
		$agenda=$this->agenda_model->listar(array("idAgenda"=>$id));
		$dados = array('agendas'=>$agenda);
		$this->load->template("agenda/form", $dados);
	}

	public function cadastrar(){
		$this->load->model("agenda_model");
		$agenda = array(
			"idAgenda" => $this->input->post('idAgenda'),
			"Nome" => $this->input->post('nome'),
			"Telefone" => $this->input->post('telefone')
			);
		$this->agenda_model->salvar($agenda);
		$this->session->set_flashdata('success',"Contato Cadastrado com Sucesso");
		redirect("agenda/listar");
	}

	public function excluir($id){
		$this->load->model("agenda_model");
		$agenda=$this->agenda_model->excluir($id);
		$this->session->set_flashdata('success',"Contato Excluído com Sucesso");
		redirect('agenda/listar');
	}
}