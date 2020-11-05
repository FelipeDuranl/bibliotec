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

        <a class="navbar-brand" href="adm.php">
          <h2 class="navbar-titulo"> <img src="img/faviconz.png" width="30" height="40" class="d-inline-block align-top" alt="image">Bibliotec</h2>
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">

          <ul class="navbar-nav mr-auto">

            <li class="nav-item">
              <a class="nav-link" href="adm.php #secdeletar">Deletar</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="adm.php #secatualizar">Atualizar</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="adm.php #secordens">Ordens</a>
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
      <h2 class="atividades">Atualize as informações do funcionário</h2>
      <hr class="my-4">
      
    </div>
  </section>


  <!-- FORMULÁRIO DE UPDATE DE FUNCIONÁRIOS -->


  <section>

    <div class="container">
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
          <form action="atualizafuncionarios.php" method="POST">

            <!-- CAIXAS DE TEXTO DO FORMULÁRIO-->

            <div class="row">

              <div class="col-md-3">

                <label>Código</label>
                <input type="number" class="form-control" name="codigo">
                <small class="form-text text-muted">Código do funcionário.</small>
                
              </div>




              <div class="col-md-9">

                <label>Nome do funcionário</label>
                <input type="text" class="form-control " name="nomefuncionario">
                <small class="form-text text-muted">Nome completo do funcionário. (Até 200 caracteres).</small>
                
              </div>

            </div>
            <br>
            <div class="row">


              <div class="col-md-3">

                <label>Telefone <small class="text-muted">(com " - ")</small></label>
                <input type="text" class="form-control" name="telefone" placeholder="Ex: 40028922">
                <small class="form-text text-muted">Telefone do funcionário. (Até 10 carcateres).</small>

              </div>




              <div class="col-md-9">

                <div class="form-group">
                  <label>Email</label>
                  <input type="text" class="form-control" name="email">
                  <small class="form-text text-muted">Email do funcionário para contato. (Até 100 caracteres).</small>
                </div>
                
              </div>

            </div>
            <br>
            
            <!-- BOTÃO DE ENVIO-->

            <a class="btn btn-outline-warning" href="adm.php">Voltar</a>

            <input type="submit" class="btn btn-outline-warning botao-voltar" value="Atualizar">

          </form>
        </div>

        <div class="col-md-2"></div>
      </div>
    </div>
    
    


  </section>


  <!-- FIM FORMULÁRIOS (SELECT) -->





  <footer class = "rodape">


    <div class="container-fluid">
      
      <div class="texto-rodape">
        Todos os direitos reservados. Biblioteca ETEC MCM. <br> 
        ©Projeto Bibliotec.
      </div>

      <div>
        <a class="btn btn-outline-light botao-voltar" aria-label="Left Align" href="#topo">▲</a>
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