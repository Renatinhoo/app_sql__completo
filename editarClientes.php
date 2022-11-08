<?php
require_once("../sistema_login/controller/ControllerCadastro.php");
?>
<html>

<head>
    <title>Sistema Web 2.0</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container text-center">

        <div class="row">
            <div class="col">
                <nav class="navbar bg-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">
                            <img src="img/bootstrap-logo.svg" alt="" width="30" height="24" class="d-inline-block align-text-top">
                            Sistema Web 2.0
                        </a>
                    </div>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">Cadastro</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="consulta.php">Consulta</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <!-- As a heading -->
                <nav class="navbar bg-light">
                    <div class="container_fluid">
                        <span class="navbar-brand">Editar cadastro de usuário</span>
                    </div>
                </nav>
            </div>
            <div class="row">
                <div class="col">&nbsp;</div>
            </div>
            <div class="row">
                <div class="col">
                    <p>
                        <?php
                        $controller = new cadastroController();
                        $result = $controller->listar($_GET['id']);
                        ?>
                    <form class="row g-3" method="post" action="controller/ControllerCadastro.php?funcao=editar&id=<?php echo $result[0]['id']; ?>" id="form" name="form">
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Email</label>
                            <input type="email" class="form-control" name="txtEmail" id="txtEmail" value="<?php echo $result[0]['email']; ?>">
                        </div>
                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">Senha</label>
                            <input type="password" class="form-control" name="txtSenha" id="txtSenha" value="<?php echo $result[0]['senha']; ?>">
                        </div>
                        <div class="col-12">
                            <label for="inputAddress" class="form-label">Endereço</label>
                            <input type="text" class="form-control" name="txtEndereco" id="txtEndereco" value="<?php echo $result[0]['endereco']; ?>">
                        </div>
                        <div class="col-6">
                            <label for="inputAdress2" class="form-label">Bairro</label>
                            <input type="text" class="form-control" name="txtBairro" id="txtBairro" value="<?php echo $result[0]['bairro']; ?>">
                        </div>
                        <div class="col-6">
                            <label for="inputAddress2" class="form-label">Cep</label>
                            <input type="text" class="form-control" name="txtCep" id="txtCep" value="<?php echo $result[0]['cep']; ?>">
                        </div>
                        <div class="col-md-6">
                            <label for="inputCity" class="form-label">Cidade</label>
                            <input type="text" class="form-control" name="txtCidade" id="txtCidade" value="<?php echo $result[0]['cidade']; ?>">
                        </div>
                        <div class="col-md-4">
                            <label for="inputState" class="form-label">Estado</label>
                            <select id="txtEstado" name="txtEstado" class="form-select" value="<?php echo $result[0]['estado']; ?>">
                                <option selected>Escolha...</option>
                                <option <?php if($result[0]['estado'] == "AC"){ echo "selected"; } ?> value="1">AC</option>
                                <option <?php if($result[0]['estado'] == "AL"){ echo "selected"; } ?> value="2">AL</option>
                                <option <?php if($result[0]['estado'] == "AP"){ echo "selected"; } ?> value="3">AP</option>
                                <option <?php if($result[0]['estado'] == "AM"){ echo "selected"; } ?> value="4">AM</option>
                                <option <?php if($result[0]['estado'] == "BA"){ echo "selected"; } ?> value="5">BA</option>
                                <option <?php if($result[0]['estado'] == "CE"){ echo "selected"; } ?> value="6">CE</option>
                                <option <?php if($result[0]['estado'] == "ES"){ echo "selected"; } ?> value="7">ES</option>
                                <option <?php if($result[0]['estado'] == "GO"){ echo "selected"; } ?> value="8">GO</option>
                                <option <?php if($result[0]['estado'] == "MA"){ echo "selected"; } ?> value="9">MA</option>
                                <option <?php if($result[0]['estado'] == "MT"){ echo "selected"; } ?> value="10">MT</option>
                                <option <?php if($result[0]['estado'] == "MS"){ echo "selected"; } ?> value="11">MS</option>
                                <option <?php if($result[0]['estado'] == "MG"){ echo "selected"; } ?> value="12">MG</option>
                                <option <?php if($result[0]['estado'] == "PA"){ echo "selected"; } ?> value="13">PA</option>
                                <option <?php if($result[0]['estado'] == "PB"){ echo "selected"; } ?> value="14">PB</option>
                                <option <?php if($result[0]['estado'] == "PR"){ echo "selected"; } ?> value="15">PR</option>
                                <option <?php if($result[0]['estado'] == "PE"){ echo "selected"; } ?> value="16">PE</option>
                                <option <?php if($result[0]['estado'] == "PI"){ echo "selected"; } ?> value="17">PI</option>
                                <option <?php if($result[0]['estado'] == "RJ"){ echo "selected"; } ?> value="18">RJ</option>
                                <option <?php if($result[0]['estado'] == "RN"){ echo "selected"; } ?> value="19">RN</option>
                                <option <?php if($result[0]['estado'] == "RS"){ echo "selected"; } ?> value="20">RS</option>
                                <option <?php if($result[0]['estado'] == "RO"){ echo "selected"; } ?> value="21">RO</option>
                                <option <?php if($result[0]['estado'] == "RR"){ echo "selected"; } ?> value="22">RR</option>
                                <option <?php if($result[0]['estado'] == "SC"){ echo "selected"; } ?> value="23">SC</option>
                                <option <?php if($result[0]['estado'] == "SP"){ echo "selected"; } ?> value="24">SP</option>
                                <option <?php if($result[0]['estado'] == "SE"){ echo "selected"; } ?> value="25">SE</option>
                                <option <?php if($result[0]['estado'] == "TO"){ echo "selected"; } ?> value="26">TO</option>
                                <option <?php if($result[0]['estado'] == "DF"){ echo "selected"; } ?> value="27">DF</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-dark">Editar</button>
                        </div>
                    </form>
                    </p>
                </div>
            </div>
        </div>
</body>

</html>