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
      <h2 class="atividades">Ver e deletar cadastros dos livros</h2>
      <hr class="my-4">

    </div>
  </section>


  <!-- TABELA (SELECT)-->

  <?php

  $resultado = mysqli_query($conexao, "SELECT * FROM livros");

  ?>


  <section>

    <div class="container">
      <div class="row">

        <div class="table-responsive">
          <table class="table table-hover">

            <thead class="thead-dark">

              <tr>
                <th scope="col">Código</th>
                <th scope="col">Nome</th>
                <th scope="col">Autor</th>
                <th scope="col">Editora</th>
                <th scope="col">Publicação</th>
                <th scope="col">ISBN</th>
                <th scope="col">Tombo</th>
                <th scope="col">Quantidade</th>
                <th>Deletar</th>
              </tr>

            </thead>

            <?php
            while($dados = mysqli_fetch_assoc($resultado)) {
              ?>

              <form method="POST" action="apagalivros.php">
                <tbody>

                  <tr>
                    <th scope="row"><?php echo $dados['codlivro'] . "<br>"; ?></th>
                    <td><?php echo $dados['nomelivro'] . "<br>"; ?></td>
                    <td><?php echo $dados['autor'] . "<br>"; ?></td>
                    <td><?php echo $dados['editora'] . "<br>"; ?></td>
                    <td><?php echo $dados['data'] . "<br>"; ?></td>
                    <td><?php echo $dados['isbn'] . "<br>"; ?></td>
                    <td><?php echo $dados['tombo'] . "<br>"; ?></td>
                    <td><?php echo $dados['qtde_livro'] . "<br>"; ?></td>
                    <td>
                      <?php
                        echo '

                        <!-- Botão para acionar modal -->


                        <button type="button" class="btn btn-warning btn-block butn-deletar" data-toggle="modal" data-target="#modalDeletar'.$dados['codlivro'].'">
                            Deletar
                        </button>

                        <!-- Modal -->


                        <div class="modal fade" id="modalDeletar'.$dados['codlivro'].'" tabindex="-1" role="dialog" aria-labelledby="ModalDelete" aria-hidden="true">

                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="ModalDelete">Deletar registro</h5>
                                    </div>
                                    <div class="modal-body text-left">
                                        Tem certeza que deseja deletar o registro do livro: '. $dados['nomelivro'].'?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                              Fechar
                                        </button>
                                        <button type="Submit" name = "codigo" class="btn btn-primary" value="'.$dados['codlivro'].'">
                                          Deletar
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        '
                        ?>
                    </td>
                  </tr>

                  <?php
                }
                ?>
                
              </tbody>
            </form>

          </table>


        </div>
      </div>
      <br>
      <a class="btn btn-outline-warning botao-voltar" href="adm.php">Voltar</a>
    </div>



  </section>


  <!-- FIM TABELAS (SELECT) -->





  <footer class="rodape">


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