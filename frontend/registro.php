<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Loop</title>

	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">
	<link rel="stylesheet" href="css/fontawesome-all.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/magnific-popup.css"/>
	<link rel="stylesheet" type="text/css" href="slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
	<link rel="stylesheet" href="css/tooplate-style.css">
	<link rel="icon" type="image/x-icon" href="img/favicon/favicon-32x32.png">
	<?php include_once('includes/modal.php')?>
	<script>
		var renderPage = true;

	if(navigator.userAgent.indexOf('MSIE')!==-1
		|| navigator.appVersion.indexOf('Trident/') > 0){
   		/* Microsoft Internet Explorer detected in. */
   		alert("Please view this in a modern browser such as Chrome or Microsoft Edge.");
   		renderPage = false;
	}

	const handlePhone = (event) => {
		let input = event.target
		input.value = phoneMask(input.value)
	}

	const phoneMask = (value) => {
		if (!value) return ""
		value = value.replace(/\D/g,'')
		value = value.replace(/(\d{2})(\d)/,"($1) $2")
		value = value.replace(/(\d)(\d{4})$/,"$1-$2")
		return value
	}
	</script>
</head>

<body class="registrobg">
	<!-- Loader -->
	<div id="loader-wrapper">
		<div id="loader"></div>
		<div class="loader-section section-left"></div>
		<div class="loader-section section-right"></div>
	</div>
	
	<!-- Page Content -->
	<div class="container-fluid tm-main">
		<div class="row tm-main-row">

			<?php include_once('includes/sidebar.php') ?>
			
            <div class="col-xl-6 col-lg-4 col-md-6 col-sm-6 tm-content justify-content-md-center">
                <form method="post" name="registro" action="../backend/inserir.php" id="registro">
					<input type="hidden" value="1" name="registro" id="registro">
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" id="nome" placeholder="Insira o nome do usuario" name="nome">
                    </div>
					<div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" class="form-control" id="email" placeholder="Insira o seu e-mail" name="email">
                    </div>
					<div class="form-group">
						<label for="telefone">Telefone</label>
						<input type="tel" maxlength="15" class="form-control" id="telefone" onkeyup="handlePhone(event)" placeholder="Insira o seu telefone" name="telefone">
					</div>
                    <div class="form-group">
                        <label for="senha">Senha</label>
                        <input type="password" class="form-control" id="senha" placeholder="Senha" name="senha">
                    </div>
					<div class="form-group">
                        <label for="confirmpassword">Confirmar senha</label>
                        <input type="password" class="form-control" id="confirmpassword" placeholder="Confirmar senha"  name="confirmpassword">
                    </div>
                    <button type="submit" class="btn btn-primary">Criar conta</button>
                </form>
            </div>  
        </div>      
        
		<div id="preload-01"></div>
		<div id="preload-02"></div>
		<div id="preload-03"></div>
		<div id="preload-04"></div>

		<?php 
	
	include_once('includes/scripts.php')?>

	</body>
</html>