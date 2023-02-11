<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="/css/login.css">
</head>
<body>

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    @if (session()->has('error'))
  <div id="popUp">
    <span>Usuário não encontrado</span>
  </div>
    @endif

    <!-- Icon -->
    <div class="fadeIn first">
    <a href="/"><img src="/imgs/LOGO.svg" id="icon" alt="User Icon"/></a>
    </div>

    <!-- Login Form -->
    
    <form method="post" action="/cliente/login" method="POST">
        {{ csrf_field() }}
      <input type="email" id="login" class="fadeIn second" name="email" placeholder="email">
      <input type="password" id="password" class="fadeIn third" name="senha" placeholder="senha">
      <input type="submit" class="fadeIn fourth" value="Entrar">
    </form>
    

    <!-- Remind Passowrd -->
    <div id="formFooter">
        <a class="underlineHover" href="/cliente/cadastrar/formulario">Cadastrar-se</a>
    </div>

  </div>
</div>
</body>
</html>