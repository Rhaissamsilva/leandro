<!DOCTYPE html>
<?php
    // recebendo variaveis do formulário formulario_cliente
	$nome=$_POST["nome"]; 
    $email=$_POST["email"];
    $telefone=$_POST["telefone"];
    $data_nascimento=$_POST["data_nascimento"];
    $genero=$_POST["genero"];
    $endereco=$_POST["endereco"];
    $cidade=$_POST["cidade"];
    $estado=$_POST["estado"];
    $cep=$_POST["cep"];
    $observacoes=$_POST["observacoes"];

?>

<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/style.compra.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toque de Cor - Formulário de Compra</title>
    
</head>
<body>
    <header>
        <div class="container">
            <h1>Toque de Cor - Formulário de Compra</h1>
        </div>
    </header>
    <div class="container content">
        <h2>Formulário de Compra</h2>
            <form action="fpagto.php" method="post">
                <! recebendo dados etapa 1>
                <input type="hidden" name="nome" value="<?php echo $nome;?>">
                <input type="hidden" name="email" value="<?php echo $emal;?>">
                <input type="hidden" name="telefone" value="<?php echo $telefone;?>">
                <input type="hidden" name="data_nascimento" value="<?php echo $data_nascimento;?>">
                <input type="hidden" name="genero" value="<?php echo $genero;?>">
                <input type="hidden" name="endereco" value="<?php echo $endereco;?>">
                <input type="hidden" name="cidade" value="<?php echo $cidade;?>">
                <input type="hidden" name="estado" value="<?php echo $estado;?>">
                <input type="hidden" name="cep" value="<?php echo $cep;?>">
                <input type="hidden" name="observacoes" value="<?php echo $observacoes;?>">
                

            <!-- Dados do Pedido -->
            <fieldset>
                <legend>Dados do Pedido</legend>

                <select name="prod1">
                    <option value="1">Só vim pela comida - Dailus   -   Preço R$ 4,89</option>
                    <option value="2">Partiu balada - Vult          -   Preço R$ 3,90</option>
                    <option value="3">Léo mandou flores - Risqué    -   Preço R$ 3,19</option>
                    <option value="4">Aventura na Selva - Impala    -   Preço R$ 4,69</option>
                </select>
                <fieldset>
                <legend>Escolha a Quantidade</legend>
                    <p>Selecione a quantidade desejada:</p>
                <select name="qtd1" >
                    <option value="1" > 1 </option>
                    <option value="2" > 2 </option>
                    <option value="3" > 3 </option>
                    <option value="4" > 4 </option>             
                </select>
                </fieldset>
                 <select name="prod2">
                    <option value="1">Só vim pela comida - Dailus   -   Preço R$ 4</option>
                    <option value="2">Partiu balada - Vult          -   Preço R$ 3</option>
                    <option value="3">Léo mandou flores - Risqué    -   Preço R$ 3</option>
                    <option value="4">Aventura na Selva - Impala    -   Preço R$ 4</option>
                </select>
                <fieldset>
                    <legend>Escolha a Quantidade</legend>
                    <p>Selecione a quantidade desejada:</p>
                <select name="qtd2" >
                    <option value="1" > 1 </option>
                    <option value="2" > 2 </option>
                    <option value="3" > 3 </option>
                    <option value="4" > 4 </option>             
                </select>
                </fieldset>
                <br></br>
                <fieldset>
                    <legend>Escolha de Acessório:</legend>
                    <input type="checkbox" name="prod3" value="1" /> Algodão      -   R$ 10 <br/>
                    <input type="checkbox" name="prod4" value="1" /> Acetona      -   R$ 12 <br/>
                    <input type="checkbox" name="prod5" value="1" /> Lixa         -   R$ 3 <br/>
                    <input type="checkbox" name="prod6" value="1" /> Espátula     -   R$ 2 <br/>
                </fieldset>
                 <br/><br/>

            <button type="submit">Próxima</button>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <button type="reset">Apagar Pedido</button>
        </form>
    </div>
</body>
</html>
