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
  background-image: url('images\\warangal.jpg');
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

<h1>Telangana</h1>
<img id="image" src="images\\warangal2.jpg" style="width:700px; height:400px">
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

var imageSources = ["images\\warangal3.jpg", "images\\warangal4.jpg", "images\\warangal2.jpg"]

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
  <font size =+2>
  Telangana, also spelled Telengana or Telingana, constituent state of south-central India. It is bordered by the states of Maharashtra to the north, Chhattisgarh and Odisha to the northeast, Andhra Pradesh to the southeast and south, and Karnataka to the west. The area of what is now Telangana constituted the north-central and northeastern portions of Andhra Pradesh for almost six decades, but on June 2, 2014, that territory was calved off to form a separate state. The capital of both Telangana and Andhra Pradesh is Hyderabad, in west-central Telangana  </font>
</p>
<div class = "itih">
  Itinerary
</div>
<div>
  <ul class = "iti" id = "pformat">
    <li>Day 1</li>
    <p><strong>
    After breakfast in the morning, we will leave to visit the famous architectural heritage sites of Hyderabad. We will head to the royal Tombs of the Qutb Shahi Kings and the magnificent Golkonda Fort also known as Golconda or Golla konda. This fort is the capital of the medieval sultanate of the Qutb Shahi dynasty and is located 11 kms of Hyderabad. Thereafter, we will visit Nizams Museums, which is located in Hyderabad at Purani Haveli. It is a palace of the former Nizams and showcases the gifts that the last Nizam of Hyderabad state, Osman Ali Khan, Asaf Jah VII received on his silver jubilee celebrations. Afterwards, we will head towards Birla Temple, a Hindu temple that is built on a 280 feet high hillock called Naubath Pahad. Rest the evening is free at leisure. During your free time you can explore the local markets and buy artefacts as gifts. Later, we will return back to the hotel for dinner followed by an overnight stay.    </strong><p>
    <li>Day 2</li>
    <p><strong>
    We will start our day a bit early in the morning and have breakfast before leaving to visit the other major tourist places of Hyderabad city. In our today's day tour, we will be visiting 'One Man Collection' - Salarjung Museum. This national museum comprise of a wide collection of ceramics, metallic artifacts, paintings, manuscripts, carpets, carvings, textiles and clocks. Also, visitors can witness a vast collection of furniture from various countries across the globe including North America, Persia, Egypt, Europe, Japan, Burma and many others. After exploring the museum, we will head towards Charminar, well known as The Arc de Triomphe of the east. It is the second biggest Mosque of India. Later, we will return back to the hotel for a relaxing overnight stay.    </strong></p>
    <br>
    <li>Day 3</li>
    <p><strong>
    In the morning after breakfast, we will check out from the hotel in Hyderabad and leave for Warangal by road. On the way, we will stop to visit Pembarti Village for its carpet weaving center, Brass making, and Kulpakji (Kolanupaka) for the 2000 years Jain Temple. Afterwards, we will continue our drive to Warangal. On reaching, check in at the already booked hotel and rest for some time. The rest of the day is free at leisure. During your free time you can either rest in the room or go out for exploring the major tourist attractions of the place. Enjoy dinner followed by an overnight stay in the hotel.    <br>
    <li>Day 4</li>
    <p><strong>
    Today we will start our day a bit early in the morning and have breakfast before checking out from the hotel and leaving by road for Vijayawada. On the way, we will stop to visit the Ramappa Temple, the 1000 Pillar Temple. One can witness sculpted figures that are inspired from Hindu mythology drawn on the wall panels, pillars and ceiling. We will also visit the mud-brick forts that are ruins today.    </strong></p>
  </ul>
</div>
</body>
</html>