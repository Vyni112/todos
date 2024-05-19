<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col p-3">
                <h1>Registrar dados no banco</h1>
            </div>
        </div>
        <div class="row">
            
            <?php
                    $host = "localhost";
                    $user = "root";
                    $password = "123456";
                    $database = "trabalho";
                    $port = 3306; 
                    
                    $banco = new mysqli("localhost", "root", "123456", "trabalho", 3306);
                        if($banco->connect_errno){
                            echo "Erro ao conectar no banco de dados";
                        }else{
                            echo "<p>Conectado com sucesso!</p>";
                        }

                    $email = $_POST['email'];
                    $senha = $_POST['senha'];
                    if(($email == null) || ($senha == null)){
                        echo "<h1>Usuario não cadastrado</h1>";
                        echo "<p>Campos devem ser preenchidos</p>";
                    }else{
                        // Monta comando SQL
                        $sql = "INSERT INTO email(email, senha) VALUES ('$email','$senha')";
                        $banco->query($sql); // Executa comando SQL
                        if($banco->affected_rows >= 1){
                            echo "<h1>Usuário cadastrado</h1>";
                            echo "<p>Usuário $email cadastrado com sucesso!</p>";
                        }else{
                            echo "Erro ao inserir usuário $email no banco de dados!";
                        }
                    }
                    ?> 
                    <?php
                    if(($email != null) && ($senha != null)){ ?> 
                        <div><input type="submit" class="btn btn-success col-2" value="Proseguir" onclick="location.href='jogo.php'"></div>
                       <div class="p-3"><input type="submit" class="btn btn-danger col-2" value="Voltar para o cadastro" onclick="location.href='index.php'"></div>
                    <?php } else { ?> 
                        <input type="submit" class="btn btn-danger col-2" value="Voltar para o cadastro" onclick="location.href='index.php'">
                    <?php } ?>    
                
        </div>
    </div>
</body>
</html>