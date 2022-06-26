<?php 

    include_once('config.php');

    if (isset($_POST['editar']))
    {
        $id = $_POST['id'];
        $ESTADO = $_POST['ESTADO'];
        $CIDADE = $_POST['CIDADE'];
        $RUA = $_POST['RUA'];
        $CEP = $_POST['CEP'];
        $HORA = $_POST['HORA'];

        $sqlUpdate ="UPDATE endereco SET ESTADO='$ESTADO', CIDADE='$CIDADE', RUA='$RUA', CEP='$CEP', HORA='$HORA'
        WHERE id='$id'";

        $result = $conexao->query($sqlUpdate);
       
    }else{
    header('Location: administracao.php');
 
    }
    header('Location: administracao.php');

?>