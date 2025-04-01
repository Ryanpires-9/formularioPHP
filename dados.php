<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="keywords" content="HTML, CSS, JavaScript">
        <meta name="author" content="Ryan Pires">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="IMG/form-svgrepo-com.svg">
        <link rel="stylesheet" href="CSS/bootstrap.min.css">
        <link rel="stylesheet" href="CSS/style.css">
        <title>Salvamento concluído!</title>
        <style>
            .card {
                width: 40%;
            }
            @media (max-width: 1000px) {  
                .card {
                    width: 50%;
                }
            }
            @media (max-width: 825px) {  
                .card {
                    width: 60%;
                    margin-bottom: 5%;
                    margin-top: 5%;
                }
            }
            @media (max-width: 650px) {  
                .card {
                    width: 70%;
                }
            }
            @media (max-width: 575px) {  
                .card {
                    width: 100%;
                    margin-bottom: 0%;
                    margin-top: 0%;
                }
            }
        </style>
    </head>
    <body>
        <div class="container card form">
            <?php

                $nome = $_POST["nome"];
                $rg = $_POST["Rg"];
                $email = $_POST["email"];
                $telefone = $_POST["cel"];
                $sexo = $_POST["sexo"];
                $data = $_POST["nasc"];
                $escola = $_POST["escola"];
                $estado = $_POST["estado"];
                $cep = $_POST["cep"];
                $estadoCiv = $_POST["estadoCiv"];

                echo "<p>Nome: $nome</p>\n";
                echo "<p>RG: $rg</p>\n";
                echo "<p>Email: $email</p>\n";
                echo "<p>Celular: $telefone</p>\n";
                echo "<p>Gênero: $sexo</p>\n";
                echo "<p>Data de Nascimento: $data</p>\n";
                echo "<p>Escolaridade: $escola</p>\n";
                echo "<p>Estado: $estado</p>\n";
                echo "<p>CEP: $cep</p>\n";
                echo "<p>Estado Civil: $estadoCiv</p>\n";

            ?>
		    <p><a href="index.php">Voltar para página inicial</a></p>
        </div>
        <script src="JS/bootstrap.bundle.min.js"></script>
    </body>
</html>