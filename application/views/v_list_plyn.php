<!DOCTYPE html>
<html lang="pt-br">
<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Teste de Programação Plyn</title>

 <link href="<?php echo base_url()?>list/css/bootstrap.min.css" rel="stylesheet">
 <link href="<?php echo base_url()?>list/css/style.css" rel="stylesheet">
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
  
  <h3 class="page-header">Editar Item</h3>




 <div id="main" class="container-fluid" style="margin-top: 50px">
 
  <div id="top" class="row">
    <div class="col-sm-3">
      <h2>Itens</h2>
    </div>
    <div class="col-sm-6">
      
      <div class="input-group h2">
        <input name="data[search]" class="form-control" id="search" type="text" placeholder="Pesquisar Itens">
        <span class="input-group-btn">
          <button class="btn btn-primary" type="submit">
            <span class="glyphicon glyphicon-search"></span>
          </button>
        </span>
      </div>
      
    </div>
    <div class="col-sm-3">
      <a href="<?php echo base_url()?>index.php/add" class="btn btn-primary pull-right h2">Novo Item</a>
    </div>
  </div> <!-- /#top -->
 
 
  <hr />
  <div id="list" class="row">
  
  <div class="table-responsive col-md-12">
    <table class="table table-striped" cellspacing="0" cellpadding="0">
      
        <tr>
          <th>Cpf</th>
          <th>Nome</th>
          <th>Sobrenome</th>
          <th>Nascimento</th>
          <th>E-mail</th>
          <th>Senha</th>
          <th>Excluir</th>
          <th>editar</th>
        </tr>
      
      <?php 

      if (!empty($dados)){
        foreach($dados as $row){ ?>

          <tr>
            <td><center><?php echo $row->cpf; ?></center></td>
            <td><center><?php echo $row->nome; ?></center></td>
            <td><center><?php echo $row->sobrenome; ?></center></td>
            <td><center><?php echo $row->nascimento; ?></center></td>
            <td><center><?php echo $row->email; ?></center></td>
            <td><center><?php echo $row->senha; ?></center></td>
            <td><center><a href="<?php echo base_url()?>index.php/edit/editar/<?php echo $row->cpf?>">EDITAR</a></center></td>
            <td><center><a href="<?php echo base_url()?>index.php/list/deletar/<?php echo $row->cpf?>">EXCLUIR</a></center></td>
          </tr>

      <?php }   
      }
      ?>
    </table>
  </div>
  
  </div> <!-- /#list -->
  
  <div id="bottom" class="row">
    <div class="col-md-12">
      <ul class="pagination">
        <li class="disabled"><a>&lt; Anterior</a></li>
        <li class="disabled"><a>1</a></li>
        <li><a href="#">2</a></li>
        <li class="next"><a href="#" rel="next">Próximo &gt;</a></li>
      </ul><!-- /.pagination -->
    </div>
  </div> <!-- /#bottom -->
 </div> <!-- /#main -->



 <script src="<?php echo base_url()?>list/js/jquery.min.js"></script>
 <script src="<?php echo base_url()?>list/js/bootstrap.min.js"></script>
</body>
</html>