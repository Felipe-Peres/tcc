<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="login.css">
    <link rel="icon" href=".\images/iconeSite.jpg"  class="iconeTitulo"  width 16px; alt="image.jpg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <div class="topnav" id="myTopnav">
        <a href="home.html" id-="sobre"  class="active">INICIO</a>
        <a href="endereco.html">ENDERECO E HORA</a>
        <a href="presentes.php">PRESENTES</a>
        <a href="RSVP.php">RSVP</a>
        <a href="sobre.html" >SOBRE NÓS</a>
        <a href="login.php" id="adm" ><img src=".\images/cadeado.png"  class="icone" alt="cadeado">ADMINISTRAÇÃO</a>

        
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
          <i class="fa fa-bars"></i>
        </a>
      </div>

    <header class= "titulo"><h1 class = "title">LOGIN  <img src=".\images/icon.jpg"  class="iconeTitulo" alt="heart"><h1>
    </header>  
    <main>
        <div class="totalform">
            <form  action="testelogin.php" method="POST" autocomplete="off">
            
                   
                <div class="formulario"  >
                    <label for="email" >Email :</label>
                    <input type="email" name="EMAIL" id="Email" required autocomplete="off"></div>

                <div class="formulario" id="senha" >
                    <label for="nome" >Senha :</label>
                    <input type="password"  name="SENHA" id="senha" required  autocomplete="off"></div>
                               
                
                             
                    
                    <input class="formulario" id="submit" type="submit" value ="RESERVAR">
                
            </form>
        </div>
    </main>
    
    
</body>
<footer>
    <ul >
        <li class="rodape"><a href="./privacidade.html" class="linkRodape">politica de privacidade</li>
        <li class="rodape"><a href="./terms.html" class="linkRodape">termos de uso</a></li>
        <li class="rodape">Este site foi desenvolvido por FelipePeres</li>
    </ul>
</footer>
<script>
    function myFunction() {
         var x = document.getElementById("myTopnav");
         if (x.className === "topnav") {
         x.className += " responsive";
        } else {
         x.className = "topnav";
       }
     }
   </script>
   
</html> 