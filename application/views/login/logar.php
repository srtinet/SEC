	
<p class="alert-success">  <?php echo $this->session->flashdata('success'); ?></p>
<p class="alert-danger">  <?php echo $this->session->flashdata('danger'); ?></p>

<h1>Login</h1>
<?php 
echo form_open("login/autenticar");
echo inputText("usuario", "Email");
echo inputPass("senha", "Senha");
echo form_button(array("class"=>"btn btn-primary","content"=>"Login","type"=>"submit"));
echo form_close();


?>