<html>
<head>
    <h1>Produtos</h1>
</head>
<body>
    
    <p ALIGN=”RIGHT”>Aqui será exibido os produtos disponíveis para a venda.</p>

    
    
    <h3>Lista</h3>
    
        <table TABLE BORDER = 1>
            <tr>
            <th>Nome</th>
            <th>Preço</th>
            <th>Quantidade</th>
            
            </tr>

            <tr TD ALIGN = "CENTER">
                <td>Teste de PH</td>
                <td>15,00</td>
                <td>2</td>
                </tr>

            <tr TD ALIGN = "CENTER">
                <td>Condicionador de água</td>
                <td>25,00</td>
                <td>5</td>
                </tr>
            
            <tr TD ALIGN = "CENTER">
                <td>Filtro</td>
                <td>120,00</td>
                <td>3</td>
                </tr>
           
            <tr TD ALIGN = "CENTER">
                <td>Rocha</td>
                <td>5,00</td>
                <td>16</td>
                </tr>

            <tr TD ALIGN = "CENTER">
                <td>Areia</td>
                <td>10,00</td>
                <td>6</td>
                </tr>
            

        </table>
    
    <h3>Formulário</h3>
    <form name="formProduto" method="POST" action="">
        <label for="nomeProduto">Nome:</label><br>
        <input type="text" id="nomeProduto" name="nomeProduto"><br>

        <label for="precoProduto">Preço:</label><br>
        <input type="text" id="precoProduto" name="precoProduto"><br>

        <label for="quantidadeProduto">Quantidade:</label><br>
        <input type="text" id="quantidadeProduto" name="quantidadeProduto"><br>

        <input type=submit value="Enviar">

      </form>
    
      <?php
        echo "Produto: " . $_POST["nomeProduto"];
        echo "<br>Preço: " . $_POST["precoProduto"];
        echo "<br>Quantidade: " . $_POST["quantidadeProduto"];
    
    $produto = array();

    $produto[] = array("Nome" => "Teste de pH", "Preço" => 15.0, "Quantidade" => 2);
    $produto[] = array("Nome" => "Condicionador de água", "Preço" => 25.0, "Quantidade" => 5);
    $produto[] = array("Nome" => "Filtro", "Preço" => 120.0, "Quantidade" => 3);
    $produto[] = array("Nome" => "Rocha", "Preço" => 5.0, "Quantidade" => 16);
    $produto[] = array("Nome" => "Areia", "Preço" => 10.0, "Quantidade" => 6);
     

    echo "<pre>";
    print_r($produto);
    echo "</pre>";

    ?>
      
</body>
</html>
