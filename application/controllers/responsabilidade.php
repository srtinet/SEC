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
			$this->gerarRespopnsabilidade($ultimadata,$hoje);
		}
		$dataInicioFiltro=tiraDia($hoje,15);
		$dataFimFiltro=adicionaMes($hoje,1);
		$usuario=$this->session->userdata('usuario_logado');
		$responsabilidadelst=$this->responsabilidade_model->listarResponsabilidade(array("idUsuario"=>$usuario['idUsuario']),$dataInicioFiltro,$dataFimFiltro);
		$dados=array("responsabilidade"=>$responsabilidadelst);
		$this->load->template("responsabilidade/responsabilidade",$dados);
	}

	public function validar(){
		$this->output->enable_profiler(TRUE);
		$this->load->model("responsabilidade_model");
		$usuario=$this->session->userdata('usuario_logado');
		$responsabilidadelst=$this->responsabilidade_model->listarResponsabilidadeGestor(array("GestorSetor.Usuario_idUsuario"=>$usuario['idUsuario'],"EstadoResponsabilidade.estado"=>'1'));
		$dados=array("responsabilidade"=>$responsabilidadelst);
		$this->load->template("responsabilidade/validar",$dados);

	}

	public function concluir(){
		$id= $this->input->post("idEstadoResponsabilidade");
		$estadoMudar= $this->input->post("estado");
		$local= $this->input->post("local");
		$nivel= $this->input->post("nivel");
	
		if ($nivel==1 ) {$estadoMudar=4;}

		$this->load->model("responsabilidade_model");	
		$estadoAt=$this->responsabilidade_model->listarEstado(array('idEstadoResponsabilidade'=>$id));
		$estado= array('idEstadoResponsabilidade'=>$id,'Responsabilidade_idResponsabilidade' => $estadoAt['Responsabilidade_idResponsabilidade'],'estadoProximo' => $estadoMudar );
		$this->responsabilidade_model->salvarEstado($estado);

		$estado= array('idEstadoResponsabilidade'=>null,'Responsabilidade_idResponsabilidade' => $estadoAt['Responsabilidade_idResponsabilidade'],'estado' => $estadoMudar );
		$this->responsabilidade_model->salvarEstado($estado);
		if ($local==2 ){
	redirect('responsabilidade/validar');
}
			else{
	redirect('responsabilidade');
	}

	}

	public function listar() {
		$this->load->model("responsabilidade_model");
		$responsabilidadeTp=$this->responsabilidade_model->listar();





	}

	public function gerarRespopnsabilidade($ultimadata,$hoje){
		$this->load->model("responsabilidade_model");
		$this->load->model("empresa_model");
		$controle=$this->responsabilidade_model->periodoAtividade($ultimadata,$hoje);

		foreach ($controle as $con) {

			$usuario=$this->empresa_model->listarSetor(array('Empresa_idEmpresa' =>$con['Empresa_idEmpresa'] ,'Setor_idSetor' =>$con['Setor_idSetor']),1);
if($con['tipo']==0){$vencimento=adicionaDia($con['dataControle'],15);}
if($con['tipo']==1){$vencimento=adicionaMes($con['dataControle'],1);}
if($con['tipo']==2){$vencimento=adicionaMes($con['dataControle'],2);}
if($con['tipo']==3){$vencimento=adicionaMes($con['dataControle'],3);}
if($con['tipo']==4){$vencimento=adicionaMes($con['dataControle'],6);}
if($con['tipo']==5){$vencimento=adicionaAno($con['dataControle'],1);}

				

			$responsabilidade=array(
				"Usuario_idUsuario"	=>$usuario['Usuario_idUsuario'],
				"AtividadeEmpresa_idAtividadeEmpresa" => $con['idAtividadeEmpresa'],
				"dataVencimento"=>$vencimento,
				"descricao"=>$con['atividadeDescricao']
				);
			$respom=$this->responsabilidade_model->salvar($responsabilidade);
			$estado= array('idEstadoResponsabilidade'=>null,'Responsabilidade_idResponsabilidade' => $respom,'estado' => 0 );
			$this->responsabilidade_model->salvarEstado($estado);
		$atividade=array('idAtividadeEmpresa'=>$con['idAtividadeEmpresa'],"dataControle"=>$vencimento);
			$this->empresa_model->cadAtividade($atividade);




		}	

		$this->responsabilidade_model->salvarControle(array("data"=>$hoje));			

	}


}