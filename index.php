<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Holy guacamole!</strong> You should check in on some of those fields below.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
</div>


<script src="node_modules/jquery/dist/jquery.min.js"></script>
<script src="node_modules/@popperjs/core/dist/umd/popper.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

</body>
</html>

<?php

    
    if($nome == false){
    $nome = $_POST['nome'];
    //$telefone = $_POST['telefone'];
    //$email = $_POST['email'];
    //$cep = $_POST['cep'];
    echo "nao tem nada aqui";
}else{ 
    if(isset($nome)){
        echo '<p>variavel existe!</p>';
    }else{
        echo '<p>variavel não existe</p>';
    }
    echo '<hr>';
    if(empty($nome)){
        echo '<p>variavel vazia</p>';
    }

}