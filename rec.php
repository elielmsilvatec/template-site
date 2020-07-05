<html lang="pt-br">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">	
	<title>Curruclum ideal</title>
</head>
<body>
	<?php 
	ob_start();
	// AQUI ESTÁ RECEBENDO OS DADOS DO FORMULÁRIO
	$nome = filter_input(INPUT_POST, 'nome');
	$cpf = filter_input(INPUT_POST, 'cpf');
	?>
	<!-- CÓDIGO DO CORPO DO HTML -->
	<h1 style="color: red; text-align: center;"> <?php echo $nome ?> </h1>
	<h4><?php echo $cpf; ?> </h4>



	<!-- CONVERTENDO O HTML EM PDF -->
	<?php 
	$html = ob_get_contents();
	ob_end_clean();
	require 'vendor/autoload.php';
	$mpdf = new Mpdf\Mpdf();
	$mpdf->WriteHTML($html);
	$mpdf->output();
	$nome_arquivo = substr(strrchr($link, '/'),1);
	?>

</body>
</html>









