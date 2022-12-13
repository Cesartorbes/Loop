<!DOCTYPE html>
<html>
<head>
    <?php 
	include_once('includes/head.php');
	include_once('includes/musica.php')?>
</head>

<body>
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

		<?php include_once('includes/scripts.php')?>
		<script>
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
	</body>
</html>