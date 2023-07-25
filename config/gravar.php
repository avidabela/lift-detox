<?php  
//PEGA OS DADOS ENVIADOS PELO FORMULÁRIO 

$var = "$";
$asp = '"';
$titulo_principal = $_POST["titulo_principal"];
$descricao_principal = $_POST["descricao_principal"];
$keywords = $_POST["keywords"];
$url = $_POST["url"];
$nome_produto = $_POST["nome_produto"];


$kit_1_link_checkout = $_POST["kit_1_link_checkout"];
$kit_1_preco_a_vista = $_POST["kit_1_preco_a_vista"];
$kit_1_reais = $_POST["kit_1_reais"];
$kit_1_centavos = $_POST["kit_1_centavos"];
$kit_1_tabela = $_POST["kit_1_tabela"];
$kit_1_parcelas = $_POST["kit_1_parcelas"];
$kit_1_frete = $_POST["kit_1_frete"];
$kit_1_desconto = $_POST["kit_1_desconto"];

$kit_2_link_checkout = $_POST["kit_2_link_checkout"];
$kit_2_preco_a_vista = $_POST["kit_2_preco_a_vista"];
$kit_2_reais = $_POST["kit_2_reais"];
$kit_2_centavos = $_POST["kit_2_centavos"];
$kit_2_tabela = $_POST["kit_2_tabela"];
$kit_2_parcelas = $_POST["kit_2_parcelas"];
$kit_2_frete = $_POST["kit_2_frete"];
$kit_2_desconto = $_POST["kit_2_desconto"];

$kit_3_link_checkout = $_POST["kit_3_link_checkout"];
$kit_3_preco_a_vista = $_POST["kit_3_preco_a_vista"];
$kit_3_reais = $_POST["kit_3_reais"];
$kit_3_centavos = $_POST["kit_3_centavos"];
$kit_3_tabela = $_POST["kit_3_tabela"];
$kit_3_parcelas = $_POST["kit_3_parcelas"];
$kit_3_frete = $_POST["kit_3_frete"];
$kit_3_desconto = $_POST["kit_3_desconto"];

$kit_4_link_checkout = $_POST["kit_4_link_checkout"];
$kit_4_preco_a_vista = $_POST["kit_4_preco_a_vista"];
$kit_4_reais = $_POST["kit_4_reais"];
$kit_4_centavos = $_POST["kit_4_centavos"];
$kit_4_tabela = $_POST["kit_4_tabela"];
$kit_4_parcelas = $_POST["kit_4_parcelas"];
$kit_4_frete = $_POST["kit_4_frete"];
$kit_4_desconto = $_POST["kit_4_desconto"];


$link_rastreio = $_POST["link_rastreio"];
$zap = $_POST["zap"];
$zap_menssagem = $_POST["zap_menssagem"];

$pixel = $_POST["pixel"];
$pixel2 = $_POST["pixel2"];

$analytics1 = $_POST["analytics1"];
$analytics2 = $_POST["analytics2"];


//PREPARA O CONTEÚDO A SER GRAVADO 

$conteudo = "
<?php

//Configurações Da Página

".$var."titulo_principal = '$titulo_principal';
".$var."descricao_principal = '$descricao_principal';
".$var."keywords = '$keywords';
".$var."url = '$url';
".$var."nome_produto = '$nome_produto';

//Configurações De Checkouts


".$var."kit_1_link_checkout = '$kit_1_link_checkout';
".$var."kit_1_preco_a_vista = '$kit_1_preco_a_vista';
".$var."kit_1_reais = '$kit_1_reais';
".$var."kit_1_centavos = '$kit_1_centavos';
".$var."kit_1_tabela = '$kit_1_tabela';
".$var."kit_1_parcelas = '$kit_1_parcelas';
".$var."kit_1_frete = '$kit_1_frete';
".$var."kit_1_desconto = '$kit_1_desconto';

".$var."kit_2_link_checkout = '$kit_2_link_checkout';
".$var."kit_2_preco_a_vista = '$kit_2_preco_a_vista';
".$var."kit_2_reais = '$kit_2_reais';
".$var."kit_2_centavos = '$kit_2_centavos';
".$var."kit_2_tabela = '$kit_2_tabela';
".$var."kit_2_parcelas = '$kit_2_parcelas';
".$var."kit_2_frete = '$kit_2_frete';
".$var."kit_2_desconto = '$kit_2_desconto';

".$var."kit_3_link_checkout = '$kit_3_link_checkout';
".$var."kit_3_preco_a_vista = '$kit_3_preco_a_vista';
".$var."kit_3_reais = '$kit_3_reais';
".$var."kit_3_centavos = '$kit_3_centavos';
".$var."kit_3_tabela = '$kit_3_tabela';
".$var."kit_3_parcelas = '$kit_3_parcelas';
".$var."kit_3_frete = '$kit_3_frete';
".$var."kit_3_desconto = '$kit_3_desconto';

".$var."kit_4_link_checkout = '$kit_4_link_checkout';
".$var."kit_4_preco_a_vista = '$kit_4_preco_a_vista';
".$var."kit_4_reais = '$kit_4_reais';
".$var."kit_4_centavos = '$kit_4_centavos';
".$var."kit_4_tabela = '$kit_4_tabela';
".$var."kit_4_parcelas = '$kit_4_parcelas';
".$var."kit_4_frete = '$kit_4_frete';
".$var."kit_4_desconto = '$kit_4_desconto';

".$var."link_rastreio = '$link_rastreio';
".$var."zap = '$zap';
".$var."zap_menssagem = '$zap_menssagem';


".$var."pixel = ".$asp."$pixel".$asp.";
".$var."pixel2 = '$pixel2';

".$var."analytics1 = '$analytics1';
".$var."analytics2 = ".$asp."$analytics2".$asp.";


?>
"; 

//ARQUIVO TXT 
$arquivo = "config.php"; 

//TENTA ABRIR O ARQUIVO TXT 
if (!$abrir = fopen($arquivo, "w+")) { 
echo "Erro abrindo arquivo ($arquivo)"; 
exit; 
} 

//ESCREVE NO ARQUIVO TXT 
if (!fwrite($abrir, $conteudo)) { 
print "Erro escrevendo no arquivo ($arquivo)"; 
exit; 
} 

//FECHA O ARQUIVO  
fclose($abrir);

header('Location: ../') 
?>

