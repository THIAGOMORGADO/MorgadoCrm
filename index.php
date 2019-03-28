<?php
require_once 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist/bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="main/mais.css">
    <script src="bootstrap-4.3.1-dist/bootstrap-4.3.1-dist/JS/bootstrap.min.js"></script>
</head>
<body>
    <div class="navbar bg-dark menu fixed-top">
        
    </div><br>
<div class="container">
    <div class="row">
    <div class="col-sm-12">
        <h1 class="logo align-content-center">Login</h1>
    </div>
    </div>
</div>    
<div class="container login ">
        <div class="row">
            <div class="col-sm-12">    
                    <form method="POST" class="form-group">
                    <email>E:mail:</email><input class="form-control" type="email" name="email">
                    <email>Senha:</email><input class="form-control" type="password" name="senha">
                    <input type="submit" value="ENTRA" class="botao btn btn-outline-success">
                    <label><a href="cadastra.php" class="cadastra text-dark">Cadastra-se / </a></label>
                    <label><a href="" class="esqueci text-dark">Esqueceu a senha</a></label>
                </form>
            </div>       
        </div>
    </div>
</div>    
    <div class="navbar bg-dark menu fixed-bottom">
        <label class=" marca">&copy&nbspCopyright</label>
    </div><br>        
</body>
</html>