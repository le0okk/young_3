<?php
include('conexao.php');

if (isset($_POST['email']) || isset($_POST['pass']))
{
    if (strlen($_POST['email']) == 0)
    {
        echo "Preencha o seu e-mail";
    }
    else if (strlen($_POST['pass']) == 0)
    {
        echo "Preencha a sua senha";
    }
    else
    {
        $email = $_POST['email'];
        $pass = $_POST['pass'];
    
        $sql_codigo = "SELECT * FROM dados WHERE email = and $email AND senha = $pass";

        $sql_query = $mysqli ->query($sql_codigo) or die("Falha de execução: ". $mysqli ->error);

        echo $sql_query;
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 2 - login com DB</title>
</head>
<body>
    <div>
        <h1>
            Acesse a sua conta
        </h1>
        <form action="" method="post">
            <div>
                <label>email</label>
                <input type="email" name="email" required>
            </div>
            <div>
                <label>Senha</label>
                <input type="password" name="pass" required>
            </div>

            <button type="submit">Entrar</button>
        </form>
        
</body>
</html>