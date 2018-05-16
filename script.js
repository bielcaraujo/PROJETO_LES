function login() {
    var dados = {
        "login" : $("#form-inicio-login-user").val(), 
        "senha" : $("#form-inicio-login-senha").val()
    };
    $.ajax(
        {
            url : 'https://gameet.000webhostapp.com/login',
            contentType : 'application/json',
            dataType : 'json',
            data : JSON.stringify(dados),
            type : 'POST',
            success: function(result) {
                if (result.tipo == "1") {
                window.location.href = "https://gameet.000webhostapp.com/profileinfo.php";
                                        }
                else{
                window.location.href = "https://gameet.000webhostapp.com/cadastrojogo.php"; 
                }
            }
        }     
    );
    }

function cadastroUsuario(){
    var dados = {
        "nome" : $("#form-cadastro-usuario-nome").val(),
        "idade" : $("#form-cadastro-usuario-idade").val(),
        "login" : $("#form-cadastro-usuario-username").val(),
        "senha" : $("#form-cadastro-usuario-senha").val(),
        "estado" : $("#form-cadastro-usuario-estado").val(),
        "genero" : $("#form-cadastro-usuario-genero").val(),
        "cidade" : $("#form-cadastro-usuario-cidade").val(),
        "tipo": "1",
        "desc" : " "
    };
    $.ajax(
        {
            url:'https://gameet.000webhostapp.com/usuario',
            contentType : 'application/json',
            dataType : 'json',
            data : JSON.stringify(dados),
            type : 'POST',
            success: function(result) {if (result.status == "SUCCESS"){alert("cadastro feito com sucesso!!");} else
                                      {alert("falha no cadastro")}}
    }
    );
}

function atualizarUsuario(){
    var dados = {
        "nome" : $("#form-edit-usuario-nome").val(),
        "idade" : $("#form-edit-usuario-idade").val(),
        "login" : $("#form-edit-usuario-login").val(),
        "senha" : $("#form-edit-usuario-senha").val(),
        "estado" : $("#form-edit-usuario-estado").val(),
        "genero" : $("#form-edit-usuario-genero").val(),
        "cidade" : $("#form-edit-usuario-cidade").val(),
        "tipo": "1",
        "desc" : $("form-edit-usuario-desc").val(),
    };
    $.ajax(
        {
            url:'https://gameet.000webhostapp.com/usuario/update',
            contentType : 'application/json',
            dataType : 'json',
            data : JSON.stringify(dados),
            type : 'POST',
            success: function(result) {if (result.status == "SUCCESS"){alert("atualização feita com sucesso!!");} else
                                      {alert("falha na atualização")}}
    }
    );
}

function cadastroJogo(){
    var dados = {
        "nome" : $("#form-cadastro-jogo-nome").val(),
        "plataforma" : $("#form-cadastro-jogo-plataforma").val()
    };
    $.ajax(
        {
            url:'https://gameet.000webhostapp.com/jogo',
            contentType : 'application/json',
            dataType : 'json',
            data : JSON.stringify(dados),
            type : 'POST',
            success: function(result) {if (result.status == "SUCCESS"){alert("cadastro feito com sucesso!!");} else
                                      {alert("falha no cadastro")}}
    }
    );
}


function getJogos() {
    $.ajax(
        {
            url : 'https://gameet.000webhostapp.com/jogo',
            type : 'GET',
            success: function(result) {
                console.log(result);
            }
        }
    );
}

function getInfo() {
    $.ajax(
        {
            url : 'https://gameet.000webhostapp.com/usuario',
            type : 'GET',
            success: function(result) {
                console.log(result);
            }
        }
    );
}


