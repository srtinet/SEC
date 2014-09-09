<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller{

	public function index(){
		if(isset($this->session->userdata['usuario_logado'])){
			$usuario = $this->session->userdata['usuario_logado'];
			if($usuario["telefonista"] == 1){
				redirect('ligacao/listarTelefonista');
			}else{
				if($usuario['tipo'] != 4){
					redirect('responsabilidade/responsabilidade');
				}else{
					$this->load->template("home");
				}
				
			}
		}else{
			$this->load->template("home");
		}
	}
	public function menus(){
		$usuario = $this->session->userdata('usuario_logado');
		$this->load->model("responsabilidade_model");
		$this->load->model("recado_model");
		$this->load->model("documento_model");
		$this->load->model("ligacao_model");
		$data = date("Y-m-d");
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
