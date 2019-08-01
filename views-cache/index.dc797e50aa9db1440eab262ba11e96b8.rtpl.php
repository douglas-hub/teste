<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html>
    <head lang="PT-BR">
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="estilo/estilo.css"/>
    </head>
    <body>
        <div class="container-fluid">
            
            <header id="cabecalho">
                
                <nav class="navbar navbar-expand-lg navbar-dark mt-1 bg-menu">
                    
                    <a><img class="navbar-brand css-logo" src="imagens/logo.png"></a>
                    <a class="navbar-brand "><h1 class="titulo-nome">Lojas<span class="titulo-nome2">&nbsp;Eletro e Cia</span></h1></a>
                    
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="lista-menu">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    
                    <div class="collapse navbar-collapse" id="lista-menu">
                        
                        <ul class="navbar-nav ml-auto lista">
                            <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="">Cadastrar</a></li>
                            <li class="nav-item"><a class="nav-link" href="">Produtos</a></li>
                            <li class="nav-item"><a class="nav-link" href="">Sobre</a></li>
                        </ul>
                        
                    </div>
                    
                    <form class="form-inline">
                        <input class="form-control mr-sm-2 ml-2" type="search" placeholder="Pesquisar" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><img src="imagens/lupa.png" id="lupa"></button>
                    </form>
                    
                </nav>
                
            </header>
            
        </div>
    </body>
</html>
