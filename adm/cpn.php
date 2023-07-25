<?php

session_start();
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
{
  unset($_SESSION['login']);
  unset($_SESSION['senha']);
  header('location:index.php');
  }

$logado = $_SESSION['login'];
?>

<?php include "../config/config.php" ?>
<!DOCTYPE html>
<html>
<head>

  <!-- CSS -->
  <link rel="stylesheet" href="../libs/css/bootstrap.min.css">
  <link rel="stylesheet" href="../libs/css/reseat.css">
  <link rel="stylesheet" type="text/css" href="../libs/css/css.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <!-- CSS -->

</head>

<body>
	<section id="adm">
		<div class="container">
			<div class="row justify-content-center aling-items-center">

				<form class="col-lg-8" action="../config/gravar.php" method="POST">

				  <!-- Titulo -->
				  <div class="form-group">
				    <label for="titulo_principal">
					    <i class="fas fa-heading"></i> TITULO DA PÁGINA
					</label>
				    <input type="text" name="titulo_principal" class="form-control" value="<?php echo $titulo_principal?>">
				  </div>

				  <br>

				  <!-- Descrição do site -->
				  <div class="form-group">
				    <label for="descricao_principal">
				    	<i class="fas fa-edit"></i> Descricao Principal
				    </label>
				    <textarea class="form-control" name="descricao_principal" rows="2"><?php echo $descricao_principal ?></textarea>
				  </div>

				  <br>

				  <!-- Palavras Para o google-->
				  <div class="form-group">
				    <label for="keywords">
				    	<i class="fas fa-key"></i> Palavras para o Google Separada por virgula
				    </label>
				    <input type="text" name="keywords" class="form-control" value="<?php echo $keywords?>">
				  </div>

				  <br>

				  <!-- URL -->
				  <div class="form-group">
				    <label for="url">
				    	<i class="fas fa-link"></i> URL atual
				    </label>
				    <input type="text" name="url" class="form-control" value="<?php echo $url;?>">
				  </div>

				  <br>

				  <!-- Nome Produto-->
				  <div class="form-group">
				    <label>
				    	<i class="fas fa-file-signature"></i> Nome Do Produto
				    </label>
				    <input type="text" name="nome_produto" class="form-control" value="<?php echo $nome_produto;?>">
				  </div>
				  <br><br><br>

				  <p>
				  	Configure os preços e links de acordo com a ordem do seu checkout.
				  </p>
				  <hr>

				  <!-- KIT 1 -->
				  <div class="form-group">
				    <label>
				    	<i class="fas fa-box"></i> CONFIGURAÇÕES DO 1º
				    </label>
				    <input type="text" name="kit_1_link_checkout" class="form-control" value="<?php echo $kit_1_link_checkout;?>">
				  </div>
				  <div class="form-row">

				  	<div class="col-lg-3 col-6 mt-3">
				    <label>PREÇO Á VISTA</label>
				    <input type="text" name="kit_1_preco_a_vista" class="form-control" value="<?php echo $kit_1_preco_a_vista;?>">
				    </div>
				    <div class="col-lg-2 col-6 mt-3">
				    <label>PARCELAS</label>
				    <select name="kit_1_parcelas" class="form-control">
				    	<option value="1x"><?php echo $kit_1_parcelas; ?></option>
				    	<option value="1x">1x</option>
				    	<option value="2x">2x</option>
				    	<option value="3x">3x</option>
				    	<option value="4x">4x</option>
				    	<option value="5x">5x</option>
				    	<option value="6x">6x</option>
				    	<option value="7x">7x</option>
				    	<option value="8x">8x</option>
				    	<option value="9x">9x</option>
				    	<option value="10x">10x</option>
				    	<option value="11x">11x</option>
				    	<option value="12x">12x</option>
				    </select>
				    </div>
				    <div class="col-lg-3 col-6 mt-3">
				    <label>VALOR EM REAIS</label>
				    <input type="text" name="kit_1_reais" class="form-control" value="<?php echo $kit_1_reais;?>">
				    </div>
				    <div class="col-lg-3 col-6 mt-3">
				    <label>VALOR EM CENTAVOS</label>
				    <input type="text" name="kit_1_centavos" class="form-control" value="<?php echo $kit_1_centavos;?>">
				    </div>
				    <div class="col-lg-3 col-6 mt-3">
				    <label>VALOR DE TABELA</label>
				    <input type="text" name="kit_1_tabela" class="form-control" value="<?php echo $kit_1_tabela;?>">
				    </div>
				    <div class="col-lg-2 col-6 mt-3">
				    <label>DESCONTO</label>
				    <input type="text" name="kit_1_desconto" class="form-control" value="<?php echo $kit_1_desconto;?>">
				    </div>
				    <div class="col-lg-3 col-6 mt-3">
				    <label>FRETE</label>
				    <select name="kit_1_frete" class="form-control">
				    	<option value="">NORMAL</option>
				    	<option value="GRATIS">GRÁTIS</option>
				    </select>
				    </div>

				  </div>
				  <hr>
				  <br>
				  <br>
				  <br>


				  <!-- KIT 2 -->
				  <div class="form-group">
				    <label>
				    	<i class="fas fa-box"></i> CONFIGURAÇÕES DO 2º
				    </label>
				    <input type="text" name="kit_2_link_checkout" class="form-control" value="<?php echo $kit_2_link_checkout;?>">
				  </div>
				  <div class="form-row">

				  	<div class="col-lg-3 col-6 mt-3">
				    <label>PREÇO Á VISTA</label>
				    <input type="text" name="kit_2_preco_a_vista" class="form-control" value="<?php echo $kit_2_preco_a_vista;?>">
				    </div>
				    <div class="col-lg-2 col-6 mt-3">
				    <label>PARCELAS</label>
				    <select name="kit_2_parcelas" class="form-control">
				    	<option value="1x"><?php echo $kit_2_parcelas; ?></option>
				    	<option value="1x">1x</option>
				    	<option value="2x">2x</option>
				    	<option value="3x">3x</option>
				    	<option value="4x">4x</option>
				    	<option value="5x">5x</option>
				    	<option value="6x">6x</option>
				    	<option value="7x">7x</option>
				    	<option value="8x">8x</option>
				    	<option value="9x">9x</option>
				    	<option value="10x">10x</option>
				    	<option value="11x">11x</option>
				    	<option value="12x">12x</option>
				    </select>
				    </div>
				    <div class="col-lg-3 col-6 mt-3">
				    <label>VALOR EM REAIS</label>
				    <input type="text" name="kit_2_reais" class="form-control" value="<?php echo $kit_2_reais;?>">
				    </div>
				    <div class="col-lg-3 col-6 mt-3">
				    <label>VALOR EM CENTAVOS</label>
				    <input type="text" name="kit_2_centavos" class="form-control" value="<?php echo $kit_2_centavos;?>">
				    </div>
				    <div class="col-lg-3 col-6 mt-3">
				    <label>VALOR DE TABELA</label>
				    <input type="text" name="kit_2_tabela" class="form-control" value="<?php echo $kit_2_tabela;?>">
				    </div>
				    <div class="col-lg-2 col-6 mt-3">
				    <label>DESCONTO</label>
				    <input type="text" name="kit_2_desconto" class="form-control" value="<?php echo $kit_2_desconto;?>">
				    </div>
				    <div class="col-lg-3 col-6 mt-3">
				    <label>FRETE</label>
				    <select name="kit_2_frete" class="form-control">
				    	<option value="">NORMAL</option>
				    	<option value="GRATIS">GRÁTIS</option>
				    </select>
				    </div>

				  </div>
				  <hr>
				  <br>
				  <br>
				  <br>

				  <!-- KIT 3 -->
				  <div class="form-group">
				    <label>
				    	<i class="fas fa-box"></i> CONFIGURAÇÕES DO 3º
				    </label>
				    <input type="text" name="kit_3_link_checkout" class="form-control" value="<?php echo $kit_3_link_checkout;?>">
				  </div>
				  <div class="form-row">

				  	<div class="col-lg-3 col-6 mt-3">
				    <label>PREÇO Á VISTA</label>
				    <input type="text" name="kit_3_preco_a_vista" class="form-control" value="<?php echo $kit_3_preco_a_vista;?>">
				    </div>
				    <div class="col-lg-2 col-6 mt-3">
				    <label>PARCELAS</label>
				    <select name="kit_3_parcelas" class="form-control">
				    	<option value="1x"><?php echo $kit_3_parcelas; ?></option>
				    	<option value="1x">1x</option>
				    	<option value="2x">2x</option>
				    	<option value="3x">3x</option>
				    	<option value="4x">4x</option>
				    	<option value="5x">5x</option>
				    	<option value="6x">6x</option>
				    	<option value="7x">7x</option>
				    	<option value="8x">8x</option>
				    	<option value="9x">9x</option>
				    	<option value="10x">10x</option>
				    	<option value="11x">11x</option>
				    	<option value="12x">12x</option>
				    </select>
				    </div>
				    <div class="col-lg-3 col-6 mt-3">
				    <label>VALOR EM REAIS</label>
				    <input type="text" name="kit_3_reais" class="form-control" value="<?php echo $kit_3_reais;?>">
				    </div>
				    <div class="col-lg-3 col-6 mt-3">
				    <label>VALOR EM CENTAVOS</label>
				    <input type="text" name="kit_3_centavos" class="form-control" value="<?php echo $kit_3_centavos;?>">
				    </div>
				    <div class="col-lg-3 col-6 mt-3">
				    <label>VALOR DE TABELA</label>
				    <input type="text" name="kit_3_tabela" class="form-control" value="<?php echo $kit_3_tabela;?>">
				    </div>
				    <div class="col-lg-2 col-6 mt-3">
				    <label>DESCONTO</label>
				    <input type="text" name="kit_3_desconto" class="form-control" value="<?php echo $kit_3_desconto;?>">
				    </div>
				    <div class="col-lg-3 col-6 mt-3">
				    <label>FRETE</label>
				    <select name="kit_3_frete" class="form-control">
				    	<option value="">NORMAL</option>
				    	<option value="GRATIS">GRÁTIS</option>
				    </select>
				    </div>

				  </div>
				  <hr>
				  <br>
				  <br>
				  <br>

				  <!-- KIT 4 -->
				  <div class="form-group">
				    <label>
				    	<i class="fas fa-box"></i> CONFIGURAÇÕES DO 4º
				    </label>
				    <input type="text" name="kit_4_link_checkout" class="form-control" value="<?php echo $kit_4_link_checkout;?>">
				  </div>
				  <div class="form-row">

				  	<div class="col-lg-3 col-6 mt-3">
				    <label>PREÇO Á VISTA</label>
				    <input type="text" name="kit_4_preco_a_vista" class="form-control" value="<?php echo $kit_4_preco_a_vista;?>">
				    </div>
				    <div class="col-lg-2 col-6 mt-3">
				    <label>PARCELAS</label>
				    <select name="kit_4_parcelas" class="form-control">
				    	<option value="1x"><?php echo $kit_4_parcelas; ?></option>
				    	<option value="1x">1x</option>
				    	<option value="2x">2x</option>
				    	<option value="3x">3x</option>
				    	<option value="4x">4x</option>
				    	<option value="5x">5x</option>
				    	<option value="6x">6x</option>
				    	<option value="7x">7x</option>
				    	<option value="8x">8x</option>
				    	<option value="9x">9x</option>
				    	<option value="10x">10x</option>
				    	<option value="11x">11x</option>
				    	<option value="12x">12x</option>
				    </select>
				    </div>
				    <div class="col-lg-3 col-6 mt-3">
				    <label>VALOR EM REAIS</label>
				    <input type="text" name="kit_4_reais" class="form-control" value="<?php echo $kit_4_reais;?>">
				    </div>
				    <div class="col-lg-3 col-6 mt-3">
				    <label>VALOR EM CENTAVOS</label>
				    <input type="text" name="kit_4_centavos" class="form-control" value="<?php echo $kit_4_centavos;?>">
				    </div>
				    <div class="col-lg-3 col-6 mt-3">
				    <label>VALOR DE TABELA</label>
				    <input type="text" name="kit_4_tabela" class="form-control" value="<?php echo $kit_4_tabela;?>">
				    </div>
				    <div class="col-lg-2 col-6 mt-3">
				    <label>DESCONTO</label>
				    <input type="text" name="kit_4_desconto" class="form-control" value="<?php echo $kit_4_desconto;?>">
				    </div>
				    <div class="col-lg-3 col-6 mt-3">
				    <label>FRETE</label>
				    <select name="kit_4_frete" class="form-control">
				    	<option value="">NORMAL</option>
				    	<option value="GRATIS">GRÁTIS</option>
				    </select>
				    </div>

				  </div>
				  <hr>
				  <br>
				  <br>
				  <br>


				  <!-- LINK DE RASTREIO -->
				  <div class="form-group">
				    <label for="LINK DE RASTREIO">
				    	<i class="fas fa-map-marker-alt"></i> LINK DE RASTREIO
				    </label>
				    <input type="text" name="link_rastreio" class="form-control" value="<?php echo $link_rastreio;?>">
				  </div>

				  <!-- ZAP -->
				  <div class="form-group">
				    <label for="zap">
				    	<i class="fab fa-whatsapp text-success"></i> Numero do Whatsapp
				    </label>
				    <input type="text" name="zap" class="form-control" value="<?php echo $zap;?>">
				  </div>

				  <!-- msg -->
				  <div class="form-group">
				    <label for="zap">
				    	<i class="fas fa-comment-dots text-success"></i> Menssagem do Whatsapp
				    </label>
				    <input type="text" name="zap_menssagem" class="form-control" value="<?php echo $zap_menssagem;?>">
				  </div>

				  <br>

				  <!-- Pixel Facebook-->
				  <div class="form-group code">
				    <label for="pixel">
				    	<i class="fab fa-facebook-square text-primary"></i> Pixel Do Facebook
				    </label>
				    <textarea class="form-control text-dark" name="pixel" rows="8"><?php echo $pixel ; ?></textarea>
				    <input type="text" name="pixel2" class="form-control mt-4 text-dark" value='<?php echo $pixel2 ; ?>'>
				  </div>

				  <!-- Google Analytics-->
				  <div class="form-group code">
				    <label for="analytics1">
				    	<i class="far fa-chart-bar text-danger"></i> Google Analytics
				    </label>
				    <input type="text" name="analytics1" class="text-dark form-control" value='<?php echo $analytics1; ?>'>
				  </div>
				  <div class="form-group code">
				    <textarea class="form-control text-dark" name="analytics2" rows="8"><?php echo $analytics2 ; ?></textarea>
				  </div>

				  <div class="w-100 mt-4"></div>
				  <button type="submit" class="btn btn-primary mb-2">ATUALIZAR</button>
				</form>

			</div>
		</div>
	</section>
</body>
</html>