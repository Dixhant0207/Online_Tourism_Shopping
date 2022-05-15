<?php
$stmt = $pdo->prepare('SELECT * FROM products where id in (1,2,3,4)');
$stmt->execute();
$recently_added_products = $stmt->fetchAll(PDO::FETCH_ASSOC);
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
<div class="recentlyadded content-wrapper">
<h2>Delhi</h2>
<div class="products">
        <?php foreach ($recently_added_products as $product): ?>
        <a href="index.php?page=product&id=<?=$product['id']?>" class="product">
        <?php echo '<img src="data:image/png;base64,'.base64_encode($product['img']).'"/ width=200 height=200>'; ?>
            <span class="name"><?=$product['name']?></span>
            <span class="price">
                Rs. <?=$product['price']?>
            </span>
        </a>
        <?php endforeach; ?>
</div>
</div>
<?php
$stmt = $pdo->prepare('SELECT * FROM products where id in (5,6,7,8)');
$stmt->execute();
$recently_added_products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<div class="recentlyadded content-wrapper">
<h2>Himachal Pradesh</h2>
<div class="products">
        <?php foreach ($recently_added_products as $product): ?>
        <a href="index.php?page=product&id=<?=$product['id']?>" class="product">
        <?php echo '<img src="data:image/png;base64,'.base64_encode($product['img']).'"/ width=200 height=200>'; ?>
            <span class="name"><?=$product['name']?></span>
            <span class="price">
                Rs. <?=$product['price']?>
            </span>
        </a>
        <?php endforeach; ?>
</div>
</div>
<?php
$stmt = $pdo->prepare('SELECT * FROM products where id in (9,10,11,12)');
$stmt->execute();
$recently_added_products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<div class="recentlyadded content-wrapper">
<h2>Uttar Pradesh</h2>
<div class="products">
        <?php foreach ($recently_added_products as $product): ?>
        <a href="index.php?page=product&id=<?=$product['id']?>" class="product">
        <?php echo '<img src="data:image/png;base64,'.base64_encode($product['img']).'"/ width=200 height=200>'; ?>
            <span class="name"><?=$product['name']?></span>
            <span class="price">
                Rs. <?=$product['price']?>
            </span>
        </a>
        <?php endforeach; ?>
</div>
</div>
<?php
$stmt = $pdo->prepare('SELECT * FROM products where id in (13,14,15,16)');
$stmt->execute();
$recently_added_products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<div class="recentlyadded content-wrapper">
<h2>Leh-Ladakh</h2>
<div class="products">
        <?php foreach ($recently_added_products as $product): ?>
        <a href="index.php?page=product&id=<?=$product['id']?>" class="product">
        <?php echo '<img src="data:image/png;base64,'.base64_encode($product['img']).'"/ width=200 height=200>'; ?>
            <span class="name"><?=$product['name']?></span>
            <span class="price">
                Rs. <?=$product['price']?>
            </span>
        </a>
        <?php endforeach; ?>
</div>
</div>
<?php
$stmt = $pdo->prepare('SELECT * FROM products where id in (17,18,19,20)');
$stmt->execute();
$recently_added_products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<div class="recentlyadded content-wrapper">
<h2>Punjab</h2>
<div class="products">
        <?php foreach ($recently_added_products as $product): ?>
        <a href="index.php?page=product&id=<?=$product['id']?>" class="product">
        <?php echo '<img src="data:image/png;base64,'.base64_encode($product['img']).'"/ width=200 height=200>'; ?>
            <span class="name"><?=$product['name']?></span>
            <span class="price">
                Rs. <?=$product['price']?>
            </span>
        </a>
        <?php endforeach; ?>
</div>
</div>