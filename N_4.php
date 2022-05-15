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
  background-image: url('images\\leh1.jpg');
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

<h1>Leh-Ladakh</h1>
<img id="image" src="images\\leh2.jpg" style="width:700px; height:400px">
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

var imageSources = ["images\\leh3.jpg", "images\\leh4.jpg", "images\\leh2.jpg"]

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
    About Leh<br />Leh, town, Ladakh union territory, northern India. The town is located in the valley of the upper Indus River at an elevation of 11,550 feet (3,520 metres), surrounded by the towering peaks of the Ladakh Range (a southeastern extension of the Karakoram Range). Leh is in one of the most remote areas of the Indian-administered portion of the the Kashmir region and is one of the highest permanently inhabited towns in the world. It was built as a terminus for caravans from Asia. Today Leh is reached only by one main highway, the Treaty Road, which connects it to Srinagar to the west and to Dêmqog, Tibet (in a Chinese-administered part of Kashmir), to the southeast. The economy relies mainly on trade, but fruit growing and other agriculture are also important. An old palace of the kings of Ladakh and the Sankar monastery overlook the town. Pop. (2001) 28,639; (2011) 30,870.<br/>
    About Ladakh<br/>Ladakh, large area of the northern and eastern Kashmir region, northwestern Indian subcontinent. Administratively, Ladakh is divided between Pakistan (northwest), as part of Gilgit-Baltistan, and India (southeast), as part of Ladakh union territory (until October 31, 2019, part of Jammu and Kashmir state); in addition, China administers portions of northeastern Ladakh. Ladakh covers about 45,000 square miles (117,000 square km) and contains the Ladakh Range, which is a southeastern extension of the Karakoram Range, and the upper Indus River valley. Ladakh is one of the highest regions of the world. Its natural features consist mainly of high plains and deep valleys. The high plain predominates in the east, diminishing gradually toward the west. In southeastern Ladakh lies Rupshu, an area of large, brackish lakes with a uniform elevation of about 13,500 feet (4,100 metres). To the northwest of Rupshu lies the Zaskar Range, an inaccessible region where the people and the cattle remain indoors for much of the year because of the cold. Zaskar is drained by the Zaskar River, which, flowing northward, joins the Indus River below Leh. In the heart of Ladakh, farther to the north, cultivation by means of manuring and irrigation is practiced by farmers living in valley villages at elevations between about 9,000 and 15,000 feet (2,750 and 4,550 metres). Shepherds tend flocks in the upland valleys that are too high for cultivation. Leh, the most accessible town of Ladakh, is an important trade centre located 160 miles (260 km) east of Srinagar. The climate of Ladakh is cold and dry. Average annual precipitation is roughly 3 inches (80 mm); fine, dry, flaked snow is frequent and sometimes falls heavily. Vegetation is confined to valleys and sheltered spots, where a stunted growth of tamarisk (genus Tamarix) shrubs, furze (also called gorse; spiny plants of the legume family), and other plants supply much-needed firewood. The principal products are wheat, barley, millet, buckwheat, peas, beans, and turnips. Woolen cloth and other textiles are the primary manufactures. Ladakh has been contested by India and Pakistan since the dissolution of British India in 1947; after the cease-fire agreement of 1949, its southeastern portion went to India and the remainder to Pakistan. China gained control of its portion of Ladakh when its forces entered the region in the early 1960s.
  </font>
</p>
<div class = "itih">
      Itinerary   
</div>
<div>
  <ul class = "iti" id = "pformat">
    <li>Day 1</li>
    <p><strong>Enjoy a hearty breakfast in the hotel and gradually get acclimatized to the climate. Attend a short briefing and start your sightseeing in the evening by visiting the beautifully constructed Shanti Stupa, which was built to commemorate the 2500 years of Buddhism. Visit the Leh Palace which was built in the 17th century that will give you an insight into the bygone golden era of Leh. Later visit the local Leh Market to buy some Tibetan handicrafts or go cafe hopping to try the delicious Ladakhi cuisine.</strong><p>
    <li>Day 2</li>
    <p><strong>Get ready for an adventurous drive to 'Sham Valley', which is beautifully nestled around the Srinagar - Leh highway. Start off the sightseeing by paying homage to the martyrs of the Indo-Pak War at the Hall of Fame. Visit the Spituk Gompa which also has a museum on the premises housing ancient masks, weapons and Thangkas (Buddhist Paintings). Enjoy delicious langar at Gurudwara Pathar Sahib and know the story behind the construction of this Gurudwara by the army. Another interesting place to visit today is Magnetic Hill, a small stretch of the road that defies the law of gravity. Visit Indus Sangam Viewpoint to watch the confluence of Zanskar and Indus Rivers. Visit SECMOL which is the real 3-idiots school.</strong></p>
    <br>
    <li>Day 3</li>
    <p><strong>This journey will take you through some of the highest passes in the world and will greet you with the ever-changing views of the barren land. Take a stopover at the cafe on Khardung-La Pass, the world's highest all-season motorable road and soak in the views as you will feel like on top of the world. After an amazing journey to Khardung La Pass, you can then head back to Leh. Once back in Leh, enjoy leisure time to roam around at Mall Road buy souvenirs for your loved ones.</strong></p>
    <br>
    <li>Day 4</li>
    <p><strong>Get ready for the most awaited day as you will be visiting Pangong Lake on the Indo-China border. One of the highest altitude saline water lakes, Pangong Tso will greet you with its changing colours from shades of blue to green to red. Spend some time exploring the surroundings of the Pangong Lake with the view of the Shyok river on one side and the mountains on another side. You can also recreate some of the moments from your favourite Bollywood movies like 3-idiots and Jab Tak Hai Jaan and enjoy the place in Bollywood style. On your way back to Leh, take a small stopover at the Chang-la Pass, which is one of the highest mountain passes in the world. You can also visit the Chang-la Cafe, located just on the Changla Pass. Visit the Changla Baba Temple on top, after which the pass got its name and is believed to be the guardian of the people visiting Chang La. Further, visit the Druk Padma School, famed for the movie ‘3 Idiots’ as the site where the last scene was shot. One can also visit the beautifully structured Thiksey Monastery and Shey Palace en-route, if time permits.</strong></p>
  </ul>
</div>
</body>
</html>