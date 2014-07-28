
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Email extends CI_Controller{
	public function enviarEmail(){
		$usuario = $this->session->userdata['usuario_logado']['nome'];
		$config["protocol"] = "smtp";
		$config["smtp_host"] = "ssl://smtp.gmail.com";
		$config["smtp_user"] = "jrluiscarvalho@gmail.com";
		$config["smtp_pass"] = "LU15JUN10R";
		$config["charset"] = "utf-8";
		$config["mailtype"] = "html";
		$config["newline"] = "\r\n";
		$config["smtp_port"] = "465";
		$this->email->initialize($config);
		$this->email->from("jrluiscarvalho@gmail.com", "Ras Reviri");
		$this->email->to("host_kelverty@hotmail.com");
		$this->email->subject("teste");
		$this->email->message('
			<meta charset="utf-8">
<table style="width:700px;" cellpadding="0" cellspacing="0">
                        <tr style="background-color:#3055AB;">
                                <td style="width:100px;" collspan="2">
                                    <img src="http://i59.tinypic.com/vheyyf.jpg" width="80"/>
                                </td>
                                <td width="500px">
                                   <h1 style="color:#fff;font-family:"Trebuchet MS";">Ras Reviri Escritório Contábil</h1>
                                </td>

                        </tr>
                        <tr>
                                <td colspan="2" style="height: 60px;">
                                        <h2 style="font-family:"Trebuchet MS", Arial, sans-serif; color:#333;">Olá</h2>
                                </td>
                        </tr>
                        <tr style="background-color:#eee">
                                <td colspan="2" style="height: 10px;">
                                </td>
                        </tr>
                        <tr style="background-color:#eee">
                                <td colspan="2" style="height: 40px;">
                                        <h3 style="font-family:"Trebuchet MS", Arial, sans-serif; color:#333; ">Detalhes de alguma coisa</h3>
                                </td>
                        </tr>
                        <tr style="background-color:#eee">
                                <td colspan="2" style="height: 10px;">
                                </td>
                        </tr>
                        <tr>
                                <td colspan="2" style="height: 20px;">
                                </td>
                        </tr>
                        <tr>
                                <td colspan="2" style="background-color:#eee;height: 15px;">
                                </td>
                        </tr>
                        <tr>
                                <td colspan="2" style="height: 20px;">
                                </td>
                        </tr>
                        <tr>
                                <td>
                                        <h4 style="font-family:"Trebuchet MS", Arial, sans-serif; color:#333; margin-left:20px;">Detalhes deste Teste</h4>
                                        <ul style="list-style:none;">
                                                <li>Item 1</li>
                                                <li>Item 2</li>
                                                <li>Item 3</li>
                                        </ul>
                                </td>
                        </tr>
                        <tr>
                                <td style="height: 20px;">
                                </td>
                        </tr>
                        <tr>
                                <td colspan="2">
                                        <p>
                                        Algum texto corrido de Exemplo Algum texto corrido de Exemplo Algum texto corrido de Exemplo
                                        Algum texto corrido de ExemploAlgum texto corrido de Exemplo
                                        Algum texto corrido de Exemplo Algum texto corrido de ExemploAlgum texto corrido de Exemplo Algum texto corrido de Exemplo
                                        Algum texto corrido de ExemploAlgum texto corrido de ExemploAlgum texto corrido de Exemplo
                                        Algum texto corrido de ExemploAlgum texto corrido de Exemplo Algum texto corrido de ExemploAlgum texto corrido de Exemplo
                                        </p>
                                        <button style="background-color: #3276b1; border: 1px solid #285e8e; padding:10px 16px; font-size:16px; color:#fff; border-radius:6px;">ALGUMA FUNÇÃO</button>
                                </td>
                                <td></td>
                        </tr>
                        <tr>
                                <td colspan="2" style="height: 20px;">
                                </td>
                        </tr>
                        <tr>
                                <td colspan="2" style="background-color:#eee;height: 15px;">
                                </td>
                        </tr>
                        <tr>
                                <td colspan="2" style="height: 20px;">
                                </td>
                        </tr>
                        <tr>
                                <td>
                                        <p> Em caso de dúvidas, entre em contato conosco:<br/> Rua Padre Marçal, 136 - Centro - São Roque - SP
                                        <br/> CEP: 18130-100 - Fone (11) 4712-3366</p>
                                </td>
                        </tr>
                        <tr>
                                <td colspan="2" style="background-color:#eee;height: 15px;">
                                </td>
                        </tr>
                        <tr>
                                <td colspan="2" style="height: 20px;">
                                </td>
                        </tr>
                        <tr>
                                <td>
                                        <p><strong>Atenciosamente</strong><br/> Ras Reviri Escritório Contábil</p>
                                </td>
                        </tr>
                        <tr style="background-color:#3055AB;">
                                <td colspan="2" style="height: 20px;">
                                </td>
                        </tr>
                        <tr style="background-color:#3055AB;">
                                <td align="center"colspan="2" style="color:#fff;">
                                        <p style="color:#fff; text-decoration:none;">www.rasreviri.com.br</p>
                                </td>
                        </tr>
                        <tr style="background-color:#3055AB;">
                                <td colspan="2" style="height: 20px;">
                                </td>
                        </tr>
                        </table>
			');
$this->email->send();
$this->load->template("email/resulta_email");
}}