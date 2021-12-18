<?php

require_once 'backend/connection.php';
require_once 'backend/Products.php';

$products = new Products();
$res=$products->Index();
?>


<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<table>
    <thead>
    <tr>
        <th>ID Товара</th>
        <th>Название</th>
        <th>Цена</th>
        <th>Актикул</th>
        <th>Количество</th>
        <th>Дата создания</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    <?php

    foreach ($res as $row)
    {
        ?>
        <tr>
            <td class="product-id"><?php echo $row['PRODUCT_ID']; ?></td>
            <td><?php echo $row['PRODUCT_NAME']; ?></td>
            <td><?php echo $row['PRODUCT_PRICE']; ?></td>
            <td class><?php echo $row['PRODUCT_ARTICLE']; ?></td>
            <td class="quantity" >
                <span id="<?php echo $row['PRODUCT_ID']; ?>"><?php echo $row['PRODUCT_QUANTITY']; ?></span>
                <button class="add">+</button>
                <button class="del">-</button>
            </td>
            <td><?php echo $row['DATE_CREATE']; ?></td>
            <td><button class="to-hide" id="<?php echo $row['PRODUCT_ID']; ?>">Скрыть</button></td>
        </tr>
        <?
    }
    ?>
    </tbody>
</table>


<script src="script.js"></script>
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>-->
</body>


