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
      <h2 class="atividades">Atualize as informações das ordens de aluguel de funcionários</h2>
      <hr class="my-4">
      
    </div>
  </section>


  <!-- FORMULÁRIO DE UPDATE DE ORDENS DE FUNCIONÁRIOS -->


  <section>

    <div class="container">
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
          <form action="atualizaordens-func.php" method="POST">


            <!-- CÓDIGO PHP PARA AS CONSULTAS -->
            <?php

            $resultado = mysqli_query($conexao, "SELECT codfuncionario, nome  FROM funcionarios");
            $resultado2 = mysqli_query($conexao, "SELECT codlivro, nomelivro FROM livros");

            ?>

            <!-- CAIXAS DE TEXTO DO FORMULÁRIO-->

            

            <div class="row">

              <div class="col-md-2">
                <label class="my-1 mr-2">Código</label>
                <input type="number" class="form-control my-1 mr-sm-2" name="codigo">
                <small class="form-text text-muted">Código da ordem.</small>
              </div>

              <div class="col">
                <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Funcionário</label>
                <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="codigofunc">
                  <option selected hidden>...</option>

                  <?php while($dados = mysqli_fetch_assoc($resultado)) { ?>


                    <option value="<?php echo $dados['codfuncionario']; ?>"><?php echo $dados['codfuncionario'] . " - " . $dados['nome']; ?></option>

                    <?php
                  }
                  ?>

                </select>
                <small class="form-text text-muted" >Escolha o funcionário que irá fazer o aluguel do livro.</small>
              </div>

              <div class="col">
                <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Livro
                </label>
                <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="codigolivro">
                  <option selected hidden>...</option>

                  <?php while($dados2 = mysqli_fetch_assoc($resultado2)) { ?>

                    <option value="<?php echo $dados2['codlivro']; ?>"><?php echo $dados2['nomelivro']; ?></option>

                    <?php
                  }
                  ?>

                </select>
                <small class="form-text text-muted" >Escolha o livro que o funcionário irá alugar.</small>
              </div>
              
            </div>

            <br>

            <div class="row">

              <div class="form-group col">
                <label>Status da ordem</label>
                <select class="custom-select" name="stordem">
                  <option selected hidden>...</option>
                  <option value="ATIVA">ATIVA</option>
                  <option value="FINALIZADA">FINALIZADA</option>
                </select>
                <small class="form-text text-muted" >Defina o status de ativação da ordem.</small>
              </div>

              <div class="form-group col">
                <label>Status da data</label>
                <select class="custom-select" name="stdata">
                  <option selected hidden>...</option>
                  <option value="NO PRAZO">NO PRAZO</option>
                  <option value="ATRASADO">ATRASADO</option>
                </select>
                <small class="form-text text-muted" >Defina o status da data em relação a atraso na devolução.</small>
              </div>

            </div>
            <div class="row">

              <div class="col">
                <label>Data do aluguel</label>
                <input type="text" class="form-control" name="dataaluguel" placeholder="Ex: 01/11/2019">
                <small class="form-text text-muted" >Digite a data em que o funcionário fez o aluguel do livro.</small>
              </div>

              <div class="col">
                <label>Data da devolução</label>
                <input type="text" class="form-control" name="datadevo" placeholder="Ex: 10/11/2019">
                <small class="form-text text-muted" >Digite a data em que o funcionário deverá fazer a devolução do livro.</small>
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