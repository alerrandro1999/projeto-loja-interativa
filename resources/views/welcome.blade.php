<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/css/app.css">
</head>

<body class="antialiased">

</body>
    <section class="cadastro-produtos">
        <div class="fabricante-categoria">
            <form name="form-fabricante-categoria" method="POST" action="">
            @csrf
                <h1 class="titulo-fabricante-categoria">FABRICANTE E CATEGORIA </h1>
                <label for="nome-fabricante">FABRICANTE</label>
                <input type="text" name="nome-fabricante" id="nome-fabricante" class="inputs-forms" placeholder="Digite o nome do fabricante">

                <label class="categoria-label" for="">CATEGORIA</label>
                <input type="text" name="categoria-1" class="inputs-forms" placeholder="Digite o nome da categoria 1">
                <input type="text" name="categoria-2" class="inputs-forms" placeholder="Digite o nome da categoria 2">
                <input type="text" name="categoria-3" class="inputs-forms" placeholder="Digite o nome da categoria 3">
                <button type="submit" name="btn-adicionar-categoria" class="btn-adicionar" >Adicionar</button>
            </form>
        </div>
        <div class="produtos">
            <form name="form-fabricante-categoria" method="POST" action="">
                @csrf
                    <h1 class="titulo-produto">PRODUTOS</h1>

                    <label for="nome-fabricante">NOME DO PRODUTO</label>
                    <input type="text" name="nome-fabricante" id="nome-fabricante" class="inputs-forms" placeholder="Digite o nome do produto">
    
                    <label for="">FABRICANTE</label>
                    <select name="" id="">
                        <option value="" selected >Selecione o fabricante</option>
                    </select>

                    <label for="">CATEGORIA</label>
                    <select name="" id="">Selecione a categoria
                        <option value="" selected >Selecione o fabricante</option>
                    </select>

                    <label for="">PREÇO</label>
                    <input type="text" name="categoria-3" class="inputs-forms" placeholder="Digite o preço">

                    <button type="submit" name="btn-adicionar-produto" class="btn-adicionar" >Adicionar</button>
                </form>
        </div>
    </section>
</html>
