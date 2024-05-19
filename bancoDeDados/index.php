<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">

    <title>Atividade IF - Aula 3</title>
    <style>
        .body{
            background: black;
            color: black;
        }
        .header{
            color: white;
        }
        .corpo{
            color: white;
        }

        .form-container {
            max-width: 400px;
            width: 100%;
        }
    </style>
</head>

<body class="body">
    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="form-container">
            <h1 class="text-center header">Cadastro de Jogadores</h1>
            <form action="registrarDados.php" method="post">
                <div class="mb-3">
                    <label for="email" class="form-label corpo">Digite seu email</label>
                    <input type="text" name="email" id="email" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="senha" class="form-label corpo">Senha</label>
                    <div class="input-group">
                        <input type="password" name="senha" id="senha" class="form-control">
                        <button type="button" class="btn btn-outline-secondary" id="togglePassword">
                            <i class="bi bi-eye-slash" id="toggleIcon"></i>
                        </button>
                    </div>
                </div>
                <input type="submit" value="Enviar" class="btn btn-primary w-100">
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+7HAuo8vz2k0D5qkUuhrD41Yk8VCC" crossorigin="anonymous"></script>
    <script>
        if(senha == "" && email == ""){
            alert("Campos devem ser preenchidos");
        }


        document.getElementById('togglePassword').addEventListener('click', function () {
            const passwordField = document.getElementById('senha');
            const passwordFieldType = passwordField.getAttribute('type');
            const newPasswordFieldType = passwordFieldType === 'password' ? 'text' : 'password';
            passwordField.setAttribute('type', newPasswordFieldType);

            const toggleIcon = document.getElementById('toggleIcon');
            if (newPasswordFieldType === 'password') {
                toggleIcon.classList.remove('bi-eye');
                toggleIcon.classList.add('bi-eye-slash');
            } else {
                toggleIcon.classList.remove('bi-eye-slash');
                toggleIcon.classList.add('bi-eye');
            }
        });
    </script>
</body>

</html>
