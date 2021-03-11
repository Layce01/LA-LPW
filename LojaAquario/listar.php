<html>

<body>

<?php
    $produtos = array();

    $produtos[] = array("id" => 1, "descricao" => "Coca-cola","preco" => 8.0, "quantidade" => 22);
    $produtos[] = array("id" => 1, "descricao" => "Micos",    "preco" => 8.0, "quantidade" => 2); 
    $produtos[] = array("id" => 1, "descricao" => "Sal",      "preco" => 8.0, "quantidade" => 209); 

    echo "<pre>";
    print_r($produtos);
    echo "</pre>";

?>

<table TABLE BORDER = 1>

<tr>
    <th>ID</th>
    <th>descricao</th>
    <th>preco</th>
    <th>qtde</th>
</tr>
<tr>
    <td>coca</td>
    <td>morte</td>
    <td>7,00</td>
    <td>6</td>
</tr>

</table>


</body>

</html>