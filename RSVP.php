<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RSVP</title>
    <link rel="stylesheet" href="RSVP.css">
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
        <a href="administracao.php" >ADMINISTRAÇÃO</a>

        
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
          <i class="fa fa-bars"></i>
        </a>
      </div>

    <header class= "titulo"><h1 class = "title">RSVP  <img src=".\images/icon.jpg"  class="iconeTitulo" alt="heart"><h1>
    </header>  
    <main>
        <div class="totalform">
            <form  action="confirmation1.php" method="POST">
            
                <div class="formulario" id="nomepresente" >
                    <label for="nome" >Nome :</label>
                    <input type="name"  name="FNAME" id="nome" required ></div>
                   
                <div class="formulario"  >
                    <label for="email" >Email :</label>
                    <input type="email" name="EMAIL" id="Email" required></div>
                               
                <div class="formulario">
                    <label for="idade" >Idade :</label>
                    <input type="number" name="IDADE" id="idade"  min="5"  max="100" required></div>

                <div class="formulario">
                    <label for="telefone" >Telefone :</label>
                    <input type="tel" name="TELEFONE" id="telefone"  pattern="[0-9]{2}[0-9]{4}[0-9]{4}" placeholder="formato: 12 3456 1234 (colocar os espaços)"  required></div>
                 <div class="formulario" >
                    <label for="CPF" >CPF :</label>
                    <input type="text" name="CPF" id="CPF" maxlength="9" minlength="9" required></div>
            
                <div class="formulario"  >
                    <P>Alergia : </P> <br><br>                
                    <label for="alergia" >Sim</label>
                    <input type="radio" name="ALERGIA" id="alergia" value="sim"  required>
                    <label for="alergia" >Não</label>
                    <input type="radio" name="ALERGIA" id="alergia" value="não"  >
                    <label for="qual"  id="form1" >Se sim qual :</label>
                    <input type="text" name="QUAL" id="qual" ></div>
   
                <div class="formulario" c >
                    <P>Familia :</P> <br><br>
                    <label for="familia" >noivo</label>
                    <input type="radio" name="FAMILIA" id="familia" value="noivo"required >
                    <label for="familia" >noiva</label>
                    <input type="radio" name="FAMILIA" id="familia" value="noiva" ></div>
                          

                    <div class="formulario"   >
                        <P>Convidado extra :</P><br><br>
                        <label for="extra" >Não</label>
                        <input type="radio" name="CONVIDADO" id="extra" value="não" required>
                        <label for="extra" >Sim</label>
                        <input type="radio" name="CONVIDADO" id="extra" value="sim" >
                        
                        <label for="qtdd" >Se sim quantos :</label>
                        <input type="number" name="QTDD" id="qtdd" max="2"  ></div>
                    </div>
                             
                    
                    <input class="formulario" id="submit" type="submit" value ="RESERVAR">
                
            </form>
        </div>
        <h3 class="obs">OBS : FAÇA UMA RESERVA POR CONVIDADO</h3>
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