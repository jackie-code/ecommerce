<?php
include "dbconnect.php";

$sql = "
SELECT inventory.sku, title, in_cart, unit_price, ROUND(in_cart * unit_price, 2) AS subtotal
FROM inventory
JOIN cart ON inventory.sku = cart.sku";


$cart = $db->query($sql);
?>

<table border>
    <tr>
        <th>Title</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Subtotal</th>

    </tr>
    <?php
    $total = 0;
    while ($row = $cart->fetch(PDO::FETCH_ASSOC)) {
        $total += $row['subtotal'];

        ?>
    <tr>

        <td><?= $row['title']?></td>
        <td><?= $row['in_cart']?></td>
        <td>$<?= ROUND($row['unit_price'], 2)?></td>
        <td><?= $row['subtotal']?></td>

    </tr>
    
    <?php
}
    ?>
<tr>
    <td colspan= "3"> Total </td>
    
    <td><?= $total ?> </td>
</tr>

</table>


