<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../css/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compras</title>
</head>

<body>
    <Header class="topo">
        <h2>Mercado Lótus</h2>
    </Header>

    <main>
        <section>
            <form action="../controller/compras.controller.php" method="post">
                <fieldset class="conteudo">
                    <legend class="">
                        <h1>Faça suas compras aqui</h1>
                    </legend>
              
                        <h3 class="subtittle">Tipos de carnes disponiveis:</h3>
                        <select name="carnes" id="" class="alimentos">
                            <option name="guisado" value="Guisado">Guisado 23R$ por kg</option>
                            <option name="linguica" value="Linguiça">Linguiça 22R$ por kg</option>
                            <option name="galinha" value="Galinha">Galinha 20R$ por kg</option>
                        </select>
                        <label>Kilos:<input type="number" name="kilos" id="" placeholder="1" class="button" min="1" max="100"></label>
     

                    <h3>Tipos de doces disponiveis:</h3>
                    <select name="doces" id="" class="alimentos">
                        <option name="bolo" value="Bolo de Pote">Bolo de pote por 12,00R$</option>
                        <option name="chocolate" value="Barra de chocolate">Barra de Chocolate por 7,00R$</option>
                        <option name="pudim" value="Pudim">Pudim por 10,00R$ </option>
                    </select>
                    <label>Quantidade:<input type="number" name="quantidadeDoces" id="" placeholder="1" class="button" min="1" max="100"></label>

                    <h3>Tipos de itens higienicos:</h3>
                    <select name="itens" id="" class="alimentos">
                        <option name="escova" value="Escova de Dente">Esvoca de dentes por 7,00R$</option>
                        <option name="pasta" value="Pasta de Dente">Pasta de dente 5,00R$</option>
                        <option name="bucal" value="Enxaguante Bucal">Enxaguante Bucal por 10,00R$ </option>
                    </select> 
                    <label>Quantidade:<input type="number" name="quantidadeItens" id="" placeholder="1" class="button" min="1" max="100"></label>
<br>
                    <button type="submit" class="botaoConfirmar">Avançar Compra</button>
                    <button type="reset" class="botaoResetar">Resetar Compra</button>
                </fieldset>
            </form>
        </section>
    </main>


</body>

</html>