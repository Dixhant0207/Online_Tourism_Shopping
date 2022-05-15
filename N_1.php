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
  background-image: url('images\\delhi1.jpg');
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

<h1>New Delhi</h1>
<img id="image" src="images\\delhi2.jpg" style="width:700px; height:400px">
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

var imageSources = ["images\\delhi3.jpg", "images\\delhi4.jpg", "images\\delhi2.jpg"]

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
  New Delhi, national capital of India. It is situated in the north-central part of the country on the west bank of the Yamuna River, adjacent to and just south of Delhi city (Old Delhi) and within the Delhi national capital territory. In December 1911 King George V of Britain decreed that the capital of British India would be moved from Calcutta (now Kolkata) to Delhi. Construction began in 1912 at a site about 3 miles (5 km) south of the Delhi city centre, and the new capital was formally dedicated in 1931. The straight and diagonal pattern of the broad tree-lined avenues in New Delhi, with extensive green spaces and wide vistas, contrasts sharply with the crowded, narrow, and winding streets characteristic of Old Delhi. The main east-west axis of New Delhi is Central Vista Park, which is flanked by government buildings, museums, and research centres in a parklike setting. The city is governed by the appointed New Delhi Municipal Council (NDMC). Area city, 16.5 square miles (42.7 square km). Pop (2001) 302,363.  </font>
</p>
<div class = "itih">
      Itinerary   
</div>
<div>
  <ul class = "iti" id = "pformat">
    <li>Day 1</li>
    <p><strong>New Delhi, national capital of India. It is situated in the north-central part of the country on the west bank of the Yamuna River, adjacent to and just south of Delhi city (Old Delhi) and within the Delhi national capital territory. In December 1911 King George V of Britain decreed that the capital of British India would be moved from Calcutta (now Kolkata) to Delhi. Construction began in 1912 at a site about 3 miles (5 km) south of the Delhi city centre, and the new capital was formally dedicated in 1931. The straight and diagonal pattern of the broad tree-lined avenues in New Delhi, with extensive green spaces and wide vistas, contrasts sharply with the crowded, narrow, and winding streets characteristic of Old Delhi. The main east-west axis of New Delhi is Central Vista Park, which is flanked by government buildings, museums, and research centres in a parklike setting. The city is governed by the appointed New Delhi Municipal Council (NDMC). Area city, 16.5 square miles (42.7 square km). Pop (2001) 302,363.</strong><p>
    <li>Day 2</li>
    <p><strong>After a delicious breakfast at the hotel, you’ll be taken on a tour to explore Red Fort, Raj Ghat, Indira Gandhi Museum, India Gate, and the Rashtrapati Bhawan. You’ll have lunch in a nearby restaurant and then will be taken to Lodhi Garden, Humayun’s Tomb, and Qutub Minar in the end. This Delhi day tour also includes exploring Chandni Chowk. Back to hotel for dinner and overnight stay.</strong></p>
  </ul>
</div>
</body>
</html>