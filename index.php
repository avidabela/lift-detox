<!DOCTYPE html>

<!-- Configurações gerais -->
<?php include "config/config.php" ?>
<!-- Configurações gerais -->

<html class="no-js" lang="pt">
<head>
 <meta name="description" content="Emagreça 7x mais Rápido com Lift Detox Caps. Tratamento Ideal para um Emagrecimento Saudável">
 <?php include "includes/head.php" ?>
</head>
<!-- head -->
<!-- head -->

<body>

    <span itemprop="image" itemscope="" itemtype="image/jpeg"> 
        <link itemprop="url" href="<?php $url?>/midia/img/og-img.jpg"> 
    </span>

 	<!-- header -->
	<?php include "secoes/header.php" ?>
	<!-- header -->
  
  <!-- tabelas -->
  <?php include "secoes/tabelas.php" ?>
  <!-- tabelas -->
  
  
  <!-- depoimentos -->
  <?php include "secoes/depoimentos.php" ?>
  <!-- depoimentos -->
  
  <!-- desafio -->
  <?php include "secoes/desafio.php" ?>
  <!-- desafio -->

  <!-- sobre -->
  <!-- <?php include "secoes/sobre.php" ?> -->
  <!-- sobre -->

  <!-- seguranca -->
  <?php include "secoes/seguranca.php" ?>
  <!-- seguranca -->

  <!-- duvidas -->
  <?php include "secoes/duvidas.php" ?>
  <!-- duvidas -->

  <!-- footer -->
  <?php include "secoes/footer.php" ?>
  <!-- footer -->

  <!-- zap -->
        
  <!--- SCRIPTS DE INTERAÇÕES --->
  <script src="libs/js/jquery-3.3.1.min.js"></script>
  <script src="libs/js/bootstrap.bundle.js"></script>
  <script src="libs/js/functions.js"></script>
  <script src="libs/js/aos.js"></script>
  <script src="libs/js/tempo.js"></script>
  <script src="libs/js/floating-wpp.min.js"></script>
  <script src="libs/js/cript.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>
  
  <script>
    setTimeout('getSecs()', 1000);
  
    AOS.init({ duration: 1600 });
    
    $('#zap').floatingWhatsApp({
      phone: '<?php echo $zap?>',
      position: 'right',
      popupMessage: 'Olá, como podemos te ajudar?',
      message: "<?php echo $zap_menssagem?>",
      showPopup: true,
      showOnIE: false,
      headerTitle: 'Whatsapp <?php echo $nome_produto?>',
    });
  </script>
</body>
</html>

<?php
// Una vez que el búfer almacena nuestro contenido utilizamos "ob_end_flush" para usarlo y deshabilitar el búfer
ob_end_flush(); 
// Función para eliminar todos los espacios en blanco
function comprimir_pagina($buffer) { 
    $busca = array('/\>[^\S ]+/s','/[^\S ]+\</s','/(\s)+/s'); 
    $reemplaza = array('>','<','\\1'); 
    return preg_replace($busca, $reemplaza, $buffer); 
} 
?>
