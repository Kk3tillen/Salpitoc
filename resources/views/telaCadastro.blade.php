<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar-se</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="{{asset('css/cadastro.css')}}">
</head>
<body>

<div class="wrapper fadeInDown">
  <div id="formContent">

    <div class="fadeIn first">
      <a href="/"><img src="/imgs/LOGO.svg" id="icon" alt="User Icon"/></a>
    </div>

    <form id="formularioCadastro" action="/cliente/cadastrar" method="POST">
        {{ csrf_field() }}
      <input type="text" id="name" name="nome" placeholder="Nome" required>
      <input type="text" id="sobrenome" class="fadeIn third" name="sobrenome" placeholder="sobrenome" required>
      <input type="text" id="endereco" name="rua" placeholder="Rua" required>
      <div id="numCidade">
        <input type="text" name="cidade" id="cidade" placeholder="Cidade" required>
        <input type="text" name="numero" id="numero" placeholder="Número" required> 
      </div>
      <div id="cepEstado">
        <input type="text" name="estado" id="estado" placeholder="Estado" required>
        <input type="text" name="cep" id="CEP" placeholder="CEP" required>
      </div>
      <input type="email" id="login" class="fadeIn second" name="email" placeholder="email" required>
      <input type="password" id="password" class="fadeIn third" name="senha" placeholder="senha" required>
      <input type="password" id="password" class="fadeIn third" name="confirmarSenha" placeholder="Confirmar Senha" required>
      <input type="submit" class="fadeIn fourth" value="Cadastrar-se">
    </form>
    
    <div id="formFooter">
        <a class="underlineHover" href="/cliente/login/formulario">Já possuo cadastro</a>
    </div>
  </div>
</div>
</body>
</html>