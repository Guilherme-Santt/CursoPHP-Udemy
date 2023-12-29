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
    </style>
</head>
<body>
    <form method="POST" action="index.php">
        <h1>Formulário</h1>
        <p class="error">* Obrigatório</p>
        Nome:   <input required type="text" name="nome">  <span class="error">*</span> <br><br>
        E-mail: <input required type="email" name="email"> <span class="error">*</span> <br><br>
        WebSite:<input type="url" name="site">  <br><br>
        Comentario: <textarea name="coment" cols="30" rows="3"></textarea><br><br>
        Gênero: <input required name="genero" value="masculino" type="radio"> masculino
        <input  name="genero" required value="feminino" type="radio"> Feminino
        <input  name="genero" required value="feminino" type="radio"> Feminino
        <input  name="genero" required value="outro"    type="radio"> Outro <br><br>
        <button name="enviado" type="submit">Enviar Dados</button>
        <h1>Dados Enviados:</h1>

        <?php
            if(isset($_POST['enviado'])){

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