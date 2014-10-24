<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Upload extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        // $this->load->helper(array('form', 'url'));
    }
    function do_upload() {
        // $responsabilidades = FCPATH.'/uploads/';
        $this->load->model('anexo_model');
        $name_array = array();
        $count = count($_FILES['userfile']['size']);
        foreach($_FILES as $key=>$value)
            for($s=0; $s<$count; $s++)
            {
                $_FILES['userfile']['name']=$value['name'][$s];
                $_FILES['userfile']['type'] = $value['type'][$s];
                $_FILES['userfile']['tmp_name'] = $value['tmp_name'][$s];
                $_FILES['userfile']['error'] = $value['error'][$s];
                $_FILES['userfile']['size'] = $value['size'][$s]; 
                $config['upload_path'] = './uploads/';
                $config['allowed_types'] = '*';
                $config['max_size'] = '2048';
                // $config['max_width']  = '1024';
                // $config['max_height']  = '768';
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if(!$this->upload->do_upload())
                {
                    $this->session->set_flashdata('danger', $this->upload->display_errors());
                    redirect("responsabilidade");
                }
                else
                {
                    $data = $this->upload->data();
                    $name_array[] = $data['file_name'];
                    // $names= implode(',', $name_array);
                        $arquivo=array(
                            'Responsabilidade_idResponsabilidade'=>$this->input->post("Responsabilidade_idResponsabilidade"),
                            'caminho'=>$name_array[$s],
                            'descricao'=>$this->input->post("descricao")
                            );
                        $this->anexo_model->salvar($arquivo);
                }
                
            }
            // print_r($name_array);
            $this->session->set_flashdata('success', "Upload realizado com  Sucesso");
            redirect("responsabilidade");
        //     $this->load->database();
        //     $db_data = array('id'=> NULL,
        //                      'name'=> $names);
        // $this->db->insert('testtable',$db_data);
            // print_r($names);
        }

    }