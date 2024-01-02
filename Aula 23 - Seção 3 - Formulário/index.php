<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .error{
            color:red;
        }
        body{
            background-color: black;
            color: white;
        }
    </style>
</head>
<body>
    <form method="POST" action="index.php">
        <h1>Formulário</h1>
        <p class="error">* Obrigatório</p>
        Nome:   <input  requerid type="text"   name="nome">  <span class="error">*</span> <br><br>
        E-mail: <input  requerid type="email"  name="email"> <span class="error">*</span> <br><br>
        WebSite:<input  type="url"   name="site">  <br><br>
        Comentario: <textarea name="coment" cols="30" rows="3"></textarea><br><br>
        Gênero: <input   name="genero" value="masculino" type="radio"> masculino
                <input   name="genero" value="feminino"  type="radio"> Feminino
                <input  requerid name="genero" value="outro"     type="radio"> Outro <br><br>
        <button name="enviado" type="submit">Enviar Dados</button>
        <h1>Dados Enviados:</h1>

        <?php
            if(isset($_POST['enviado'])){
                if(empty($_POST['nome'])){
                    echo '<p class="error">Dígite um nome</p>';
                    die();
                };
                if(empty($_POST['email'])){
                    echo '<p class="error">Dígite um nome</p>';
                    die();
                };
                if(empty($_POST['site'])){
                    echo '<p class="error">Dígite um nome</p>';
                    die();
                };
                if(empty($_POST['genero'])){
                    echo '<p class="error">Dígite um nome</p>';
                    die();
                };   

                $genero = "Não selecionado";
                
                if(isset($_POST['genero'])){
                    $genero = $_POST['genero'];         
                }

                echo "<p><b> Nome:       </b>" . $_POST['nome']   . "</p>";
                echo "<p><b> E-Mail:     </b>" . $_POST['email']  . "</p>";
                echo "<p><b> WebSite:    </b>" . $_POST['site']   . "</p>";
                echo "<p><b> Comentário: </b>" . $_POST['coment'] . "</p>";
                echo "<p><b> Gênero:     </b>" . $genero          . "</p>";
            }
        ?>
    </form>
</body>
</html>