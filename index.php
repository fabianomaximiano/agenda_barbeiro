<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
    <!-- <link rel="stylesheet" href="assets/css/style.css"> -->
    <title>Formulário de contato</title>
</head>
<body>

<div class="container">
    <h1>Formulario de contato - estudos</h1>
    <?php 

        $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        var_dump($dados);
        $nome = $dados['nome'];
        $cnt_nome = strlen($nome);
 
        $email = $dados['email'];
        
        //function valida telefone fixo e celular
        function validarTelefoneCelularEFixo(string $valor): bool {
    
            //processa a string mantendo apenas números no valor de entrada.
            $valor = preg_replace("/[^0-9]/", "", $valor); 
                
            $lenValor = strlen($valor);
            
            //validando a quantidade de caracteres de telefone fixo ou celular.
            if($lenValor != 10 && $lenValor != 11)
                return false;
            
            //DD e número de telefone não podem começar com zero.
            if($valor[0] == "0" || $valor[2] == "0")
                return false;
            
            return true;
        }

        $telefone = $dados['telefone'];
        $endereco = $dados['endereco'];

        if(!empty($dados['EnviarMssg'])){

            var_dump($dados);
            echo "<hr/>";
            
             if(empty($nome)){
                    $_SESSION['msgAlerta'] = "<p class='text-danger'>Erro: Necessario preencher o campo nome!</p>";
                }elseif($cnt_nome <= 3){
                    $_SESSION['msgAlerta']= "<p class='text-danger'>Erro: Seu nome precisa ser maior que 2 caracteres!</p>";
                }elseif(empty($dados['email'])){
                    $_SESSION['msgAlerta'] = "<p class='text-danger'>Erro: Necessario preencher o campo e-mail!</p>";
                }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                    $_SESSION['msgAlerta'] = "<p class='text-danger'>Erro: Seu e-mail não é valido!</p>";
                }elseif(empty($telefone)){
                    $_SESSION['msgAlerta'] = "<p class='text-danger'>Erro: Necessario preencher o campo Telefone!</p>";
                }elseif(!validarTelefoneCelularEFixo($telefone)){
                    $_SESSION['msgAlerta'] = "<p class='text-danger'>Erro: telefone invalido!</p>";
                }elseif(empty($dados['endereco'])){
                    $_SESSION['msgAlerta'] = "<p class='text-danger'>Erro: Necessario preencher o campo Endereco!</p>";
                }else{
                    $_SESSION['msgAlerta'] = "<h2 class='bg-success text-white text-center'>Pode Enviar!</h2>";
                }
                
        }

        if(isset($_SESSION['msgAlerta'])){
            echo "<span id='msgAlerta'>" . $_SESSION['msgAlerta'] . "</span>";
            unset($_SESSION['msgAlerta']);
        }else{
            echo "<span id='msgAlerta'></span>";
        }
    ?>


    <form action="" method="post" id="CadMsgCont">
        <div class="form-group">
            <label for="nome">Nome Completo</label>
            <input type="text" class="form-control" name="nome" id="nome" placeholder="Informe seu nome" value="<?php if(isset($dados['nome'])){echo $dados['nome'];} ?>">
            <small id="helpNome" class="form-text text-muted">Informar nome completo.</small>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Informe seu email" value="<?php if(isset($dados['email'])){echo $dados['email'];} ?>">
            <small id="helpEmail" class="form-text text-muted">Informar Email.</small>
        </div>
        <div class="form-group">
            <label for="telefone">Telefone</label>
            <input type="text" class="form-control" name="telefone" maxlength="15" id="telefone" placeholder="Informe seu Telefone" value="<?php if(isset($dados['telefone'])){echo $dados['telefone'];} ?>">
            <small id="helpTelefone" class="form-text text-muted">Informar telefone.</small>
        </div>
        <div class="form-group">
            <label for="endereco">Endereço</label>
            <input type="text" class="form-control" name="endereco" id="endereco" placeholder="Informe seu endereco" value="<?php if(isset($dados['endereco'])){echo $dados['endereco'];} ?>">
            <small id="helpEndereco" class="form-text text-muted">Informar Endereço.</small>
        </div>

        <button type="submit" name="EnviarMssg" class="btn btn-success enviar" id="EnviarMssg" value="EnviarMssg">Enviar</button>
    </form>
</div>


<script src="node_modules/jquery/dist/jquery.min.js"></script>
<script src="node_modules/@popperjs/core/dist/umd/popper.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="assets/js/custom.js"></script>

</body>
</html>

<?php

    
//     if($nome == false){
//     $nome = $_POST['nome'];
//     //$telefone = $_POST['telefone'];
//     //$email = $_POST['email'];
//     //$cep = $_POST['cep'];
//     echo "nao tem nada aqui";
// }else{ 
//     if(isset($nome)){
//         echo '<p>variavel existe!</p>';
//     }else{
//         echo '<p>variavel não existe</p>';
//     }
//     echo '<hr>';
//     if(empty($nome)){
//         echo '<p>variavel vazia</p>';
//     }

// }