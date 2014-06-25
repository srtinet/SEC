	
<p class="alert-success">  <?php echo $this->session->flashdata('success'); ?></p>
		<p class="alert-danger">  <?php echo $this->session->flashdata('danger'); ?></p>

	<h1>Login</h1>
	<?php 
	echo form_open("login/autenticar");
	echo form_label("Email","usuario");
	echo form_input(array("name"=>"usuario","class"=>"form-control","id"=>"usuario" , "maxlength"=>"255"));

	echo form_label("Senha","senha");
	echo form_password(array("name"=>"senha","class"=>"form-control","id"=>"senha" , "maxlength"=>"255"));
	echo form_button(array("class"=>"btn btn-primary","content"=>"Login","type"=>"submit"));
	echo form_close();


	?>