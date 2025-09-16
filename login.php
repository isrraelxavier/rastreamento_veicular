<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>MEU PASSE | Login</title>

   
<script src="https://kit.fontawesome.com/a132241e15.js"></script>
    <link href="/tracker/css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="/tracker/css/animate.css" rel="stylesheet">
    <link href="/tracker/css/style.css" rel="stylesheet">

</head>
<style>
body{
     background-image: url(/tracker/Imagens/word_map.png);
	 background-repeat: no-repeat;
	 background-position: top center;
	
}
</style>


<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>

                <img src="https://rastraveweb.com.br/Imagens/logos/MeuPasse.png" style="width:100%; height:auto">

            </div><br>
            <h3><span style="color:#000"><b>SISTEMA DE GESTÃO DE VEÍCULOS</b></span></h3><br>
            
            
            <p><b>Digite seus dados de acesso.</b></p>
            <form class="m-t" role="form" action="entra.php" method="post">
                <div class="form-group">
                    <div class="input-group date">
						<span class="input-group-addon"><i class="fas fa-user"></i></span><input type="text" class="form-control" name="usuario" id="usuario" placeholder="Usuário" autocomplete="off"  type="text" required>
					</div>
                </div>
                <div class="form-group">
                   <div class="input-group date">
						<span class="input-group-addon"><i class="fas fa-key"></i></span><input type="password" class="form-control" name="senha" id="senha" placeholder="Senha" autocomplete="off"  type="text" required>
					</div>
                </div>
                <button type="submit" class="btn btn-success block full-width m-b">Login</button>

               
              
              
            </form>
			
			
			<?php
		$date = date('Y-m-d');
		$error = $_GET['error'];
		if($error == 'login'){

		?>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script>
					$(document).ready(function(){
						$('#nova_conta').modal('show');
					});
				</script>
			<?php } ?>
			<div class="modal fade" id="nova_conta" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered" role="document">
					<div class="modal-content">
						<div class="modal-body text-center font-18">
							<h3 class="mb-20">Erro!</h3>
							<div class="mb-30 text-center"><img src="Imagens/cross.png"></div><br><br>
							Usuário ou senha inválidos!
						</div>
						<div class="modal-footer justify-content-center">
							
							<button type="button" class="btn btn-dark" data-dismiss="modal">Tentar Novamente</button>
						</div>
					</div>
				</div>
			</div>
			
				<?php
		$date = date('Y-m-d');
		$active = $_GET['active'];
		if($active == 'error'){

		?>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script>
					$(document).ready(function(){
						$('#erro_login').modal('show');
					});
				</script>
			<?php } ?>
			<div class="modal fade" id="erro_login" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered" role="document">
					<div class="modal-content">
						<div class="modal-body text-center font-18">
							<h3 class="mb-20">Erro!</h3>
							<div class="mb-30 text-center"><img src="Imagens/cross.png"></div><br><br>
							Acesso Bloqueado! Contate o Suporte.
						</div>
						<div class="modal-footer justify-content-center">
							
							<button type="button" class="btn btn-dark" data-dismiss="modal">OK</button>
						</div>
					</div>
				</div>
			</div>
			
			
            <p class="m-t"><b><a href="../password.php">Esqueci a Senha</b></a></p>
			
			
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="/tracker/js/jquery-3.1.1.min.js"></script>
    <script src="/tracker/js/popper.min.js"></script>
    <script src="/tracker/js/bootstrap.js"></script>

</body>

</html>
