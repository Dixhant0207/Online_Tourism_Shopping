<?php
if (isset($_POST['pay']) && isset($_SESSION['cart']) && !empty($_SESSION['cart']) ) {
    $fname=$_SESSION['name'];
    $add=$_SESSION['address'];
    $pin=$_SESSION['pin'];
    $No=$_SESSION['No'];
    $val=$_SESSION['value'];
    $products_in_cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();
    $products = array();
    $items = array();
    $quantity = array();
    $subtotal = 0.00;
    if ($products_in_cart) {
      $array_to_question_marks = implode(',', array_fill(0, count($products_in_cart), '?'));
      $stmt = $pdo->prepare('SELECT * FROM products WHERE id IN (' . $array_to_question_marks . ')');
      $stmt->execute(array_keys($products_in_cart));
      $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
      foreach ($products as $product) {
          array_push($items,$product['id']);
          array_push($quantity,$products_in_cart[$product['id']]);
      }
    }
    $item = serialize($items);
    $quantit = serialize($quantity);
    $sql = "INSERT INTO sorder (name, address, pin, No, value, items, quantity) VALUES (?,?,?,?,?,?,?)";
    $stm= $pdo->prepare($sql);
    $stm->execute([$fname, $add, $pin, $No, $val, ".$item.", ".$quantit."]);
    header('Location: index.php?page=home');
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
  padding-left: 300px;
  background: rgba(0,0,0,0.7);
}

* {
  box-sizing: border-box;
}

.row {
  padding :  50px 100px 100px;
  height: 100px;
  width: 800px;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%;
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%;
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%;
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #04AA6D;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}
@media (max-width: 400px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
</head>
<body>

<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="index.php?page=payment" method="POST" autocomplete="off">
          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="Sanchit Goyal">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="September">
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2025">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352">
              </div>
            </div>
          </div>
          
        </div>
        <input type="submit" name="pay" value="Confirm Order" class="btn">
      </form>

</body>
</html>