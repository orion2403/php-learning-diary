<?php

?>

<form action="add_products.php" method="POST">
    <label for="product">Product name: </label><input type="text" name="product" id="product"
                                                      placeholder="Enter name"><br/>
    <label for="category">Product category</label><select name="category" id="category">
        <option value="Toys">Toys</option>
        <option value="Fruits">Fruits</option>
        <option value="Household goods">Household goods</option>
        <option value="Medicines">Medicines</option>
    </select><br/>
    <label for="price">Price</label><input type="text" name="price" id="price" placeholder="Enter price">
    <button type="submit">Add</button>
</form>
