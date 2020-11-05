<?php

include 'conecta.php';

$codordemfunc = $_POST['codordfunc'];

$sql = "DELETE FROM ordens_funcionarios WHERE codordem_func ='$codordemfunc'";

$query = $conexao->query($sql);

header('Location: deleteordens-func.php');

?>