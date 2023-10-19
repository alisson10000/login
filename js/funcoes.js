
function validaLogin(){
    var login , senha;
    
    login = document.getElementById('login').value;
    senha = document.getElementById('senha').value;
    
   if(login == ""){
       alert("Campo login vazio");
   } else if(senha == ""){
       alert("Campo senha vazio");
   }else{
       document.frmLogin.submit();
   }
    
}