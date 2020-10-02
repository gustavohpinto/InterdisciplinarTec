<?php  

	include '../conecta.php';
	include 'restritanota.php';

		$consulta = "SELECT * FROM nota_fiscal";


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Notas</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-grid.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-reboot.css">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" type="text/css" href="ver_nf2.css">
</head>
<body>

	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">

					<?php  
						foreach ($conexao -> query($consulta) as $linha) {
					?>

					<table>
						<thead>
							<tr class="table100-head">
								<th class="column1">Nota</th>
								<th class="column2">Data</th>
								<th class="column3">Valor</th>
								<th class="column3"></th>
								<th class="column4">Itens</th>
								<th class="column4"></th>
								<th class="column4"></th>
								<th class="column4"></th>
								<th class="column4"></th>
								<th class="column4"></th>
								<th class="column4"></th>
								<th class="column4"></th>
								<th class="column4"></th>
								<th class="column4"></th>
								<th class="column4"></th>

							</tr>
						</thead>
						<tbody>
								<tr>
									<br><td class="column5"><?php echo "Nota fiscal: " .$linha['nf']; ?></td>
									<td class="column6"><?php echo "Data: " .$linha['data']; ?></td>
									<td class="column7"><?php echo "Valor total: R$" .$linha['valor_total'];?></td>
									
									<?php $nota = $linha['nf']; $consulta2 = "SELECT * FROM itens_nf WHERE num_nf = '$nota'";?>

									<?php
										foreach ($conexao -> query($consulta2) as $linha2) {
									?>		
											

													<td class="column8"><?php echo "Id: " .$linha2['id']; ?> </td>
													<td class="column9"><?php echo "Cod Produto: " .$linha2['cod_produto']; ?> </td>
													
													
											<?php  			
												$codigo = $linha2['cod_produto'];
												$consulta3 = "SELECT * FROM produtos WHERE id = '$codigo'"; 
												foreach ($conexao -> query($consulta3) as $linha3) {
											?>	

													<td class="column10"><?php echo "Nome: " .$linha3['nome']; ?> </td> 
													<td class="column11"><?php echo "Valor Unit: " .$linha3['preco'];?> </td>
									
											<?php  		
											}
											?>
													<td class="column12"><?php echo "Qtde: " .$linha2['qtde']; ?> </td>
													<td class="column13"><?php echo "SubTotal: " .$linha2['subtotal']; ?> </td>
													</div>

											<?php 
											}
											?>

							        <?php  
							        }
							        ?>   	

								</tr>

						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

	<div class="pricefooter">
		<div class="button">	
			<a href="index.php"> Voltar </a>
		</div>
	</div>


</body>
</html>