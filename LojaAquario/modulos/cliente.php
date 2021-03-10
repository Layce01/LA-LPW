<html>
<head>
    <h1>Clientes</h1>
</head>
<body>
    
    <p ALIGN=”RIGHT”>Aqui será exibido todos os clientes da loja.</p>
    
    <h3>Lista</h3>
    
        <table TABLE BORDER = 1>
            <tr>
            <th>Nome</th>
            <th>Contato</th>
            </tr>

            <tr TD ALIGN = "CENTER">
                <td>Isabel Abreu Meireles</td>
                <td>(96) 99544-3853</td>
                
                </tr>

            <tr TD ALIGN = "CENTER">
                <td>Suzana Eanes Prates</td>
                <td>(96) 94237-0814</td>
                
                </tr>

            <tr TD ALIGN = "CENTER">
                <td>Aldemir da Mota Carreira</td>
                <td>(96) 92795-6723</td>
               
                </tr>

            <tr TD ALIGN = "CENTER">
                <td>Selma Guedes Carrasco da Silva</td>
                <td>(96) 92225-8474</td>
               
                </tr>

            <tr TD ALIGN = "CENTER">
                <td>Fernando de Mascarenhas Coelho</td>
                <td>(96) 96362-2305</td>
               
                </tr>

        </table>
    
    <h3>Formulário</h3>
    <form name="formCliente" method="POST" action="">
        <label for="nomeCliente">Nome:</label><br>
        <input type="text" id="nomeCliente" name="nomeCliente"><br>

        <label for="contatoCliente">Contato:</label><br>
        <input type="text" id="contatoCliente" name="contatoCliente"><br>

        <input type=submit value="Enviar">

      </form>
    
     
      
</body>
</html>
 <?php
        echo "Nome do cliente: " . $_POST["nomeCliente"];
        echo "<br>Contato do cliente: " . $_POST["contatoCliente"];
     ?>
