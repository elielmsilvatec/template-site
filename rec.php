<?php 
ob_start();

$nome = filter_input(INPUT_POST, 'nome');
$cpf = filter_input(INPUT_POST, 'cpf');
?>

<h1> <?php echo $nome ?> </h1>
<h4><?php echo $cpf; ?> </h4>

<?php 
$html = ob_get_contents();
ob_end_clean();

require 'vendor/autoload.php';

$mpdf = new Mpdf\Mpdf();
$mpdf->WriteHTML($html);

// I - abra no browser (padrão)
// D - Faz o download
// F - Salva no servidor

$mpdf->output();

$nome_arquivo = substr(strrchr($link, '/'),1);
?>
 
