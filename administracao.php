<?php
    include_once('config.php');

        $presentes = "SELECT * FROM presentes ORDER BY idpresentes ASC";
        $rsvp = "SELECT * FROM rsvp ORDER BY id ASC";
        $endereco = "SELECT * FROM endereco ORDER BY id ASC";

        $result = $conexao->query($presentes);
        $result1 = $conexao->query($rsvp);
        $result2 = $conexao->query($endereco);

        // print_r($result);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>administracao</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="administracao.css">
    <link rel="icon" href=".\images/iconeSite.jpg"  class="iconeTitulo"  width 16px; alt="image.jpg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <div class="topnav" id="myTopnav">
        <a href="home.html" id-="sobre"  class="active">INICIO</a>
        <a href="endereco.php">ENDERECO E HORA</a>
        <a href="presentes.html">PRESENTES</a>
        <a href="RSVP.html">RSVP</a>
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
                    <th scope="col">FNAME</th>
                    <th scope="col"  >EMAIL</th>
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
                <th scope="col">FNAME</th>
                <th scope="col" class="th">EMAIL</th>
                <th scope="col">IDADE</th>
                <th scope="col">TELEFONE</th>
                <th scope="col">CPF</th>
                <th scope="col">ALERGIA</th>
                <th scope="col">QUAL</th>
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
            <h4>LOCAL E HORA</h4>
                <table class="table">

                <thead >
                
                <tr >
                    <th  hidden scope="col">id</th>
                    <th scope="col">ESTADO</th>
                    <th scope="col">CIDADE</th>
                    <th scope="col">RUA</th>
                    <th scope="col">CEP</th>
                    <th scope="col">HORA</th>
                    <th scope="col">EDITAR</th>
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
                            echo "<td>
                                <a class='btn btn-save'  id='edit' href='edit.php?id=$user_data[id]'>
                                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-save' viewBox='0 0 16 16'>
                                <path d='M2 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H9.5a1 1 0 0 0-1 1v7.293l2.646-2.647a.5.5 0 0 1 .708.708l-3.5 3.5a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L7.5 9.293V2a2 2 0 0 1 2-2H14a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h2.5a.5.5 0 0 1 0 1H2z'/>
                                </svg>
                                </a>
                            </td>";
                            echo "</tr>";
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

