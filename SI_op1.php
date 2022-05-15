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
  background-image: url('images\\mysore1.jpg');
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

<h1>Karnataka</h1>
<img id="image" src="images\\mysore2.jpg" style="width:700px; height:400px">
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

var imageSources = ["images\\mysore3.jpg", "images\\mysore4.jpg", "images\\mysore2.jpg"]

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
    Karnataka, formerly (until 1973) Mysore, state of India, located on the western coast of the subcontinent. It is bounded by the states of Goa and Maharashtra to the north, Telangana to the east, Tamil Nadu to the southeast, and Kerala to the south and by the Arabian Sea to the west. The state extends for about 420 miles (675 km) from north to south and for about 300 miles (480 km) from east to west. Its coastline stretches for some 200 miles (320 km). The capital is Bengaluru (Bangalore), near the southeastern border. Before the independence of India in 1947, Mysore was a prosperous and progressive but landlocked princely state, with an area of less than 30,000 square miles (78,000 square km), located on the Karnataka Plateau. The transfer of additional territories to the state in 1953 and 1956 united the Kannada-speaking peoples, gave the state an outlet to the sea, and greatly extended its boundaries. The state took its present name, a Kannada word meaning “lofty land,” in 1973. Area 74,051 square miles (191,791 square km). Pop. (2011) 61,130,704.
  </font>
</p>
<div class = "itih">
  Itinerary   
</div>
<div>
  <ul class = "iti" id = "pformat">
    <li>Day 1</li>
    <p><strong>
      Today you will visit the famous botanical gardens of Lal Bagh, Tipu Sultan’s Palace, Taurus temple and Vidhana Soudha of Bangalore.    
    </strong><p>
    <li>Day 2</li>
    <p><strong>
      Then taking breakfast at your hotel in Bangalore, you drive to Mysore. During your trip, take a break to Srirangapatna and Somnathpur to visit the ruins of Tipu Sultan of the capital and the temple of Keshava respectively. On achieving Mysore, check-in. Remove for the night in the hotel    
    </strong></p>
    <br>
    <li>Day 3</li>
    <p><strong>
      After lunch, now you move around the city of Mysore. Your itinerary will include classical Vrindavan Gardens, art gallery Chamarajendra, Maharaja Palace's and St. Philomena's church In the evening you can stroll through Mysore markets. At night, unwind in the hotel.    
    </strong></p>
    <br>
    <li>Day 4</li>
    <p><strong>
      After lunch in the hotel, you will leave for Chikmagalur. On your way you stop in to visit a Shravanabelagola Jain pilgrimage site famous for its image height of 17 meters Lord Gomateshvara, which was carved out of rock Indragiri hill. Out of Chikmagalur reached, you will arrive at the hotel. Your stay overnight would be at the hotel.    
    </strong></p>
    <li>Day 5</li>
    <p><strong>
      After lunch, you visit the temples at Belur and Halebid. You will also visit beautiful hill stations Kemmanagundi and Kudremukh, where you can get your cameras to capture some of the best photographs of your life. In equalize, you can explore the local markets of Chikmagalur. Remove for the night in your hotel    
    </strong></p>
    <li>Day 6</li>
    <p><strong>
      Then take your breakfast today you will travel north to Hospet. Out of Hospet reached, you will arrive at the hotel. Appointments comfortable and be ready to go for a sightseeing trip that will include the archaeological museum, Himavat Kedai Waterfall, Jogimatti, and Ankali Murugharajendra Matha. Call it a day, stay for the night in your hotel. After lunch, you drive to Hampi, a World Heritage. Hampi to infringe on, check-in. Relax for some time and then you move to visit the Vitthal temple, the temple Virupakshi Chamber of victory, Hazara Ramaswamy Temple balance of King's, Lotus Mahal and mustard Ganesha. You must be tired so far. So sit back for the night in hotel.
    </strong></p>
    <li>Day 7</li>
    <p><strong>
      Then take your breakfast today you explore the ruins at Hampi exceptional. Your itinerary will also include Noble's Palace, tank and Mahanavami Dibba of Pushkarini. You can spend the evening entertainment. You can also explore the locals Hampi markets and bright forget to bargain while buying things. Remove for the night in your hotel.
    </strong></p>
  </ul>
</div>
</body>
</html>