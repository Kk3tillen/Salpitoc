<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salpitoc</title>
    <link rel="stylesheet" href="{{asset('css/global.css')}}">
    <link rel="stylesheet" href="{{asset ('css/style.css')}}">
</head>

<body>
    <header>
        <div id="cima">
            <div>
                <a href="/"><img id="logo" src="imgs/LOGO.svg" alt="Salpitoc" srcset=""></a>
            </div>
            <div id="buscar" >
                <input type="search" name="" id="">
                <a href="#"><img id="icon-busca" src="imgs/search.svg" alt="" srcset=""></a>
            </div>
            <div id="user">
                <a href="#">Sobre</a>
            </div>
            <div id="user">
                @if (session()->has('cliente'))
                <a href="/cliente/perfil">perfil</a>
                @else 
                <a href="/cliente/login/formulario">Entrar|Cadastrar-se</a>
                @endif
                <img id="user-icon" src="imgs/user.svg" alt="" srcset="">
            </div>
            <div id="shop">
                <span>0</span>
                <a href="/cliente/compras"><img id="sacola-icon" src="imgs/shopping-bag.svg" alt=""></a>
            </div>
        </div>
        <nav>
            <ul>
                <li class="nav-item">
                  <a href="#"><img src="https://imagensemoldes.com.br/wp-content/uploads/2018/06/Futebol-Bola-de-Futebol-PNG.png"></a>
                  <h4>Bolas</h4>
                </li>
                <li class="nav-item">
                    <a href="#"><img src="https://www.angelsflypantufas.com.br/wp-content/uploads/2020/09/boneca-coracao-rosa-1.png" alt=""></a>
                    <h4>Bonecas</h4>
                </li>
                <li class="nav-item">
                    <a href="#"><img src="https://imageswscdn.wslojas.com.br/files/7103/bicicleta-infantil-aro-12-black-com-freio-tambor-e-rodas-de-treinamento-nathor-13420221810.png" alt="" srcset=""></a>
                    <h4>bicicletas</h4>
                </li>
                <li class="nav-item">
                    <a href="#"><img src="imgs/fusca.png" alt="" srcset=""></a>
                    <h4>Carrinhos</h4>
                </li>
                <li class="nav-item">
                    <a href="#"><img src="/imgs/Captura_de_tela_de_2023-02-05_21-03-15-removebg-preview.png" alt="" srcset=""></a>
                    <h4>Roupas Infantis</h4>
                </li>
                <li class="nav-item">
                    <a href="#"><img src="imgs/doe.png" alt="" srcset=""></a>
                    <h4>Area de Doação</h4>
                </li>
            </ul>
        </nav>
    </header>
    <section>
      <img src="imgs/imgdoe.svg" alt="" srcset="" >
      <h1></h1>
    </section>
</body>

</html>