<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Produtos</title>
    </head>
    <body>
    <header>
        <!--    Made by Erik Terwan    -->
        <!--   24th of November 2015   -->
        <!--        MIT License        -->
        <nav role="navigation">
        <div id="menuToggle">
            <!--
            A fake / hidden checkbox is used as click reciever,
            so you can use the :checked selector on it.
            -->
            <input type="checkbox" />
        
            <!--
            Some spans to act as a hamburger.
        
            They are acting like a real hamburger,
            not that McDonalds stuff.
            -->
            <span></span>
            <span></span>
            <span></span>
        
            <!--
            Too bad the menu has to be inside of the button
            but hey, it's pure CSS magic.
            -->
            <ul id="menu">
            <a href="#"><li>Home</li></a>
            <a href="#"><li>About</li></a>
            <a href="#"><li>Info</li></a>
            <a href="#"><li>Contact</li></a>
            <a href="https://erikterwan.com/" target="_blank"><li>Show me more</li></a>
            </ul>
        </div>
        </nav>
    </header>
    <main>
        
    </main>
        <h1>Produtos</h1>

        <form action="/editar-produto/{{ $produto-> id }}" method="POST">
            @csrf
            <label for="lblNome">Nome:</label>
            <input type="text" name="nome" value="{{ $produto->nome }}">
            <br><br>
            <label for="lblValor">Valor:</label>
            <input type="text" name="valor" value="{{ $produto->valor }}">
            <br><br>
            <label for="lblQuantidade">Quantidade:</label>
            <input type="text" name="estoque" value="{{ $produto->estoque }}">
            <br><br>
            <button>Cadastrar</button>
        </form>
    </body>
</html>
