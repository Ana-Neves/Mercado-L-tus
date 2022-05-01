<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../css/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cliente</title>
</head>

<body>
    <Header class="topo">
        <h2>Mercado Lótus</h2>
    </Header>

    <main>
        <section>
            <form action="../controller/cliente.controller.php" method="post">
                <fieldset class="conteudo">
                    <legend>Finalizando Compra</legend>
                    <table class="tabela">
                        <div>
                            <p>Nome: </p><label><input class="button" type="text" name="nome" placeholder="Brenda Neves" required></label>
                        </div>
                        <div>
                            <p>Telefone para contato: </p><label for="fone"><input class="button" type="tel" name="txtfone" required pattern="[0-9]{2} [0-9]{5}-[0-9]{4}" placeholder="51 99999-9999"></label>
                        </div>
                        <div>
                            <p>Endereço de entrega: </p>
                            <select name="endereco">
                                <option value="Porto Alegre">Porto Alegre</option>
                                <option value="Pelotas">Pelotas</option>
                                <option value="Santa Maria">Santa Maria</option>
                                <option value="Canoas">Canoas</option>
                                <option value="Uruguaiana">Uruguaiana</option>
                                <option value="Ijuí">Ijuí</option>
                                <option value="Passo Fundo">Passo Fundo</option>
                                <option value="Caxias do Sul">Caxias do Sul</option>
                                <option value="Santa Cruz do Sul–Lajeado">Santa Cruz do Sul–Lajeado</option>
                            </select>
<br><br>
                            <select name="pagamento">
                                <option value="Dinheiro">Dinheiro</option>
                                <option value="Carão de Crédito">Cartão de Crédito</option>
                                <option value="Cartão Debito">Cartão Debito</option>
                                
                            </select>
                        </div>
                        <br>
                        <button type="submit" class="botaoConfirmar">Avançar Compra</button>
                        <button type="reset" class="botaoResetar">Resetar Compra</button>
                    </table>
                </fieldset>
            </form>
        </section>
<br><br>
        <section class="conteudo-cliente">
            <h2>Compras</h2>
            <?php
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
        </section>
    </main>



</body>

</html>