<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/global.css">
    <link rel="stylesheet" href="/css/addProduto.css">
    <title>Adicionar Produto</title>
    <script src="/js/previewImg.js" defer></script>
</head>
<body>
    <header>
        <nav>
            <a href="/">Tela Inicial</a>
            <a href="/cliente/perfil">Voltar</a>
        </nav>
        <section>
            <img id="logo" src="imgs/LOGO.svg" alt="" srcset="">
        </section>
    </header>
   <div id="container">
        <section id="add">
            <div id="caracteristicas">
                <h1>Adicionar produto</h1>
            </div>
            <form>
                <div>
                    <label class="picture" for="picture__input" tabIndex="0">
                    <span class="picture__image"></span>
                    </label>

                    <input type="file" name="picture__input" id="picture__input">
                </div>
                <div>
                    <input type="text" id="name" name="addproduto" placeholder="Nome do produto">
                    <input type="text" id="preço" class="fadeIn second" name="addproduto" placeholder="Preço em R$">
                    <textarea placeholder="Descrição do produto"></textarea> 
                    <div id= "botao">
                        <input type="submit" class="fadeIn fourth" value="Cadastrar produto">
                    </div>
                </div>
            </form>
        </section>
    </div>
    <section>
        <h2>Produtos adicionados</h2>
    </section>
</body>