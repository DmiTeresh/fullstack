<?php
$title = 'Корзина';
require_once '../templates/header.php';

$basketProducts = $_SESSION['products'];
$productsIds = array_keys($basketProducts); 

# var_dump($productsIds);

# $query = "SELECT * FROM products WHERE id IN (1,2,3)";
$query = "SELECT * FROM products WHERE id IN (:ids)";
$res = $pdo->prepare($query);
$res->execute([
    ':ids' => implode(',', $productsIds)
]);


$products = $res->fetchAll();


# var_dump($products);

?>


<table class="table table-bordered mt-2">
    <tbody>
    <?php
    foreach ($products as $product) {
        $sum = round($basketProducts[$product['id']] * $product['price'], 2);
        echo 
        "
        <tr>
            <td>{$product['name']}</td>
            <td>{$product['price']}</td>
            <td>{$basketProducts[$product['id']]}</td>
            <td>{$sum}</td>
      
        </tr>
        ";
    }
    ?>

    </tbody>
</table>

    
