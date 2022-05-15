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
  background-image: url('images\\shimla1.jpg');
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
<h1>Himachal Pradesh</h1>
<img id="image" src="images\\shimla2.jpg" style="width:700px; height:400px">
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

var imageSources = ["images\\shimla3.jpg", "images\\shimla4.jpg", "images\\shimla2.jpg"]

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
  Himachal Pradesh, state of India, in the extreme northern part of the Asian subcontinent. It is bounded by Jammu and Kashmir union territory to the northwest and Ladakh union territory to the northeast, by the Tibet Autonomous Region of China to the east, and by the states of Uttarakhand to the southeast, Haryana to the south, and Punjab to the west. Himachal Pradesh occupies a region of scenic splendour in the western Himalayas, offering a multitextured display of lofty snow-clad mountains, deep gorges, thickly forested valleys, large lakes, terraced fields, and cascading streams. Indeed, the name of the state is a reference to its setting: Himachal means “snowy slopes” (Sanskrit: hima, “snow”; acal, “slopes”), and Pradesh means “state.” The city of Shimla was the summer headquarters of preindependence British viceroys; it is now the state capital and, at an elevation of about 7,100 feet (2,200 metres), one of the largest and most popular mountain resorts in the country. Formerly a union territory, Himachal Pradesh became a state of India on January 25, 1971. Area 21,495 square miles (55,673 square km). Pop. (2011) 6,856,509.  </font>
</p>
<div class = "itih">
  Itinerary   
</div>
<div>
  <ul class = "iti" id = "pformat">
    <li>Day 1</li>
    <p><strong>Enjoy a hearty breakfast in the morning at the hotel and then head out for local sightseeing in Shimla. You will be visiting Kalibari Temple that was built in 1845 and is dedicated to Goddess Kali, also known as Shyamala from where Shimla derives its name. Then you will trek to the top of Jakhoo Hill to visit the ancient temple which is dedicated to Lord Hanuman and visit the Christ Church which is a parish in the Diocese of Amritsar. Later in the afternoon, you will proceed towards Kufri, which passes through the splendid Hasan Valley and is known for its scenic beauty and pleasant weather. Visit the Himalayan Zoo which is home to wildlife like Felines, Antelopes and other birds including Monal, the state bird of Himachal Pradesh. You can also choose to hike up the Mahasu Peak, one of the highest points in Kufri, that offers stunning views of the Badrinath and Kedarnath ranges. Later in the evening travel back to Shimla for the overnight stay.</strong><p>
    <li>Day 2</li>
    <p><strong>Start your morning with a delicious breakfast and get ready to depart to Manali. On the way when passing through the Mandi district, you will see the beautiful Pandoh Dam which offers views that are refreshing for the eyes, mind, and soul. You will then stop for sightseeing at Kullu which is a paradise for nature lovers. Visit the amazing Himalayan National Park with hosts a large variety of flora and fauna and the pious Raghunath Temple. You will also visit some of the other famous temples and landmarks in Kullu before continuing your journey towards Manali. Reach Manali and check-in to the hotel and take s some rest. The rest of the day is at leisure and you can explore the surroundings of the hotel. Dinner and overnight stay in Manali.</strong></p>
    <br>
    <li>Day 3</li>
    <p><strong>After breakfast in the hotel, prepare yourself for the Ultimate experience in Manali. Take an adventure stroll at Solang Valley, where you can enjoy adventure activities like Zorbing, Paragliding. Once back to Manali, you can also visit the Tibetan Monastery- not only a place of worship but also a Tibetan culture center. Visit, Jagatsukh- a small village that houses old Shikara-style temples and Vashisht Kund- hot water sulphur springs. Hadimba Devi Temple- an ancient temple around 450 years old that is dedicated to Hadimba Devi wide of one of the Pandava brothers Bhim, Go to Club House In the evening and spend leisure time at Mall Road. Enjoy the flavorsome dinner and overnight stay at the hotel</strong></p>
    <br>
    <li>Day 4</li>
    <p><strong>Wake up early in the morning and enjoy a wholesome breakfast after which you will head to the green and misty high mountains of Rohtang Pass. At Rohtang Pass, you can opt to participate in adventure activities like Skiing, Snow Mobile Ride, Snow Tube Ride at an extra cost. En route to Rohtang pass, you will pass through the small village of Kothi, Gulaba Viewpoint, Rahala Waterfalls and a shanty town of Marhi with roadside restaurants. Pose along gleefully with each other as these spots provide the perfect photo opportunity due to the beauty that abounds. After a scenic ride through high passes, return back to the hotel for a delicious dinner. Overnight stay in Manali.</strong></p>
    <li>Day 5</li>
    <p><strong>Wake up with the fresh air in the mountains and enjoy your hearty breakfast. Start your drive to the famous Dhakpo Shedrupling Monastery / Kais Monastery After Kullu you will visit Manikaran where you can enjoy the famous Gurudwara and natural hot water spring which is also said to be radio-active which cures many skin diseases. According to an ancient saying,` Manikaran is connected with Lord Shiva and his divine concert Goddess Parvati. Reach Dharamshala and Overnight stay at the hotel</strong></p>
    <li>Day 6</li>
    <p><strong>Wake up early to enjoy the mesmerising views of the sun rising above the beautiful Dhauladhar Ranges. Have a hearty breakfast beforehand set off to the nearby Naddi Village. On the way, you will visit Dal Lake, which is the holiest lake in the upper Dharamshala near Naddi. Then visit St. John Church, which is a marvellous church that stands between the thick deodar forest near McLeod Ganj. Visit Bhagsu Nag Temple, a very popular temple dedicated to Lord Shiva along with the famous Bhagsu Waterfall. Visit the Tibetan Monastery, which is the main and most popular tourist attraction in Dharamshala city. In the evening, watch the temple of His Holiness “The Dalai Lama” and explore many Tibetan markets, restaurants, and Tibetan handicraft shops. Later return back to the hotel in Dharamshala for an overnight stay.
  </ul>
</div>
</body>
</html>