<table>
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Description</td>
        <td>Category Id</td>
        <td>Price</td>
    </tr>
    <?php

    $db = mysqli_connect('localhost', 'root', 'yota2016-D', 'hw-db');

    $products = mysqli_query($db, 'SELECT * FROM `products`');
    $products = mysqli_fetch_all($products);

    foreach ($products as $product) {
        ?>
        <tr>
            <td><?= $product[0] ?></td>
            <td><?= $product[1] ?></td>
            <td><?= $product[2] ?></td>
            <td><?= $product[3] ?></td>
            <td><?= $product[4] ?></td>
        </tr>
        <?php
    }
    ?>
</table>
<br>
<a href="products-form.html">Add new product?</a>
