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
  background-image: url('images\\chennai1.jpg');
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

<h1>Tamil Nadu</h1>
<img id="image" src="images\\chennai2.jpg" style="width:700px; height:400px">
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

var imageSources = ["images\\chennai3.jpg", "images\\chennai4.jpg", "images\\chennai2.jpg"]

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
  Tamil Nadu, state of India, located in the extreme south of the subcontinent. It is bounded by the Indian Ocean to the east and south and by the states of Kerala to the west, Karnataka (formerly Mysore) to the northwest, and Andhra Pradesh to the north. Enclosed by Tamil Nadu along the north-central coast are the enclaves of Puducherry and Karaikal, both of which are part of Puducherry union territory. The capital is Chennai (Madras), on the coast in the northeastern portion of the state. Tamil Nadu represents the Tamil-speaking area of what was formerly the Madras Presidency of British India. The Tamils are especially proud of their Dravidian language and culture, and they have notably resisted attempts by the central government to make Hindi (an Indo-Aryan language) the sole national language. While it has an industrial core in Chennai, the state is essentially agricultural. Area 50,216 square miles (130,058 square km). Pop. (2011) 72,138,958  </font>
</p>
</div>
<div class = "itih">
  Itinerary
</div>
<div>
  <ul class = "iti" id = "pformat">
    <li>Day 1</li>
    <p><strong>
      Arrival at the Chennai airport. Our representative meets and welcomes you on your arrival to Chennai Railway station/Airport. Later our representative assists you to transfer to Cochin Hotel. Later visit Kapaleeswarar Temple and Ashtalakshmi Temple, evening free to Explore the beaches, overnight stay at hotel.
    </strong><p>
    <li>Day 2</li>
    <p><strong>
    Morning, after breakfast drive to Mahabalipuram visit Crocodile Farm and Dakshinachitra (Craft village). Visit Shore Temple (UNESCO World Heritage site) and other heritage sites (Pancha Ratha, Varaha Cave Temple, Tiger Cave, Krishna Mandapam, Balancing rock, Arjuna's Penance, all within 1-2 km radius) in the evening. Overnight in Mahabalipuram.    </strong></p>
    <br>
    <li>Day 3</li>
    <p><strong>
    After breakfast drive to Tanjore, Upon arrival, check in at pre-booked hotel then explore the local tourist attractions which include Brihadeeswara temple, Nandi temple and the Royal Palace complex. Overnight in Tanjore.    <br>
    <li>Day 4</li>
    <p><strong>
    Morning Proceed to Madurai on the way visit Trichy where you see the Rock Fort Temple, Jambukeswarar Temple and Srirangam Temple. Now proceed to Madurai. On arrival check in at hotel. Later explore the marvelous temples and other attractions of this city. The famous places you will visit here include Meenakshi Amman Temple, Gandhi Museum and Thirumalai Nayak Palace. Drive back to hotel. Overnight in Madurai.    </strong></p>
    <li>Day 5</li>
    <p><strong>
    After breakfast at hotel. Drive towards Rameshwaram. On arrival check in at pre-booked hotel then go for city tour covering the sightseeing of the most famous attraction of this place is Rameshwaram temple, a prominent Jyotirlinga of Lord Shiva. Other temples you will visit here include Ramjharoka Temple, Kothandaramaswamy Temple and Ramanathaswamy Temple. Stay overnight at the hotel in Rameshwar    
    <li>Day 6</li>
    <p><strong>
    Today, after breakfast at hotel leave for Kanyakumari, it is the city where you can witness the confluence of three mighty water bodies- Arabian Sea, Indian Ocean and the Bay of Bengal. The famous places you will visit here include Vivekananda Rock Memorial, Suchindram Temple, Kanyakumari Temple and the Gandhi Mandapam. Enjoy Sunset of Kanyakumari from the tip of India, overnight at Hotel.
    </strong></p>
  </ul>
</div>
</body>
</html>