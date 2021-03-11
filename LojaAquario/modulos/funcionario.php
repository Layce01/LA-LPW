<html>
<head>
    <h1>Funcionários</h1>
</head>
<body>
    
    <p ALIGN=”RIGHT”>Aqui será exibido todos os funcionários da loja.</p>
    
    <h3>Lista</h3>
    
        <table TABLE BORDER = 1>
            <tr>
            <th>Nome</th>
            <th>Função</th>
            <th>Salário</th>
            <th>Contato</th>
            </tr>

            <tr TD ALIGN = "CENTER">
                <td>Thiago Caiado Bento</td>
                <td>Vendedor</td>
                <td>2400,00</td>
                <td>(96) 95773-6237</td>
                
                </tr>

            <tr TD ALIGN = "CENTER">
                <td>Suzana Eanes Prates</td>
                <td>Vendedor</td>
                <td>2400,00</td>
                <td>(96) 94237-0814</td>
                
                </tr>

            <tr TD ALIGN = "CENTER">
                <td>Taíssa Faia Martinho</td>
                <td>Vendedor</td>
                <td>2400,00</td>
                <td>(96) 94944-9345</td>
               
                </tr>

            <tr TD ALIGN = "CENTER">
                <td>Jonata Castilhos Silva</td>
                <td>Vendedor</td>
                <td>2400,00</td>
                <td>(96) 96631-7620</td>
               
                </tr>

            <tr TD ALIGN = "CENTER">
                <td>Victor Mateus Murilo Alves</td>
                <td>Vendedor</td>
                <td>2400,00</td>
                <td>(96) 93252-4244</td>
               
                </tr>

        </table>
    
    <h3>Formulário</h3>
    <form name="formFuncionario" method="POST" action="">
        <label for="nomeFuncionario">Nome:</label><br>
        <input type="text" id="nomeFuncionario" name="nomeFuncionario"><br>

        <label for="funcao">Função:</label><br>
        <input type="text" id="funcao" name="funcao"><br>

        <label for="salario">Salario:</label><br>
        <input type="text" id="salario" name="salario"><br>

        <label for="contatoFuncionario">Contato:</label><br>
        <input type="text" id="contatoFuncionario" name="contatoFuncionario"><br>
        
        <input type=submit value="Enviar">

      </form>
      <?php
        echo "Nome: " . $_POST["nomeFuncionario"];
        echo "<br>Função: " . $_POST["funcao"];
        echo "<br>Salario: " . $_POST["salario"];
        echo "<br>Contato: " . $_POST["contatoFuncionario"];
    
    $funcionario = array();

    $produto[] = array("Nome" => "Thiago Caiado Bento", "Função" => "Vendedor", "Salario" => 2400.0, "Contato" => "(96) 95773-6237");
    $produto[] = array("Nome" => "Suzana Eanes Prates", "Função" => "Vendedor", "Salario" => 2400.0, "Contato" => "(96) 94237-0814");
    $produto[] = array("Nome" => "Taíssa Faia Martinho", "Função" => "Vendedor", "Salario" => 2400.0, "Contato" => "(96) 94944-9345");
        
    echo "<pre>";
    print_r($funcionario);
    echo "</pre>";

    ?>
</body>
</html>
