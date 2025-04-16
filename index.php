<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="keywords" content="HTML, CSS, JavaScript">
        <meta name="author" content="Ryan Pires">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="img/form-svgrepo-com.svg">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css">
        <title>Formulário</title>
    </head>
    <body>
        <div class="container card">
            <form class="form" id="formulario" action="dados.php" method="post" enctype="application/x-www-form-urlencoded">
                <div class="mb-3">
                    <h1 style="text-align: center;">Formulário</h1>
                    <div class="row">
                        <label class="form-label form-check lblTitulo">- Dados Pessoais -</label>
                        <div class="col">
                            <label for="nome" class="form-label form-check ">Nome Completo</label>
                            <div class="mb-3 form-check">
                                <input type="text" name="nome" id="nom" class="nome form-control" value="" placeholder="Digite o seu nome completo:" required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3 form-check">
                                <label for="sex" style="margin-bottom: 3px;">Sexo</label>
                                <select class="form-select sexo" name="sexo" id="sex" aria-label="Default select example" required>
                                    <option disabled selected>Selecione o sexo:</option>
                                    <option value="Masculino">Masculino</option>
                                    <option value="Feminino">Feminino</option>
                                </select>                
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="dataNasc" class="form-label form-check">Data de Nascimento</label>
                            <div class="mb-3 form-check">
                                <input type="date" name="nasc" id="dataNasc" class="nasc form-control" value="" required>
                            </div>
                        </div>
                        <div class="col">
                            <label for="Rg" class="form-label form-check ">RG</label>
                            <div class="mb-3 form-check">
                                <input type="text" name="Rg" id="Rg" class="Rg form-control" value="" maxlength="12" pattern="[0-9]{2}.[0-9]{3}.[0-9]{3}-[0-9]{1}" placeholder="XX.XXX.XXX-X" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="form-label form-check lblTitulo">- Contato -</label>
                        <div class="col">
                            <label for="txt_email" class="form-label form-check">Email</label>
                            <div class="mb-3 form-check">
                                <input type="email" name="email" id="txt_email" class="txt_email form-control" value="" placeholder="Digite o seu email:" required>
                            </div>
                        </div>
                        <div class="col">
                            <label for="tel" class="form-label form-check">Telefone Celular</label>
                            <div class="mb-3 form-check">
                                <input type="tel" name="cel" id="tel" class="cel form-control" value="" maxlength="13" pattern="[0-9]{2} [0-9]{5}-[0-9]{4}" placeholder="XX XXXXX-XXXX" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="form-label form-check lblTitulo">- Endereço -</label>
                        <div class="col">
                            <div class="mb-3 form-check">
                                <label for="est" style="margin-bottom: 3px;">Estado</label>
                                <select class="form-select estado" name="estado" id="est" aria-label="Size 5 select example" required>
                                    <option value="" disabled selected>Selecione o estado:</option>
                                    <option value="AC">Acre</option>
                                    <option value="AL">Alagoas</option>
                                    <option value="AP">Amapá</option>
                                    <option value="AM">Amazonas</option>
                                    <option value="BA">Bahia</option>
                                    <option value="CE">Ceará</option>
                                    <option value="DF">Distrito Federal</option>
                                    <option value="ES">Espirito Santo</option>
                                    <option value="GO">Goiás</option>
                                    <option value="MA">Maranhão</option>
                                    <option value="MS">Mato Grosso do Sul</option>
                                    <option value="MT">Mato Grosso</option>
                                    <option value="MG">Minas Gerais</option>
                                    <option value="PA">Pará</option>
                                    <option value="PB">Paraíba</option>
                                    <option value="PR">Paraná</option>
                                    <option value="PE">Pernambuco</option>
                                    <option value="PI">Piauí</option>
                                    <option value="RJ">Rio de Janeiro</option>
                                    <option value="RN">Rio Grande do Norte</option>
                                    <option value="RS">Rio Grande do Sul</option>
                                    <option value="RO">Rondônia</option>
                                    <option value="RR">Roraima</option>
                                    <option value="SC">Santa Catarina</option>
                                    <option value="SP">São Paulo</option>
                                    <option value="SE">Sergipe</option>
                                    <option value="TO">Tocantins</option>
                                </select>                
                            </div>
                        </div>
                        <div class="col">
                            <label for="cep" class="form-label form-check">CEP</label>
                            <div class="mb-3 form-check">
                                <input type="text" name="cep" id="cep" class="cep form-control" maxlength="9" pattern="[0-9]{5}-[0-9]{3}" value="" placeholder="XXXXX-XXX" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="form-label form-check lblTitulo">- Situação -</label>
                        <div class="col">
                            <div class="mb-3 form-check">
                                <label for="esc" style="margin-bottom: 3px;">Escolaridade</label>
                                <select class="form-select escola" name="escola" id="esc" aria-label="Default select example" required>
                                    <option disabled selected>Selecione a escolaridade:</option>
                                    <option value="Educação Infantil">Educação Infantil</option>
                                    <option value="Ensino Fundamental">Ensino Fundamental</option>
                                    <option value="Ensino Médio">Ensino Médio</option>
                                    <option value="Ensino Superior(Graduação)">Ensino Superior(Graduação)</option>
                                    <option value="Pós-Graduação">Pós-Graduação</option>
                                    <option value="Mestrado">Mestrado</option>
                                    <option value="Doutorado">Doutorado</option>
                                </select>                
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3 form-check">
                                <label for="estCiv" style="margin-bottom: 3px;">Estado Civil</label>
                                <select class="form-select estadoCiv" name="estadoCiv" id="estCiv" aria-label="Default select example" required>
                                    <option disabled selected>Selecione o estado civil:</option>
                                    <option value="Solteiro">Solteiro</option>
                                    <option value="Casado">Casado</option>
                                    <option value="Divorciado">Divorciado</option>
                                    <option value="Viúvo">Viúvo</option>
                                </select>                
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" name="check" id="check" class="checked" value="" required>
                        <label for="check" class="form-label">Confirmar</label>
                    </div>
                    <div class="mb-3 form-check">
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <input type="submit" class="btn btn-primary" name="cad" id="cad" value="Enviar">
                        </div>
                    </div> 
                </div>
            </form>
        </div>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
        <script>
            const phoneInputField = document.querySelector("#tel");
            const phoneInput = window.intlTelInput(phoneInputField, {
                preferredCountries: ["br"],
                utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
            });
        </script>
    </body>
</html>