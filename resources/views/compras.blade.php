<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compras</title>
    <link rel="stylesheet" href="/css/verProdu.css">
    <link rel="stylesheet" href="/css/global.css">
</head>
<body>
    <header>
        <nav>
            <img id="logo" src="/imgs/LOGO.svg" alt="" srcset="">
            <a href="/">Continuar Comprando</a>
        </nav>
    </header>
    <h1>Lista de compras</h1>

    <section>
        <div id="conteudo">
            <img src="/imgs/carrinho.png" alt="" srcset="">
            <p>SEU CARRINHO ESTÁ VAZIO</p>
            <p>Não perca tempo! Os produtos estão esperando por você</p>
        </div>
        <div id="buttons">
        @if (session()->has('cliente'))
            <button type="submit" id="continuar"><a href="/">Comprar Agora</a></button>
        @else
            <button type="submit" id="continuar"><a href="/">Comprar Agora</a></button>
            <button type="submit" id="entrar"><a href="/cliente/login/formulario">Entrar / Cadastrar-se</a></button>
        @endif
        </div>
    </section>
</body>
</html>