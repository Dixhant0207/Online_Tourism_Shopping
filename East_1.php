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
  background-image: url('images\\sikkim_1 - Copy.png');
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

<h1><font>Sikkim</font></h1>
<img id="image" src="images\\gng2.png" style="width:700px; height:400px">
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

var imageSources = ["images\\gng3.jpg", "images\\gng2.png"]

var index = 0;
setInterval (function(){
  if (index == imageSources.length) {
    index = 0;
  }
  document.getElementById("image").src = imageSources[index];
  index++;
} , 2000);

</script>
    <p style="font-family: cursive;">
        <font size=+2>
          Sikkim, state in India,is located in the northeastern part of the country, in the eastern Himalayas. It is one of the smallest states in India. Sikkim is bordered by the Tibet Autonomous Region of China to the north and northeast, by Bhutan to the southeast, by the Indian state of West Bengal to the south, and by Nepal to the west. The capital is Gangtok, in the southeastern part of the state. 
          A part of the Eastern Himalaya, Sikkim is notable for its biodiversity, including alpine and subtropical climates, as well as being a host to Kangchenjunga, the highest peak in India and third highest on Earth. Sikkim's capital and largest city is Gangtok. Almost 35% of the state is covered by the Khangchendzonga National Park. 
          Long a sovereign political entity, Sikkim became a protectorate of India in 1950 and an Indian state in 1975. Its small size notwithstanding, Sikkim is of great political and strategic importance for India because of its location along several international boundaries. Area 2,740 square miles (7,096 square km). Pop. (2011) 607,688.
        </font>
    </p>
<br><br>
<div class = "itih">
      Itinerary   
</div>
<div>
  <ul class = "iti" id = "pformat">
    <li>Day 1</li>
    <p><strong>As soon as you reach your hotel, let the fresh breeze sink in. It’s time for you to relax and make the best out of the remaining time by resting and hogging on good food. If you get your energy back, do go for a walk at the mall road or some local marketplace. It’s great for buying souvenirs.</strong><p>
    <li>Day 2</li>
    <p><strong>After having a sound sleep, it’s time for you to welcome the other day with sheer excitement. Post your plentiful breakfast head for a Gangtok tour, Today’s day is full of sightseeing and fun. The places that are to be covered include-</strong></p>
    <ol>
      <strong>
      <li>Ganesh Tok</li>
      <li>Tashi View Point</li>
      <li>Ropeway & Banjhakri Falls</li>
      <li>Enchey Monastery</li>
      <li>Flower Show</li>
      </strong>
    </ol>
    <br>
    <li>Day 3</li>
    <p><strong>Today is the most adventuresome day. Hence, go light on breakfast. Have a light meal that fills your tummy. Do not overeat as today you are going to Tsomgo Lake Excursion and Baba Mandir.</strong></p>
    <ol>
      <strong>
      <li>The Tsomgo Lake</li>
      <li>Baba Mandir</li>
      <li>Nathu La Pass</li>
      </strong>
    </ol>
    <p><strong>After seeking the blessing at Baba Mandir, head back to Mall road for a night spree. Finally, it’s time to be back at your hotel for a relaxing sleep.</strong></p>
    <br>
    <li>Day 4</li>
      <p><strong>Wake up. Today is the day when you leave for Lachen! Have your breakfast and resort to your high energy levels as ahead lays a 5-6 hours drive to Chungthang which is 96 kms away from Gangtok. Take a halt at Chungthang and have a great lunch. Resume your journey to Lachen that finds itself 35 kms from Chungthang. Lachen falls into the category of the places that make you fall in love with them at first sight. A town hidden from the outer world, cradling between rocks and sterns, it is a wonderland. The eye soothing snow clad mountains brings you few places such as Gurudongmar Lake, Thangu, Chopta Valley, etc. that are quite interesting and are a must visit. Do visit the Lepcha Village. Post your evening walk, come back to the hotel in Lachen and take a good night sleep.</strong></p>
    <li>Day 5</li>
    <p><strong>Lachung – Yumthang Excursion  – Gangtok
    After having your breakfast, drive to Yumthang which is located at an elevated level of 11800 feet. Yumthang is a splendid valley set near to the Lachung Chu River, surrounded by gigantic mountains. During the springtime, the valley erupts with Rhododendrons, many alpine flowers and Primulae. The flora is in full bloom, making it look nothing less than a paradise. The other days except for autumn, the valley finds itself hidden in the snow cover. On your way to the place, you will come across a famous hot spring renowned for its power of curing diseases. Spend a good time witnessing this ethereal beauty and then head back to your hotel for lunch. Post lunch, leave for Gangtok. It will be 4-5 hours drive. On your way make a pit stop at Singhik and Mangan. If the sky is clear and the weather compliments your mood, spend some time consuming the magnificent views of Mount Kanchenjunga, Mount Jopuno, Mount Kabru, Mount Pandim, Mount Simvo, Mount Siniolchu and Mount Khanchendzonga.</strong></p>

  </ul>
</div>
</body>
</html>