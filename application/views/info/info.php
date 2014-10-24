<script>
function carregaDados(idEmpresa){
    	// 'url' : base_url + '/' + controller + '/listarTelefonista2',
    	var base_url = "<?= base_url() ?>";
        var controller = "index.php/empresa";
        $.post(base_url + controller + '/infoForm/'+idEmpresa, {

        }, function (data){

            arrayTipoEmpresa = ['Empresário Individual', 'Sociedade Empresária Limitada', 'Sociedade Simples Limitada','Sociedade Simples Pura','Associação Privada','Cooperativa','Entidade Sindical','Empresa Individual de Responsabilidade LTDA','PF','MEI','SIMEI'];

            arrayEnquadramento = ['Enquadra na condição ME', 'Enquadra na condição de EPP', 'Reenquadra na condição de DE ME PARA EPP','Reenquadra na condição DE EPP PARA ME','Desenquadra da condição de ME-EPP','EIRELI'];

            arrayTributacao = ['Selecione','Lucro Presumido','Lucro Real','Simples Nacional','Outros'];

            arrayPagamentoImpostoRenda = ['Selecione','Trimestral','Mensal'];

            arrayFormaPagamento = [ 'Selecione','Cota única','Três Parcelas'];

            arrayPagadorImposto = ['Selecione','Escritório','Cliente'];

            arrayRamoAtividade = ['Indústria/Comércio','Indústria/Comércio/Servicos','Comércio','Comércio/Servicos','Micro Empresa','ME/Serviços','ME/Industria/Serviços','Prestação de Serviços'];

            arrayStatusEmpresa = ['ABERTA','FECHADA','EM ANDAMENTO','INATIVA','SEM MOVIMENTO','TRANSFERIDA PARA OUTRO ESCRITÓRIO'];

            arrayMatrizFilial = ['FILIAL','MATRIZ'];

            arrayAvisoEmail = [ 'Selecione','Sim','Não'];

            tipoEmpresa = trataInfo(arrayTipoEmpresa, data.tipoEmpresa);
            enquadramento = trataInfo(arrayEnquadramento, data.enquadramento);
            tributacao = trataInfo(arrayTributacao, data.tributacao);
            pagamentoImpostoRenda = trataInfo(arrayPagamentoImpostoRenda, data.pagamentoImpostoRenda);
            formaPagamento = trataInfo(arrayFormaPagamento, data.formaPagamento);
            pagadorImposto = trataInfo(arrayPagadorImposto, data.pagadorImposto);
            tipoEmpresa = trataInfo(arrayTipoEmpresa, data.tipoEmpresa);
            ramoAtividade = trataInfo(arrayRamoAtividade, data.ramoAtividade);
            statusEmpresa = trataInfo(arrayStatusEmpresa, data.statusEmpresa);
            matrizFilial = trataInfo(arrayMatrizFilial, data.matrizFilial);
            avisoEmail = trataInfo(arrayAvisoEmail, data.avisoEmail);



            $('#idEmpresa').html(idEmpresa);
            $('#tipoEmpresa').html(tipoEmpresa);
            $('#enquadramento').html(enquadramento);
            $('#tributacao').html(tributacao);
            $('#dataTributacao').html(data.dataTributacao);
            $('#pagamentoImpostoRenda').html(pagamentoImpostoRenda);
            $('#formaPagamento').html(formaPagamento);
            $('#pagadorImposto').html(pagadorImposto);
            $('#ramoAtividade').html(ramoAtividade);
            $('#statusEmpresa').html(statusEmpresa);
            $('#nContmatic').html(data.nContmatic);
            $('#cnpj').html(data.cnpj);
            $('.razaoSocial').html(data.razaoSocial);
            $('#nomeFantasia').html(data.nomeFantasia);
            $('#matrizFilial').html(matrizFilial);
            $('#inscricaoMunicipal').html(data.inscricaoMunicipal);
            $('#inscricaoEstadual').html(data.inscricaoEstadual);
            $('#telefone').html(data.telefone);
            $('#telefoneResidencial').html(data.telefoneResidencial);
            $('#celular').html(data.celular);
            $('#email').html(data.email);
            $('#cep').html(data.cep);
            $('#logradouro').html(data.logradouro);
            $('#logradouroComercial').html(data.logradouroComercial);
            $('#numero').html(data.numero);
            $('#complemento').html(data.complemento);
            // insereValor("#complemento", dado.complemento);
            $('#bairro').html(data.bairro);
            $('#municipio').html(data.municipio);
            $('#uf').html(data.uf);
            $('#atividade').html(data.atividade);
            $('#inicioAtividade').html(data.inicioAtividade);
            $('#dataAbertura').html(data.dataAbertura);
            $('#cnae').html(data.cnae);
            $('#codCetesb').html(data.codCetesb);
            $('#codVigilancia').html(data.codVigilancia);
            $('#codConselhoRegional').html(data.codConselhoRegional);
            $('#codJucesp').html(data.codJucesp);
            $('#codAlvaraBombeiro').html(data.codAlvaraBombeiro);
            $('#avisoEmail').html(avisoEmail);
        }, 'json');

}
function abrirModal(idEmpresa){
  carregaDados(idEmpresa);
  $('#modalEmpresa').modal('show');
}

</script>
<h1>Empresa</h1>
<br/>
<br/>
<div id="container">
  <table class="table table-striped table-hover table-responsive">
     <thead>
        <tr>
           <th>Razao Social</th>
           <th>Perfil</th>
           <th>Perfil Impresso</th>
       </tr>
   </thead>
   <tbody>
    <?php
    foreach($empresas as $empresa):
       ?>
   <tr>
       <td><?php echo $empresa['razaoSocial'];?></td>
       <td><a href="javascript:;" onclick="abrirModal(<?php echo $empresa['idEmpresa'] ?>)"><button class="btn btn-primary">Perfil</button></a></td>
       <td><?php echo anchor("empresa/infoImpresso/".$empresa['idEmpresa'],"Impressão", array("class" => "btn btn-info",'target'=>'_blank'));  ?></td>

   </tr>
   <?php
   endforeach;
   ?>
</tbody>
</table>
</div>
<div class="modal fade bs-example-modal-lg" id="modalEmpresa">
  <div class="modal-dialog modal-lg">
     <div class="modal-content">
        <div class="modal-header">
           <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Fechar</span></button>
           <h4 class="modal-title razaoSocial"></h4>
       </div>
       <div class="modal-body">
        <div class="panel panel-default">
           <div class="panel-heading"><h4>Dados Fiscais</h4></div>
           <table class="table table-bordered">
                        <!-- <tr>
                            <th colspan="2">Razão Social</th>
                            <strong><td colspan="3" class='razaoSocial' class="forte"></td>
                            </tr> -->
                            <tr>
                                <th>Tipo de Empresa</th>
                                <th colspan="2">Enquadramento</th>
                                <th>Tributação</th>
                                <th>Data da Tributação</th>
                            </tr>
                            <tr>
                                <td id='tipoEmpresa'></td>
                                <td colspan="2" id='enquadramento'></td>
                                <td id='tributacao'></td>
                                <td id='dataTributacao'></td>
                            </tr>
                            <tr>
                                <th>Pagamento do Imposto de Renda</th>
                                <th>Forma de Pagamento</th>
                                <th>Pagador do Imposto</th>
                                <th>Ramo de Atividade</th>
                                <th>Status da Empresa</th>
                            </tr>
                            <tr>
                                <td id='pagamentoImpostoRenda'></td>
                                <td id='formaPagamento'></td>
                                <td id='pagadorImposto'></td>
                                <td id='ramoAtividade'></td>
                                <td id='statusEmpresa'></td>
                            </tr>
                        </table>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading"><h4>Dados Empresa</h4></div>
                        <table class="table table-bordered">
                            <tr>
                                <th >CNPJ</th>
                                <th >Nome Fantasia</th>
                                <th colspan="2">Razão Social</th>
                            </tr>
                            <tr>
                                <td id='cnpj'></td>
                                <td id='nomeFantasia'></td>
                                <td colspan="2" class='razaoSocial'></td>
                            </tr>
                            <tr>
                                <th>NºContmatic</th>
                                <th>Matriz / Filial</th>
                                <th>Inscrição Estadual</th>
                                <th>Inscrição Municipal</th>
                            </tr>
                            <tr>
                                <td id='nContmatic'></td>
                                <td id='matrizFilial'></td>
                                <td id='inscricaoEstadual'></td>
                                <td id='inscricaoMunicipal'></td>
                            </tr>
                            <tr>
                                <th>Telefone</th>
                                <th>Telefone Residencial</th>
                                <th>Celular</th>
                                <th>E-mail</th>
                            </tr>
                            <tr>
                                <td id='telefone'></td>
                                <td id='telefoneResidencial'></td>
                                <td id='celular'></td>
                                <td id='email'></td>
                            </tr>
                        </table>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading"><h4>Endereço</h4></div>
                        <table class="table table-bordered">
                            <tr>
                                <th>CEP</th>
                                <th>Logradouro</th>
                                <th>Logradouro Comercial</th>
                                <th>numero</th>
                            </tr>
                            <tr>
                                <td id='cep'></td>
                                <td id='logradouro'></td>
                                <td id='logradouroComercial'></td>
                                <td id='numero'></td>
                            </tr>
                            <tr>
                                <th>Complemento</th>
                                <th>Bairro</th>
                                <th>Municipio</th>
                                <th>UF</th>
                            </tr>
                            <tr>
                                <td id='complemento'></td>
                                <td id='bairro'></td>
                                <td id='municipio'></td>
                                <td id='uf'></td>
                            </tr>
                        </table>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading"><h4>Atividade da Empresa</h4></div>
                        <table class="table table-bordered">
                            <tr>
                                <th>Atividade</th>
                                <th>Orgão</th>
                                <th>Inicio de Atividade</th>
                                <th>Data de Abertura</th>
                                <th>CNAE</th>
                            </tr>
                            <tr>
                                <td id='atividade'></td>
                                <td id='orgao'></td>
                                <td id='inicioAtividade'></td>
                                <td id='dataAbertura'></td>
                                <td id='cnae'></td>
                            </tr>
                        </table>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading"><h4>Orgãos</h4></div>
                        <table class="table table-bordered">
                            <tr>
                                <th>Cod. CETESB</th>
                                <th>Cod. Vig. Sanitária</th>
                                <th>Cod. Cons. Regional</th>
                                <th>Cod. JUCESP</th>
                                <th>Cod. Alv. Bombeiro</th>
                            </tr>
                            <tr>
                                <td id='codVigilancia'></td>
                                <td id='codConselhoRegional'></td>
                                <td id='codCetesb'></td>
                                <td id='codAlvaraBombeiro'></td>
                                <td id='codCetesb'></td>
                            </tr>
                        </table>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading"><h4>Aviso por E-mail</h4></div>
                        <table class="table table-bordered">
                            <tr>
                                <th>Aviso por E-mail</th>
                            </tr>
                            <tr>
                                <td id='avisoEmail'></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="modal-footer">
                 <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                 <!-- <button type="button" class="btn btn-primary" onclick="$('#formularioEmpresa').submit()">Salvar Alterações</button> -->
             </div>
         </div><!-- /.modal-content -->
     </div><!-- /.modal-dialog -->
   </div><!-- /.modal -->