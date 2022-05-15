<?php
if (isset($_POST['sentForm']) && isset($_SESSION['cart']) && !empty($_SESSION['cart']) && !empty($_POST['fname']) && !empty($_POST['address']) && !empty($_POST['pin']) && !empty($_POST['No'])) {
    $_SESSION['name']=$_POST['fname'];
    $_SESSION['address']=$_POST['address'];
    $_SESSION['pin']=$_POST['pin'];
    $_SESSION['No']=$_POST['No'];
    if(strlen($_SESSION['pin'])!=6){
      echo '<script>alert("Invalid pin. Pin should be 6 digits long")</script>';
    }
    elseif(strlen($_SESSION['No'])!=10){
      echo '<script>alert("Invalid Phone Number. Phone Number should be 10 digits long")</script>';
    }
    else{
      header('Location: index.php?page=payment');
      exit;
    }
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
  padding-left: 400px;
  background: rgba(0,0,0,0.7);
}

* {
  box-sizing: border-box;
}

.row {
  padding :  50px 100px 100px;
  height: 200px;
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
      <form action="index.php?page=placeorder" method="POST" autocomplete="off">
          <div class="col-50">
            <h3>Place Order</h3>
            <label for="cname">Full Name</label>
            <input type="text" id="f" name="fname" placeholder="Your name..">
            <label for="ccnum">Address</label>
            <textarea placeholder="Enter Your complete address" name="address" id="f" rows="5" cols="30"></textarea>
            <label for="expmonth">Pin Code</label>
            <input type="text" id="f" name="pin" placeholder="Pincode">
            <label for="expmonth">Contact No</label>
            <input type="text" id="f" name="No" placeholder="Contact No">
          </div>
        </div>
        <input type="submit" name="sentForm" value="Continue to payment" class="btn">
      </form>

</body>
</html>
