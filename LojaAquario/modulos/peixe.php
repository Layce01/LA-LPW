<html>
<head>
    <h1>Peixes</h1>
</head>
<body>
    
    <p ALIGN=”RIGHT”>Aqui será exibido as espécies de peixes disponíveis para a venda.</p>
    
    <h3>Lista</h3>
    
        <table TABLE BORDER = 1>
            <tr>
            <th>Peixe</th>
            <th>PH</th>
            <th>Preço</th>
            <th>Quantidade</th>
            <th>Litragem indicada</th>
            </tr>

            <tr TD ALIGN = "CENTER">
                <td>Neon</td>
                <td>6.8</td>
                <td>2,00</td>
                <td>5</td>
                <td>30 L</td>
                </tr>

            <tr TD ALIGN = "CENTER">
                <td>Guppy</td>
                <td>7.2</td>
                <td>1,50</td>
                <td>7</td>
                <td>30 L</td>
                </tr>

            <tr TD ALIGN = "CENTER">
                <td>Platy</td>
                <td>7.2</td>
                <td>1,50</td>
                <td>15</td>
                <td>96 L</td>
                </tr>

            <tr TD ALIGN = "CENTER">
                <td>Molinésia</td>
                <td>7.5</td>
                <td>2,50</td>
                <td>3</td>
                <td>96 L</td>
                </tr>

            <tr TD ALIGN = "CENTER">
                <td>Otocinclus</td>
                <td>7.0</td>
                <td>5,00</td>
                <td>6</td>
                <td>40 L</td>
                </tr>

        </table>
    
    <h3>Formulário</h3>
    <form>
        <label for="peixe">Peixe:</label><br>
        <input type="text" id="peixe" name="peixe"><br>

        <label for="phPeixe">PH indicado:</label><br>
        <input type="text" id="phPeixe" name="phPeixe"><br>

        <label for="precoPeixe">Preço:</label><br>
        <input type="text" id="precoPeixe" name="precoPeixe"><br>

        <label for="quantidadePeixe">Quantidade:</label><br>
        <input type="text" id="quantidadePeixe" name="quantidadePeixe"><br>

        <label for="litragem">Litragem indicada:</label><br>
        <input type="text" id="litragem" name="litragem"><br>

      </form>
</body>
</html>
