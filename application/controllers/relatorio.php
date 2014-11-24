<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Relatorio extends CI_Controller{

// 	public function index(){
// 		// $this->load->model("relatorio_model");
// 		$this->load->model("empresa_model");
// 		$this->load->model("usuarios_model");
// 		$this->load->model("ligacao_model");
// 		$controle = $this->responsabilidade_model->controle();
// 		$ultimadata=$controle['data'];
// 		$hoje=date("Y-m-d");
// 		$empresa = $this->empresa_model->listar();
// 		$usuario = $this->usuarios_model->listar();
// 		$ligacao = $this->ligacao_model->listar();
// 		$dados = array(
// 			"empresas"=>$empresa,
// 			"usuario"=>$usuario,
// 			"ligacao"=>$ligacao);
// 		$this->load->template("relatorio/relatorio", $dados);
// }

	public function montaRelatorio(){
		// $this->output->enable_profiler(TRUE);
		$this->load->model("empresa_model");
		$empresa=$this->empresa_model->listar();
		$dados=array('empresas'=>$empresa);
		$this->load->template("relatorio/form",$dados);
	}

	public function fazRelatorio(){
		// $this->output->enable_profiler(TRUE);
		$this->load->model("empresa_model");
		$status = $this->input->post('statusEmpresaRelatorio');
		if($status == 0)
		{
			$empresa=$this->empresa_model->listar();
		}
		else if($status == 1)
		{
			$empresa=$this->empresa_model->listar(array("situacao" => 1));
		}
		else{
			$empresa=$this->empresa_model->listar(array("situacao" => 0));
		}
		$dados=array('empresas'=>$empresa);
		$this->load->relatorio("relatorio/relatorioImpresso",$dados);
	}

	public function planilha(){
		// $this->output->enable_profiler(TRUE);
		$this->load->model("empresa_model");
		$empresa=$this->empresa_model->listar();
		$dados=array('empresas'=>$empresa);
		$this->load->planilha("relatorio/planilhaExcelRelatorioEmpresas", $dados);
	}

	public function planilhaSimplificada(){
		// $this->output->enable_profiler(TRUE);
		$this->load->model("empresa_model");
		$empresa=$this->empresa_model->listar();
		$dados=array('empresas'=>$empresa);
		$this->load->planilha("relatorio/planilhaExcelRelatorioEmpresasSimplificado", $dados);
	}
}