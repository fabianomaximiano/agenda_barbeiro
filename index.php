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