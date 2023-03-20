const formulario = document.querySelector("#CadMsgCont"); 

formulario.onsubmit = evento =>{
    //recebe dados do campo
    var nome = document.querySelector("#nome").value;
    var email = document.querySelector("#email").value;
    var telefone = document.querySelector("#telefone").value;
    var endereco = document.querySelector("#endereco").value;

    //console.log(nome);

    if(nome === ""){
        evento.preventDefault();
        document.getElementById("msgAlerta").innerHTML = "<p class='text-danger'>Erro: Necessario preencher o campo Nome JS!</p>";
        return;
    }

    if(email === ""){
        evento.preventDefault();
        document.getElementById("msgAlerta").innerHTML = "<p class='text-danger'>Erro: Necessario preencher o campo Email JS!</p>";
        return;
    }

    if(telefone === ""){
        evento.preventDefault();
        document.getElementById("msgAlerta").innerHTML = "<p class='text-danger'>Erro: Necessario preencher o campo Telefone JS!</p>";
        return;
    }

    if(endereco === ""){
        evento.preventDefault();
        document.getElementById("msgAlerta").innerHTML = "<p class='text-danger'>Erro: Necessario preencher o campo Endereço JS!</p>";
        return;
    }
    

}