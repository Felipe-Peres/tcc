<?php
    include_once('config.php');

        $presentes = "SELECT * FROM presentes ORDER BY idpresentes ASC";
        $rsvp = "SELECT * FROM rsvp ORDER BY id ASC";

        $result = $conexao->query($presentes);
        $result1 = $conexao->query($rsvp);

        // print_r($result);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RSVP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="administracao.css">
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

    <header class= "titulo"><h1 class = "title"> <br> ADMINISTRACAO  <img src=".\images/icon.jpg"  class="iconeTitulo" alt="heart"><h1>
    </header>
    <main class="p-3">
                <h4>LISTA DE PRESENTES</h4>
                <table class="table">

                <thead >
                
                <tr >
                    <th scope="col">id</th>
                    <th scope="col">NOME</th>
                    <th scope="col">EMAIL</th>
                    <th scope="col">PRESENTE</th>
                </tr>
            </thead>
                <TBody>
                    <?php
                        while($user_data = mysqli_fetch_assoc($result))
                        {
                            
                            echo "<tr>";
                            echo "<td>".$user_data['idpresentes']."</td>";
                            echo "<td>".$user_data['FNAME']."</td>";
                            echo "<td>".$user_data['EMAIL']."</td>";
                            echo "<td>".$user_data['PRESENTE']."</td>";
                        }
                    ?>
                </TBody>
            </table>
            <h4>LISTA DE CONVIDADOS</h4>
                    <table class="table">

            <thead >

            <tr >
                <th scope="col">id</th>
                <th scope="col">NOME</th>
                <th scope="col" class="th">EMAIL</th>
                <th scope="col">IDADE</th>
                <th scope="col">TELEFONE</th>
                <th scope="col">CPF</th>
                <th scope="col">ALERGIA</th>
                <th scope="col">QUAL (ALERGIA)</th>
                <th scope="col">FAMILIA</th>
                <th scope="col">CONVIDADO</th>
                <th scope="col">CONVIDADOS EXTRA</th>
            </tr>
            </thead>
            <TBody>
                <?php
                    while($user_data = mysqli_fetch_assoc($result1))
                    {
                        
                        echo "<tr>";
                        echo "<td>".$user_data['id']."</td>";
                        echo "<td>".$user_data['FNAME']."</td>";
                        echo "<td>".$user_data['EMAIL']."</td>";
                        echo "<td>".$user_data['IDADE']."</td>";
                        echo "<td>".$user_data['TELEFONE']."</td>";
                        echo "<td>".$user_data['CPF']."</td>";
                        echo "<td>".$user_data['ALERGIA']."</td>";
                        echo "<td>".$user_data['QUAL']."</td>";
                        echo "<td>".$user_data['FAMILIA']."</td>";
                        echo "<td>".$user_data['CONVIDADO']."</td>";
                        echo "<td>".$user_data['QTDD']."</td>";
                    }
                ?>
            </TBody>
            </table>
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

