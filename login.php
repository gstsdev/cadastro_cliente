<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css" />
    <title>Login</title>
</head>

<body>
    <form action="verificar_login.php" method="post">
        <img src="https://image.flaticon.com/icons/png/512/61/61205.png" />

        <label>
            Login
            <input type="text" name="login" />
        </label>
        <label>
            Senha
            <input type="password" name="senha" />
        </label>

        <button type="submit" name="entrar">Entrar</button>
    </form>

</body>

</html>