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
					<div class="col-md-1"><h5>MIFs</h5></div>
						<div class="col-md-5">
						 <form><input type="text" class="form-control" id="pesquisaMIFs"  placeholder=""></form>
						</div>
					   <div class="col-md-6"><button type="button" id="pesquisar" class="btn btn-success"><span class="glyphicon glyphicon-search"></span>Pesquisar</button> </div>
				
				</div>
				
		<!--TABELA PESQUISA MIFs-->		
		<div class="row" id="result_search_table">
		<div class="table-responsive">
		 <table class="table table-hover">
			<thead class="thead-light">
				<tr>
				<th scope="col">Projeto</th>
				<th scope="col">Memória de Cálculo</th>
				<th scope="col">Cronograma do Projeto</th>
				<th scope="col">EASY Project</th>
				<th scope="col">MIF005 Ata de Reunião</th>
				<th scope="col">MIF906 Lista de Tarefas e Pendências</th>
				<th scope="col">MIF991 Status Report ou MIT008</th>
				<th scope="col">MIF021 Termo de Abertura, Proposta</th>
				<th scope="col">MIF962 Termo de Encerramento</th>
				<th scope="col">MIF998 Engenharia de Processos</th>
				<th scope="col">Funções</th>
				</tr>
			</thead>
			  <tbody>
				  <form id="consultaMIFs" class="consultaMIFs">
					<?php
					include("conexao.php");
					$consultar=mysqli_query($conexao, "select * from MIF order by PROJETO ASC");
					while($tela=mysqli_fetch_array($consultar))
					{ 
					$id_MIFs = $tela["ID_MIF"]; 
					
						?>
					<tr>
					  <td scope="row">
						<?php echo $tela["PROJETO"];?>
					  </td>
					  <td>
								<?php
								if($tela["MEMORIA_CALCULO"]==1){?>
								<input type="checkbox" disabled checked="checked"  class="form-control"  name="MEMORIA_CALCULOP" value="1" placeholder="" >
								<?php }else{ ?> 
								<input type="checkbox" disabled class="form-control" name="MEMORIA_CALCULOP" value="0" placeholder="" >				
								<?php }?> 
					  </td>
								
					  <td>				  
								<?php
								if($tela["CRONOGRAMA_PROJ"]==1){?>
								<input type="checkbox" disabled checked="checked" class="form-control"  name="CRONOGRAMA_PROJP" value="1" placeholder="" >
								<?php }else{ ?> 
								<input type="checkbox" disabled class="form-control"  name="CRONOGRAMA_PROJP" value="0" placeholder="" >				
								<?php }?>
					  </td>
								
					  <td>
								<?php
								if($tela["EASY_PROJ"]==1){?>
								<input type="checkbox" disabled checked="checked" class="form-control"  name="EASY_PROJP" value="1" placeholder="" >
								<?php }else{ ?> 
								<input type="checkbox" disabled class="form-control"  name="EASY_PROJP" value="0" placeholder="" >				
								<?php }?>
					  
					  </td>
								
					  <td>
								<?php
								if($tela["MIF_ATA"]==1){?>
								<input type="checkbox" disabled checked="checked" class="form-control"  name="MIF_ATAP" value="1" placeholder="" >
								<?php }else{ ?> 
								<input type="checkbox" disabled class="form-control"  name="MIF_ATAP" value="0" placeholder="" >				
								<?php }?>
					  </td>
	
								
					  <td>
								<?php
								if($tela["MIF_TAREFA"]==1){?>
								<input type="checkbox" disabled checked="checked" class="form-control"  name="MIF_TAREFAP" value="1" placeholder="" >
								<?php }else{ ?> 
								<input type="checkbox" disabled class="form-control"  name="MIF_TAREFAP" value="0" placeholder="" >				
								<?php }?>
					  </td>
						
					  <td>
								<?php
								if($tela["MIF_STATUS"]==1){?>
								<input type="checkbox" disabled checked="checked" class="form-control"  name="MIF_STATUSP" value="1" placeholder="" >
								<?php }else{ ?> 
								<input type="checkbox" disabled class="form-control"  name="MIF_STATUSP" value="0" placeholder="" >				
								<?php }?>
					  </td>
								
					  <td>
								<?php
								if($tela["MIF_ABERTURA_ASS"]==1){?>
								<input type="checkbox" disabled checked="checked" class="form-control"  name="MIF_ABERTURA_ASSP" value="1" placeholder="" >
								<?php } else { ?>
								<input type="checkbox" disabled class="form-control"  name="MIF_ABERTURA_ASSP" value="1" placeholder="" >
								<?php }
								
								if($tela["MIF_ABERTURA"]==1){?>
								<input type="checkbox" disabled checked="checked" class="form-control"  name="MIF_ABERTURAP" value="1" placeholder="" >
								<?php } else { ?>
								<input type="checkbox" disabled class="form-control" name="MIF_ABERTURAP" value="1" placeholder="" >
								<?php }?>
								
					  </td>
									
					  <td>
								<?php
								if($tela["MIF_ENCERRAMENTO_ASS"]==1){?>
								<input type="checkbox" disabled checked="checked" class="form-control"  name="MIF_ENCERRAMENTO_ASSP" value="1" placeholder="" >
								<?php } else { ?> 
								<input type="checkbox" disabled class="form-control"  name="MIF_ENCERRAMENTO_ASSP" value="0" placeholder="" >				
								<?php }
								
								if($tela["MIF_ENCERRAMENTO"]==1){?>
								<input type="checkbox" disabled checked="checked" class="form-control"  name="MIF_ENCERRAMENTOP" value="1" placeholder="" >
								<?php } else { ?>
								<input type="checkbox" disabled class="form-control"  name="MIF_ENCERRAMENTOP" value="0" placeholder="" >
								<?php } ?>
					  </td>
								
					  <td>
								<?php
								if($tela["MIF_ENGENHARIA_ASS"]==1){?>
								<input type="checkbox" disabled checked="checked" class="form-control"  name="MIF_ENGENHARIA_ASSP" value="1" placeholder="" >
								<?php } else { ?>
								<input type="checkbox" disabled class="form-control"  name="MIF_ENGENHARIA_ASSP" value="0" placeholder="" >				
								<?php }
								
								if($tela["MIF_ENGENHARIA"]==1){?>
								<input type="checkbox" disabled checked="checked" class="form-control"  name="MIF_ENGENHARIAP" value="1" placeholder="" >
								<?php } else { ?>
								<input type="checkbox" disabled class="form-control"  name="MIF_ENGENHARIAP" value="0" placeholder="" >
								<?php } ?>
					  </td>
								
					  <td>
					  <a href="mifs.php?id_MIFs=<?php echo $tela["ID_MIF"];?>" class="btn btn-outline-warning btn-sm">Alterar</a>
					  <a href="excluirMifs.php?id_MIFs=<?php echo $tela["ID_MIF"];?>"  id="excluirMifs" value="<?php echo $tela["ID_MIF"];?>" class="btn btn-outline-danger btn-sm">Excluir</a>
					  </td>
					</tr>
					<?php }mysqli_close($conexao);?>
					</form>
			  </tbody>
		    </table>
		 </div>
		</div>
		
		
				
			<!--Botão Cadastrar-->	
			<div class="row" id="funcoesCargoLista">
				<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#ModalCadastraMIFs">Cadastrar</button>
			</div>
			
			<!--Fomulario Modal Cadastrar Mif-->
			<div class="modal fade" id="ModalCadastraMIFs" role="dialog">
					<div class="modal-dialog modal-lg">
						  <!-- Conteudo do Modal-->
						  <div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Cadastrar MIFs</h5>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>
							
							<div class="modal-body">
							  <form action="cadastro_MIFs.php"  method="post" name="form1" id="form1">
									<div class="form-row">
										
										<div class="form-group col-md-12">
										<label for="cmbprojeto">PROJETO</label>
										<select class="form-control" name="cmbprojeto" id="cmbprojeto">
											<option selected>Selecione o projeto...</option>
													
												<?php	
												
														include ("conexao.php");
														$query = "SELECT PROJETO FROM APONTAMENTO";
														$data = mysqli_query($conexao, $query);
														$result = mysqli_num_rows($data);
														$meujson = array();
														
														$consulta=mysqli_query($conexao, "SELECT PROJETO FROM APONTAMENTO order by PROJETO ASC");
														while ($dados = mysqli_fetch_array($consulta)){
														echo("<option value='".$dados['PROJETO']."'>".$dados['PROJETO'].'</option>');
														$meujson[$dados['PROJETO']] = $dados;
														
														}mysqli_close($conexao);
												?>
										</select>
									</div>
									</div>
									
									<div class="form-row">
										<div class="form-group col-md-3">
										<label for="MC">Memória de cálculo:</label>
										</div>
										<div class="form-group col-md-1">
										<input type="checkbox" class="form-control"  name="MEMORIA_CALCULO" value="1" placeholder="" >
										</div>
										
										
										<div class="form-group col-md-3">
										<label for="CP">Cronograma do projeto:</label>
										</div>
										<div class="form-group col-md-1">
										<input type="checkbox" class="form-control"  name="CRONOGRAMA_PROJ" value="1" placeholder="" >
										</div>
									
									
										<div class="form-group col-md-3">
										<label for="EP">EASY Project:</label>
										</div>
										<div class="form-group col-md-1">
										<input type="checkbox" class="form-control" name="EASY_PROJ" value="1" placeholder="" >
										</div>
									 </div>
									 
									<div class="form-row">
									
										<div class="form-group col-md-3">
										<label for="005">Ata de Reunião:</label>
										</div>
										<div class="form-group col-md-1">
										<input type="checkbox" class="form-control"  name="MIF_ATA" value="1" placeholder="" >
										</div>
										
										<div class="form-group col-md-3">
										<label for="906">Lista de tarefas e pendências:</label>
										</div>
										<div class="form-group col-md-1">
										<input type="checkbox" class="form-control"  name="MIF_TAREFA" value="1" placeholder="" >
										</div>
										
										<div class="form-group col-md-3">
										<label for="991">Status report ou MIT008:</label>
										</div>
										<div class="form-group col-md-1">
										<input type="checkbox" class="form-control"  name="MIF_STATUS" value="1" placeholder="" >
										</div>
									
											
									
									
									</div>		
										
									
									<div class="form-row">
										<div class="form-group col-md-4"><label align="center" for="021">Termo de abertura, Proposta:</label></div>
										<div class="form-group col-md-4"><label for="962">Termo de encerramento:</label></div>
										<div class="form-group col-md-4"><label for="998">Engenharia de processos:</label></div>	
									</div>
									
									<div class="form-row">
										<div class="form-group col-md-2">
										<label align="center">Assinada<input type="checkbox" class="form-control"  name="MIF_ABERTURA_ASS" value="1" placeholder="" ></label>
										</div>
										<div class="form-group col-md-2">
										<label align="center">Entregue<input type="checkbox" class="form-control"  name="MIF_ABERTURA" value="1" placeholder="" >
										</div>
										
										<div class="form-group col-md-2">
										<label align="center">Assinada<input type="checkbox" class="form-control"  name="MIF_ENCERRAMENTO_ASS" value="1" placeholder="" >
										</div>
										<div class="form-group col-md-2">
										</label><label align="center">Entregue<input type="checkbox" class="form-control"  name="MIF_ENCERRAMENTO" value="1" placeholder="" ></label>
										</div>
										
										<div class="form-group col-md-2">
										<label align="center">Assinada<input type="checkbox" class="form-control"  name="MIF_ENGENHARIA_ASS" value="1" placeholder="" ></label>
										</div>
										<div class="form-group col-md-2">
										<label align="center">Entregue<input type="checkbox" class="form-control"  name="MIF_ENGENHARIA" value="1" placeholder="" >
										</label>
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
		 /*Abre Modal Editar mifs*/
		if(isset($_GET['id_MIFs'])){
		$id_mifs = $_GET['id_MIFs'];
		include("conexao.php");
        $query = mysqli_query($conexao, "select * from MIF where ID_MIF=$id_mifs");
        $resultado = mysqli_fetch_array($query);
		
		
		   ?>
		   
		   <div class="modal fade" id="ModalEditarMifs" role="dialog">
			<div class="modal-dialog modal-lg">
		   
			  <div class="modal-content">
				<div class="modal-header">
				<h5 class="modal-title">Editar MIF</h5>
				  <button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				
				<div class="modal-body">
							  <form action="edita_mifs.php"  method="post" name="form1" id="form1">
									<div class="form-row">
										
										<input name="id_MIFs" type="hidden" id="id_MIFs" value="<?php echo $id_MIFs;?>">
										
										
										<div class="form-group col-md-12">
										<label for="cmbprojeto">Projeto</label>
										<select class="form-control" name="cmbprojeto" id="cmbprojeto">
									    <option selected><?php echo $resultado["PROJETO"]; ?></option>
													
												<?php	$consulta=mysqli_query($conexao, "SELECT * FROM APONTAMENTO order by PROJETO ASC");
														while ($dados = mysqli_fetch_array($consulta)){
														echo("<option value='".$dados['PROJETO']."'>".$dados['PROJETO'].'</option>');
														$meujson[$dados['PROJETO']] = $dados;
														
														}mysqli_close($conexao);
												?>
										</select>
									</div>
									</div>
									
									<div class="form-row">
										<div class="form-group col-md-3">
										<label for="MC">Memória de cálculo:</label>
										</div>
										<div class="form-group col-md-1">
										<?php
										if($resultado["MEMORIA_CALCULO"]==1){?>
										<input type="checkbox"  checked="marcaDesmarca1();"  class="form-control"  name="MEMORIA_CALCULO" value="marcaDesmarca1();" placeholder="" >
										<?php }else{ ?> 
										<input type="checkbox" class="form-control" name="MEMORIA_CALCULO" value="marcaDesmarca1();" placeholder="" >				
										<?php }?>
										</div>
										
										
										<div class="form-group col-md-3">
										<label for="CP">Cronograma do projeto:</label>
										</div>
										<div class="form-group col-md-1">
										
										<?php
										if($resultado["CRONOGRAMA_PROJ"]==1){?>
										<input type="checkbox" checked="marcaDesmarca2();" class="form-control"  name="CRONOGRAMA_PROJ" value="marcaDesmarca2();" placeholder="" >
										<?php }else{ ?> 
										<input type="checkbox" class="form-control"  name="CRONOGRAMA_PROJ" value="marcaDesmarca2();" placeholder="" >				
										<?php }?>
										</div>
									
									
										<div class="form-group col-md-3">
										<label for="EP">EASY Project:</label>
										</div>
										<div class="form-group col-md-1">
											<?php
											if($resultado["EASY_PROJ"]==1){?>
											<input type="checkbox" checked="marcaDesmarca3();" class="form-control"  name="EASY_PROJ" value="marcaDesmarca3();" placeholder="" >
											<?php }else{ ?> 
											<input type="checkbox" class="form-control"  name="EASY_PROJ" value="marcaDesmarca3();" placeholder="" >				
											<?php }?>
										</div>
									 </div>
									 
									<div class="form-row">
									
										<div class="form-group col-md-3">
										<label for="005">Ata de Reunião:</label>
										</div>
										<div class="form-group col-md-1">
										
											<?php
											if($resultado["MIF_ATA"]==1){?>
											<input type="checkbox" checked="marcaDesmarca4();" class="form-control"  name="MIF_ATA" value="marcaDesmarca4();" placeholder="" >
											<?php }else{ ?> 
											<input type="checkbox" class="form-control"  name="MIF_ATA" value="marcaDesmarca4();" placeholder="" >				
											<?php }?>
										</div>
										
										<div class="form-group col-md-3">
										<label for="906">Lista de tarefas e pendências:</label>
										</div>
										<div class="form-group col-md-1">
											<?php
											if($resultado["MIF_TAREFA"]==1){?>
											<input type="checkbox" checked="marcaDesmarca5();" class="form-control"  name="MIF_TAREFA" value="marcaDesmarca5();" placeholder="" >
											<?php }else{ ?> 
											<input type="checkbox" class="form-control"  name="MIF_TAREFA" value="marcaDesmarca5();" placeholder="" >				
											<?php }?>
										</div>
										
										<div class="form-group col-md-3">
										<label for="991">Status report ou MIT008:</label>
										</div>
										<div class="form-group col-md-1">
											<?php
											if($resultado["MIF_STATUS"]==1){?>
											<input type="checkbox" checked="marcaDesmarca6();" class="form-control"  name="MIF_STATUS" value="marcaDesmarca6();" placeholder="" >
											<?php }else{ ?> 
											<input type="checkbox" class="form-control"  name="MIF_STATUS" value="marcaDesmarca6();" placeholder="" >				
											<?php }?>
										</div>
									
											
									
									
									</div>		
										
									
									<div class="form-row">
										<div class="form-group col-md-4"><label align="center" for="021">Termo de abertura, Proposta:</label></div>
										<div class="form-group col-md-4"><label for="962">Termo de encerramento:</label></div>
										<div class="form-group col-md-4"><label for="998">Engenharia de processos:</label></div>	
									</div>
									
									<div class="form-row">
										<div class="form-group col-md-2">
										<label align="center">Assinada
										<?php
										if($resultado["MIF_ABERTURA_ASS"]==1){?>
										<input type="checkbox" checked="marcaDesmarca7();" class="form-control"  name="MIF_ABERTURA_ASS" value="marcaDesmarca7();" placeholder="" >
										<?php }
										if($resultado["MIF_ABERTURA_ASS"]==0){?>
										<input type="checkbox" class="form-control"  name="MIF_ABERTURA_ASS" value="marcaDesmarca7(); placeholder="" >
										<?php }?>
										
										</label>
										</div>
										<div class="form-group col-md-2">
										<label align="center">Entregue
										<?php if($resultado["MIF_ABERTURA"]==1){?>
										<input type="checkbox" checked="marcaDesmarca8();" class="form-control"  name="MIF_ABERTURA" value="marcaDesmarca8();" placeholder="" >
										<?php }
										if($resultado["MIF_ABERTURA"]==0){?>
										<input type="checkbox" class="form-control" name="MIF_ABERTURA" value="marcaDesmarca8();" placeholder="" >
										<?php }?>
										</label>
										</div>
										
										<div class="form-group col-md-2">
										<label align="center">Assinada
											<?php
											if($resultado["MIF_ENCERRAMENTO_ASS"]==1){?>
											<input type="checkbox" checked="marcaDesmarca9();" class="form-control"  name="MIF_ENCERRAMENTO_ASS" value="marcaDesmarca9();" placeholder="" >
											<?php }else{ ?> 
											<input type="checkbox" class="form-control"  name="MIF_ENCERRAMENTO_ASS" value="marcaDesmarca9();" placeholder="" >				
											<?php } ?>
										</label>			
										</div>
										<div class="form-group col-md-2">
										<label align="center">Entregue
											<?php if($resultado["MIF_ENCERRAMENTO_ASS"]==1){?>
											<input type="checkbox" checked="marcaDesmarca10();" class="form-control"  name="MIF_ENCERRAMENTO" value="marcaDesmarca10();" placeholder="" >
											<?php }
											if($resultado["MIF_ENCERRAMENTO_ASS"]==0){?>
											<input type="checkbox" class="form-control"  name="MIF_ENCERRAMENTO" value="marcaDesmarca10();" placeholder="" >
											<?php } ?>
										</label>
										</div>
										
										<div class="form-group col-md-2">
										<label align="center">Assinada
											<?php
											if($resultado["MIF_ENGENHARIA_ASS"]==1){?>
											<input type="checkbox" checked="marcaDesmarca11();" class="form-control"  name="MIF_ENGENHARIA_ASS" value="marcaDesmarca11();" placeholder="" >
											<?php }else{ ?> 
											<input type="checkbox" class="form-control"  name="MIF_ENGENHARIA_ASS" value="marcaDesmarca11();" placeholder="" >				
											<?php }?>
										</label>
										</div>
										<div class="form-group col-md-2">
										<label align="center">Entregue
											<?php if($resultado["MIF_ENGENHARIA"]==1){?>
											<input type="checkbox" checked="marcaDesmarca12();" class="form-control"  name="MIF_ENGENHARIA" value="marcaDesmarca12();" placeholder="" >
											<?php }
											if($resultado["MIF_ENGENHARIA"]==0){?>
											<input type="checkbox" class="form-control"  name="MIF_ENGENHARIA" value="marcaDesmarca12();" placeholder="" >
											<?php }?>
										</label>
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
		echo '<script>window.onload=function(){$("#ModalEditarMifs").modal();}</script>';
		
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
				?><script type="text/javascript">alert("MIF cadastrado com sucesso!");</script><?php	
			}else{
				?><script type="text/javascript">alert("Falha ao gravar dados");</script><?php
			}
		}
		
		/*Verificado se o cadastro foi editado com sucesso após o processamento*/
		if(isset($_GET['acaoEditar'])){
		  $acaoEditar = $_GET['acaoEditar'];
			if($acaoEditar == "sucesso"){
				?><script type="text/javascript">alert("MIF Atualizado com sucesso!");</script><?php
			}else{
				?><script type="text/javascript">alert("Falha ao atualizar dados");</script><?php
			}
		}
		
		
		/*Verificado se o cadastro foi excluido com sucesso após o processamento*/
		if(isset($_GET['acaoExcluir'])){
		  $acaoExcluir = $_GET['acaoExcluir'];
			if($acaoExcluir == "sucesso"){
				?><script type="text/javascript">alert("MIF Removido com sucesso!");</script><?php
			}else{
				?><script type="text/javascript">alert("Falha ao Remover dados");</script><?php
			}
		}
		?>
		
		<script type="text/javascript"> 
			var sim = true;
			var nao = false;
			function marcaDesmarca1(){
				checkboxes = document.getElementsByName('MEMORIA_CALCULO');
				<?php if ($resultado["MEMORIA_CALCULO"] = 0) { 
					echo nao
					?> checkboxes.checked = !nao;
				<?php }else {
					echo sim
					?> checkboxes.checked = !sim;
					<?php
				}
				
			?>
			</script>
			
					<script type="text/javascript"> 
			var sim = true;
			var nao = false;
			function marcaDesmarca2(){
				checkboxes = document.getElementsByName('CRONOGRAMA_PROJ');
				<?php if ($resultado["CRONOGRAMA_PROJ"] = 0) { 
					echo nao
					?> checkboxes.checked = nao;
				<?php }else {
					echo sim
					?> checkboxes.checked = sim;
					<?php
				}
				
			?>
			</script>
			
					<script type="text/javascript"> 
			var sim = true;
			var nao = false;
			function marcaDesmarca3(){
				checkboxes = document.getElementsByName('EASY_PROJ');
				<?php if ($resultado["EASY_PROJ"] = 0) { 
					echo nao
					?> checkboxes.checked = !nao;
				<?php }else {
					echo sim
					?> checkboxes.checked = !sim;
					<?php
				}
				
			?>
			</script>
			
					<script type="text/javascript"> 
			var sim = true;
			var nao = false;
			function marcaDesmarca4(){
				checkboxes = document.getElementsByName('MIF_ATA');
				<?php if ($resultado["MIF_ATA"] = 0) { 
					echo nao
					?> checkboxes.checked = !nao;
				<?php }else {
					echo sim
					?> checkboxes.checked = !sim;
					<?php
				}
				
			?>
			</script>
			
					<script type="text/javascript"> 
			var sim = true;
			var nao = false;
			function marcaDesmarca5(){
				checkboxes = document.getElementsByName('MIF_TAREFA');
				<?php if ($resultado["MIF_TAREFA"] = 0) { 
					echo nao
					?> checkboxes.checked = !nao;
				<?php }else {
					echo sim
					?> checkboxes.checked = !sim;
					<?php
				}
				
			?>
			</script>
			
					<script type="text/javascript"> 
			var sim = true;
			var nao = false;
			function marcaDesmarca6(){
				checkboxes = document.getElementsByName('MIF_STATUS');
				<?php if ($resultado["MIF_STATUS"] = 0) { 
					echo nao
					?> checkboxes.checked = !nao;
				<?php }else {
					echo sim
					?> checkboxes.checked = !sim;
					<?php
				}
				
			?>
			</script>
			
					<script type="text/javascript"> 
			var sim = true;
			var nao = false;
			function marcaDesmarca7(){
				checkboxes = document.getElementsByName('MIF_ABERTURA_ASS');
				<?php if ($resultado["MIF_ABERTURA_ASS"] = 0) { 
					echo nao
					?> checkboxes.checked = !nao;
				<?php }else {
					echo sim
					?> checkboxes.checked = !sim;
					<?php
				}
				
			?>
			</script>
			
					<script type="text/javascript"> 
			var sim = true;
			var nao = false;
			function marcaDesmarca8(){
				checkboxes = document.getElementsByName('MIF_ABERTURA');
				<?php if ($resultado["MIF_ABERTURA"] = 0) { 
					echo nao
					?> checkboxes.checked = !nao;
				<?php }else {
					echo sim
					?> checkboxes.checked = !sim;
					<?php
				}
				
			?>
			</script>
			
					<script type="text/javascript"> 
			var sim = true;
			var nao = false;
			function marcaDesmarca9(){
				checkboxes = document.getElementsByName('MIF_ENCERRAMENTO_ASS');
				<?php if ($resultado["MIF_ENCERRAMENTO_ASS"] = 0) { 
					echo nao
					?> checkboxes.checked = !nao;
				<?php }else {
					echo sim
					?> checkboxes.checked = !sim;
					<?php
				}
				
			?>
			</script>
			
					<script type="text/javascript"> 
			var sim = true;
			var nao = false;
			function marcaDesmarca10(){
				checkboxes = document.getElementsByName('MIF_ENCERRAMENTO');
				<?php if ($resultado["MIF_ENCERRAMENTO"] = 0) { 
					echo nao
					?> checkboxes.checked = !nao;
				<?php }else {
					echo sim
					?> checkboxes.checked = !sim;
					<?php
				}
				
			?>
			</script>
			
					<script type="text/javascript"> 
			var sim = true;
			var nao = false;
			function marcaDesmarca11(){
				checkboxes = document.getElementsByName('MIF_ENGENHARIA_ASS');
				<?php if ($resultado["MIF_ENGENHARIA_ASS"] = 0) { 
					echo nao
					?> checkboxes.checked = !nao;
				<?php }else {
					echo sim
					?> checkboxes.checked = !sim;
					<?php
				}
				
			?>
			</script>
			
					<script type="text/javascript"> 
			var sim = true;
			var nao = false;
			function marcaDesmarca12(){
				checkboxes = document.getElementsByName('MIF_ENGENHARIA');
				<?php if ($resultado["MIF_ENGENHARIA"] = 0) { 
					echo nao
					?> checkboxes.checked = !nao;
				<?php }else {
					echo sim
					?> checkboxes.checked = !sim;
					<?php
				}
				
			?>
			</script>