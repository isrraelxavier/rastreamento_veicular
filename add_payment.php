<?php
//header('Content-Type: application/json');

$servidor = "localhost";
$usuario = "root";
$senha = "TR4vcijU6T9Keaw";
$dbname = "traccar";
    
//Criar a conexao
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

$cons_nivel = mysqli_query($conn,"SELECT * FROM dados_empresa WHERE id_empresa='1361'");
	if(mysqli_num_rows($cons_nivel) > 0){
while ($resp_nivel = mysqli_fetch_assoc($cons_nivel)) {
$asaas_key = 	$resp_nivel['asaas_key'];
}}


$id_cliente = $_REQUEST['id_cliente'];
$url_pgto = $_REQUEST['url_pgto'];
$nr_cartao = $_REQUEST['nr_cartao'];
$nome_cartao = $_REQUEST['nome_cartao'];
$documento = $_REQUEST['documento'];
$mes = $_REQUEST['mes'];
$ano = $_REQUEST['ano'];
$cvv = $_REQUEST['cvv'];
$id_recorrencia = $_REQUEST['id_recorrencia'];
$id_asaas = $_REQUEST['id_asaas'];
$cep = $_REQUEST['cep'];
$numero = $_REQUEST['numero'];
$valor_cartao = $_REQUEST['valor_cartao'];
$pacote1 = $_REQUEST['pacote1'];
$email = $_REQUEST['email'];
$telefone = $_REQUEST['telefone'];
$data_transacao = $_REQUEST['data_transacao'];
$dia_vencimento = date('d', strtotime("$data_transacao"));


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
	
echo $endereco;

$description = 'Recorrencia: '.$id_recorrencia;

$token_card = $nr_cartao.'@'.$mes.'@'.$ano.'@'.$cvv.'@'.$documento.'@'.$nome_cartao;
$token_card = base64_encode($token_card);
	
	$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://www.asaas.com/api/v3/subscriptions");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);

curl_setopt($ch, CURLOPT_POST, TRUE);

curl_setopt($ch, CURLOPT_POSTFIELDS, "{
  \"customer\": \"$id_asaas\",
  \"billingType\": \"CREDIT_CARD\",
  \"nextDueDate\": \"$data_transacao\",
  \"value\": \"$valor_cartao\",
  \"cycle\": \"MONTHLY\",
  \"description\": \"$description\",
  \"creditCard\": {
    \"holderName\": \"$nome_cartao\",
    \"number\": \"$nr_cartao\",
    \"expiryMonth\": \"$mes\",
    \"expiryYear\": \"$ano\",
    \"ccv\": \"$cvv\"
  },
  \"creditCardHolderInfo\": {
    \"name\": \"$nome_cartao\",
    \"email\": \"$email\",
    \"cpfCnpj\": \"$documento\",
    \"postalCode\": \"$cep\",
    \"addressNumber\": \"$numero\",
    \"addressComplement\": null,
    \"phone\": \"$telefone\",
    \"mobilePhone\": \"$telefone\"
  }
}");

curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    "Content-Type: application/json",
    "access_token: $asaas_key"
));

$response = curl_exec($ch);
curl_close($ch);

$json = json_decode($response);
$registros = json_encode($json, JSON_PRETTY_PRINT);

echo $response;
//echo $registros;

$assinatura_asaas = $json->{'id'};


if($assinatura_asaas == ''){
	$retorno = explode("[", $response);
	$ret = $retorno[1];
	$retorno1 = explode("]", $ret);
	$ret1 = $retorno1[0];


	$dados = json_decode($ret1);
	$error_card = $dados->{'code'};
	$description = $dados->{'description'};

	header('Location: pagamento.php?p='.$url_pgto.'&transation=error&description='.$description.'');
}

if($assinatura_asaas != ''){
	$sql = mysqli_query($conn, "UPDATE recorrencia SET id_assinatura = '$assinatura_asaas', token_card='$token_card' WHERE id_recorrencia='$id_recorrencia'");
	
	$valor_cartao1 = number_format($valor_cartao, 2, ",", ".");
	
	$base64 = ''.$valor_cartao1.':'.$creditCardToken.'';
	
	$base64 = base64_encode($base64);
	
	header('Location: payment_confirm.php?p='.$base64.'');
}






	?>
	
	