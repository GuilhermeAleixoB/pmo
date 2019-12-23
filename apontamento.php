<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Planilha PMO Anhanguera</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery-3.3.1.js"></script>
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
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
				<img src="img/testlogo.png" width="100" alt="">PMO Financeiro
			  </a>
			</a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
		  <li class="nav-item"><a class="nav-link" href="index.php">Resumo</a></li>
		  <li class="nav-item active"><a class="nav-link" href="apontamento.php">Apontamento</a></li>
		  <li class="nav-item"><a class="nav-link" href="consultor.php">Consultor</a></li>
		  <li class="nav-item"><a class="nav-link" href="custoconsultores.php">Custo consultores</a></li>
		  <li class="nav-item"><a class="nav-link" href="custoindireto.php">Custo Indireto</a></li>
		  <li class="nav-item"><a class="nav-link" href="cargolista.php">Cargo Lista</a><span class="sr-only">(current)</span></li>
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
	<div id="container2_apontamento">
	
	
					<div class="row">
					<div class="col-md-2"><h3>Apontamento</h3></div>
						<div class="col-md-5">
						 <form><input type="text" class="form-control" id="pesquisaCargo"  placeholder="Digite o nome do consultor"></form>
						</div>
					   <div class="col-md-5"><button type="button" id="pesquisar" class="btn btn-success"><span class="iconpesquisar">Pesquisar</span></button> </div>
				</div>
				
	

	   
	   <!--TABELA PESQUISA CARGO-->		
		<div class="row" id="result_search_table">
		 <table class="table table-hover">
			<thead class="thead-light">
				<tr>
				<th scope="col">Data</th>
				<th scope="col">Cliente</th>
				<th scope="col">Projeto</th>
				<th scope="col">Consultor</th>
				<th scope="col">Entrada</th>
				<th scope="col">Tempo de Almoço</th>
				<th scope="col">Saida</th>
				<th scope="col">Hora</th>
				<th scope="col">Valor do Almoço</th>
				
				
				<th scope="col">Funções</th>
				
				</tr>
			</thead>
			  <tbody>
				  <form id="consultaCargo" class="consultaCargo">
					<?php
					include("conexao.php");
					$consultar=mysqli_query($conexao, "select * from apontamento order by ID_APON DESC");
					while($tela=mysqli_fetch_array($consultar))
					{ ?>
					<tr>
					  <td scope="row"><?php $data = explode("-", $tela["DATA"]);
									echo $data[2] . "/" . $data[1] . "/" . $data[0];?></td>
					  <td><?php echo $tela["CLIENTE"];?></td>
					  <td><?php echo $tela["PROJETO"];?></td>
					  <td><?php echo $tela["CONSUL"];?></td>
					  <td><?php echo $tela["ENTRADA"];?></td>
					  <td><?php echo $tela["T_ALMOCO"];?></td>
					  <td><?php echo $tela["SAIDA"];?></td>
					  <td><?php echo $tela["HORA"];?></td>
					  <td><?php echo $tela["ALMOCO"];?></td>
					  <!--
					  <td>R$ <?php echo $tela["ESTADIA"];?></td>
					  <td><?php echo $tela["KM"];?></td>
					  <td>R$ <?php echo $tela["PEDAGIO"];?></td>
					  <td>R$ <?php echo $tela["HOSP"];?></td>
					  <td>R$ <?php echo $tela["TAXI"];?></td>
					  <td>R$ <?php echo $tela["DESP"];?></td>
					  <td><?php echo $tela["OBS"];?></td> !-->
					  
					  <td>
					  
					  <a href="apontamento.php?id_apontamento=<?php echo $tela["ID_APON"];?>" class="btn btn-outline-warning btn-sm">Alterar</a>
					  <a href="excluirapon.php?id_apontamento=<?php echo $tela["ID_APON"];?>"  id="excluirApontamento" value="<?php echo $tela["ID_APON"];?>" class="btn btn-outline-danger btn-sm">Excluir</a>
					  </td>
					</tr>
					<?php }mysqli_close($conexao);?>
					</form>
			  </tbody>
		</table>
		</div>
		
		
		
			
			<!--Botão Cadastrar-->	
			<div class="row" id="funcoesApontamento">
				<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#ModalCadastraApontamento">Cadastrar</button>
			</div>
			
			
			<!--Fomulario Modal Cadastrar cargo-->
			<div class="modal fade" id="ModalCadastraApontamento" role="dialog">
					<div class="modal-dialog modal-lg">
						  <!-- Conteudo do Modal-->
						  <div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Inserir Apontamento</h5>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>
							
							<div class="modal-body">
							  <form action="cadastro_apontamento.php"  method="post" name="form1" id="form1">
				<p>campos obrigatorios *</p>
				<div class="form-row">
					<div class="form-group col-md-12">
					<label for="CLIENTE">Cliente *</label>
					<input type="text" class="form-control" name="CLIENTE" id="CLIENTE" placeholder="" required>
					</div>
				</div>
				
				
				<div class="form-row">
				<div class="form-group col-md-4">
					<label for="PROJETO">Projeto *</label>
					<input type="text" class="form-control" name="PROJETO" id="PROJETO" placeholder="" required>
					</div>
					
					<div class="form-group col-md-4">
					<label for="DATA">Data *</label>
					<input type="date" class="form-control" name="DATA" id="DATA" placeholder="" required>
					</div>
					
					<div class="form-group col-md-4">
					<label for="cmbconsul">Consultor *</label>
					<select class="form-control" name="cmbconsul" id="cmbconsul">
					<option selected>Selecione o consultor...</option>
					                                    <?php include ("conexao.php");
														$consulta=mysqli_query($conexao, "SELECT * FROM consultores order by NOME ASC");
														while ($dados = mysqli_fetch_array($consulta)){
														echo("<option value='".$dados['NOME']."'>".$dados['NOME'].'</option>');
														}
														?>
														</select>
					</div>
				</div>
				
			
				<div class="form-row">
				
						<div class="form-group col-md-3">
						<label for="ENTRADA">Entrada *</label>
						<input type="time" class="form-control" name="ENTRADA" id="ENTRADA" placeholder="" required>
						</div>
						
						<div class="form-group col-md-3">
						<label for="premiacao_trimestral">Tempo de almoço: *</label>
						<input type="time" class="form-control" name="T_ALMOCO" id="T_ALMOCO" placeholder="" required>
						</div>
						
						<div class="form-group col-md-3">
						<label for="SAIDA">Saída: *</label>
						<input type="time" class="form-control" name="SAIDA" id="SAIDA" placeholder="" required>
						</div>
						
						<div class="form-group col-md-3">
						<label for="HORA">Total por hora: *</label>
						<input type="text" class="form-control" name="HORA" id="HORA" placeholder="" required>
						</div>
						
						</div>
					
					
					
					
					<div class="form-row">
						<div class="form-group col-md-3">
						<label for="SAIDA">Almoço: *</label>
						<input type="text" class="form-control" name="ALMOCO" id="ALMOCO" placeholder="" required>
						</div>
						<div class="form-group col-md-3">
						<label for="ESTADIA">Estadia:</label>
						<input type="text" class="form-control" name="ESTADIA" id="ESTADIA" placeholder="">
						</div>
						
						<div class="form-group col-md-3">
						<label for="KM">R$ km.:</label>
						<input type="text" class="form-control" name="KM" id="KM" placeholder="">
						</div>
						
						<div class="form-group col-md-3">
						<label for="PEDAGIO">Pedagio:</label>
						<input type="text" class="form-control" name="PEDAGIO" id="PEDAGIO" placeholder="">
						</div>
						
					</div>

					
					
					<div class="form-row">
						<div class="form-group col-md-3">
						<label for="HOSP">Hospedagem:</label>
						<input type="text" class="form-control" name="HOSP" id="HOSP" placeholder="">
						</div>
						<div class="form-group col-md-3">
						<label for="TAXI">Taxi:</label>
						<input type="text" class="form-control" name="TAXI" id="TAXI" placeholder="">
						</div>
						<div class="form-group col-md-3">
						<label for="DESP">Despesas:</label>
						<input type="text" class="form-control" name="DESP" id="DESP" placeholder="">
						</div>
					</div>
					
					<div class="form-row">
						
						<div class="form-group col-md-12">
						<label for="OBS">Observação:</label>
						<input type="text" class="form-control" name="OBS" id="OBS" placeholder="">
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
		  /*Verifica se o cadastro foi realizado com sucesso após processamento na pagina cadastro_consultor*/
		if(isset($_GET['acao'])){
		$acao = $_GET['acao'];
			if($acao == "sucesso"){
				?><script type="text/javascript">alert("Apontamento cadastrado com sucesso!");</script><?php	
			}else{
				?><script type="text/javascript">alert("Falha ao gravar dados");</script><?php
			}
		}
	?>
	
	
	
	<!-- Verificado se o apontamento foi editado com sucesso após o processamento*/ -->
	<?php
		if(isset($_GET['acaoEditar'])){
		  $acaoEditar = $_GET['acaoEditar'];
			if($acaoEditar == "sucesso"){
				?><script type="text/javascript">alert("Apontamento Atualizado com sucesso!");</script><?php
			}else{
				?><script type="text/javascript">alert("Falha ao atualizar dados");</script><?php
			}
		}
		
		
		/*Verificado se o cadastro foi excluido com sucesso após o processamento*/
		if(isset($_GET['acaoExcluir'])){
		  $acaoExcluir = $_GET['acaoExcluir'];
			if($acaoExcluir == "sucesso"){
				?><script type="text/javascript">alert("Apontamento Removido com sucesso!");</script><?php
			}else{
				?><script type="text/javascript">alert("Falha ao Remover dados");</script><?php
			}
		}
		?>
		
		
		<?php
		 /*Abre Modal Editar Cargo*/
		if(isset($_GET['id_apontamento'])){
		$id_apon = $_GET['id_apontamento'];
		include("conexao.php");
        $query = mysqli_query($conexao, "select * from apontamento where ID_APON=$id_apon");
        $resultado = mysqli_fetch_array($query);
		
		
		   ?>
		   
		   <div class="modal fade" id="ModalEditarApontamento" role="dialog">
			<div class="modal-dialog modal-lg">
		   
			  <div class="modal-content">
				<div class="modal-header">
				<h5 class="modal-title">Editar Apontamento</h5>
				  <button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				
				<div class="modal-body">
				  <form action="edita_apontamento.php"  method="POST" name="FormEditaApontamento" id="FormEditaApontamento">
				              
					<div class="form-row">
					<div class="form-group col-md-12">
					<input name="id_apon" type="hidden" id="id_apon" value="<?php echo $id_apon;?>">
					<label for="CLIENTE">Cliente *</label>
					<input type="text" value="<?php echo $resultado["CLIENTE"]; ?>" class="form-control" name="CLIENTE" id="CLIENTE" placeholder="" required>
					</div>
				</div>
				
				
				<div class="form-row">
				<div class="form-group col-md-4">
					<label for="PROJETO">Projeto *</label>
					<input type="text" value="<?php echo $resultado["PROJETO"]; ?>" class="form-control" name="PROJETO" id="PROJETO" placeholder="" required>
					</div>
					
					<div class="form-group col-md-4">
					<label for="DATA">Data *</label>
					<input type="date" value="<?php echo $resultado["DATA"]; ?>" class="form-control" name="DATA" id="DATA" placeholder="" required>
					</div>
					
					<div class="form-group col-md-4">
					<label for="cmbconsul">Consultor *</label>
					<select class="form-control" name="cmbconsul" id="cmbconsul">
					<option selected><?php echo $resultado["CONSUL"]; ?></option>
					                                    <?php include ("conexao.php");
														$consulta=mysqli_query($conexao, "SELECT * FROM consultores order by NOME ASC");
														while ($dados = mysqli_fetch_array($consulta)){
														echo("<option value='".$dados['NOME']."'>".$dados['NOME'].'</option>');
														}
														?>
														</select>
					</div>
				</div>
				
			
				<div class="form-row">
				
						<div class="form-group col-md-3">
						<label for="ENTRADA">Entrada *</label>
						<input type="time" value="<?php echo $resultado["ENTRADA"]; ?>" class="form-control" name="ENTRADA" id="ENTRADA" placeholder="" required>
						</div>
						
						<div class="form-group col-md-3">
						<label for="premiacao_trimestral">Tempo de almoço: *</label>
						<input type="time" value="<?php echo $resultado["T_ALMOCO"]; ?>" class="form-control" name="T_ALMOCO" id="T_ALMOCO" placeholder="" required>
						</div>
						
						<div class="form-group col-md-3">
						<label for="SAIDA">Saída: *</label>
						<input type="time" value="<?php echo $resultado["SAIDA"]; ?>" class="form-control" name="SAIDA" id="SAIDA" placeholder="" required>
						</div>
						
						<div class="form-group col-md-3">
						<label for="HORA">Total por hora: *</label>
						<input type="text" value="<?php echo $resultado["HORA"]; ?>" class="form-control" name="HORA" id="HORA" placeholder="" required>
						</div>
						
						</div>
					
					
					
					
					<div class="form-row">
						<div class="form-group col-md-3">
						<label for="SAIDA">Almoço: *</label>
						<input type="text" value="<?php echo $resultado["ALMOCO"]; ?>" class="form-control" name="ALMOCO" id="ALMOCO" placeholder="" required>
						</div>
						<div class="form-group col-md-3">
						<label for="ESTADIA">Estadia:</label>
						<input type="text" value="<?php echo $resultado["ESTADIA"]; ?>" class="form-control" name="ESTADIA" id="ESTADIA" placeholder="">
						</div>
						
						<div class="form-group col-md-3">
						<label for="KM">R$ km.:</label>
						<input type="text" value="<?php echo $resultado["KM"]; ?>" class="form-control" name="KM" id="KM" placeholder="">
						</div>
						
						<div class="form-group col-md-3">
						<label for="PEDAGIO">Pedagio:</label>
						<input type="text" value="<?php echo $resultado["PEDAGIO"]; ?>" class="form-control" name="PEDAGIO" id="PEDAGIO" placeholder="">
						</div>
						
					</div>

					
					
					<div class="form-row">
						<div class="form-group col-md-3">
						<label for="HOSP">Hospedagem:</label>
						<input type="text" value="<?php echo $resultado["HOSP"]; ?>" class="form-control" name="HOSP" id="HOSP" placeholder="">
						</div>
						<div class="form-group col-md-3">
						<label for="TAXI">Taxi:</label>
						<input type="text" value="<?php echo $resultado["TAXI"]; ?>" class="form-control" name="TAXI" id="TAXI" placeholder="">
						</div>
						<div class="form-group col-md-3">
						<label for="DESP">Despesas:</label>
						<input type="text" value="<?php echo $resultado["DESP"]; ?>" class="form-control" name="DESP" id="DESP" placeholder="">
						</div>
					</div>
					
					<div class="form-row">
						
						<div class="form-group col-md-12">
						<label for="OBS">Observação:</label>
						<input type="text" value="<?php echo $resultado["OBS"]; ?>" class="form-control" name="OBS" id="OBS" placeholder="">
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
		echo '<script>window.onload=function(){$("#ModalEditarApontamento").modal();}</script>';
		}
		   ?>
	
	   <footer id="rodape" class="row">
			<h1>Rodape</h1>
	   </footer>
</div>
</div>
</div>
</body>
	