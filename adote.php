<!DOCTYPE html>
<html lang="en">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=euc-jp">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Murilo Verlindo e Gabrila Machado">
    <meta name="description" content="Trabalho Final POOII">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="admin/css/adote.css">
    <title>MeAudote</title>

</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">meAUdote</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Adote</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="container">

        <form class="form-signin" action="" method="post">

            <h2 class="form-signin-heading">Login</h2>
            <hr>

            <input type="text" class="form-control" name="usuario" placeholder="Usuario">
            <input type="password" name="senha" class="form-control" placeholder="Senha">

            <br />
            <br />
            <button class="btn btn-lg btn-primary btn-block" name="logar" type="submit" ><a href="admin/index.php">Fazer Login </a></button>
        </form>

    </div> <!-- /container -->

    <footer id="rodape">
        <p><small>&copy; 2022 <a href="#">Murilo Verlindo & Gabriela Machado</a>. All Rights Reserved.
    </footer>
</body>

</html>