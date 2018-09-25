<!DOCTYPE html>
<html lang="pt-br">
<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Teste de Programação Plyn</title>

 <link href="<?php echo base_url()?>add/css/bootstrap.min.css" rel="stylesheet">
 <link href="<?php echo base_url()?>add/css/style.css" rel="stylesheet">
</head>
<body>

 <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
   <div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
     <span class="sr-only">Toggle navigation</span>
     <span class="icon-bar"></span>
     <span class="icon-bar"></span>
     <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#">Teste de Programação Plyn</a>
   </div>
   <div id="navbar" class="navbar-collapse collapse">
    <ul class="nav navbar-nav navbar-right">
     <li><a href="#">Início</a></li>
     <li><a href="#">Opções</a></li>
     <li><a href="#">Perfil</a></li>
     <li><a href="#">Ajuda</a></li>
    </ul>
   </div>
  </div>
 </nav>
 

  

 <div id="main" class="container-fluid">
  
  <?php
      if($this->session->flashdata('mensagem')!='')
      {
       ?><div class="container alert alert-warning" style="width: 40%;"><center><?php echo $this->session->flashdata('mensagem');
       ?></center></div><?php
      } ?>

  <h3 class="page-header">Adicionar Item</h3>
  
  <form method="post" action="<?php echo base_url();?>index.php/home/cadastrar">
    <div class="row">
      <div class="form-group col-md-4">
        <label>Nome</label>
        <input type="text" class="form-control" name="nome" placeholder="Digite o valor">
      </div>
  </div>
  
  <div class="row">
    <div class="form-group col-md-4">
        <label>Sobrenome</label>
        <input type="text" class="form-control" name="sobrenome"  placeholder="Digite o valor">
      </div>
  </div>
  
  <div class="row">
    <div class="form-group col-md-4">
        <label>Nascimento</label>
        <input type="text" class="form-control" name="nascimento" placeholder="Digite o valor">
      </div>
  </div>

  <div class="row">
    <div class="form-group col-md-4">
        <label>cpf</label>
        <input type="text" class="form-control" name="cpf" placeholder="Digite o valor">
      </div>
  </div>
  
  <div class="row">
      <div class="form-group col-md-3">
        <label for="exampleInputEmail1">E-Mail</label>
        <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Digite o valor">
      </div>
  </div>

   <div class="row">
      <div class="form-group col-md-3">
        <label>Senha</label>
        <input type="password" class="form-control" name="senha" placeholder="Digite o valor">
      </div>
  </div>
    
  <hr />
  
  <div class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Salvar</button>
    <a href="template.html" class="btn btn-default">Cancelar</a>
    </div>
  </div>

  </form>
 </div>
 

 <script src="<?php echo base_url()?>add/js/jquery.min.js"></script>
 <script src="<?php echo base_url()?>add/js/bootstrap.min.js"></script>
</body>
</html>