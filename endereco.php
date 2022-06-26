<?php
    include_once('config.php');

        $endereco = "SELECT * FROM endereco ORDER BY id ASC";
 
        $result2 = $conexao->query($endereco);

        // print_r($result);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ENDEREÇO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="endereco.css">
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
    <div class="local"><ul class="localitens">
    <table class="table">

<thead >

<tr >
    <th  hidden scope="col">id</th>
    <th scope="col" >ESTADO <br></th>
    <th scope="col">CIDADE</th>
    <th scope="col">RUA</th>
    <th scope="col">CEP</th>
    <th scope="col">HORA</th>
</tr>
</thead>
<TBody>
    <?php
        while($user_data = mysqli_fetch_assoc($result2))
        {
            
            echo "<tr>";
            "<td>".$user_data['id']."</td>";
            echo "<td>".$user_data['ESTADO']."</td>";
            echo "<td>".$user_data['CIDADE']."</td>";
            echo "<td>".$user_data['RUA']."</td>";
            echo "<td>".$user_data['CEP']."</td>";
            echo "<td>".$user_data['HORA']."</td>";
            echo "</tr>";
        }
    ?>
</TBody>
</table>
        <!-- <li class="localist">ESTADO: <p>Rio Grande Do Sul</p></li>
        <li class="localist">CIDADE:<p>Gramado</p></li>
        <li  class="localist">RUA:  <p>Av. das Hortênsias, 765</p></li>
        <li class="localist">CEP: <p>95670-000</p>
        <li class="localist">HORA: <p>15:00hrs (necessario que chegue 30 minutos antes).</p>   -->
          
        <li class="mapa" id="local" ><h4>PONTO DO LOCAL:</h4><br><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d264625.1506022756!2d-51.15019869737708!3d-29.372878328684234!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95193328af2d2bd1%3A0x6cdea967d0fa4b6f!2sCasamento%20dos%20Sonhos%20Gramado!5e0!3m2!1spt-BR!2sjp!4v1653966638721!5m2!1spt-BR!2sjp" 
            class="mapa" id="ponto" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></li>
        
    </ul>
    
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