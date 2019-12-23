<!DOCTYPE html>
<html lang="PT">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Planilha PMO Anhanguera</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	
	<!-- <link href="css/jquery-ui.css" rel="stylesheet">-->
	
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery-3.3.1.js"></script>
	
	<!--<script type="text/javascript" src="js/jquery-ui.js"></script>-->
	
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
					  <li class="nav-item active"><a class="nav-link" href="consultor.php">Consultor</a></li>
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
	<div id="container2_index">
				<div class="row">
					<div class="col-md-1"><h5>Consultor</h5></div>
						<div class="col-md-5">
						 <form><input type="text" class="form-control" id="pesquisaCargo"  placeholder=""></form>
						</div>
					   <div class="col-md-6"><button type="button" id="pesquisar" class="btn btn-success"><span class="glyphicon glyphicon-search"></span>Pesquisar</button> </div>
				
				</div>
				
		<!--TABELA PESQUISA CARGO-->		
		<div class="row" id="result_search_table">
		<div class="table-responsive">
		 <table class="table table-hover">
			<thead class="thead-light">
				<tr>
				<th scope="col">Nome</th>
				<th scope="col">Cargo</th>
				<th scope="col">Taxa PJ</th>
				<th scope="col">Vale transportes</th>
				<th scope="col">Vale Alimentação</th>
				<th scope="col">Vale Refeição</th>
				<th scope="col">Plano de Saude</th>
				<th scope="col">Seguro de Vida</th>
				<th scope="col">Premiação Trimestral</th>
				<th scope="col">Celular</th>
				<th scope="col">Custo Hora</th>
				<th scope="col">Funções</th>
				</tr>
			</thead>
			  <tbody>
				  <form id="consultaConsultor" class="consultaConsultor">
					<?php
					include("conexao.php");
					$consultar=mysqli_query($conexao, "select * from consultores order by NOME ASC");
					while($tela=mysqli_fetch_array($consultar))
					{ 
					$id_cargoConsultor = $tela["CARGO"]; 
					$consultarCargo=mysqli_query($conexao, "select * from cargos where CARGO='$id_cargoConsultor'");	
					while($tela2=mysqli_fetch_array($consultarCargo)){	
						?>
					<tr>
					  <td scope="row">
						<?php echo $tela["NOME"];?>
					  </td>
					  <td><?php echo $tela["CARGO"];?></td>
					  <td>R$ <?php echo $tela["PJ"];?></td>
					  <td>R$ <?php echo $tela["VT"];?></td>
					  <td>R$ <?php echo $tela2["VA"];?></td>
					  <td>R$ <?php echo $tela2["VR"];?></td>
					  <td>R$ <?php echo $tela["SAUDE"];?></td>
					  <td>R$ <?php echo $tela["VIDA"];?></td>
					  <td>R$ <?php echo $tela2["TRI"];?></td>
					  <td>R$ <?php echo $tela["CEL"];?></td>
					  <td>R$ <?php echo $tela["CUSTO"];?></td>
					  <td>
					  <a href="consultor.php?id_consultor=<?php echo $tela["ID_CONSUL"];?>" class="btn btn-outline-warning btn-sm">Alterar</a>
					  <a href="excluirConsultor.php?id_consultor=<?php echo $tela["ID_CONSUL"];?>"  id="excluirConsultor" value="<?php echo $tela["ID_CONSUL"];?>" class="btn btn-outline-danger btn-sm">Excluir</a>
					  </td>
					</tr>
					<?php }}mysqli_close($conexao);?>
					</form>
			  </tbody>
		    </table>
		 </div>
		</div>
		
		
				
			<!--Botão Cadastrar-->	
			<div class="row" id="funcoesCargoLista">
				<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#ModalCadastraConsultor">Cadastrar</button>
			</div>
			
			<!--Fomulario Modal Cadastrar Consultor-->
			<div class="modal fade" id="ModalCadastraConsultor" role="dialog">
					<div class="modal-dialog modal-lg">
						  <!-- Conteudo do Modal-->
						  <div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Cadastrar Consultor</h5>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>
							
							<div class="modal-body">
							  <form action="cadastro_consultor.php"  method="post" name="form1" id="form1">
									<div class="form-row">
										<div class="form-group col-md-6">
										<label for="NOME">Nome:</label>
										<input type="text" class="form-control" name="NOME" id="NOME" placeholder="" required>
										</div>
										
										<div class="form-group col-md-6">
										<label for="cmbcargo">Cargo</label>
										<select class="form-control" name="cmbcargo" id="cmbcargo">
											<option selected>Selecione o cargo...</option>
													
												<?php	
												
														include ("conexao.php");
														$query = "SELECT CLT AS CLT, VA AS VA, VR AS VR, TRI AS TRI  FROM CARGOS";
														$data = mysqli_query($conexao, $query);
														$result = mysqli_num_rows($data);
														$meujson = array();
														
														$consulta=mysqli_query($conexao, "SELECT * FROM CARGOS order by CARGO ASC");
														while ($dados = mysqli_fetch_array($consulta)){
														echo("<option value='".$dados['CARGO']."'>".$dados['CARGO'].'</option>');
														$meujson[$dados['CARGO']] = $dados;
														
														}mysqli_close($conexao);
												?>
										</select>
									</div>
									</div>
									
									<div class="form-row">
									
										<div class="form-group col-md-3">
										<label for="CLT">Fixo CLT:</label>
										<input type="text" class="form-control" name="CLT" id="CLT" required disabled>
										</div>
										
										<div class="form-group col-md-3">
										<label for="TRI">Premiação Trimestral:</label>
										<input type="text" class="form-control" name="TRI" id="TRI" placeholder="" required disabled>
										</div>
										
									    <div class="form-group col-md-3">
										<label for="VA">Vale alimentação:</label>
										<input type="text" class="form-control" name="VA" id="VA" placeholder="" required disabled>
										</div>
										
										<div class="form-group col-md-3">
										<label for="VR">Vale refeição:</label>
										<input type="text" class="form-control" name="VR" id="VR" placeholder="" required disabled>
										</div>
										
									</div>
									
									<div class="form-row">
										<div class="form-group col-md-3">
										<label for="PJ">Taxa PJ:</label>
										<input type="text" class="form-control"  name="PJ" id="PJ" placeholder="" required>
										</div>
										
										
										<div class="form-group col-md-3">
										<label for="VT">Vale transporte:</label>
										<input type="text" class="form-control" name="VT" id="VT" placeholder="" required>
										</div>
									
									
										<div class="form-group col-md-3">
										<label for="VIDA">Seguro de Vida:</label>
										<input type="text" class="form-control" name="VIDA" id="VIDA" placeholder="" required>
										</div>
										
										<div class="form-group col-md-3">
										<label for="SAUDE">Plano de saude:</label>
										<input type="text" class="form-control" name="SAUDE" id="SAUDE" placeholder="" required>
										</div>
									</div>
									
									<div class="form-row">
										<div class="form-group col-md-6">
										<label for="CEL">Celular:</label>
										<input type="text" class="form-control" name="CEL" id="CEL" placeholder="" required>
										</div>
										<div class="form-group col-md-6">
										<label for="CUSTO">Custo por hora:</label>
										<input type="text" class="form-control" name="CUSTO" id="CUSTO" placeholder="" required>
										</div>
									</div>
									
									<button type="submit" class="btn btn-success">Cadastrar</button>
								</form>
								<script type="text/javascript">
									var dados = <?php echo json_encode($meujson); ?>;
									document.getElementById("cmbcargo").addEventListener("change", function () 
									{
										var linha = dados[this.value];
										for (var CLT in linha) {
											(document.getElementById(CLT) || {}).value = linha[CLT];
										}
									});

								</script>		
							</div>
							<div class="modal-footer">
							  <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
							</div>
						  </div>
					</div>
		  </div>
		   <!--Fim formulario Cadastro de Cargo-->
		  
		  
		
		
		 
		<?php
		 /*Abre Modal Editar Consultor*/
		if(isset($_GET['id_consultor'])){
		$id_consultor = $_GET['id_consultor'];
		include("conexao.php");
        $query = mysqli_query($conexao, "select * from consultores where ID_CONSUL=$id_consultor");
        $resultado = mysqli_fetch_array($query);
		
		$id_cargoConsultor=$resultado["CARGO"];
		ECHO $id_cargoConsultor;
		$query2 = mysqli_query($conexao, "select * from cargos where CARGO='$id_cargoConsultor'");
        $resultadoCargo = mysqli_fetch_array($query2);
		
		
		   ?>
		   
		   <div class="modal fade" id="ModalEditarConsultor" role="dialog">
			<div class="modal-dialog modal-lg">
		   
			  <div class="modal-content">
				<div class="modal-header">
				<h5 class="modal-title">Editar Consultor</h5>
				  <button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				
				<div class="modal-body">
							  <form action="editar_consultor.php"  method="post" name="form1" id="form1">
									<div class="form-row">
										<div class="form-group col-md-6">
										<input name="ID_CONSUL" type="hidden" id="ID_CONSUL" value="<?php echo $id_consultor;?>">
										<label for="NOME">Nome:</label>
										<input type="text" class="form-control" value="<?php echo $resultado["NOME"]; ?>"name="NOME" id="NOME" placeholder="" required>
										</div>
										
										<div class="form-group col-md-6">
										<label for="cmbcargo">Cargo</label>
										<select class="form-control" name="cmbcargo" id="cmbcargo">
									    <option selected><?php echo $resultado["CARGO"]; ?></option>
													
												<?php	
												
														include ("conexao.php");
														$query = "SELECT CLT AS CLT, VA AS VA, VR AS VR, TRI AS TRI  FROM CARGOS";
														$data = mysqli_query($conexao, $query);
														$result = mysqli_num_rows($data);
														$meujson = array();
														
														$consulta=mysqli_query($conexao, "SELECT * FROM CARGOS order by CARGO ASC");
														while ($dados = mysqli_fetch_array($consulta)){
														echo("<option value='".$dados['CARGO']."'>".$dados['CARGO'].'</option>');
														$meujson[$dados['CARGO']] = $dados;
														
														}mysqli_close($conexao);
												?>
										</select>
									</div>
									</div>
									
									<div class="form-row">
									
										<div class="form-group col-md-3">
										<label for="CLT">Fixo CLT:</label>
										<input type="text" class="form-control" value="<?php echo $resultadoCargo["CLT"];?>" name="CLT" id="CLT" required disabled>
										</div>
										
										<div class="form-group col-md-3">
										<label for="TRI">Premiação Trimestral:</label>
										<input type="text" class="form-control" value="<?php echo $resultadoCargo["TRI"];?>" name="TRI" id="TRI" placeholder="" required disabled>
										</div>
										
									    <div class="form-group col-md-3">
										<label for="VA">Vale alimentação:</label>
										<input type="text" class="form-control" value="<?php echo $resultadoCargo["VA"];?>" name="VA" id="VA" placeholder="" required disabled>
										</div>
										
										<div class="form-group col-md-3">
										<label for="VR">Vale refeição:</label>
										<input type="text" class="form-control" value="<?php echo $resultadoCargo["VR"];?>" name="VR" id="VR" placeholder="" required disabled>
										</div>
										
									</div>
									
									<div class="form-row">
										<div class="form-group col-md-3">
										<label for="PJ">Taxa PJ:</label>
										<input type="text" class="form-control" value="<?php echo $resultado["PJ"]; ?>" name="PJ" id="PJ" placeholder="" required>
										</div>
										
										
										<div class="form-group col-md-3">
										<label for="VT">Vale transporte:</label>
										<input type="text" class="form-control" value="<?php echo $resultado["VT"]; ?>" name="VT" id="VT" placeholder="" required>
										</div>
									
									
										<div class="form-group col-md-3">
										<label for="VIDA">Seguro de Vida:</label>
										<input type="text" class="form-control" value="<?php echo $resultado["VIDA"]; ?>" name="VIDA" id="VIDA" placeholder="" required>
										</div>
										
										<div class="form-group col-md-3">
										<label for="SAUDE">Plano de saude:</label>
										<input type="text" class="form-control" value="<?php echo $resultado["SAUDE"]; ?>" name="SAUDE" id="SAUDE" placeholder="" required>
										</div>
									</div>
									
									<div class="form-row">
										<div class="form-group col-md-6">
										<label for="CEL">Celular:</label>
										<input type="text" class="form-control" value="<?php echo $resultado["CEL"]; ?>" name="CEL" id="CEL" placeholder="" required>
										</div>
										<div class="form-group col-md-6">
										<label for="CUSTO">Custo por hora:</label>
										<input type="text" class="form-control" value="<?php echo $resultado["CUSTO"]; ?>" name="CUSTO" id="CUSTO" placeholder="" required>
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
		   <!--Função para iniciar o modal Edita Consultor-->
		   <?php
		echo '<script>window.onload=function(){$("#ModalEditarConsultor").modal();}</script>';
		
		}
		   ?>
		   
		   
			   <footer id="rodape" class="row">
					<h1>Rodape</h1>
			   </footer>
</div>
</div>
</div>


</body>
  <?php 
		  /*Verifica se o cadastro foi realizado com sucesso após processamento na pagina cadastro_cargo*/
		if(isset($_GET['acao'])){
		$acao = $_GET['acao'];
			if($acao == "sucesso"){
				?><script type="text/javascript">alert("Consultor cadastrado com sucesso!");</script><?php	
			}else{
				?><script type="text/javascript">alert("Falha ao gravar dados");</script><?php
			}
		}
		
		/*Verificado se o cadastro foi editado com sucesso após o processamento*/
		if(isset($_GET['acaoEditar'])){
		  $acaoEditar = $_GET['acaoEditar'];
			if($acaoEditar == "sucesso"){
				?><script type="text/javascript">alert("Consultor Atualizado com sucesso!");</script><?php
			}else{
				?><script type="text/javascript">alert("Falha ao atualizar dados");</script><?php
			}
		}
		
		
		/*Verificado se o cadastro foi excluido com sucesso após o processamento*/
		if(isset($_GET['acaoExcluir'])){
		  $acaoExcluir = $_GET['acaoExcluir'];
			if($acaoExcluir == "sucesso"){
				?><script type="text/javascript">alert("Consultor Removido com sucesso!");</script><?php
			}else{
				?><script type="text/javascript">alert("Falha ao Remover dados");</script><?php
			}
		}
		?>
	