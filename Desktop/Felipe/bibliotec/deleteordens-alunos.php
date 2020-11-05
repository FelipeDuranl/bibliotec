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
      <h2 class="atividades">Ver e deletar as ordens de aluguel dos alunos</h2>
      <hr class="my-4">

    </div>
  </section>


  <!-- TABELA (SELECT)-->

  <?php

  $resultado = mysqli_query($conexao, "SELECT o.codordem_alun, o.statusordem, o.statusdata, a.rm, a.nomealuno, a.curso, l.nomelivro, o.dataemprestimo, o.datadevolucao FROM ordens_alunos AS o INNER JOIN alunos AS a INNER JOIN livros AS l ON (o.codaluno = a.codaluno AND o.codlivro = l.codlivro)");

  ?>


  <section>

    <div class="container">
      <div class="row">

        <div class="table-responsive">
          <table class="table table-hover">

            <thead class="thead-dark">

              <tr>
                <th scope="col">Código</th>
                <th scope="col">RM</th>
                <th scope="col">Aluno</th>
                <th scope="col">Curso</th>
                <th scope="col">Livro</th>
                <th scope="col">Ordem</th>
                <th scope="col">Data</th>
                <th scope="col">Aluguel</th>
                <th scope="col">Devolução</th>
                <th>Deletar</th>
              </tr>

            </thead>

            <?php
            while($dados = mysqli_fetch_assoc($resultado)) {
              ?>

              <form method="POST" action="apagaordens-alun.php">
                <tbody>

                  <tr>
                    <th scope="row"><?php echo $dados['codordem_alun'] . "<br>"; ?></th>
                    <td><?php echo $dados['rm'] . "<br>"; ?></td>
                    <td><?php echo $dados['nomealuno'] . "<br>"; ?></td>
                    <td><?php echo $dados['curso'] . "<br>"; ?></td>
                    <td><?php echo $dados['nomelivro'] . "<br>"; ?></td>
                    <th><?php echo $dados['statusordem'] . "<br>"; ?></td>
                    <th><?php echo $dados['statusdata'] . "<br>"; ?></td>
                    <td><?php echo $dados['dataemprestimo'] . "<br>"; ?></td>
                    <td><?php echo $dados['datadevolucao'] . "<br>"; ?></td>
                    <td>
                      <?php
                        echo '

                        <!-- Botão para acionar modal -->


                        <button type="button" class="btn btn-warning btn-block butn-deletar" data-toggle="modal" data-target="#modalDeletar'.$dados['codordem_alun'].'">
                            Deletar
                        </button>

                        <!-- Modal -->


                        <div class="modal fade" id="modalDeletar'.$dados['codordem_alun'].'" tabindex="-1" role="dialog" aria-labelledby="ModalDelete" aria-hidden="true">

                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="ModalDelete">Deletar registro</h5>
                                    </div>
                                    <div class="modal-body text-left">
                                        Tem certeza que deseja deletar o registro de ordem do aluno: '. $dados['nomealuno'].' e do livro: ' . $dados['nomelivro'] . '?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                              Fechar
                                        </button>
                                        <button type="Submit" name = "codordalun" class="btn btn-primary" value="'.$dados['codordem_alun'].'">
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