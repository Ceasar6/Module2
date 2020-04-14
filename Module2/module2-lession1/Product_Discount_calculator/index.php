<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $description = $_POST["description"];
    $price = $_POST["price"];
    $discountPercent = $_POST["discount_percent"];
    $discountAmount = $price * ($discountPercent * 0.01);
    $discountPrice = $price - $discountAmount;
}
?>
<html>
<head>
    <title>Product Discount Calculator</title>
</head>
<body>
<div id="content">
    <h1>Product Discount Calculator</h1>
    <form method="post" action="display_discount.php">
        <div id="data">
            <label>Product Description:</label>
            <input type="text" name="description"/><br/>
            <label>List Price:</label>
            <input type="text" name="price"/><br/>
            <label>Discount Percent:</label>
            <input type="text" name="discount_percent"/>(%)<br/>
        </div>
        <div id="buttons">
            <label>&nbsp;</label>
            <input type="submit" value="Calculate Discount"/>
        </div>
    </form>
</div>
</body>
</html>
