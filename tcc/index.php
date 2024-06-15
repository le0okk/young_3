<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="d-flex justify-content-center align-items-center vh-100">
    <main class="vw-80%">
        <h1 class="text-body-tertiary">LOGIN</h1>
        <form class="form-control shadow bs-danger-border-subtle" action="pagina-inicial.html" method="post">
            <div>
                <input class="form-control"  type="text">
                <label class="label-control" for="user">Usuario</label>
            </div>
            <div>
                <input class="form-control" type="password">
                <label class="label-control" for="pass">Senha</label>
            </div>
            <div>
                <button class="mt-3 w-100 shadow btn btn-danger "  type="submit">Entrar</button>
                <button class="mt-3 w-100 shadow btn btn-danger "  type="submit">Cadastrar</button>
            </div>
        </form>
    </main>
    </main>
</body>
</html>