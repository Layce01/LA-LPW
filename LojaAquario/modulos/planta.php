<html>
<head>
    <h1>Plantas</h1>
</head>
<body>
    
    <p ALIGN=”RIGHT”>Aqui será exibido as espécies de plantas disponíveis para a venda.</p>
    
    <h3>Lista</h3>
    
        <table TABLE BORDER = 1>
            <tr>
            <th>Planta</th>
            <th>PH</th>
            <th>Preço</th>
            <th>Quantidade</th>
            <th>Dificuldade</th>
            </tr>

            <tr TD ALIGN = "CENTER">
                <td>Cabomba</td>
                <td>6.0 - 7.5</td>
                <td>5,00</td>
                <td>5</td>
                <td>Fácil</td>
                </tr>

            <tr TD ALIGN = "CENTER">
                <td>Elódea</td>
                <td>6.0 - 7.5</td>
                <td>3,00</td>
                <td>7</td>
                <td>Fácil</td>
                </tr>

            <tr TD ALIGN = "CENTER">
                <td>Corymbosa</td>
                <td>6.0 - 7.5</td>
                <td>6,00</td>
                <td>12</td>
                <td>Fácil</td>
                </tr>

            <tr TD ALIGN = "CENTER">
                <td>Riccia</td>
                <td>6.0 - 8.0</td>
                <td>17,00</td>
                <td>1</td>
                <td>Média</td>
                </tr>

            <tr TD ALIGN = "CENTER">
                <td>Musgo de Java</td>
                <td>6.0 - 8.0</td>
                <td>3,00</td>
                <td>4</td>
                <td>Fácil</td>
                </tr>

        </table>
    
    <h3>Formulário</h3>
    <form>
        <label for="planta">Planta:</label><br>
        <input type="text" id="planta" name="planta"><br>

        <label for="phPlanta">PH indicado:</label><br>
        <input type="text" id="phPlanta" name="phPlanta"><br>

        <label for="precoPlanta">Preço:</label><br>
        <input type="text" id="precoPlanta" name="precoPlanta"><br>

        <label for="quantidadePlanta">Quantidade:</label><br>
        <input type="text" id="quantidadePlanta" name="quantidadePlanta"><br>

        <label for="dificuldade">Dificuldade:</label><br>
        <select name = "dificuldade">
            <option value = “facil”>Fácil </option>
            <option value = “media” >Média </option>
            <option value = “dificil”>Difícil </option>
        </select>

      </form>
</body>
</html>
