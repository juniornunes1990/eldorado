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
           <form id="login-form-wrap" class="login" method="post" action="/admin/forgot/reset">
            <h3><i class="fa fa-lock fa-4x"></i></h3>
            <input type="hidden" name="code" value="<?php echo htmlspecialchars( $code, ENT_COMPAT, 'UTF-8', FALSE ); ?>">
            <h5>Olá <b><?php echo htmlspecialchars( $name, ENT_COMPAT, 'UTF-8', FALSE ); ?></b>, digite uma nova senha:</h5>
            <p class="form-row form-row-first">
                <label for="password">Nova senha <span class="required">*</span>
                </label>
                <input type="password" id="password" name="password" class="input-text" style="width:350px">
            </p>
            <div class="clear"></div>
            <p class="form-row">
                <input type="submit" value="Enviar" name="login" class="button">                
            </p>
            <div class="clear"></div>
        </form>      
          <!-- /.center -->
        </div>
      </div>
    <p class="text-center"><a href="/">Voltar para o site</a></p>
</div>
</body>
</html>  