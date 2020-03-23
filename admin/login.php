<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Acesso ao Sistema</title>
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<script src="assets/js/core/jquery.3.2.1.min"></script>
<script src="assets/js/core//bootstrap.min.js"></script> 
<style type="text/css">
	.login-form {
		width: 340px;
    	margin: 50px auto;
	}
    .login-form form {
    	margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .login-form h2 {
        margin: 0 0 15px;
    }
    .form-control, .btn {
        min-height: 38px;
        border-radius: 2px;
    }
    .btn {        
        font-size: 15px;
        font-weight: bold;
        background: #0355C0;
    }
</style>
</head>
<body>
<div class="login-form">
    <form action="/examples/actions/confirmation.php" method="post">
        <h2 class="text-center">Acesso no Sistema</h2>       
        <div class="form-group">
            <input type="text" class="form-control" name="username" placeholder="Usuário" required="required">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Senha" required="required">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Entrar</button>
        </div>
        <div class="clearfix">
            <label class="pull-left checkbox-inline"><input type="checkbox"> Lembrar Senha</label>
            <a href="#" class="pull-right">Esqueceu sua senha?</a>
        </div>        
    </form>
    <p class="text-center"><a href="#">Criar uma conta</a></p>
</div>
</body>
</html>                                		                            