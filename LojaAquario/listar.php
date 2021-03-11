<html>

<body>

<?php
    $produtos = array();

    $produtos[] = array("id" => 1, "descricao" => "Coca-cola","preco" => 8.0, "quantidade" => 22);
    $produtos[] = array("id" => 2, "descricao" => "Micos",    "preco" => 8.0, "quantidade" => 2); 
    $produtos[] = array("id" => 3, "descricao" => "Sal",      "preco" => 8.0, "quantidade" => 209); 

    echo "<pre>";
    print_r($produtos);
    echo "</pre>";

?>

<table TABLE BORDER = 1>

<tr>
    <th>id</th>
    <th>descricao</th>
    <th>preco</th>
    <th>quantidade</th>
</tr>
<tr>
    <td>coca</td>
    <td>morte</td>
    <td>7,00</td>
    <td>6</td>
</tr>

<?php
    foreach($produtos as $produto){    
?>
<tr> 
    <td><?php echo $produto['id'];?></td>
    <td><?php echo $produto['descricao'];?></td>
    <td><?php echo $produto['preco'];?></td>
    <td><?php echo $produto['quantidade'];?></td>
</tr>
<?php
}
?>


</table>


</body>

</html>