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
    
    
    var behavior = function (val) {
        return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
    },
    options = {
        onKeyPress: function (val, e, field, options) {
            field.mask(behavior.apply({}, arguments), options);
        }
    };
    
    $('#telefone').mask(behavior, options);
    alert(telefone);


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