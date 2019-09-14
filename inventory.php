<style>
    td:nth-child(n+2) {
        text-align: right;
    }

</style>


<?php
include_once "dbconnect.php"; 


$result = $db->query('SELECT * FROM inventory');

?>
<table border>
    <tr>
        <th>Item</th>
        <th>Price</th>
        <th>How Many In Stock</th>

    </tr>
    <?php
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        ?>
    <tr>

        <td><a href="details.php?sku=<?= $row['sku'] ?>">
        <?= $row['title'] ?></a></td>
        
        <td>$<?= $row['unit_price'], 2?></td>
        
        <td><?= $row['in_stock'] ?></td>
    </tr>
    <?php
}
    ?>
</table>
