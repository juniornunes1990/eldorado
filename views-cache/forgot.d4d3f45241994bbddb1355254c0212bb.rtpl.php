<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Acesso ao Sistema</title>
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
        <h3><i class="fa fa-lock fa-4x"></i></h3>
        <h2 class="text-center">Esqueceu sua senha?</h2>
        <p>Você pode resetar sua senha aqui.</p>
        <div class="panel-body">
          <form action="/admin/forgot" method="post">
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                <input id="email" name="email" placeholder="Seu e-mail" class="form-control"  type="text">
              </div>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary"><i class="fa fa-arrow-right"></i> ENVIAR </button> 
            </div>            
            <input type="hidden" class="hide" name="token" id="token" value=""> 
          </form>
        </div>
      </div>
    <p class="text-center"><a href="#">Voltar para o site</a></p>
</div>
</body>
</html>                                		                            