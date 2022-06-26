
<?php
    
    if(!empty($_GET['id']))
    {
    
      include_once('config.php');

      $id = $_GET['id'];

      $sqlSelect = "SELECT * FROM endereco WHERE id=$id";

      $result = $conexao->query($sqlSelect);

      // print_r($result);
      if($result ->num_rows > 0 )
      {
        while($user_data = mysqli_fetch_assoc($result))
        {
      $ESTADO = $user_data['ESTADO'];
      $CIDADE = $user_data['CIDADE'];
      $RUA = $user_data['RUA'];
      $CEP = $user_data['CEP'];
      $HORA = $user_data['HORA'];
        }
        // echo($ESTADO);
      }
      else
      { 
        header('Location: administracao.php');
      }
    
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDICAO</title>
    <link rel="stylesheet" href="edit.css">
    <link rel="icon" href=".\images/iconeSite.jpg"  class="iconeTitulo"  width 16px; alt="image.jpg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
  <div class="topnav" id="myTopnav">
    <a href="home.html" id-="sobre"  class="active">INICIO</a>
    <a href="endereco.php">ENDERECO E HORA</a>
    <a href="presentes.php">PRESENTES</a>
    <a href="RSVP.php">RSVP</a>
    <a href="sobre.html" >SOBRE NÓS</a>
    <a href="login.php" id="adm" ><img src=".\images/cadeado.png"  class="icone" alt="cadeado">ADMINISTRAÇÃO</a>
    
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
  </div>

    <header class= "titulo"><h1 class = "title">ENDEREÇO E HORA<img src=".\images/icon.jpg"  class="iconeTitulo" alt="heart"><h1>
    </header>
        <div class="fpresentes" >
        
            <img src=".\images/gift.jpg" id="gift" alt="gift" >


            <form  action="savedit.php" method="POST"  >
            
            <div class="localitens" id="nomepresente" >
                <label for="nome" >ESTADO :</label>
                <input required type="name"  name="ESTADO" autocomplete="off" id="nome" value="<?php echo $ESTADO ?>"  ></div>
               
            <div class="localitens"  >
                <label for="email" >CIDADE :</label>
                <input  required type="name" name="CIDADE"  autocomplete="off"id="name" value="<?php echo $CIDADE ?>" ></div>
                           
            <div class="localitens">
                <label for="presente" >RUA :</label>
                <input  required type="name" name="RUA"  autocomplete="off"id="presente" value="<?php echo $RUA ?>" ></div>

            <div class="localitens">
                <label for="presente" >CEP :</label>
                <input  required type="name" name="CEP"  autocomplete="off"id="presente" value="<?php echo $CEP ?>" ></div>
            
            <div class="localitens">
                <label for="presente" >HORA :</label>
                <input  required type="name" name="HORA"  autocomplete="off"id="presente" value="<?php echo $HORA ?>" ></div>

                <input type="hidden"  name="id" value="<?php echo $id?>">
                <input  type="submit" value ="EDITAR" name="editar" id="editar" >
                
            
            </form>

        </div>
    
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