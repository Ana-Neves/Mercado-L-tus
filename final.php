<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../css/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <Header class="topo">
        <h2>Mercado Lótus</h2>
    </Header>

    <main>
        <section class="conteudo">
            <legend>
                <h1>Compra efetuada com sucesso</h1>
            </legend>

            <?php
            include '../model/cliente.class.php';

            //gerando numero aleatorio
            $numeros = range(1, 100);
            $letras = range("A", "Z");
            shuffle($numeros);
            shuffle($letras);

            //função de data
            date_default_timezone_set('America/Sao_Paulo');
    
            echo "<P>Olá sua compra foi concluida com sucesso na data de: ";
            echo date('d/m/Y   H:i:s');
            echo  "<br>Na sua proxima compra use esse codigo para ganhar desconto: " . $letras[0] . "" . $numeros[0] . $letras[1] . "" . $numeros[1] . $letras[2] . "" . $numeros[2];




            ?>

        </section>

</body>

</html>

<!--
            include '../model/compras.class.php';
            $tipoDeCarne = $_GET['tipoDeCarne'];
            $tipoDeDoce = $_GET['TipoDeDoce'];
            $tipoDeItemHigienico = $_GET['TipoDeItemHigienico'];
            $kilos = $_GET['kilos'];
            $quantidadeDoces = $_GET['quantidadeDoces'];
            $quantidadeItens = $_GET['quantidadeItens'];
            $valorCarnes = $_GET['valorCarnes'];
            $valorDoces = $_GET['valorDoces'];
            $valorItens = $_GET['valorItens'];
            $valorFinal = $_GET['valorFinal'];

            echo "<h4>Carne: $kilos kg de $tipoDeCarne no valor de $valorCarnes,00R$</h4> ";
            echo "<h4>Doce: $quantidadeDoces unidade(s) de $tipoDeDoce no valor de $valorDoces,00R$</h4> ";
            echo "<h4>Banheiro: $quantidadeItens unidade(S) de $tipoDeItemHigienico no valor de $valorItens,00R$</h4> ";
            echo "<h4>O valor total é: $valorFinal,00R$ </h4>";
            ?>
            -->