<?php
    
    include_once('config.php');
    
  

    $FNAME = $_POST['FNAME'];
    $EMAIL = $_POST['EMAIL'];
    $PRESENTE = $_POST['PRESENTE'];
    
    
            $result = mysqli_query($conexao, "INSERT INTO presentes(FNAME,EMAIL,
            PRESENTE)
             VALUES('$FNAME', '$EMAIL', '$PRESENTE')" );
        ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="confirmation.css">
    <link rel="icon" href=".\images/iconeSite.jpg"  class="iconeTitulo"  width 16px; alt="image.jpg">
    <title>CONFIRMAÇÃO</title>
    <body>
        
    <header class= "titulo"><h1 class = "title">CONFIRMAÇÃO<img src=".\images/icon.jpg"  class="iconeTitulo" alt="heart"><h1>
    </header>

    <main>
        <div class="sobre">
            <h2 style="padding-left: 15px;display: inline;">MUITO OBRIGADO PELA SUA CONFIRMAÇÃO!!</h2>
            <hr style="height:2px;border-width:0;color:#b18e72;background-color:#b18e72"></li>
            <p style="padding:5px;margin-top: 10px;">Estamos muito felizes em saber que podemos contar com voce!!! Saiba que tambem pode contar conosco 
                e se houver qualquer duvida em relacao a algo é só nos contatar clicando atravez do email <a href="mailto:felipebritoperes1@hotmail.com">felipebritoperes1@hotmail.com</a>, estaremos felizes em ajudar.</p>
        </div>
        <div class="links" id="borda">
            <a href="./index.html" class="links" > Ir para o inicio</a></div>
            
        <div class="links" id="borda" >
            <a href="./home.html" class="links" > Ir para a pagina Home</a></div>
        </div>    
    </main>
    <footer>
        <ul >
            <li class="rodape"><a href="./privacidade.html" class="linkRodape">politica de privacidade</li>
            <li class="rodape"><a href="./terms.html" class="linkRodape">termos de uso</a></li>
            <li class="rodape">Este site foi desenvolvido por FelipePeres</li>
        </ul>
    </footer>
    
</body>
</html>