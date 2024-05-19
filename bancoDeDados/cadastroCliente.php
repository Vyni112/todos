<?php
    // receber dados de carteira, salvar no banco de dados
    require 'conectaBanco.php';
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    if(empty($email)){
        echo "<p>Campo nome deve ser preenchido </p>";
    }else{
        // Monta comando SQL
        $sql = "INSERT INTO email(email, senha) VALUES 
                                        ('$email','$senha')";
        $banco->query($sql); // Executa comando SQL
        if($banco->affected_rows >= 1){
            echo "<p>Carteira $email cadastrado com sucesso!</p>";
        }else{
            echo "Erro ao inserir usuario $email no banco de dados!";
        }
    }

    $banco->close();
?>