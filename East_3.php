<?php
session_start();
if(isset($_SESSION["loggedin"]) and $_SESSION["loggedin"]!=''){
  $_SESSION["loggedin"]=true;
} else{
  $_SESSION["loggedin"]='';
}
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="page.css">
<meta charset="UTF-8">
<style>
body {
  font-family: "Lato", sans-serif;
  background-image: url('images\\megh_back.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;   
  background-size: cover;
}
</style>
</head>
<body text=white>
<header>
    <nav class="navbar">
      <div class="nav">
        <div class="nav-items">
        <div class="search">
            <button onclick="window.location.href='souvenir/index.php'" class="search-btn"><font face = "Comic sans MS" size =" 5">Check Out the Souvenir Collection !!</font></button>
        </div>
            <a href="index.php"><img src="images\\hom.png" alt=""></a>
            <?Php
            if($_SESSION["loggedin"]==true){
              echo "<a href=logout.php><button id=myBtn>Logout</button>";
              }else{
                echo "<a href=#myModal><button id=myBtn>Register / Login</button>
                <div id=myModal class=modal>
                <div class=modal-content><object data=reg.php height=100% width=100%></object>
                </div></div>
                  ";
                  }
            ?></a>
        </div>
    </div>
    <ul class="links-container">
        <li class="link-item"><a href="NI_menu.php" class="link">
        <div class="dropdown">North India</a>
        <div class="dropdown-content">
        <a href="N_1.php">New Delhi</a>
        <a href="N_2.php">Himachal Pradeh</a>
        <a href="N_3.php">Uttar Pradesh</a>
        <a href="N_4.php">Leh-Ladakh</a>
        <a href="N_5.php">Punjab</a>
        </div>
        </div>
        </li>
        <li class="link-item"><a href="EI_menu.php" class="link">
        <div class="dropdown">East India</a>
        <div class="dropdown-content">
        <a href="East_1.php">Sikkim</a>
        <a href="East_2.php">Arunachal Pradesh</a>
        <a href="East_3.php">Meghalaya</a>
        <a href="East_4.php">Manipur</a>
        <a href="East_5.php">Tripura</a>
        </div>
        </div>
        </li>
        <li class="link-item"><a href="SI_menu.php" class="link">
        <div class="dropdown">South India</a>
        <div class="dropdown-content">
        <a href="SI_op1.php">Karnataka</a>
        <a href="SI_op2.php">Tamil Nadu</a>
        <a href="SI_op3.php">Kerala</a>
        <a href="SI_op4.php">Telangana</a>
        </div>
        </div>
        </li>
        <li class="link-item"><a href="WI_menu.php" class="link">
        <div class="dropdown">West India</a>
        <div class="dropdown-content">
        <a href="WI_op1.php">Goa</a>
        <a href="WI_op2.php">Daman & Diu</a>
        <a href="WI_op3.php">Gujarat</a>
        <a href="WI_op4.php">Maharashtra</a>
        <a href="WI_op5.php">Rajasthan</a>
        </div>
        </div>
        </li>
        <button onclick="window.location.href='placeorder.php'" id=Btn><font face = "Comic sans MS" size ="4">Book Now</font></button>
    </ul>
    </nav>
</header>

<h1>Meghalaya</h1>
<img id="image" src="images\\cher2.png" style="width:700px; height:400px">
<p></p>

<script>
var modal = document.getElementById("myModal");
var btn = document.getElementById("myBtn");
btn.onclick = function() {
  modal.style.display = "block";
}
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
    if(modal.style.display == "none") {
      location.reload();
    }
  }
}

var imageSources = ["images\\cher3.jpg", "images\\cher2.png"]

var index = 0;
setInterval (function(){
  if (index == imageSources.length) {
    index = 0;
  }
  document.getElementById("image").src = imageSources[index];
  index++;
} , 2000);

</script>
    <p id="ptype" style="font-family: cursive;">
        <font size=+2>Meghalaya, state of India, located in the northeastern part of the country. It is bounded by the Indian state of Assam to the north and northeast and by Bangladesh to the south and southwest. The state capital is the hill town of Shillong, located in east-central Meghalaya. Meghalaya—alaya (“abode”) and megha (“of the clouds”)—occupies a mountainous plateau of great scenic beauty. It became a state in 1972. Area 8,660 square miles (22,429 square km). Pop. (2011) 2,964,007.</font>
    </p>
<div class = "itih">
  Itinerary   
</div>
<div>
  <ul class = "iti" id = "pformat">
    <li>Day 1</li>
    <p><strong>On arrival, meet with our representative and proceed to Shillong. Enroute, visit Nehru Park and Umiam Lake (featuring water sports activities). Evening at your leisure, overnight stay in Shillong.</strong><p>
    <li>Day 2</li>
    <p><strong>After breakfast, drive to Sohra (Cherrapunjee), the wettest place on Earth. Explore various caves, waterfalls, the landscape and indulge in adventure activities. Overnight stay in Sohra (Cherrapunjee).</strong></p>
    <br>
    <li>Day 3</li>
    <p><strong>After a delightful breakfast, get charged up for a trek to double Decker living root bridge (approximately 3000 steps). The fascinating double Decker living root bridge is weaved from trees (natural architecture) which has been preserved and maintained through generations. Overnight stay at Nongriat.</strong></p>
    <br>
    <li>Day 4</li>
      <p><strong>Wake up. Today is the day when you leave for Lachen! Have your breakfast and resort to your high energy levels as ahead lays a 5-6 hours drive to Chungthang which is 96 kms away from Gangtok. Take a halt at Chungthang and have a great lunch. Resume your journey to Lachen that finds itself 35 kms from Chungthang. Lachen falls into the category of the places that make you fall in love with them at first sight. A town hidden from the outer world, cradling between rocks and sterns, it is a wonderland. The eye soothing snow clad mountains brings you few places such as Gurudongmar Lake, Thangu, Chopta Valley, etc. that are quite interesting and are a must visit. Do visit the Lepcha Village. Post your evening walk, come back to the hotel in Lachen and take a good night sleep.</strong></p>
    <li>Day 5</li>
    <p><strong>After breakfast, set yourself up for more adventure at the campsite and walk around the village, evening drive back to Shillong for overnight stay.</strong></p>
  </ul>
</div>
</body>

</html>