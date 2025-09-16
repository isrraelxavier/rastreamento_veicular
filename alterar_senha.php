<?php
include('tracker2/manager/include/conexao.php');  
	
	$senha = $_POST['senha'];
	$id_cliente = $_POST['id_cliente'];
	$senha = md5($senha);
   
	$alterar = mysqli_query($conn, "UPDATE usuarios SET senha='$senha' WHERE id_cliente='$id_cliente'");

   
   header('Location: password.php?error=success');
?>

