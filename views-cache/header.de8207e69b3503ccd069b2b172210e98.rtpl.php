<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html>
    <head lang="PT-BR">
        <title>Suporte Técnico de Informática</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


        <link rel="stylesheet" href="../res/bootstrap4/css/bootstrap.min.css" crossorigin="anonymous">

        <link rel="stylesheet" href="estilo/estilo.css"/>


        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="/res/admin/dist/css/AdminLTE.min.css">
        <link rel="stylesheet" href="/res/admin/plugins/iCheck/square/blue.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    </head>
    <body>
        <div class="container-fluid">
            
            <header id="cabecalho">
                
                <nav class="navbar navbar-expand-lg navbar-dark mt-1 bg-menu">
                    
                    <a><img class="navbar-brand css-logo" src="imagens/logo.png"></a>
                    <a class="navbar-brand "><h1><span class="titulo-nome2">&nbsp;Suporte técnico</span></h1></a>
                    
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="lista-menu">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    
                    <div class="collapse navbar-collapse" id="lista-menu">
                        
                        <ul class="navbar-nav ml-auto lista">
                            <button type="button" class="btn btn-sm btn-primary">
                            <li class="nav-item"><a class="nav-link active" href="/">INICIO</a></li>
                            </button>
                            <button type="button" class="btn btn-sm btn-primary">
                            <li class="nav-item"><a class="nav-link active" href="/cadastrar">CADASTRAR</a></li>
                            </button>
                            <button type="button" class="btn btn-sm btn-primary">
                            <li class="nav-item"><a class="nav-link active" href="/login-user">LOGIN</a></li>
                            </button>
                            <button type="button" class="btn btn-sm btn-primary">
                            <li class="nav-item"><a class="nav-link active" href="/login">SUPORTE</a></li>
                            </button>
                        </ul>
                        
                    </div>
                    
                    <form class="form-inline">
                        <input class="form-control mr-sm-2 ml-2" type="search" placeholder="Pesquisar" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><img src="imagens/lupa.png" id="lupa"></button>
                    </form>
                    
                </nav>
                
            </header>
