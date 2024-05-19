<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<?php


// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conexão com o banco de dados
    $host = "localhost";
    $user = "root";
    $password = "123456";
    $database = "trabalho";
    $port = 3306; 
    
    $banco = new mysqli($host, $user, $password, $database, $port);
        if($banco->connect_errno){
            echo "Erro ao conectar no banco de dados";
        }else{
            echo "<p>Conectado com sucesso!</p>";
        }

    // Processa e insere as respostas no banco de dados
    $perguntas = [
        "Qual é a capital da França?", // Resposta: Paris
        "O que significa a sigla CPU?", // Resposta: Unidade Central de Processamento
        "O que significa a sigla RAM?", // Resposta: Memória de Acesso Aleatório
        "Qual é a montanha mais alta do mundo?", // Resposta: Monte Everest
        "Quantos estados existem nos Estados Unidos?", // Resposta: 50
        "O que significa a sigla HTML?", // Resposta: Linguagem de Marcação de Hipertexto
        "Qual é a fórmula química da água?", // Resposta: H2O
        "Em que continente fica o Deserto do Saara?", // Resposta: África
        "Qual é a língua mais falada no mundo?", // Resposta: Mandarim
        "Qual é o maior país do mundo em área?", // Resposta: Rússia
        "Quem é conhecido como o pai da computação?", // Resposta: Alan Turing
        "Qual é o animal terrestre mais rápido do mundo?", // Resposta: Guepardo
    ];

    $respostas_certas = [
        "Paris",
        "Unidade Central de Processamento",
        "Memória de Acesso Aleatório",
        "Monte Everest",
        "50",
        "Linguagem de Marcação de Hipertexto",
        "H2O",
        "África",
        "Mandarim",
        "Rússia",
        "Alan Turing",
        "Guepardo",

    ];

        foreach ($_POST['resposta'] as $indice => $resposta) {
            $pergunta = $perguntas[$indice];
            $resposta_correta = $respostas_certas[$indice];
            $resposta_usuario = $banco->real_escape_string($resposta);
    
            if(strcasecmp($resposta_usuario, $resposta_correta) == 0) {
                $resultado = 1;
            } else {
                $resultado = 0;
            }
    
            $sql = "INSERT INTO respostas (pergunta, respostas, respostas_usuarios, resultado) VALUES ('$pergunta', '$resposta_correta', '$resposta_usuario', '$resultado')";

        if ($banco->query($sql) === TRUE) {
            echo "Resposta para a pergunta \"$pergunta\" inserida com sucesso!<br>";
        } else {
            echo "Erro ao inserir resposta: " . $banco->error;
        }
    }

    // Fecha a conexão com o banco de dados
    $banco->close();
    }

?>
<input type="submit" value="Tentar De novo" class="btn btn-primary" name="voltar" onclick="location.href='jogo.php'">

