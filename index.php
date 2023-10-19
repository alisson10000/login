<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="js/funcoes.js"></script>
    </head>
    <body>
        <form id="frmLogin" name="frmLogin" 
              action="servicos/logar.php" method="POST">
            <input type="text" name="login" id="login" >
            <input type="password" name="senha" id="senha" >
            <button type="button" onclick="validaLogin()">logar </button>
        </form>
    </body>
</html>
