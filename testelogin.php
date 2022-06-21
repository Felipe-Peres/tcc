<?php

    // print_r($_REQUEST);
    if(isset($_POST["EMAIL"]) && !empty($_POST["EMAIL"]) && !empty($_POST["SENHA"]))
    {
        include_once('config.php');
        $email =$_POST['EMAIL'];
        $senha =$_POST['SENHA'];

        // echo('Email: ' . $email);
        // echo('Senha: ' . $senha);

        $sql ="SELECT * FROM login WHERE EMAIL = '$email' and SENHA = '$senha'";

        $result = $conexao ->query($sql);
        
        // print_r($result);

        if(mysqli_num_rows($result) <1)
        {
            header('Location: login.php');
        }else
        {
            header('Location: administracao.php');
        }


    }else{
        header('Location: login.php');
    }

?> 