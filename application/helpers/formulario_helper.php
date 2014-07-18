<?php
function DataPicker($name,$label='',$value=''){
	$datepicker=	'';
	$datepicker.=form_label($label,$name);
	$datepicker.= '<div id="datepicker" class="picker input-group">';
	$datepicker.= form_input(array("name"=>$name,"class"=>"form-control","id"=>$name ,"value"=>$value, "data-format"=>"dd/MM/yyyy", "maxlength"=>"255"));
	$datepicker.= '<span class="input-group-addon add-on btn-primary glyphicon glyphicon-calendar"></span>';
	$datepicker.='</div>';
	return  $datepicker;
}

function inputText($name, $label='', $value=''){
	$input= '';
	$input.= form_label($label,$name);
	$input.= form_input(array("name"=>$name,"class"=>"form-control","id"=>$name ,"value"=>$value,  "maxlength"=>"255"));
	return $input;
}

function inputTextArea($name, $label='', $value=''){
	$input= '';
	$input.= form_label($label,$name);
	$input.= form_textarea(array("name"=>$name,"class"=>"form-control","id"=>$name ,"value"=>$value,  "rows"=>"4"));
	return $input;
}

function inputPass($name, $label='', $value=''){
	$input= '';
	$input.= form_label($label,$name);
	$input.= form_password(array("name"=>$name,"class"=>"form-control","id"=>$name ,"value"=>$value,  "maxlength"=>"255"));
	
	return $input;
}

function inputList($name, $label='', $options=array(), $value=''){
	$input='';
	$input.= form_label($label,$name);
	$input.= form_dropdown($name, $options,$value,'class="form-control" id="'.$name.'"');
	return $input;
}
