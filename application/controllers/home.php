<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller{

	public function index(){
		$this->output->enable_profiler(TRUE);
		if($usuario["telefonista"] != 1){
			redirect('responsabilidade/validar');
		}else{
			redirect('ligacao/listarTelefonista');
		}
	}	
	public function menus(){
		$usuario = $this->session->userdata('usuario_logado');
		$this->load->model("responsabilidade_model");
		$this->load->model("recado_model");
		$this->load->model("documento_model");
		$this->load->model("ligacao_model");
		$responsabilidade=$this->responsabilidade_model->contResponsabilidade(array("Usuario_idUsuario"=>$usuario['idUsuario']));
		$recado=$this->recado_model->contRecado(array("Usuario_idUsuarioDes"=>$usuario['idUsuario'], "estado"=> 0));
		$documento=$this->documento_model->contDocumento(array("Usuario_idUsuarioDest"=>$usuario['idUsuario'], "situacao" => 1));
		$ligacao=$this->ligacao_model->contLigacao(array("Usuario_idUsuario"=>$usuario['idUsuario'], "estado" => 0));
		$validacoes=$this->responsabilidade_model->contValidacoes(array("Usuario_idUsuario"=>$usuario['idUsuario']));


		echo json_encode(array(
			"responsabilidadeCont"=>$responsabilidade,
			"recadoCont"=>$recado,
			"documentoCont"=>$documento,
			"ligacaoCont"=>$ligacao,
			"validacoesCont"=>$validacoes
			));
	}
}
?>
