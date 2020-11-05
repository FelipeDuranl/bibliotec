<?php
session_start();

if ((!isset ($_SESSION['nome']) == true) and (!isset ($_SESSION['email']) == true)) {
  unset($_SESSION['nome']);
  unset($_SESSION['email']);
  header('Location: loginfuncionario.html');
}

$email = $_SESSION['email'];

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
      <h2 class="atividades">Veja as suas informações cadastradas</h2>
      <hr class="my-4">

    </div>
  </section>


  <section>
    <!-- TABELA (SELECT)-->

    <?php

    $resultado = mysqli_query($conexao, "SELECT codfuncionario, nome, email, telefone FROM funcionarios WHERE email = '$email' ");

    ?>

  </section>


  <section>

    <div class="container">
      <div class="row">

        <div class="table-responsive">
          <table class="table table-hover">

            <thead class="thead-dark">

              <tr>
                <th scope="col">Código</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Telefone</th>
              </tr>

            </thead>

            <?php
            while($dados = mysqli_fetch_assoc($resultado)) {
              ?>


              <tbody>

                <tr>
                  <th scope="row"><?php echo $dados['codfuncionario'] . "<br>"; ?></th>
                  <td><?php echo $dados['nome'] . "<br>"; ?></td>
                  <td><?php echo $dados['email'] . "<br>"; ?></td>
                  <td><?php echo $dados['telefone'] . "<br>"; ?></td>
                </tr>

                <?php
              }
              ?>
              
            </tbody>

          </table>


        </div>
      </div>
      <br>
      <a class="btn btn-outline-warning botao-voltar" href="funcionario.php">Voltar</a>
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