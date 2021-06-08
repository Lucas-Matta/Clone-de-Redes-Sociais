<!DOCTYPE html>
<html>
<head>
	<title>Projeto Prático 02 Facebook</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0">
	<meta name="description" content="descricao-site">
	<meta name="keywords" content="palavras-chaves">
	<meta name="author" content="Lucas Matta">
	<link href="estilo/style.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400&display=swap" rel="stylesheet">
</head>
<body>

	<header>
		<div class="center">
			<div class="logo">
				<h2>Facebook</h2>
			</div><!-- LOGO -->

			<form method="post" class="form-login">
				<div class="form-element">
					<p>Email ou Telefone</p>
					<input type="email" name="E-mail" required="">
				</div><!-- FORM ELEMENT -->
				
				<div class="form-element">
					<p>Senha</p>
					<input type="password" name="Senha" required="">
				</div><!-- FORM ELEMENT -->
				<div class="form-element">
					<input type="submit" name="acao" value="Entrar">
				</div><!-- FORM ELEMENT -->
			</form><!-- FORM -->

		<div class="clear"></div>
		</div><!-- CENTER -->
	</header>


	<section class="main">
		<div class="center">
			<div class="img-pessoas">
				<p>O Facebook ajuda você a se conectar e compartilhar com as pessoas que fazem parte da sua vida.</p>
				<img src="images/img1.png">
			</div><!-- IMG PESSOAS -->
			<div class="abrir-conta">
				<h2>Abra sua Conta!</h2>
				<h3>É rápido e fácil.</h3>
				<form class="criar-conta">

					<div class="w50">
						<input placeholder="Nome" type="text" name="">
					</div><!-- W50 -->

					<div class="w50">
						<input placeholder="Sobrenome" type="text" name="">
					</div><!-- W50 -->

					<div class="w100">
						<input placeholder="Celular ou email" type="email" name="">
					</div><!-- W100 -->

					<div class="w100">
						<input placeholder="Nova senha" type="password" name="">
					</div><!-- W100 -->


					<div class="w100">
						<h2 class="data-nascimento">Data de Nascimento</h2>
						<select name="nascimento-dia" class="nascimento">
							<?php
								for($i = 1; $i <= 31; $i++){
							?>
							<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
							<?php } ?>
						</select>
						<select name="nascimento-mes" class="nascimento">
							<option value="0">Janeiro</option>
							<option value="0">Fevereiro</option>
							<option value="0">Março</option>
							<option value="0">Abril</option>
							<option value="0">Maio</option>
							<option value="0">Junho</option>
							<option value="0">Julho</option>
							<option value="0">Agosto</option>
							<option value="0">Setembro</option>
							<option value="0">Outubro</option>
							<option value="0">Novembro</option>
							<option value="0">Dezembro</option>
						</select>
						<select name="nascimento-ano" class="nascimento">
							<?php
								for($i = 1960; $i <= 2020; $i++){
							?>
							<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
							<?php } ?>
						</select><!-- SELECT NASCIMENTO -->
						<div class="clear"></div><!-- CLEAR BOTH -->
					</div><!-- W100 -->

					<div class="w100">
						<div class="input-radio">
							<input type="radio" value="Masculino" name="sexo">
							<h2>Masculino</h2>
						</div><!-- INPUT RADIO -->
						<div class="input-radio">
							<input type="radio" value="Feminino" name="sexo">
							<h2>Feminino</h2>
						</div><!-- INPUT RADIO -->
						<div class="input-radio">
							<input type="radio" value="Personalizado" name="sexo">
							<h2>Personalizado</h2>
						</div><!-- INPUT RADIO -->
						<div class="clear"></div><!-- CLEAR BOTH -->
					</div><!-- W100 -->


					<div class="w100">
						<p style="color: #777;font-size: 14px;display: inline-block;width: 100%;" class="texto-top">Ao clicar em Cadastre-se, você concorda com nossos Termos, Política de Dados e Política de Cookies. Você pode receber notificações por SMS e pode cancelar isso quando quiser</p>
						<input type="submit" name="acao" value="Cadastrar">
					</div><!-- W100 -->

					<div class="clear"></div><!-- CLEAR BOTH -->
				</form><!-- FORM ABRIR-CONTA -->
			</div><!-- ABRIR-CONTA -->
		<div class="clear"></div><!-- CLEAR BOTH -->
		</div><!-- CENTER -->
	</section><!-- MAIN -->


	<section class="linguas">
		<div class="center">
			<a class="select-lingua" href="">Portugues (BR)</a>
			<a href="">English (US)</a>
			<a href="">Español </a>
			<a href="">Français (France)</a>
			<a href="">Italiano </a>
		</div><!-- CENTER -->
		<div class="center">
			<a href="">Cadastre-se</a>
			<a href="">Entrar</a>
			<a href="">Messenger</a>
			<a href="">Facebook Lite</a>
			<a href="">Grupos</a>
			<a href="">Watch</a>
			<a href="">Pessoas</a>
			<a href="">Páginas</a>
			<a href="">Locais</a>
			<a href="">Jogos</a>
			<a href="">Portal</a>
			<a href="">Instagram</a>
			<a href="">Local</a>
			<a href="">Privacidade</a>
			<a href="">Cookies</a>
			<a href="">Termos</a>
			<a href="">Ajuda</a>
			<a href="">Anúncios</a>
			<a href="">Termos</a>
			<a href="">Ajuda</a>
			<a href="">Campanhas</a>
			<a href="">Serviços</a>
			<a href="">Sobre</a>
			<a href="">Criar Anúncios</a>
			<a href="">Criar Páginas</a>
			<a href="">Desenvolvedores</a>
			<a href="">Carreiras</a>
			<a href="">Lorem Ipsum</a>
			<a href="">Lorem Ipsum</a>
			<a href="">Lorem Ipsum</a>
			<a href="">Lorem Ipsum</a>
			<a href="">Lorem Ipsum</a>
			<a href="">Lorem Ipsum</a>
			<a href="">Lorem Ipsum</a>
			<a href="">Lorem Ipsum</a>
		</div><!-- CENTER -->
	</section><!-- LINGUAS -->

</body>
</html>