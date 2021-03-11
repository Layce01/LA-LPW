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
            <th>pH</th>
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
    <form name="formPeixe" method="POST" action="">
        <label for="peixe">Peixe:</label><br>
        <input type="text" id="peixe" name="peixe"><br>

        <label for="phPeixe">pH indicado:</label><br>
        <input type="text" id="phPeixe" name="phPeixe"><br>

        <label for="precoPeixe">Preço:</label><br>
        <input type="text" id="precoPeixe" name="precoPeixe"><br>

        <label for="quantidadePeixe">Quantidade:</label><br>
        <input type="text" id="quantidadePeixe" name="quantidadePeixe"><br>

        <label for="litragem">Litragem indicada:</label><br>
        <input type="text" id="litragem" name="litragem"><br>

        <input type=submit value="Enviar">

      </form>

      <?php
        echo "Peixe: " . $_POST["peixe"];
        echo "<br>pH indicado: " . $_POST["phPeixe"];
        echo "<br>Preço: " . $_POST["precoPeixe"];
        echo "<br>Quantidade: " . $_POST["quantidadePeixe"];
        echo "<br>Litragem indicada: " . $_POST["litragem"];


        $peixes = array();

        $peixes[] = array("peixe" => "Neon", "phPeixe" => 6.8, "preco" => 2.0, "quantidade" => 5, "litragem" => 30);
        $peixes[] = array("peixe" => "Guppy", "phPeixe" => 7.2, "preco" => 1.5, "quantidade" => 7, "litragem" => 30);
        $peixes[] = array("peixe" => "Curviceps", "phPeixe" => 6.4, "preco" => 15.0, "quantidade" => 3, "litragem" => 63);

            
        echo "<pre>";
        print_r($peixes);
        echo "</pre>";
     ?>



        <?php
            foreach($peixes as $peixe){    
        ?>
        <tr> 
            <td><?php echo $peixe['peixe'];?></td>
            <td><?php echo $peixe['phPeixe'];?></td>
            <td><?php echo $peixe['preco'];?></td>
            <td><?php echo $peixe['quantidade'];?></td>
            <td><?php echo $peixe['litragem'];?></td>
        </tr>
        <?php
        }
        ?>

</body>
</html>
