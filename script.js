function login() {
    var dados = {
        "login" : "adminlixo",
        "senha" : "admin"
    };
    $.ajax(
        {
            url : 'http://localhost:8080/login',
            contentType : 'application/json',
            dataType : 'json',
            data : JSON.stringify(dados),
            type : 'POST',
            success: function(result) {
                console.log(result);
            }
        }
    );
}

function getJogos() {
    $.ajax(
        {
            url : 'http://localhost:8080/jogo',
            type : 'GET',
            success: function(result) {
                console.log(result);
            }
        }
    );
}


login();
getJogos();
