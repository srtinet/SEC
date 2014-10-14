<?php
	function trata($array=array(), $cont, $trata){
		for ($i=0; $i < $cont; $i++) { 
			if($trata == ($i+1)){
				$trata = $array[$i];
			}
		}
		return $trata;
	}