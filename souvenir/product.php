<?php
if (isset($_GET['id'])) {
    $stmt = $pdo->prepare('SELECT * FROM products WHERE id = ?');
    $stmt->execute([$_GET['id']]);
    $product = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$product) {
        exit('Product does not exist!');
    }
} else {
    exit('Product does not exist!');
}
?>
<html>
<head>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="h.css">
</head>
<body>
<header>
<div class="nav">
    <div class="nav-items">
        <div class="search">
            <button onclick="window.location.href='../index.php'" class="search-btn">Continue Exploring?</button>
        </div>
        <a href="index.php?page=home"><img src="home.png" alt=""></a>
        <a href="index.php?page=cart"><img src="cart.png" alt=""></a>
    </div>
</div>
<ul class="links-container">
    <li class="link-item"><a href="index.php?page=North" class="link">North India</a></li>
    <li class="link-item"><a href="index.php?page=South" class="link">South India</a></li>
    <li class="link-item"><a href="index.php?page=East" class="link">East India</a></li>
    <li class="link-item"><a href="index.php?page=West" class="link">West India</a></li>
</ul>
</header>
<div class="product content-wrapper">
<?php echo '<img src="data:image/png;base64,'.base64_encode($product['img']).'"/ width=500 height=500>'; ?>
    <div>
        <h1 class="name"><?=$product['name']?></h1>
        <span class="price">
            Rs. <?=$product['price']?>
        </span>
        <form action="index.php?page=cart" method="post">
            <input type="number" name="quantity" value="1" min="1" max="<?=$product['quantity']?>" placeholder="Quantity" required>
            <input type="hidden" name="product_id" value="<?=$product['id']?>">
            <input type="submit" value="Add To Cart">
        </form>
        <div class="description">
            <?=$product['desc']?>
        </div>
    </div>
</div>
</body>
</html>