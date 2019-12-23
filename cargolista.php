<!DOCTYPE html>
<html lang="PT">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Planilha PMO Anhanguera</title>

	
	<!-- <link href="css/jquery-ui.css" rel="stylesheet">-->
	
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery-3.3.1.js"></script>
	
	 <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	<!--<script type="text/javascript" src="js/jquery-ui.js"></script>-->
	
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  
 
</head>
<body>
<div class="container-fluid">
<div class="wrapper">
   <header class="row">
	<!-- <img src="img/logo.png">-->
		 <div id="menu" class="col-md-12">
			<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">

			<div class="container-fluid">
				<a class="navbar-brand" href="#">
				  <a class="navbar-brand" href="#">
					<img src="img/test.png" width="30" alt="">PMO Financeiro
				  </a>
				</a>
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				  </button>

				  <div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">
					  <li class="nav-item"><a class="nav-link" href="index.php">Resumo</a></li>
					  <li class="nav-item"><a class="nav-link" href="apontamento.php">Apontamento</a></li>
					  <li class="nav-item"><a class="nav-link" href="consultor.php">Consultor</a></li>
					  <li class="nav-item"><a class="nav-link" href="custoconsultores.php">Custo consultores</a></li>
					  <li class="nav-item"><a class="nav-link" href="custoindireto.php">Custo Indireto</a></li>
					  <li class="nav-item active"><a class="nav-link" href="cargolista.php">Cargo Lista</a><span class="sr-only">(current)</span></li>
					  <li class="nav-item"><a class="nav-link" href="mifs.php">MIFs</a></li>
					</ul>	
				  </div>
		 </div> 
		</nav>
	</div>
   </header>
   
    <!--Linha Abaixo do menu-->
	 <div class="row" id="linha_menu"><div class="col-md-12"></div></div>
	 
	   <!--Conteudo principal-->
	<div id="container2_index">
				<div class="row">
					<div class="col-md-1"><h5>Cargo</h5></div>
						<div class="col-md-5">
						 <form><input type="text" class="form-control" id="pesquisaCargo"  placeholder=""></form>
						</div>
					   <div class="col-md-6"><button type="button" id="pesquisar" class="btn btn-success"><img src="img/lupa.png"></img>Pesquisar</button> </div>
				</div>
				
		<!--TABELA PESQUISA CARGO-->		
		<div class="row" id="result_search_table">
		 <table class="table table-hover">
			<thead class="thead-light">
				<tr>
				<th scope="col">Cargo</th>
				<th scope="col">Fixo CLT</th>
				<th scope="col">VA</th>
				<th scope="col">VR</th>
				<th scope="col">Full <br>Premiação</th>
				<th scope="col">Premiação <br>Trimestral</th>
				<th scope="col">Total</th>
				<th scope="col">Funções</th>
				</tr>
			</thead>
			  <tbody>
				  <form id="consultaCargo" class="consultaCargo">
					<?php
					include("conexao.php");
					$consultar=mysqli_query($conexao, "select * from CARGOS order by CARGO ASC");
					while($tela=mysqli_fetch_array($consultar))
					{ ?>
					<tr>
					  <td scope="row">
						<?php echo $tela["CARGO"];?>
					  </td>
					  <td>R$ <?php echo $tela["CLT"];?></td>
					  <td>R$ <?php echo $tela["VA"];?></td>
					  <td>R$ <?php echo $tela["VR"];?></td>
					  <td>R$ <?php echo $tela["PREM"];?></td>
					  <td>R$ <?php echo $tela["TRI"];?></td>
					  <td>R$ <?php $total = (float)$tela["CLT"]+(float)$tela["VA"]+(float)$tela["VR"]+(float)$tela["PREM"]+(float)$tela["TRI"]; echo number_format($total,2); ?></td>
					  <td>
					  <a href="cargolista.php?id_cargo=<?php echo $tela["ID_CARGO"];?>" class="btn btn-outline-warning btn-sm">Alterar</a>
					  <a href="excluirCargo.php?id_cargo=<?php echo $tela["ID_CARGO"];?>"  id="excluirCargo" value="<?php echo $tela["ID_CARGO"];?>" class="btn btn-outline-danger btn-sm">Excluir</a>
					  </td>
					</tr>
					<?php }mysqli_close($conexao);?>
					</form>
			  </tbody>
		</table>
		</div>
		
		
		

				
			<!--Botão Cadastrar-->	
			<div class="row" id="funcoesCargoLista">
				<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#ModalCadastraCargo">Cadastrar</button>
			</div>
			
			<!--Fomulario Modal Cadastrar cargo-->
			<div class="modal fade" id="ModalCadastraCargo" role="dialog">
					<div class="modal-dialog">
						  <!-- Conteudo do Modal-->
						  <div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Cadastrar Cargo</h5>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>
							
							<div class="modal-body">
							  <form action="cadastro_cargo.php"  method="post" name="form1" id="form1">
									<div class="form-row">
										<div class="form-group col-md-12">
										<label for="cargo">Cargo</label>
										<input type="text" class="form-control" name="CARGO" id="cargo" placeholder="" required>
										</div>
									</div>
									
									<div class="form-group">
										<label for="fixoclt">Fixo CLT</label>
										<input type="text" class="form-control" name="CLT" id="fixoclt" placeholder="" required>
									</div>
									
									<div class="form-row">
										<div class="form-group col-md-6">
										<label for="vale_alimentacao">Vale Alimentação</label>
										<input type="text" class="form-control" name="VA" id="vale_alimentacao" placeholder="" required>
										</div>
										<div class="form-group col-md-6">
										<label for="vale_refeicao">Vale Refeição</label>
										<input type="text" class="form-control" name="VR" id="vale_refeicao" required>
										</div>
									</div>
									
									
									<div class="form-row">
										<div class="form-group col-md-6">
										<label for="full_premiacao">Full Premiação</label>
										<input type="text" class="form-control" name="PREM" id="full_premiacao" placeholder="" required>
										</div>
										<div class="form-group col-md-6">
										<label for="premiacao_trimestral">Premiação Trimestral</label>
										<input type="text" class="form-control" name="TRI" id="premiacao_trimestral" placeholder="" required>
										</div>
									</div>
								<button type="submit" class="btn btn-success">Cadastrar</button>
								
								</form>
							</div>
							<div class="modal-footer">
							  <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
							</div>
						  </div>
					</div>
		  </div>
		   <!--Fim formulario Cadastro de Cargo-->
		  
		  
		  <?php 
		  /*Verifica se o cadastro foi realizado com sucesso após processamento na pagina cadastro_cargo*/
		if(isset($_GET['acao'])){
		$acao = $_GET['acao'];
			if($acao == "sucesso"){
				?><script type="text/javascript">alert("Cargo cadastrado com sucesso!");</script><?php	
			}else{
				?><script type="text/javascript">alert("Falha ao gravar dados");</script><?php
			}
		}
		
		/*Verificado se o cadastro foi editado com sucesso após o processamento*/
		if(isset($_GET['acaoEditar'])){
		  $acaoEditar = $_GET['acaoEditar'];
			if($acaoEditar == "sucesso"){
				?><script type="text/javascript">alert("Cargo Atualizado com sucesso!");</script><?php
			}else{
				?><script type="text/javascript">alert("Falha ao atualizar dados");</script><?php
			}
		}
		
		
		/*Verificado se o cadastro foi excluido com sucesso após o processamento*/
		if(isset($_GET['acaoExcluir'])){
		  $acaoExcluir = $_GET['acaoExcluir'];
			if($acaoExcluir == "sucesso"){
				?><script type="text/javascript">alert("Cargo Removido com sucesso!");</script><?php
			}else{
				?><script type="text/javascript">alert("Falha ao Remover dados");</script><?php
			}
		}
		?>
		
		 
		<?php
		 /*Abre Modal Editar Cargo*/
		if(isset($_GET['id_cargo'])){
		$id_cargo = $_GET['id_cargo'];
		include("conexao.php");
        $query = mysqli_query($conexao, "select * from CARGOS where ID_CARGO=$id_cargo");
        $resultado = mysqli_fetch_array($query);
		
		
		   ?>
		   
		   <div class="modal fade" id="ModalEditarCargo" role="dialog">
			<div class="modal-dialog">
		   
			  <div class="modal-content">
				<div class="modal-header">
				<h5 class="modal-title">Editar Cargo</h5>
				  <button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				
				<div class="modal-body">
				  <form action="edita_cargo.php"  method="POST" name="FormEditaCargo" id="FormEditaCargo">
				              
						<div class="form-row">
							<div class="form-group col-md-12">
							<input name="id_cargo" type="hidden" id="id_cargo" value="<?php echo $id_cargo;?>">
							<label for="cargo">Cargo</label>
							<input type="text" value="<?php echo $resultado["CARGO"]; ?>" class="form-control" name="CARGO" id="cargo" placeholder="" required>
							</div>
						</div>
						
						<div class="form-group">
							<label for="fixoclt">Fixo CLT</label>
							<input type="text" value="<?php echo $resultado["CLT"]; ?>" class="form-control" name="CLT" id="fixoclt" placeholder="" required>
						</div>
						
						<div class="form-row">
							<div class="form-group col-md-6">
							<label for="vale_alimentacao">Vale Alimentação</label>
							<input type="text" value="<?php echo $resultado["VA"];  ?>" class="form-control" name="VA" id="vale_alimentacao" placeholder="" required>
							</div>
							<div class="form-group col-md-6">
							<label for="vale_refeicao">Vale Refeição</label>
							<input type="text" value="<?php echo $resultado["VR"]; ?>" class="form-control" name="VR" id="vale_refeicao" required>
							</div>
						</div>
						
						
						<div class="form-row">
							<div class="form-group col-md-6">
							<label for="full_premiacao">Full Premiação</label>
							<input type="text" value="<?php echo $resultado["PREM"]; ?>"class="form-control" name="PREM" id="full_premiacao" placeholder="" required>
							</div>
							<div class="form-group col-md-6">
							<label for="premiacao_trimestral">Premiação Trimestral</label>
							<input type="text" value="<?php echo $resultado["TRI"]  ?>" class="form-control" name="TRI" id="premiacao_trimestral" placeholder="" required>
							</div>
						</div>
					<button type="submit" class="btn btn-success">Salvar</button>
					
					</form>
			   </div>
				<div class="modal-footer">
				  <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
				</div>
			  </div>
			  
			</div>
		  </div>
		   <?php
		echo '<script>window.onload=function(){$("#ModalEditarCargo").modal();}</script>';
		}
		   ?>
		   
		   
			   <footer id="rodape" class="row">
					<h1>Rodape</h1>
			   </footer>
</div>
</div>
</div>
</body>
	