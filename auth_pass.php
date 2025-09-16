<?php

include('tracker2/manager/include/conexao.php');

$email = $_REQUEST['email'];

$cons_email = mysqli_query($con,"SELECT * FROM clientes WHERE email='$email' ORDER BY id_cliente DESC LIMIT 1");
	if(mysqli_num_rows($cons_email) <= 0){
	header('Location: password.php?error=email');
	}
	if(mysqli_num_rows($cons_email) > 0){
		while ($resp_email = mysqli_fetch_assoc($cons_email)) {
		$email_cliente = 	$resp_email['email'];
		$nome_cliente = 	$resp_email['nome_cliente'];
		$id_cliente = 	$resp_email['id_cliente'];
	}}
?>

<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Rastrave Web - Alteração de Senha</title>
    <link rel="apple-touch-icon" href="/tracker2/app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="/tracker2/app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="/tracker2/app-assets/vendors/css/vendors.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="/tracker2/app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/tracker2/app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="/tracker2/app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="/tracker2/app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="/tracker2/app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="/tracker2/app-assets/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="/tracker2/app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="/tracker2/app-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="/tracker2/app-assets/css/pages/authentication.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="/tracker2/assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern semi-dark-layout 1-column  navbar-floating footer-static bg-full-screen-image  blank-page blank-page" data-open="click" data-menu="vertical-menu-modern" data-col="1-column" data-layout="semi-dark-layout">
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
			<form action="auth_mobile.php" method="post">
            <div class="content-body">
                <section class="row flexbox-container">
                    <div class="col-xl-7 col-10 d-flex justify-content-center">
                        <div class="card bg-authentication rounded-0 mb-0 w-100">
                            <div class="row m-0">
                                <div class="col-lg-6 d-lg-block d-none text-center align-self-center p-0">
                                    <img src="/tracker2/app-assets/images/pages/reset-password.png" alt="branding logo">
                                </div>
								
                                <div class="col-lg-6 col-12 p-0">
                                    <div class="card rounded-0 mb-0 px-2">
                                        <div class="card-header pb-1">
                                            <div class="card-title">
                                                <img src="/tracker2/Imagens/logo1.png" style="width:130px; height:auto"><br><br>
												<h4 class="mb-0"><?php echo $nome_cliente?></h4>
                                            </div>
                                        </div>
                                        <p class="px-2">Digite seu celular cadastrado.</p>
                                        <div class="card-content">
                                            <div class="card-body pt-1">
                                                <form>
                                                    <fieldset class="form-label-group">
                                                        <input type="number" class="form-control" name="telefone_celular" id="telefone_celular" required>
                                                        <label for="user-email">DDD+Número</label>
														<input type="hidden" class="form-control" name="id_cliente" id="id_cliente" value="<?php echo $id_cliente?>">
                                                    </fieldset>
													 
                                                    
                                                    <div class="row pt-2">
                                                      
                                                        <div class="col-12 col-md-6 mb-1">
                                                            <button type="submit" class="btn btn-primary btn-block px-0">Avançar</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
								
                            </div>
                        </div>
                    </div>
                </section>

            </div>
			</form>
        </div>
    </div>
    <!-- END: Content-->


    <!-- BEGIN: Vendor JS-->
    <script src="/tracker2/app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="/tracker2/app-assets/js/core/app-menu.js"></script>
    <script src="/tracker2/app-assets/js/core/app.js"></script>
    <script src="/tracker2/app-assets/js/scripts/components.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>