
function validaLogin() {
    var login, senha;

    login = document.getElementById('login').value;
    senha = document.getElementById('senha').value;

    if (login == "") {
        alert("Campo login vazio");
    } else if (senha == "") {
        alert("Campo senha vazio");
    } else {
        document.frmLogin.submit();
    }

}

function validaCadastro() {
    var nome, login, senha, confirmaSenha;

    nome = document.getElementById('nome').value;
    login = document.getElementById('login').value;
    senha = document.getElementById('senha').value;
    confirmaSenha = document.getElementById('confirmaSenha').value;

    if (nome === "") {
        alert("Campo nome vazio!");
        document.getElementById('nome').focus();
    } else if (login === "") {
        alert("Campo login vazio!");
        document.getElementById('login').focus();
    } else if (senha === "") {
        alert("Campo senha vazio!");
        document.getElementById('senha').focus();
    } else if (confirmaSenha === "") {
        alert("Campo confirma senha vazio!");
        document.getElementById('confirmaSenha').focus();
    } else if (senha !== confirmaSenha) {
        alert("Os campos senhas são diferentes!");
        document.getElementById('confirmaSenha').value = "";
        document.getElementById('senha').value = "";
        document.getElementById('senha').focus();
    }else{
        document.frmCadastro.submit();
    }


}