<?php
session_start();

if ((!isset ($_SESSION['nome']) == true) and (!isset ($_SESSION['email']) == true)) {
  unset($_SESSION['nome']);
  unset($_SESSION['email']);
  header('Location: loginfuncionario.html');
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

  <title>Bibliotec - Funcionário</title>
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
              <a class="nav-link" href="#secatividades">Atividades</a>
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
      
      <h1 class="display-4">Funcionário</h1>
      
    </div>
  </section>
  



  <section id="secatividades"> 
    <div>
      
      <hr class="my-1">
      <h2 class="atividades">Veja o que você pode fazer</h2>
      <hr class="my-4">
      
    </div>
  </section>


  <section>
    <div class="container">
      <div class="row">
        <div class="card-deck">


          <div class="card " >
            <img class="card-img-top" src="img/adimin/livros2.png " alt="Imagem de capa do card" >
            <div class="card-body">
              <h5 class="card-title">Livros</h5>
              <p class="card-text">Veja os livros disponíveis na biblioteca para poder alugar.</p>
              <br>
              <br>
              <a href="funcionario-livros.php" class="btn btn-outline-warning">Ver livros</a>
            </div>
          </div>

          
          <div class="card" >
            <img class="card-img-top" src="img/adimin/ordens4.png " alt="Imagem de capa do card" >
            <div class="card-body">
              <h5 class="card-title">Ordens</h5>
              <p class="card-text">Veja suas ordens de aluguel ativas, datas de devolução e etc.</p>
              <br>
              <br>
              <a href="funcionario-ordens.php" class="btn btn-outline-warning">Ver ordens</a>
            </div>
          </div>


          <div class="card " >
            <img class="card-img-top" src="img/adimin/professores3.png " alt="Imagem de capa do card"  >
            <div class="card-body">
              <h5 class="card-title">Suas informações</h5>
              <p class="card-text">Veja suas informações cadastradas no banco de dados.</p>
              <br>
              <br>
              <a href="funcionario-info.php" class="btn btn-outline-warning">Ver informações</a>
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