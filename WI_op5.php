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
  background-image: url('images\\udaipur.jpg');
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

<h1>Rajasthan</h1>
<img id="image" src="images\\udaipur2.jpg" style="width:700px; height:400px">
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

var imageSources = ["images\\udaipur3.jpg", "images\\udaipur2.jpg", "images\\udaipur1.jpg"]

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
    Rajasthan, state of northwestern India, located in the northwestern part of the Indian subcontinent. It is bounded to the north and northeast by the states of Punjab and Haryana, to the east and southeast by the states of Uttar Pradesh and Madhya Pradesh, to the southwest by the state of Gujarat, and to the west and northwest by the provinces of Sindh and Punjab in Pakistan. The capital city is Jaipur, in the east-central part of the state. Rajasthan, meaning “The Abode of the Rajas,” was formerly called Rajputana, “The Country of the Rajputs” (sons of rajas [princes]). Before 1947, when India achieved independence from British rule, it comprised some two dozen princely states and chiefships, the small British-administered province of Ajmer-Merwara, and a few pockets of territory outside the main boundaries. After 1947 the princely states and chiefships were integrated into India in stages, and the state took the name Rajasthan. It assumed its present form on November 1, 1956, when the States Reorganization Act came into force. Area 132,139 square miles (342,239 square km). Pop. (2011) 68,621,012.
  </font>
</p>
<div class = "itih">
  Itinerary
</div>
<div>
  <ul class = "iti" id = "pformat">
    <li>Day 1</li>
    <p><strong>
      Arrival at Jaipur airport / railway station / Bus Station pick-up and transfer to Hotel Teej. Rest of the day at leisure. Evening visit to Nahargarh Fort.    
    </strong><p>
    <li>Day 2</li>
    <p><strong>
    After Break Fast Morning sight seeing of Amber fort, have elephant ride from the foot hill to the top of the hill (optional). On the way visit Hawa Mahal, Jal Mahal. After Lunch visit to City Palace Museum and Observatory. Evening free for shopping    
    </strong></p>
    <li>Day 3</li>
    <p><strong>
    After Break Fast Morning visit to Junagarh Fort. Afternoon excursion to Deshnokh Karni Mata temple also known as the temple of rats, visit Bhandasar Jain Temple and Laxminarayan temple.    </strong></p>
    <li>Day 4</li>
    <p><strong>
    After breakfast drive to Jaisalmer, enroute visiting Kolayat with its temples, and Tea Break at Motel Pokaran After Darshan of Ramdeoji shrine at Ramdeora.
    </strong></p>
    <li>Day 5</li>
    <p><strong>
    In morning After Break Fast sightseeing of Fort, Jain Temples, Havelis and Gadhisar lake. In afternoon visit to Lodurva Jain temples and drive to Sam sand dunes to have camel ride(optional) at sunset point
    </strong></p>
    <li>Day 6</li>
    <p><strong>
    After breakfast drive to Jodhpur enroute visiting the temples of Osian. Arrive at Jodhpur in after noon
    </strong></p>
    <li>Day 7</li>
    <p><strong>
    After breakfast sightseeing of Mehrangarh fort, Jaswant Thada and Mandore Garden. Depart for Mt. Abu. Arrive there by after noon. After luch visit to Delwara Jain Temple, Shiva Temple, and Guru Shikhar. After sightseeing of the Temple return to the Hotel. In evening visit to Honey moon point/Sunset Point and Nakki Lake
  </ul>
</div>
</body>
</html>