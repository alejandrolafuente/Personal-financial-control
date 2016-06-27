<?php
require "credentials.php";
$conn = mysqli_connect($servername,$username,$db_password,$dbname);
if(!$conn){
    die('Problema na conexão');
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Controle Financeiro</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</head>
<h1>Área de Acesso</h1>
<nav id="acesso">
   <section id="login">
        <table>
            <tr>
                <td><input type="email" name="email" value="E-mail aqui!!"></td>
            </tr>
            <tr>
                <td><input type="password" name="psw" value="sua senha!!!"></td>
            </tr>
            <tr>
                <td><input type="submit" name="acesso" value="Entrar"></td>
            </tr>
        </table>
    </section>

    <section id="cadastro">
        
        <table>
            <tr>
                <td><input type="text" name="nome" value="Escreva seu nome"></td>
                <td><input type="text" name="cit" value="Escreva sua cidade"></td>
            </tr>
            <tr>
                <td><input type="text" name="emailCad" value="Escreva seu email"></td>
                <td><input type="text" name="est" value="estado"></td>
            </tr>
            <tr>
                <td><input type="text" name="pswCad" value="Senha"></td>
                <td><input type="text" name="pswconfirm" value="confirme sua senha"></td>
            </tr>
            <tr>
                <td><input type="submit" name="cadastro" value="Cadastrar"></td>
            </tr>
        </table>
</section>
</nav>

<body>
</body>
</html>