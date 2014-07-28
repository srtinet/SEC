function consultacep(cep){
	cep = cep.replace(/\D/g,"")
	url="http://cep.correiocontrol.com.br/"+cep+".js"
	s=document.createElement('script')
	s.setAttribute('charset','utf-8')
	s.src=url
	document.querySelector('head').appendChild(s)
}

function correiocontrolcep(valor){
	if (valor.erro) {
		alert('Cep não encontrado');
		return;
	};
	// '1'  => 'Acre - AC',
	// '2'  => 'Alagoas - ',
	// '3'  => 'Amapá - AP',
	// '4'  => 'Amazonas - AM',
	// '5'  => 'Bahia  - BA',
	// '6'  => 'Ceará - CE',
	// '7'  => 'Distrito Federal  - DF',
	// '8'  => 'Espírito Santo - ES',
	// '9'  => 'Goiás - GO',
	// '10' => 'Maranhão - MA',
	// '11' => 'Mato Grosso - MT',
	// '12' => 'Mato Grosso do Sul - MS',
	// '13' => 'Minas Gerais - MG',
	// '14' => 'Paraíba - PB',
	// '15' => 'Paraná - PR',
	// '16' => 'Piauí - PI',
	// '17' => 'Rio de Janeiro - RJ',
	// '18' => 'Rio Grande do Norte - RN',
	// '19' => 'Rio Grande do Sul - RS',
	// '20' => 'Rondônia - RO',
	// '21' => 'Roraima - RR',
	// '22' => 'Santa Catarina - SC',
	// '23' => 'São Paulo - SP',
	// '24' => 'Sergipe - SE',
	// '25' => 'Tocantins - TO'
	// document.getElementById('rua').value=valor.rua
	
	document.getElementById('bairro').value=valor.bairro
	document.getElementById('logradouro').value=valor.logradouro
	document.getElementById('municipio').value=valor.localidade
	document.getElementById('uf').value=valor.uf

	switch(valor.uf){
		case 'AC':
		valor.uf = 1;
		case 'AL':
		valor.uf = 2;
		case 'AP':
		valor.uf = 3;
		case 'AM':
		valor.uf = 4;
		case 'BA':
		valor.uf = 5;
		case 'CE':
		valor.uf = 6;
		case 'DF':
		valor.uf = 7;
		case 'ES':
		valor.uf = 8;
		case 'GO':
		valor.uf = 9;
		case 'MA':
		valor.uf = 10;
		case 'MT':
		valor.uf = 11;
		case 'MS':
		valor.uf = 12;
		case 'MG':
		valor.uf = 13;
		case 'PB':
		valor.uf = 14;
		case 'PR':
		valor.uf = 15;
		case 'PI':
		valor.uf = 16;
		case 'RJ':
		valor.uf = 17;
		case 'RN':
		valor.uf = 18;
		case 'RS':
		valor.uf = 19;
		case 'RO':
		valor.uf = 20;
		case 'RR':
		valor.uf = 21;
		case 'SC':
		valor.uf = 22;
		case 'SP':
		valor.uf = 23;
		case 'SE':
		valor.uf = 24;
		case 'TO':
		valor.uf = 25;
	}
}

// $(function()
// {
// 	$("#empregadaDomestica").change(function()
// 	{
// 		if($(this).val() == 1)
// 		{
// 			$(".caixaLista").show();
// 		}
// 		else
// 		{
// 			$(".caixaLista").hide();
// 		}
// 	});
// });


	function someElementos(valor1, valor2)
	{
		// alert($('dependente').val());
			if($('#'+valor1).val() == 1)
			{
				
				$('#'+valor2).show();
			}
			else
			{
				
				$('#'+valor2).hide();
			}
	};


