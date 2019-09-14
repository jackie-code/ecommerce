<?php
include_once "dbconnect.php"; 
$result = $db->query('SELECT * FROM `inventory` WHERE sku="' . $_GET['sku'] . '"');
$row = $result->fetch(PDO::FETCH_ASSOC);



if ( array_key_exists('quantity', $_GET)) {
$sql_to_do_an_insert = "INSERT INTO `cart` (`sku`, `in_cart`) VALUES ('"   . $_GET['sku'] .  "', '"  . $_GET['quantity'] . "')";
echo $sql_to_do_an_insert;
$db->query($sql_to_do_an_insert);  
}

//var_dump($row);

?>
<style>
    #firstone {
        border: solid 2px black;
    }
    #secondone {
        margin-bottom: 5px;
        margin-left: 20%;
        margin-right: 50%;
    }
</style>

<div id="firstone">
<h2><?= $row['title'] ?></h2>
<p>Awesome action adventure movie with high speed car chases</p>
<div id="secondone">
    <p>Price: <?= $row['unit_price'] ?> each</p>
    <p>How many?</p>
        <form>
        <input type="hidden" name="sku" value="<?=$_GET['sku'] ?>">
    <input type="number" name="quantity">
    <button type="submit">Add to Cart</button>
    </form>
</div>
</div>




