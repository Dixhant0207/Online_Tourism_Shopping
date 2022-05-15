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
  background-image: url('images\\pun_back.jpg');
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

<h1>Punjab</h1>
<img id="image" src="images\\am2.jpg" style="width:700px; height:400px">
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

var imageSources = ["images\\am3.jpg", "images\\am4.jpg", "images\\am2.jpg"]

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
    Punjab, state of India, located in the northwestern part of the subcontinent. It is bounded by Jammu and Kashmir union territory to the north, Himachal Pradesh state to the northeast, Haryana state to the south and southeast, and Rajasthan state to the southwest and by the country of Pakistan to the west. Punjab in its present form came into existence on November 1, 1966, when most of its predominantly Hindi-speaking areas were separated to form the new state of Haryana. The city of Chandigarh, within the Chandigarh union territory, is the joint capital of Punjab and Haryana. The word Punjab is a compound of two Persian words, panj (“five”) and āb (“water”), thus signifying the land of five waters, or five rivers (the Beas, Chenab, Jhelum, Ravi, and Sutlej). The word’s origin can perhaps be traced to panca nada, Sanskrit for “five rivers” and the name of a region mentioned in the ancient epic the Mahabharata. As applied to the present Indian state of Punjab, however, it is a misnomer: since the partition of India in 1947, only two of those rivers, the Sutlej and the Beas, lie within Punjab’s territory, while the Ravi flows only along part of its western border. Area 19,445 square miles (50,362 square km). Pop. (2011) 27,704,236.
  </font>
</p>
<div class = "itih">
      Itinerary   
</div>
<div>
  <ul class = "iti" id = "pformat">
    <li>Day 1</li>
    <p><strong>Arrive at Amritsar, start your city tour with the blessings of Sri Harmandir Sahib, is named after Hari (God) the temple of God, also known as the Golden Temple in Amritsar is the holiest shrine of the Sikh religion. It was built by the fifth Sikh guru, Guru Arjan, in the 16th Century. In 1604, Guru Arjan completed the Adi Granth, the holy scripture of Sikhism. There are four doors to get into the Harmandir Sahib, which symbolize the openness of the Sikhs towards all people and religions. The Gurdwara is surrounded by a large lake or holy tank, known as the Sarovar, which consists of Amrit (holy water).</strong><p>
    <li>Day 2</li>
    <p><strong>After Breakfast, drive to Jalandhar on arrival in Jalandhar check in into the hotel then start your city tour with Pushpa Gujral Science City: Science City is being built with its aim of learning, fun & amusement out of Science for people of all ages & all walks of life. Pushpa Gujral Science City deals with all modern aspects of science and technology and covers a variety of topics ranging from physical, applied, natural and social sciences to engineering, technology, agriculture, health sciences, energy, industries, human evolution and civilization, the environment and ecosystems. Jurassic parks as well as frontier areas like space, nuclear science, information technology, robotics and Biotechnology also find place in the versatile science city.</strong></p>
    <br>
    <li>Day 3</li>
    <p><strong>Drive to Ludhiana on arrival in Ludhiana check in hotel. Gurudwara Dukh Niwaran Sahib is the most popular Gurudwara located in Field Ganj in the City Of Ludhiana. It is one of the big Gurudwaras of the city and is the first Gurudwara in India to use Hi-Tech projector for spreading the Kirtans and message of the Guru. Thousands of devotees from different regions visit this Gurudwara daily and pay homage to the Sri Guru Granth Sahib.</strong></p>
    <br>
    <li>Day 4</li>
    <p><strong>Drive to Patiala, check in the hotel. Start your tour Qila Mubarak Complex: Quila Mubarak a Historical National Monument of Patiala is situated in the heart of the city and the oldest part of Patiala. The palace was built by Maharaja Ala Singh in 1764. The Qila Mubarak complex stands in 10-acre ground and contains the main palace or Qila Androon (literally,'inner fort'), the guesthouse or Ran Baas and the Darbar Hall.</strong></p>
    <li>Day 5</li>
    <p><strong>Drive to Chandigarh, check in hotel, Start your city tour with Rock Garden: Rock Garden is probably Chandigarh's premier attraction, a popular spot for tourists. It was created by Nek Chand Saini, a resident of the city, in 1958.A visit to the Rock Garden is a must for all the tourists travelling to Chandigarh. The first phase of the rock Garden is a small canyon. The canyon opens into a series of chambers, each one filled with scores of human and animal forms in concrete and broken ceramic or glass.</strong></p>
  </ul>
</div>
</body>
</html>