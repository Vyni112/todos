<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Game</title>
</head>
<!--<script>alert("Esse vai ser um jogo simples de perguntas e respostas, basta acertar o que cada palavra significa em portugues!!! Good Luck")</script>-->



<body>
    <?php  
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

    $respostas = [
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
?>
<div class="container">
    <div class="row">
        <div class="col">
        <form method="post" action="processar_quiz.php">
            <div class="form-control capital">
                <?php 
                $indice = 0 ;
                
                echo "<div class='form-label'>$perguntas[$indice]</div>";
            
                echo "<input type='radio' name='resposta[$indice]' value='Paris' class=''> Paris <br>";
                echo "<input type='radio' name='resposta[$indice]' value='Toronto' class=''> Toronto <br>";
                echo "<input type='radio' name='resposta[$indice]' value='Canberra' class=''> Canberra <br>";
                echo "<input type='radio' name='resposta[$indice]' value='Buenos Aires' class=''> Buenos Aires <br>";
                ?>
            </div>
            
                =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
               
            <div class="form-control">
                <?php
                    $indice = 1 ;
                        echo "<div class='form-label'>$perguntas[$indice]</div>";
                    
                    echo "<input type='radio' name='resposta[$indice]' value='unidade de estado sólido' class=''> unidade de estado sólido <br>";
                    echo "<input type='radio' name='resposta[$indice]' value='World Wide Web' class=''> World Wide Web <br>";
                    echo "<input type='radio' name='resposta[$indice]' value='Unidade Central de Processamento' class=''> Unidade Central de Processamento <br>";
                    echo "<input type='radio' name='resposta[$indice]' value='Unidades de Processamento Gráfico' class=''> Unidades de Processamento Gráfico <br>";
                ?>
            </div>

                =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
               
            <div class="form-control">
                <?php
                $indice = 2 ;
                    echo "<div class='form-label'>$perguntas[$indice]</div>";
                
                echo "<input type='radio' name='resposta[$indice]' value='Unidades de Processamento Central' class=''> Unidades de Processamento Central <br>";
                echo "<input type='radio' name='resposta[$indice]' value='Memória de Acesso Aleatório' class=''> Memória de Acesso Aleatório <br>";
                echo "<input type='radio' name='resposta[$indice]' value='Memória não Volátil Expressa' class=''> Memória não Volátil Expressa <br>";
                echo "<input type='radio' name='resposta[$indice]' value='Unidade Central de Processamento' class=''> Unidade Central de Processamento <br>";
                ?>
            </div>

            =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=

            <div class="form-control">
            <?php
                $indice = 3 ;
                    echo "<div class='form-label'>$perguntas[$indice]</div>";
                
                echo "<input type='radio' name='resposta[$indice]' value='Elbrus ' class=''> Elbrus  <br>";
                echo "<input type='radio' name='resposta[$indice]' value='Pirâmide Carstensz' class=''> Pirâmide Carstensz <br>";
                echo "<input type='radio' name='resposta[$indice]' value='Kilimanjaro ' class=''> Kilimanjaro  <br>";
                echo "<input type='radio' name='resposta[$indice]' value='Monte Everest' class=''> Monte Everest <br>";
                ?>
            </div> 

            =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=

            <div class="form-control">
                <?php
                $indice = 4 ;
                    echo "<div class='form-label'>$perguntas[$indice]</div>";
                
                echo "<input type='radio' name='resposta[$indice]' value='41' class=''> 41 <br>";
                echo "<input type='radio' name='resposta[$indice]' value='50' class=''> 50 <br>";
                echo "<input type='radio' name='resposta[$indice]' value='40' class=''> 40 <br>";
                echo "<input type='radio' name='resposta[$indice]' value='64' class=''> 64 <br>";
                ?>
            </div> 

            =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=

            <div class="form-control"> 
                <?php
                $indice = 5 ;
                    echo "<div class='form-label'>$perguntas[$indice]</div>";
                
                echo "<input type='radio' name='resposta[$indice]' value='World Wide Web' class=''> World Wide Web <br>";
                echo "<input type='radio' name='resposta[$indice]' value='Linguagem de Marcação de Hipertexto' class=''> Linguagem de Marcação de Hipertexto <br>";
                echo "<input type='radio' name='resposta[$indice]' value='Hypertext Transfer Protocol Secure' class=''> Hypertext Transfer Protocol Secure <br>";
                echo "<input type='radio' name='resposta[$indice]' value='Hypertext Transfer Protocol' class=''> Hypertext Transfer Protocol <br>";
                ?>
            </div> 

            =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=

            <div class="form-control">
                <?php
                $indice = 6 ;
                    echo "<div class='form-label'>$perguntas[$indice]</div>";
                
                echo "<input type='radio' name='resposta[$indice]' value='CU' class=''> CU <br>";
                echo "<input type='radio' name='resposta[$indice]' value='H2O' class=''> H2O <br>";
                echo "<input type='radio' name='resposta[$indice]' value='O' class=''> O <br>";
                echo "<input type='radio' name='resposta[$indice]' value='ZN' class=''> ZN <br>";
                ?>
            </div> 

            =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=

            <div class="form-control">
                <?php
                $indice = 7 ;
                    echo "<div class='form-label'>$perguntas[$indice]</div>";
                
                echo "<input type='radio' name='resposta[$indice]' value='África' class=''> África <br>";
                echo "<input type='radio' name='resposta[$indice]' value='América' class=''> América <br>";
                echo "<input type='radio' name='resposta[$indice]' value='Europa' class=''> Europa <br>";
                echo "<input type='radio' name='resposta[$indice]' value='Ásia' class=''> Ásia <br>";
                ?>
            </div> 

            =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=

            <div class="form-control">
                <?php
                $indice = 8 ;
                    echo "<div class='form-label'>$perguntas[$indice]</div>";
                
                echo "<input type='radio' name='resposta[$indice]' value='Inglês ' class=''> Inglês  <br>";
                echo "<input type='radio' name='resposta[$indice]' value='Mandarim' class=''> Mandarim <br>";
                echo "<input type='radio' name='resposta[$indice]' value='Espanhol ' class=''> Espanhol  <br>";
                echo "<input type='radio' name='resposta[$indice]' value='Português ' class=''> Português  <br>";
                ?>
            </div>

            =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=

            <div class="form-control">
                <?php
                $indice = 9 ;
                    echo "<div class='form-label'>$perguntas[$indice]</div>";
                
                echo "<input type='radio' name='resposta[$indice]' value='Rússia' class=''> Rússia <br>";
                echo "<input type='radio' name='resposta[$indice]' value='Canadá' class=''> Canadá <br>";
                echo "<input type='radio' name='resposta[$indice]' value='China' class=''> China <br>";
                echo "<input type='radio' name='resposta[$indice]' value='Estados Unidos' class=''> Estados Unidos <br>";
                ?>
            </div>

            =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=

            <div class="form-control">
                <?php
                $indice = 10 ;
                    echo "<div class='form-label'>$perguntas[$indice]</div>";
                
                echo "<input type='radio' name='resposta[$indice]' value='Albert Einstein' class=''> Albert Einstein <br>";
                echo "<input type='radio' name='resposta[$indice]' value='Nikola Tesla' class=''> Nikola Tesla <br>";
                echo "<input type='radio' name='resposta[$indice]' value='Isaac Newton' class=''> Isaac Newton <br>";
                echo "<input type='radio' name='resposta[$indice]' value='Alan Turing' class=''> Alan Turing <br>";
                ?>
            </div>

            =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=

            <div class="form-control">
                <?php
                $indice = 11 ;
                    echo "<div class='form-label '>$perguntas[$indice]</div>";
                
                echo "<input type='radio' name='resposta[$indice]' value='Antílope-americano' class=''> Antílope-americano <br>";
                echo "<input type='radio' name='resposta[$indice]' value='Gazela-de-thomson' class=''> Gazela-de-thomson <br>";
                echo "<input type='radio' name='resposta[$indice]' value='Guepardo' class=''> Guepardo <br>";
                echo "<input type='radio' name='resposta[$indice]' value='Falcão-peregrino' class=''> Falcão-peregrino <br>";
                ?>
            </div>
            
        <input type="submit" value="Enviar Respostas" class="btn btn-primary m-3">
        </div>
    </div>
</div>
    </form>
</body>
</html>