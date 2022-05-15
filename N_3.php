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
  background-image: url('images\\agra1.jpg');
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

<h1>Uttar Pradesh</h1>
<img id="image" src="images\\agra2.png" style="width:700px; height:400px">
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

var imageSources = ["images\\agra3.jpg", "images\\agra4.jpg", "images\\agra2.png"]

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
  Uttar Pradesh, the most populous and fourth largest state of India. It lies in the north-central part of the country. Uttar Pradesh is bordered by the state of Uttarakhand and the country of Nepal to the north, the state of Bihar to the east, the states of Jharkhand and Chhattisgarh to the southeast, the state of Madhya Pradesh to the south, and the states of Rajasthan and Haryana and the national capital territory of Delhi to the west. On January 26, 1950, when India became a republic, the state was given its present name, Uttar Pradesh (literally, “Northern State”). Its capital is Lucknow, in the west-central part of the state. Area 93,933 square miles (243,286 square km). Pop. (2011) 199,581,477.  </font>
</p>
<div class = "itih">
  Itinerary   
</div>
<div>
  <ul class = "iti" id = "pformat">
    <li>Day 1</li>
    <p><strong>Upon your arrival at the Varanasi Airport. Later in the afternoon, get ready and come out of the hotel to explore some of the most important and famous temples in Varanasi. Today you will be visiting the popular temples like Tulsi Birla Manas Temple, Mother India Temple, Hanuman Temple, Sankat Mochan Temple, and also the newly built Vishwanath Temple. Also, participate in the grand evening Ganga Aarti ceremony at the popular Dashashwamedh Ghat.</strong><p>
    <li>Day 2</li>
    <p><strong>Wake up little early today and get ready for enjoying the boat ride in the holy River the Ganges and then proceed towards exploring all the bathing Ghats. Walk through the narrow lanes of the city and also perform the special puja rituals organized at the ghats. Varanasi Ghats are pretty popular for organizing Pind Daan performed to pay respect to your forefathers. After performing the puja rituals return to the hotel for the morning meal. After enjoying the scrumptious breakfast, proceed towards Sarnath. After the completion of a fun-filled day excursion, return to the hotel for the delectable night meal which wll then be followed by a relaxing overnight stay.</strong></p>
    <br>
    <li>Day 3</li>
    <p><strong>Post breakfast, you will drive towards Allahabad and on the way to Allahabad, make a halt at Vindhyachal. After reaching the destination, take a holy dip into the Sangam and explore those places popular for religious and historical significance. After exploring the places, you will be transferred to the pre-booked hotel in Allahabad for a relaxing overnight stay.</strong></p>
    <br>
    <li>Day 4</li>
    <p><strong>After savoring yourself with the hearty breakfast, drive towards Ayodhya. On the way to Ayodhya, visit Dewa Sharif which represents the beautiful symbiosis of love and brotherhood. After this, continue driving towards Ayodhya and after reaching the religious destination, head towards Sri Ram Janm Bhoomi where the great Hindu Lord Rama took bith. Also, visit the famous Sarayu ghats and Hanuman Garhi. After visiting the place, drive back to Lucknow in the evening for dinner and overnight halt in the hotel.</strong></p>
    <li>Day 5</li>
    <p><strong>On the final day of your journey, drive towards Mathura and Vrindavan and visit the popular Braj Bhoomi. After exploring the popular leftover destinations of the trip, head towards Delhi and spend your overnight stay in Delhi or you can also opt to fly back towards your home. This is how your heritage and adventure tour of Uttar Pradesh ends here with plenty of unforgettable memories.</strong></p>
  </ul>
</div>
</body>
</html>