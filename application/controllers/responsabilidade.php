<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Responsabilidade extends CI_Controller{


	public function index(){
		$this->output->enable_profiler(TRUE);
		$this->load->model("responsabilidade_model");
		$this->load->model("empresa_model");
		$controle=$this->responsabilidade_model->controle();
		$ultimadata=$controle['data'];
		$hoje=date("Y-m-d");
		
		if ($ultimadata!=$hoje){
			$controle=$this->responsabilidade_model->periodoAtividade($ultimadata,$hoje);
			foreach ($controle as $con) {

				$usuario=$this->empresa_model->listarSetor(array('Empresa_idEmpresa' =>$con['Empresa_idEmpresa'] ,'Setor_idSetor' =>$con['Setor_idSetor']),1);
				

				$responsabilidade=array(
				"Usuario_idUsuario"	=>$usuario['Usuario_idUsuario'],
				'AtividadeEmpresa_idAtividadeEmpresa' => $con['idAtividadeEmpresa'],
				'dataVencimento'=>adicionaMes($con['dataControle'],1),
				'descricao'=>$con['atividadeDescricao']
				);

				$this->responsabilidade_model->salvarControle(array("data"=>$hoje));

				$this->responsabilidade_model->salvar($responsabilidade);



			}


			
		}
		$dados=array("periodo"=>$controle,"data1"=>$ultimadata,"data2"=>$hoje);
			$this->load->template("responsabilidade/responsabilidade",$dados);
	}
	public function listar() {
		$this->load->model("responsabilidade_model");
		$responsabilidadeTp=$this->responsabilidade_model->listar();





	}


}