<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login Facebook</title>
	<link rel="shortcut icon" type="image-x/png" href="iconeFB.ico">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">
	<link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<header>
		<div class="center">
			<div class="logo">
				<h2>Facebook</h2>
			</div> <!-- logo face -->
			<form method="post" class="form-login">
				<div class="form-element">
					<p>Email ou Telefone:</p>
					<input type="email" name="email">
				</div> <!-- form do header-->
				<div class="form-element">
					<p>Senha:</p>
					<input type="password" name="senha">
				</div> <!-- form do header-->
				<div class="form-element">
					<input type="submit" name="acao" value="Enviar">
				</div> <!-- form do header-->
			</form> <!-- form login-->
			<div class="clear"></div>
		</div> <!-- center -->
	</header> <!-- cabeçalho-->

	<section class="main">
		<div class="center">
			<div class="img-pessoas">
				<h3>O Facebook ajuda você a se conectar e compartilhar 
				com as pessoas que fazem parte da sua vida.</h3>
				<img src="img1.png">
			</div><!-- imagem pessoas-->
			<div class="abrir-conta">
				<h1>Abra uma conta</h1>
				<h3>É gratuito e sempre será!</h3>
				<form class="criar-conta">
					<div class="w50">
						<input type="text" placeholder="Nome" name="nome">
					</div> <!--w50?-->
					<div class="w50">
						<input type="text" placeholder="Sobrenome" name="sobrenome">
					</div> <!--w50?-->
					<div class="w100">
						<input type="email" placeholder="Email ou Telefone" name="email">
					</div> <!--w100?-->
					<div class="w100">
						<input type="password" placeholder="Senha" name="senha">
					</div> <!--w50?-->
					<div class="w100">
						<h2>Data de Nascimento</h2>
						<select name="nascimento-dia" class="nascimento"> na
							<?php
								for($i =1; $i <= 31; $i++){
							?>
							<option value="<?php echo $i; ?>"><?php echo $i?></option>
						<?php }?>
						</select>
						<select name="nascimento-mes" class="nascimento"> na
							<option value="1">Janeiro</option>
							<option value="2">Fevereiro</option>
							<option value="3">Março</option>
							<option value="4">Abril</option>
							<option value="5">Maio</option>
							<option value="6">Junho</option>
							<option value="7">Julho</option>
							<option value="8">Agosto</option>
							<option value="9">Setembro</option>
							<option value="10">Outubbro</option>
							<option value="11">Novembro</option>
							<option value="12">Dezembro</option>
						</select>
						<select name="nascimento-ano" class="nascimento"> na
							<?php
								for($i =1960; $i <= 2021; $i++){
							?>
							<option value="<?php echo $i; ?>"><?php echo $i?></option>
						<?php }?>
						</select>
					</div><!-- data de nascimento-->
					<div class="w100">
						<div class="clear"></div>
							<div class="input-radio">
							 <input type="radio" name="sexo" value="masculino">
							  <h2>Masculino</h2>
							</div>
						     <div class="input-radio">
							<input type="radio" name="sexo" value="feminino">
							<h2>Feminino</h2>
							</div>
						 </div> <!-- checkbox-->
						<div class="clear"></div>
						<input type="submit" name="acao" value="Cadastre-se">
					</div> <!--botao cadastrar-->
				</form> <!--criando a conta-->
			</div> <!--abrir conta-->
			<div class="clear"></div>
		</div> <!-- tudo no centro-->		
	</section> <!-- corpo do site-->

	<section class="linguas">
		<div class="center">
			<a class="selected-lingua" href="#">Português (BR)</a>
			<a  href="#">English (US)</a>
			<a  href="#">Español</a>
			<a  href="#">Français (France)</a>
			<a  href="#">Italiano</a>
			<a  href="#">Deutsch</a>
			<a  href="#">عربي</a>
			<a  href="#">日本語（日本）</a>
			<a  href="#">中国語 </a>

		</div> <!-- rodape centro-->
		
	</section> <!--linguas do rodape-->
</body>
</html>