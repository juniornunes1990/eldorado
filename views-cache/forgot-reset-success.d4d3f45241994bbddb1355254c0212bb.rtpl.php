<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Recuperação de Senha</title>
<link rel="stylesheet" href="/res/admin/assets/css/bootstrap.min.css">
<script src="/res/admin/assets/core/jquery.min.js"></script>
<script src="/res/admin/assets/core/bootstrap.min.js"></script> 
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
    }
</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>
<body>    
<div class="login-form">
    <div class="text-center">       
        <div class="panel-body">
           <!-- /.lockscreen-item -->           
            <div class="alert alert-success">Senha recuperada com sucesso!</div>
            <a href="/admin/login">Clique aqui para fazer login</a>
          <!-- /.center -->
        </div>
      </div>
    <p class="text-center"><a href="/">Voltar para o site</a></p>
</div>
</body>
</html>  