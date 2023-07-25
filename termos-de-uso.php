<!DOCTYPE html>
<html>

<?php include "config/config.php" ?>

<!-- head -->
<?php include "includes/head.php" ?>
<!-- head -->

  <meta name="theme-color" content="#fafafa">

  <style type="text/css">
  	section{
  		padding: 20px;
  	}
  	p{
  		font-weight: 300;
  		font-size: 17px;
  		line-height: 1.6em;
  	}
  	h1,h2{
  		font-size: 30px;
  		font-style: normal;
  		color: #FFF;
  	}
  	.sub-conteudo h2{
  		font-size: 25px;
  		color: #343a40;
  	}
  </style>

<body>
		
		<!-----===============TERMOS===============-->

		<section  class="bg-dark">
			<div class="container">
				<div class="row">
					<div class="col-12 text-center">
						<h2 class="m-0 text-uppercase"> <?php echo $nome_produto; ?> </h2>
					</div>
				</div>
			</div>
		</section>
		<!--------------------------CONTEUDO---------------------------------->

		<section class="my-5 sub-conteudo">
			<div class="container">
				<h2>Termos e Condições de Compra e Venda de <?php echo $nome_produto; ?></h2>

					<p>Considerando que a <?php echo $nome_produto; ?> realiza venda de produtos e serviços pela internet; Considerando o interesse do Cliente na compra dos produtos oferecidos pela <?php echo $nome_produto; ?> (“Produtos”) em seus canais de venda; O presente contrato tem por finalidade estabelecer as condições gerais de uso e compra de produtos e serviços do cliente do site <?php echo $nome_produto; ?>.
					</p>

					<p>I. Confidencialidade: é de responsabilidade da <?php echo $nome_produto; ?> a preservação da confidencialidade de todos os dados e informações fornecidos pelo Cliente no processo de compra. A segurança do site é auditada diariamente e garantida contra a ação de hackers, através do selo “Site Blindado”.
					</p>


					<p>II. Serviço de Atendimento ao Cliente (SAC): O cliente dispõe desse serviço para sanar suas dúvidas, solucionar eventuais solicitações ou reclamações a respeito do seu pedido ou de qualquer conteúdo disponibilizado no site. O SAC poderá ser acionado por meio de telefone ou de formulário do site.
					</p>


					<p>III. Política de entrega: o prazo para entrega dos Produtos é informado durante o procedimento de compra, contabilizado em dias úteis. As entregas dos Produtos são realizadas de segunda a sexta-feira, das 8h às 22h. Excepcionalmente, algumas entregas de Produtos podem ocorrer aos sábados, domingos e feriados.
					</p>

					<p>III.I – A conferência da adequação das dimensões do produto é de responsabilidade do Cliente, que deverá se assegurar de que estas estão de acordo com os limites espaciais dos elevadores, portas e corredores do local da entrega. Não será realizada a montagem ou desmontagem do produto, transporte pela escada e/ou portas e janelas, ou içamento das entregas.
					</p>

					<p>III.II – Serão realizadas até três tentativas de entrega no local informado, em dias alternados, com intervalo de até 48h entre uma entrega e outra. É indispensável que, no endereço solicitado, haja uma pessoa autorizada pelo comprador, maior de 18 anos, e portando documento de identificação para receber a mercadoria e assinar o protocolo de entrega. Se houver três tentativas de entrega sem sucesso, o pedido retornará para o Centro de Distribuição da <?php echo $nome_produto; ?>.
					</p>

					<p>III.III – Após a finalização do pedido não é possível alterar a forma de pagamento e/ou endereço de entrega, solicitar adiantamento ou, ainda, prioridade da entrega.
					</p>

					<p>III.IV – O prazo de entrega informado durante o procedimento de compra do Produto leva em consideração o estoque, a região, o processo de emissão da nota fiscal e o tempo de preparo do produto. A cada atualização no status de entrega do pedido, o sistema da <?php echo $nome_produto; ?> envia, automaticamente, e-mails de alerta para o Cliente.
					</p>

					<p>III.V – O valor do frete da entrega é calculado com base no local de entrega, peso e dimensões do Produto.
					</p>

					<p>III.VI – A <?php echo $nome_produto; ?> não autoriza a transportadora a: entrar no domicílio; entregar por meios alternativos (exemplo: içar produto por janela); realizar instalação ou manutenção de produtos; abrir a embalagem do produto; realizar entrega em endereço diferente do que consta no DANFE; realizar entrega a menor de idade ou sem documento de identificação.
					</p>

					<p>III.VII – A <?php echo $nome_produto; ?> não se responsabiliza pela retenção de mercadorias na SEFAZ quando esta se dever exclusivamente a pendências do cliente, sendo, portanto, necessário seu comparecimento no posto fiscal para que a mercadoria seja liberada, tendo em vista que nestes casos as informações referentes a liberações e pagamentos só são passadas aos interessados.
					</p>

					<p>IV. Direito de arrependimento: ao Cliente será facultado o exercício do direito de arrependimento da compra, com a finalidade de devolução do Produto, hipótese na qual deverão ser observadas as seguintes condições: o prazo de desistência da compra do produto é de até 7 (sete) dias corridos, a contar da data do recebimento; em caso de devolução, o produto deverá ser devolvido à <?php echo $nome_produto; ?> na embalagem original, acompanhado do DANFE (Documento Auxiliar da Nota Fiscal Eletrônica), do manual e de todos os seus acessórios.
					</p>

					<p>IV.I – O Cliente deverá solicitar a devolução através do Serviço de Atendimento ao Cliente (SAC) ou diretamente no Painel de Controle, no tópico “cancelar pedido”. As despesas decorrentes de coleta ou postagem do Produto serão custeadas pela <?php echo $nome_produto; ?>.
					</p>

					<p>IV.II – Após a chegada do produto ao Centro de Distribuição, a <?php echo $nome_produto; ?> verificará se as condições supra citadas foram atendidas. Em caso afirmativo, providenciará a restituição no valor total da compra.
					</p>

					<p>IV.III – Em compras com cartão de crédito a administradora do cartão será notificada e o estorno ocorrerá na fatura seguinte ou na posterior, de uma só vez, seja qual for o número de parcelas utilizado na compra. O prazo de ressarcimento e, ainda, a cobrança das parcelas remanescentes após o estorno integral do valor do Produto no cartão de crédito do Cliente realizado pela <?php echo $nome_produto; ?>, é de responsabilidade da administradora do cartão. Na hipótese de cobrança de parcelas futuras pela administradora do cartão, o Cliente não será onerado, vez que a <?php echo $nome_produto; ?>, conforme mencionado acima, realiza o estorno do valor integral do Produto em uma única vez, sendo o crédito referente ao estorno concedido integralmente pela administradora do cartão na fatura de cobrança subsequente ao mês do cancelamento.
					</p>

					<p>IV.IV – Em compras pagas com boleto bancário ou débito em conta, a restituição será efetuada por meio de depósito bancário, em até 10 (dez) dias úteis, somente na conta corrente do(a) comprador(a), que deve ser individual. É necessário que o CPF do titular da conta corrente.
					</p>

			</div>
		</section>
		
		<!-----------------------FOOTER--------------------------------->

		<section  class="bg-dark">
			<div class="container">
				<div class="row">
					<div class="col-12 text-center">
						<h2 class="m-0 text-uppercase"> <?php echo $nome_produto; ?> </h2>
					</div>
				</div>
			</div>
		</section>
        

</body>
</html>