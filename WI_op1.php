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
  background-image: url('images\\goa.jpg');
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

<h1>Goa</h1>
<img id="image" src="images\\goa1.jpg" style="width:700px; height:400px">
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

var imageSources = ["images\\goa3.jpg", "images\\goa4.jpg", "images\\goa1.jpg"]

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
  Goa, state of India, comprising a mainland district on the country’s southwestern coast and an offshore island. It is located about 250 miles (400 km) south of Mumbai (Bombay). One of India’s smallest states, it is bounded by the states of Maharashtra on the north and Karnataka on the east and south and by the Arabian Sea on the west. The capital is Panaji (Panjim), on the north-central coast of the mainland district. Formerly a Portuguese possession, it became a part of India in 1962 and attained statehood in 1987. Area 1,429 square miles (3,702 square km). Pop. (2011) 1,457,723.
  </font>
</p>
<div class = "itih">
  Itinerary
</div>
<div>
  <ul class = "iti" id = "pformat">
    <li>Day 1</li>
    <p><strong>
    Meet and get greeted by our official, who will ensure a smooth transfer to your pre-booked hotel and help you out with the check-in formalities. Enjoy the first day of your Goa trip leisurely, go out exploring the surroundings or the beaches nearby while having a great time with your loved ones. In the evening, reach the Santa Monica Jetty under the Atal Setu to board your Sunset cruise on the Mandovi river. Spend the evening along with the sun, sea, and wind and get a glimpse of historical sights and treasured wonders of this tiny yet mesmerizing state while cruising through the Mandovi River. You can also enjoy the live music in the form of a DJ and the cultural performances on board as the sun sets, leaving a colorful sky behind. Return back to your hotel for an overnight stay in Goa.
    </strong><p>
    <li>Day 2</li>
    <p><strong>
    Wake up in the morning, have a delicious breakfast, and get ready for a tour to South Goa. Begin your day by visiting the Shri Manguesh temple that is dedicated to Bhagavan Manguesh, an incarnation of Shiva and is worshipped here as Shivlinga. Later, visit the old parts of Goa that house some of the oldest churches in the country. You will be visiting The Bom Jesus Basilica which is a UNESCO World Heritage Monument and has the relics of Saint Francis Xavier are enshrined here. Se Cathedral is another must-visit church in Goa, as it was built over a span of 100 years and its vaulted interior overwhelms visitors with its sheer grandeur. Stroll through the shimmering sands of Miramar Beach, which is located on the estuary of the Mandovi river opening to the Arabian Sea and offers panoramic views of the majestic Fort Aguada across. Spend the evening at the Dona Paula beach, which is the meeting point of the Zuari and the Mandovi river where you can spend some tranquil moments. In the evening, you can go Shopping at the Panjim flea market and collect souvenirs for your loved one. Return back to the hotel for your overnight stay in Goa.
    </strong></p>
    <li>Day 3</li>
    <p><strong>
    Wake up in the morning, have a hearty breakfast, pack your bags and complete the check-out formalities. Take along the bundle of joyful memories from the beaches of Goa to cherish for a lifetime.
    </strong></p>
  </ul>
</div>
</body>
</html>