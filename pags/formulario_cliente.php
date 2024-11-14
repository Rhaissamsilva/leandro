<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <form action="../processo_cliente.php" method="post"></form>
    <title>Toque de Cor - Cadastro de Compras</title>
   
</head>
<body>
    <header>
        <div class="container">
            <h1>Toque de Cor - Cadastro de Compras</h1>
        </div>
    </header>
    <div class="container content">
        <h2>Cadastro de Compras</h2>
        <form action="../pags/formulario_compra.php" method="post">
            
    
            <fieldset>
                <legend>Dados Pessoais</legend>
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" required>

                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" required>

                <label for="telefone">Telefone:</label>
                <input type="text" id="telefone" name="telefone" required>

                <label for="data_nascimento">Data de Nascimento:</label>
                <input type="date" id="data_nascimento" name="data_nascimento" >

                <label for="genero">Gênero:</label>
                <select id="genero" name="genero" >
                    <option value="">Selecione</option>
                    <option value="M">Masculino</option>
                    <option value="F">Feminino</option>
                    <option value="O">Outro</option>
                </select>
            </fieldset>

            <!-- Dados de Endereço -->
            <fieldset>
                <legend>Endereço</legend>
                <label for="endereco">Endereço:</label>
                <input type="text" id="endereco" name="endereco">

                <label for="cidade">Cidade:</label>
                <input type="text" id="cidade" name="cidade" >

                <label for="estado">Estado:</label>
                <select id="estado" name="estado" >
                    <option value="">Selecione o Estado</option>
                            <option value="AC">Acre</option>
                            <option value="AL">Alagoas</option>
                            <option value="AP">Amapá</option>
                            <option value="AM">Amazonas</option>
                            <option value="BA">Bahia</option>
                            <option value="CE">Ceará</option>
                            <option value="DF">Distrito Federal</option>
                            <option value="ES">Espírito Santo</option>
                            <option value="GO">Goiás</option>
                            <option value="MA">Maranhão</option>
                            <option value="MT">Mato Grosso</option>
                            <option value="MS">Mato Grosso do Sul</option>
                            <option value="MG">Minas Gerais</option>
                            <option value="PA">Pará</option>
                            <option value="PB">Paraíba</option>
                            <option value="PR">Paraná</option>
                            <option value="PE">Pernambuco</option>
                            <option value="PI">Piauí</option>
                            <option value="RJ">Rio de Janeiro</option>
                            <option value="RN">Rio Grande do Norte</option>
                            <option value="RS">Rio Grande do Sul</option>
                            <option value="RO">Rondônia</option>
                            <option value="RR">Roraima</option>
                            <option value="SC">Santa Catarina</option>
                            <option value="SP" selected>São Paulo</option>
                            <option value="SE">Sergipe</option>
                            <option value="TO">Tocantins</option>
                    <!-- Adicione outros estados conforme necessário -->
                </select>

                <label for="cep">CEP:</label>
                <input type="text" id="cep" name="cep" required>
            </fieldset>

            <!-- Dados Adicionais -->
            <fieldset>
                <legend>Informações Adicionais</legend>
                <textarea id="observacoes" name="observacoes"></textarea>
            </fieldset>

            <div class="form button">
            <button type="submit">Próximo</button>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <button type="reset">Apagar Pedido</button>
</div>
        </form>
    </div>
</body>
</html>
