<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" href="/css/global.css">
    <link rel="stylesheet" href="/css/perfilUser.css">
</head>

<body>
    <header>
        <nav>
            <a href="/">Tela Inicial</a>
            <a href="/cliente/sair">Sair</a>
        </nav>
        <section>
            <img id="logo" src="/imgs/LOGO.svg" alt="" srcset="">
        </section>
    </header>
    <main>
        <section id="perfil">
            <?php 
                $nome = session()->get('cliente')->nome;
                $id = session()->get('cliente')->id;
            ?>
            <img src="https://api.dicebear.com/5.x/thumbs/svg?seed=<?= $id ?>" alt="avatar" />
            <div id="caracteristicas">
                <h2>{{$nome}}</h2>
                @if ($nome == 'Funcionario')
                <p>Funcionario</p>
                @else 
                <p>Cliente</p>
                @endif
            </div>
        </section>
        <div id="opcions">
            <section class="areas">
                @if ($nome != 'Funcionario')
                    <a href="/cliente/compras"><img id="compras" src="/imgs/shopping-bag.svg" alt="" srcset="">
                    <a href="/cliente/compras">Carrinho de Compras</a></a>
                @else 
                    <a href="/cliente/addProdutos"><img id="add" src="/imgs/plus.svg" alt="" srcset="">
                    <a href="/cliente/compras">Adicionar Produto</a></a>
                @endif               

            </section>
            <section class="areas">
                <img id="doe" src="/imgs/doe.png" alt="" srcset="">
                <a href="/cliente/doacoes">Área de Doação</a>
            </section>
        </div>
    </main>
</body>

</html>