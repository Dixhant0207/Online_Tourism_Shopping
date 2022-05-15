<?php
session_start();
if (isset($_POST['sentForm'])) {
    $new=$_POST['pack'];
    if($new==8500){
      $_SESSION['pack']='Delhi';
    }elseif($new==15600){
      $_SESSION['pack']='Himachal';
    }elseif($new==12000){
      $_SESSION['pack']='UP';
    }elseif($new==11500){
      $_SESSION['pack']='Leh';
    }elseif($new==14100){
      $_SESSION['pack']='Amritsar';
    }elseif($new==10400){
      $_SESSION['pack']='Sikkim';
    }elseif($new==11200){
      $_SESSION['pack']='Arunachal';
    }elseif($new==9800){
      $_SESSION['pack']='Meghalaya';
    }elseif($new==9100){
      $_SESSION['pack']='Manipur';
    }elseif($new==10150){
      $_SESSION['pack']='Tripura';
    }elseif($new==16000){
      $_SESSION['pack']='Karnataka';
    }elseif($new==15100){
      $_SESSION['pack']='Tamil';
    }elseif($new==11300){
      $_SESSION['pack']='Kerala';
    }elseif($new==12100){
      $_SESSION['pack']='Telangana';
    }elseif($new==10000){
      $_SESSION['pack']='Goa';
    }elseif($new==12500){
      $_SESSION['pack']='Daman';
    }elseif($new==14200){
      $_SESSION['pack']='Gujarat';
    }elseif($new==15300){
      $_SESSION['pack']='Maharashtra';
    }elseif($new==17300){
      $_SESSION['pack']='Rajasthan';
    }
    $_SESSION['pvalue']=$_POST['pvalue'];
    $_SESSION['no']=$_POST['no'];
    
    header('Location: payment.php');
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
select {
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
<?php
if ($_SESSION['loggedin']!=true){
  echo'<script>alert("Log in to continue.")</script>';
  echo"<script>history.go(-1)</script>";
}
?>
<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="placeorder.php" method="POST" autocomplete="off">
          <div class="col-50">
            <h3>Book Package</h3>
            <label for="cname">Full Name</label>
            <input type="text" id="f" name="fname" value="<?php echo $_SESSION['fname']?>">
            <label for="ccnum">Email</label>
            <input type="text" id="f" name="email" value="<?php echo $_SESSION['email']?>">
            <label for="expmonth">Package</label>
            <select id="test" name="pack" onchange="price(this)";>
            <option value="0">Select Option</option>
            <option value="8500">Delhi</option>
            <option value="15600">Himachal Pradesh</option>
            <option value="12000">Uttra Pradesh</option>
            <option value="11500">Leh-Ladakh</option>
            <option value="14100">Amritsar</option>
            <option value="10400">Sikkim</option>
            <option value="11200">Arunachal Pradesh</option>
            <option value="9800">Meghalaya</option>
            <option value="9100">Manipur</option>
            <option value="10150">Tripura</option>
            <option value="16000">Karnataka</option>
            <option value="15100">Tamil Nadu</option>
            <option value="11300">Kerala</option>
            <option value="12200">Telengana</option>
            <option value="10000">Goa</option>
            <option value="12500">Daman & Diu</option>
            <option value="14200">Gujarat</option>
            <option value="15300">Maharashtra</option>
            <option value="17300">Rajasthan</option>
            </select>
            <label for="expmonth">No. of people</label>
            <select id="tes" name="no" onchange="pri(this)";>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            </select>
            <label for="expmonth">Amount</label>
            <input id="pr" type="text" name="pvalue" value="0" readonly>
          </div>
        </div>
        <input type="submit" name="sentForm" value="Continue to payment" class="btn">
      </form>
<script>
    var a = 1;
    var b = 1;
    function price(selectObj){
        var idx = selectObj.selectedIndex; 
        window.b = selectObj.options[idx].value; 
        var p = a*b;
        document.getElementById("pr").value = p;
    }
    function pri(selectObj){
        var idx = selectObj.selectedIndex; 
        window.a = selectObj.options[idx].value; 
        var p = a*b;
        document.getElementById("pr").value = p;
    }
    </script>
</body>
</html>
