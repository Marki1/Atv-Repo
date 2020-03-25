<?php
	session_start();
	if(isset($_POST['enviar'])){
	$data = $_POST;
	$_SESSION['data'] = $data;
	
	$_SESSION['data']['p'] = rand(1,999);

	$obr = ["n_requerente", "n_matricula", "data", "naturalidade", "filiacao", "curso", "periodo", "turno", "telefone_1", "email"];

	foreach ($obr as $value) {
		if(empty($_POST[$value])){
			flash_msg("O campo {$value} é obrigatorio!");
			return;
		}

		$_SESSION['data'][$value] = $_POST[$value];
	}

	if(!isset($_POST['opcoes']) || empty($_POST['opcoes'])){
		flash_msg("Assinale uma alternativa");		
		exit();
	}

	$_SESSION['data']['opcoes'] = $_POST['opcoes'];

	$esp = ["2_via", "declaracao", "diploma", "segunda_chamada", "trancamento_d", "validar", "outros" ];
	foreach ($esp as $value) {
		if($_POST["opcoes"] == $value){
			if(empty($_POST["especificar"])){
				flash_msg("Para a {$value} deve se preencher o campo de especificação!");
				exit();
			}
		}
	}

	$_SESSION['data']['especificar'] = $_POST['especificar'];

	$jus = ["segunda_chamada", "c_grau_especial", "matricula_prazo",];
	foreach ($jus as $value) {
		if($_POST["opcoes"] == $value){
			if(empty($_POST["justificar"])){
				flash_msg("Para a {$value} deve se preencher o campo de justificação!");
				exit();
			}
		}
	}

	$_SESSION['data']['justificar'] = $_POST['justificar'];
	
	
	$a = ["a_1", "a_2", "a_3", "a_4"];
	foreach ($a as $value) {
		if(empty($_POST["a_1"]) || empty($_POST["a_2"]) || empty($_POST["a_3"]) || empty($_POST["a_4"])){
			flash_msg("Todas as assinaturas devem ser preenchidas!");
		}

		$_SESSION['data'][$value] = $_POST[$value];
	}



	if(!isset($_POST["armario"])){
		flash_msg("Assinale VISTO (COORDENAÇÃO DE ASSUNTOS ESTUDANTIS)");		
		exit();
	}

	if($_POST["armario"] == "d"){
		if(empty($_POST["coo"])){
			flash_msg("Insira a(s) chave(s)");		
			exit();
		}
		$_SESSION['data']['coo'] = $_POST['coo'];
	}

	$_SESSION['data']['armario'] = $_POST['armario'];

	if(!isset($_POST["livro"])){
		flash_msg("Assinale VISTO (BIBLIOTECA)");		
		exit();
	}

	if($_POST["livro"] == "d"){
		if(empty($_POST["bibi"])){
			flash_msg("Insira o(s) livro(s)");		
			exit();
		}
		$_SESSION['data']['bibi'] = $_POST['bibi'];
	}

	$_SESSION['data']['livro'] = $_POST['livro'];

	}

	function flash_msg($msg, $redirect = "index.php"){
		$_SESSION['msg'] = "<div style='color: red; margin-top: 15px; margin-left: 30px'>{$msg}</div>";
		header("location: {$redirect}");
	}


	header("location: Formulario.html");