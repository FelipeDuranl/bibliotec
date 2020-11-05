<?php
session_start();

if ((!isset ($_SESSION['nome']) == true) and (!isset ($_SESSION['email']) == true)) {
  unset($_SESSION['nome']);
  unset($_SESSION['email']);
  header('Location: loginadm.html');
}

include 'conecta.php';

?>

<!doctype html>
<html lang="PT-BR">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->

  <link rel="stylesheet" href="css/bootstrap.min.css">

  <link rel="stylesheet" href="css/admestilo.css">

  <link href="https://fonts.googleapis.com/css?family=Dancing+Script:400,700&display=swap" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Lobster&display=swap" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Be+Vietnam&display=swap" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Courgette&display=swap" rel="stylesheet">

  <title>Bibliotec - Administrador</title>
</head>
<body>



  <section id="topo">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">

        <a class="navbar-brand" href="index.html">
          <h2 class="navbar-titulo"> <img src="img/faviconz.png" width="30" height="40" class="d-inline-block align-top" alt="image">Bibliotec</h2>
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">

          <ul class="navbar-nav mr-auto">

            <li class="nav-item">
              <a class="nav-link" href="#secdeletar">Deletar</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#secatualizar">Atualizar</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#secordens">Ordens</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="adm-info.php">Suas informações</a>
            </li>
          </ul>

          <form class="form-inline my-2 my-lg-0">
            <a class="btn btn-outline-warning my-2 my-sm-0" href="sair.php" >Sair</a>
          </form>

        </div>
      </nav>
    </div>
  </section>




  <section>
    <div class="jumbotron jumbotron-fluid">

      <h1 class="display-4">Administração</h1>

    </div>
  </section>




  <section id="secdeletar"> 
    <div>

      <hr class="my-1">
      <h2 class="atividades">Ver e deletar cadastros</h2>
      <hr class="my-4">

    </div>
  </section>


  <section>
    <div class="container">
      <div class="row">
        <div class="card-deck">


          <div class="card " >
            <img class="card-img-top" src="img/adimin/livros1.png " alt="Imagem de capa do card" >
            <div class="card-body">
              <h5 class="card-title">Livros</h5>
              <p class="card-text">Ver e deletar ou cadastrar os registros dos livros no banco de dados da biblioteca.</p>
              <br>
              <br>
              <a href="deletelivros.php" class="btn btn-outline-warning">Ver e deletar</a>
              <a href="cadastrolivros.php" class="btn btn-outline-warning botao-voltar">Cadastrar</a>
            </div>
          </div>

          <div class="card " >
            <img class="card-img-top" src="img/adimin/alunos1.png " alt="Imagem de capa do card"  >
            <div class="card-body">
              <h5 class="card-title">Alunos</h5>
              <p class="card-text">Ver e deletar os registros dos alunos no banco de dados da biblioteca.</p>
              <br>
              <br>
              <a href="deletealunos.php" class="btn btn-outline-warning">Ver e deletar</a>
            </div>
          </div>


          <div class="card " >
            <img class="card-img-top" src="img/adimin/professores1.png " alt="Imagem de capa do card" >
            <div class="card-body">
              <h5 class="card-title">Professores e funcionários</h5>
              <p class="card-text">Ver e deletar os registros dos funcionários no banco de dados da biblioteca.</p>
              <br>
              <br>
              <a href="deletefuncionarios.php" class="btn btn-outline-warning">Ver e deletar</a>
            </div>
          </div>

        </div>
      </div>
    </div>


  </section>





  <section id="secatualizar">
    <div>


      <hr class="my-4">
      <h2 class="atividades">Atualizar registros do banco de dados</h2>
      <hr class="my-4">

    </div>
  </section>






  <section>


    <div class="container">
      <div class="row">
        <div class="card-deck">


          <div class="card" >
            <img class="card-img-top" src="img/adimin/livros2.png " alt="Imagem de capa do card" >
            <div class="card-body">
              <h5 class="card-title">Livros</h5>
              <p class="card-text">Atualizar e editar os registros dos livros no banco de dados da biblioteca.</p>
              <a href="updatelivros.php" class="btn btn-outline-warning">Atualizar</a>
            </div>
          </div>


          <div class="card " >
            <img class="card-img-top" src="img/adimin/alunos2.png" alt="Imagem de capa do card" >
            <div class="card-body">
              <h5 class="card-title">Alunos</h5>
              <p class="card-text">Atualizar e editar os registros dos alunos no banco de dados da biblioteca.</p>
              <a href="updatealunos.php" class="btn btn-outline-warning">Atualizar</a>
            </div>
          </div>


          <div class="card text-justify" >
            <img class="card-img-top" src="img/adimin/professores2.png " alt="Imagem de capa do card" >
            <div class="card-body">
              <h5 class="card-title">Professores e funcionários</h5>
              <p class="card-text ">Atualizar e editar os registros dos funcionários no banco de dados.</p>
              <a href="updatefuncionarios.php" class="btn btn-outline-warning">Atualizar</a>
            </div>
          </div>


        </div>
      </div>
    </div>


  </section>


  <section id="secordens">


    <div>
      <hr class="my-4">
      <h2 class="atividades">Ordens</h2>
      <hr class="my-4">
    </div>


  </section>






  <section >


    <div class="container">
      <div class="row">
        <div class="card-deck">



          <div class="card" >
            <img class="card-img-top" src="img/adimin/ordens1.png " alt="Imagem de capa do card"  >
            <div class="card-body">
              <h5 class="card-title">Inserir novo registro</h5>
              <p class="card-text">Inserir e registrar novas ordens no banco de dados da biblioteca.</p>

              <br>

              <a href="cadastroordens-alunos.php" class="btn btn-outline-warning">Ordens alunos</a>
              <a href="cadastroordens-func.php" class="btn btn-outline-warning botao-voltar">Ordens funcionários</a>
            </div>
          </div>


          <div class="card" >
            <img class="card-img-top" src="img/adimin/ordens2.png " alt="Imagem de capa do card" >
            <div class="card-body">
              <h5 class="card-title">Deletar registro</h5>
              <p class="card-text">Ver e deletar o registro das ordens no banco de dados da biblioteca.</p>

              <br>

              <a href="deleteordens-alunos.php" class="btn btn-outline-warning">Ordens alunos</a>
              <a href="deleteordens-func.php" class="btn btn-outline-warning botao-voltar">Ordens funcionários</a>
            </div>
          </div>


          <div class="card" >
            <img class="card-img-top" src="img/adimin/ordens3.png " alt="Imagem de capa do card" >
            <div class="card-body">
              <h5 class="card-title">Atualizar registro</h5>
              <p class="card-text">Atualizar e editar as informações das ordens registradas no banco de dados da biblioteca.</p>

              <br>

              <a href="updateordens-alunos.php" class="btn btn-outline-warning">Ordens alunos</a>
              <a href="updateordens-func.php" class="btn btn-outline-warning botao-voltar">Ordens funcionários</a>
            </div>
          </div>


        </div>
      </div>
    </div>


  </section>





  <footer class="rodape">


    <div class="container-fluid">

      <div class="texto-rodape">
        Todos os direitos reservados. Biblioteca ETEC MCM. <br> 
        ©Projeto Bibliotec.
      </div>

      <div>
        <a class="btn btn-outline-light botao-voltar" aria-label="Left Align" href="#topo">
         <span class="glyphicon glyphicon-menu-up" aria-hidden="true">▲</span>
       </a>
     </div>




   </div>


 </footer>












 <!-- Optional JavaScript -->
 <!-- jQuery first, then Popper.js, then Bootstrap JS -->

 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>

 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" ></script>

</body>
</html>