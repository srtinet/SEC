<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Upload extends CI_Controller{
	function __construct(){
		parent::__construct();
	}

	public function do_upload()
    {


        $responsabilidades = FCPATH . '/uploads';
        $this->load->model('anexo_model');
        if (!file_exists($responsabilidades)) {
            mkdir($responsabilidades, DIR_WRITE_MODE, true);
        }

        $this->upload_config = array(
            'upload_path'   => $responsabilidades,
            'allowed_types' => 'png|jpg|jpeg|bmp|tiff',
            'max_size'      => 2048,
            'remove_space'  => TRUE,
            'encrypt_name'  => TRUE,
        );

        $this->upload->initialize($this->upload_config);

        if (!$this->upload->do_upload()) {
        	$this->session->set_flashdata('danger', $this->upload->display_errors());
redirect("responsabilidade");

        } else {

        	$data=$this->upload->data();
        	$arquivo=array(
'Responsabilidade_idResponsabilidade'=>$this->input->post("Responsabilidade_idResponsabilidade"),
'caminho'=>$data['file_name'],
'descricao'=>$this->input->post("descricao")
);
         $this->anexo_model->salvar($arquivo);
        	$this->session->set_flashdata('success', "Upload realizado com  Sucesso");
redirect("responsabilidade");
        }
    }
}