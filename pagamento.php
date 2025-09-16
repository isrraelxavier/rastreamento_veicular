<?php
$servidor = "localhost";
$usuario = "root";
$senha = "TR4vcijU6T9Keaw";
$dbname = "traccar";
    
//Criar a conexao
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

$ano = date('Y');

$base64 = $_GET['p'];

$data_base = base64_decode($base64);

$base = explode(":", $data_base);
$id_cliente = $base[0];
$id_recorrencia = $base[1];
$data_transacao = $base[2];
$data_transacao2 = date('d/m/Y', strtotime("$data_transacao"));




$cons_cliente = mysqli_query($conn,"SELECT * FROM clientes WHERE id_cliente='$id_cliente'");
	if(mysqli_num_rows($cons_cliente) > 0){
		while ($resp_cliente = mysqli_fetch_assoc($cons_cliente)) {
			$nome_cliente = 	$resp_cliente['nome_cliente'];
			$doc_cliente = 	$resp_cliente['doc_cliente'];
			$rg_cliente	 = 	$resp_cliente['rg_cliente'];
			$data_nascimento = 	$resp_cliente['data_nascimento'];
			$data_nascimento = date('d/m/Y', strtotime("$data_nascimento"));
			$cep = 	$resp_cliente['cep'];
			$endereco = 	$resp_cliente['endereco'];
			$numero = 	$resp_cliente['numero'];
			$complemento = 	$resp_cliente['complemento'];
			$bairro = 	$resp_cliente['bairro'];
			$cidade = 	$resp_cliente['cidade'];
			$estado = 	$resp_cliente['estado'];
			$telefone_residencial = 	$resp_cliente['telefone_residencial'];
			$telefone = 	$resp_cliente['telefone_celular'];
			$telefone_cel = preg_replace("/[^0-9]/", "", $telefone_celular);
			$id_asaas = 	$resp_cliente['id_asaas'];
			$email = 	$resp_cliente['email'];
	}}

$cons_recorrencia = mysqli_query($conn,"SELECT * FROM recorrencia WHERE id_recorrencia='$id_recorrencia'");
	if(mysqli_num_rows($cons_recorrencia) > 0){
		while ($resp_recorrencia = mysqli_fetch_assoc($cons_recorrencia)) {
			$valor = 	$resp_recorrencia['valor'];
	}}

?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="link de Pagamento Online - Site Seguro">
    <title>Rastrave - Link de Pagamento</title>
    <link rel="apple-touch-icon" href="http://mobidrive.com.br/m2m/app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="m2m/app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="https://mobidrive.com.br/m2m/app-assets/vendors/css/vendors.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="https://mobidrive.com.br/m2m/app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://mobidrive.com.br/m2m/app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="https://mobidrive.com.br/m2m/app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="https://mobidrive.com.br/m2m/app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="https://mobidrive.com.br/m2m/app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="https://mobidrive.com.br/m2m/app-assets/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="https://mobidrive.com.br/m2m/app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="https://mobidrive.com.br/m2m/app-assets/css/core/colors/palette-gradient.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="https://mobidrive.com.br/m2m/assets/css/style.css">
    <!-- END: Custom CSS-->
<script src="https://kit.fontawesome.com/a132241e15.js"></script>
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern semi-dark-layout 1-column  navbar-floating footer-static bg-full-screen-image  blank-page blank-page" data-open="click" data-menu="vertical-menu-modern" data-col="2-column" data-layout="semi-dark-layout">
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
             <div class="content-header row">
                <div class="content-header-center col-md-11 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                           
                        </div>
                    </div>
                </div>
               
            </div>
            <div class="content-body ">
                <!-- maintenance -->
				  <form name="forml" id="forml" class="steps-validation wizard-circle">
                 <section id="validation">
                    <div class="row ">
						<div class="col-md-1">
                           
                        </div>
                        <div class="col-md-10">
                            <div class="card">
                               
                                <div class="card-content">
                                    <div class="card-body ">
                                      
											<div class="row">
												
												<div class="col-md-4">
													<img src="https://rastraveweb.com.br/tracker/Imagens/logo2.png" style="width:180px;height:auto;">
												</div><br>
												<div class="col-md-8">
													<p><b>RASTRAVE RASTREAMENTO</b><br>
													<b>CNPJ:</b> 28.644.646/0001-20<br>
													<b>Telefone:</b> (85) 9220-0934<br>
													R Raquel Nunes Bezerra, 88 / SL 02 - Centro<br>
													Pacajus / CE
													</p>
													
												</div>
											</div>
											<hr>
											<div class="row" style="border:#CCC 1px solid;">
												<div class="col-md-12">
													<div class="row">
														<div class="col-md-11 text-center">
														<p><b>DADOS DO PRODUTO/SERVIÇO</b></p>
														</div>
													</div>
													<div class="row">
														<div class="col-md-6">
															<h3 style="color:#00008B"><?php echo $pacote1?></h3>
															<h4>R$ <?php echo $valor?></h4>
															<p>Mensalidade <?php echo $pacote1?></p>
														</div>
														<div class="col-md-6">
															<h4 style="color:#00008B">Débito Primeira Mensalidade</h4>
															<h4><?php echo $data_transacao2?></h4>
															
														</div>
													</div>
												</div>
											</div>
											<hr>
											<div class="row" style="border:#CCC 1px solid;">
												<div class="col-md-12">
													<div class="row">
														<div class="col-md-11 text-center">
														<p><b>DADOS DO CLIENTE</b></p>
														</div>
													</div>
													<div class="row">
														<div class="col-md-11">
															<h4 style="color:#00008B"><?php echo $id_asaas?></h4>
															<p><?php echo $email?></p>
														</div>
													</div>
													<div class="row">
														<div class="col-md-11">
															<p><?php echo $endereco?>, <?php echo $numero?></p>
															<p><?php echo $bairro?> - <?php echo $cidade?>/<?php echo $estado?></p>
															<p><?php echo $email?></p>
														</div>
													</div>
												</div>
											</div>
											<hr>
											<div class="row" style="border:#CCC 1px solid;">
												<div class="col-md-12">
													<div class="row">
														<div class="col-md-11 text-center">
														<p><b>DADOS DO CARTÃO</b></p>
														</div>
													</div>
													<div class="row">
														<div class="col-md-11">
															<p>Bandeiras Aceitas</p>
															<img src="https://mobidrive.com.br/img/cartoes.png" style="width:400px;height:auto;">
														</div>
													</div>
													<div class="row">
														<div class="col-md-6">
															<label>Número do Cartão</label>
															<fieldset class="form-group position-relative has-icon-left input-divider-left">
																<input type="number" name="nr_cartao" id="nr_cartao" maxlength="16" class="form-control" required>
																<div class="form-control-position">
																	<i class="far fa-credit-card"></i>
																</div>
															</fieldset>
														</div>
													</div>
													<div class="row">
														<div class="col-md-6">
															<label>Nome do titular do cartão:</label>
															<fieldset class="form-group position-relative has-icon-left input-divider-left">
																<input type="text" name="nome_cartao" id="nome_cartao" class="form-control" required>
																<div class="form-control-position">
																	<i class="fas fa-user"></i>
																</div>
															</fieldset>
														</div>
													</div>
													<div class="row">
														<div class="col-md-6">
															<label>CPF/CNPJ titular do cartão:</label>
															<input type="number" name="documento" maxlength="14" id="documento" class="form-control" required>
														</div>
													</div><BR>
													<div class="row">
														<div class="col-md-1">
															<label>Validade</label>
															<select class="select2 form-control w-100" name="mes" id="mes" required>
																<option value="">Mês</option>
																<option value="01">01</option>
																<option value="02">02</option>
																<option value="03">03</option>
																<option value="04">04</option>
																<option value="05">05</option>
																<option value="06">06</option>
																<option value="07">07</option>
																<option value="08">08</option>
																<option value="09">09</option>
																<option value="10">10</option>
																<option value="11">11</option>
																<option value="12">12</option>
																</select>
														</div>
														<div class="col-md-1">
															<label>.</label>
															<select class="select2 form-control w-100" name="ano" id="ano" required>
																<option value="">Ano</option>
																<option value="<?php echo $ano?>"><?php echo $ano?></option>
																<option value="<?php echo $ano + 1;?>"><?php echo $ano + 1;?></option>
																<option value="<?php echo $ano + 2;?>"><?php echo $ano + 2;?></option>
																<option value="<?php echo $ano + 3;?>"><?php echo $ano + 3;?></option>
																<option value="<?php echo $ano + 4;?>"><?php echo $ano + 4;?></option>
																<option value="<?php echo $ano + 5;?>"><?php echo $ano + 5;?></option>
																<option value="<?php echo $ano + 6;?>"><?php echo $ano + 6;?></option>
																<option value="<?php echo $ano + 7;?>"><?php echo $ano + 7;?></option>
																<option value="<?php echo $ano + 8;?>"><?php echo $ano + 8;?></option>
																</select>
														</div>
														<div class="col-md-1">
															<label>CCV</label>
															<input type="number" name="cvv" id="cvv" maxlength="3" class="form-control" required>
															<input type="hidden" name="id_cliente" id="id_cliente" value="<?php echo $id_cliente?>" class="form-control">
															<input type="hidden" name="id_recorrencia" id="id_recorrencia" value="<?php echo $id_recorrencia?>" class="form-control">
															<input type="hidden" name="id_asaas" id="id_asaas" value="<?php echo $id_asaas?>" class="form-control">
															<input type="hidden" name="cep" id="cep" value="<?php echo $cep?>" class="form-control">
															<input type="hidden" name="numero" id="numero" value="<?php echo $numero?>" class="form-control">
															<input type="hidden" name="valor_cartao" id="valor_cartao" value="<?php echo $valor?>" class="form-control">
															<input type="hidden" name="pacote1" id="pacote1" value="Mensalidade <?php echo $pacote1?>" class="form-control">
															<input type="hidden" name="email" id="email" value="<?php echo $email?>" class="form-control">
															<input type="hidden" name="telefone" id="telefone" value="<?php echo $telefone?>" class="form-control">
															<input type="hidden" name="data_transacao" id="data_transacao" value="<?php echo $data_transacao?>" class="form-control">
															<input type="hidden" name="url_pgto" id="url_pgto" value="<?php echo $base64?>" class="form-control">
														</div>
													</div><br>
													
													
												</div><br>
											</div><br>
											<div class="row">
												<div class="col-md-6">
													<button type="button" onClick="atualiza()" class="btn btn-primary">Confirmar</button>
												</div>
											</div><br><br>
											<div class="row">
												<div class="col-md-12">
													<p>Esta cobrança é de responsabilidade única e exclusiva de RASTRAVE - RASTREAMENTO VEICULAR -  CNPJ 28.644.646/0001-20</p>
													<p>Esta fatura é intermediada por Asaas Bank</p>
												</div>
											</div>
											<div class="row">
												<div class="col-md-12 text-center">
													<img src="https://mobidrive.com.br/img/site-seguro.png" style="width:150px;height:auto;">
												</div>
											</div>
                                      
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
				  </form>
                <!-- maintenance end -->
				
				<div class="modal fade" id="carregar" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
					<div class="modal-dialog modal-sm modal-dialog-centered">
						<div class="modal-content">
							
							<div class="modal-body" id="informacoes">
								<span style="fonta-size:14px">Finalizando. Aguarde... </span>
							</div>
							
						</div>
					</div>
				</div>	
				
				
				 <?php
		$date = date('Y-m-d');
		$transation = $_GET['transation'];
		if($transation == 'error'){

		?>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script>
					$(document).ready(function(){
						$('#active').modal('show');
					});
				</script>
			<?php } ?>
			<div class="modal fade" id="active" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered" role="document">
					<div class="modal-content">
						<div class="modal-body text-center font-18">
							<h3 class="mb-20">NÃO AUTORIZADO!</h3>
							<div class="mb-30 text-center"><i class="fas fa-ban fa-3x" style="color:#990000"></i></div><br><br>
							Verifique as informações digitadas ou contate sua operadora do Cartão.
						</div>
						<div class="modal-footer justify-content-center">
							
							<button type="button" class="btn btn-dark" data-dismiss="modal">OK</button>
						</div>
					</div>
				</div>
			</div>
				
				
            </div>
        </div>
    </div>
    <!-- END: Content-->


    <!-- BEGIN: Vendor JS-->
    <script src="https://mobidrive.com.br/m2m/app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="https://mobidrive.com.br/m2m/app-assets/js/core/app-menu.js"></script>
    <script src="https://mobidrive.com.br/m2m/app-assets/js/core/app.js"></script>
    <script src="https://mobidrive.com.br/m2m/app-assets/js/scripts/components.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <!-- END: Page JS-->
			  <script>

  function atualiza(){
	  $('#carregar').modal('show');
document.forml.action="add_payment.php"
document.forml.method = 'POST';
document.forml.submit()
  }
  </script>  
</body>
<!-- END: Body-->

</html>