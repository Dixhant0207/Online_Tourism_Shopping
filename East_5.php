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
  background-image: url('images\\tripura_back.jpg');
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

<h1>Tripura</h1>
<img id="image" src="images\\agr2.png" style="width:700px; height:400px">
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

var imageSources = ["images\\agr3.jpg", "images\\agr2.png"]

var index = 0;
setInterval (function(){
  if (index == imageSources.length) {
    index = 0;
  }
  document.getElementById("image").src = imageSources[index];
  index++;
} , 2000);

</script>
    <p id="ptype" style="font-family: cursive;">
        <font size=+2>Tripura, state of India. It is located in the northeastern part of the subcontinent. It is bordered to the north, west, and south by Bangladesh, to the east by the state of Mizoram, and to the northeast by the state of Assam. It is among the smallest of India’s states and is located in an isolated hilly region of the country, with various indigenous peoples—or tribes—accounting for a significant portion of the population. The capital is Agartala, near the Bangladesh border in the northwestern part of the state. Area 4,049 square miles (10,486 square km). Pop. (2011) 3,671,032.</font>
    </p>
<div class = "itih">
  Itinerary   
</div>
<div>
  <ul class = "iti" id = "pformat">
    <li>Day 1</li>
    <p><strong>Your wonderful expedition to Tripura will start from your onward destination which would either the railway station or airport in Guwahati, Assam, whichever of your choice.At the airport/railways station, you will meet with our representative who will escort you to a pre-booked hotel.After checking in to the hotel, rest of the day will be free to get rid of the jet lag.Dinner and overnight stay will be provided at the hotel.</strong><p>
    <li>Day 2</li>
    <p><strong>Starts with a one hour journey to Shepahijala Wildlife Sanctuary. It houses the only zoo in India which is inside a sanctuary. Spread across an area of 18.5 km, the Shephaijala is home to the rare Hoolock Gibbon as well as hundreds of species of residential and migratory birds. There’s a lot you can do here - visit the zoo and the botanical gardens, as well as enjoy elephant rides and boating too! After Spending some time with the animals, we will drive towards Neermahal, the grand and impressive ‘Lake Palace of Tripura’. We will have our lunch at Guest House by the lake. the Neer-Mahal (Water Palace / Palace on Water) is the ‘only lake palace’ in all of India’s northeast. The major attractions of this heritage palace are its Open-Air-Theatre, the Andar Mahal, the sound and light show, and the glorious combination of Hindu and Muslim architecture. After enjoying the boat ride, we will start for Udaipur, the temple town of Tripura, to offer our prayer to l Goddess, Tripura Sundari early in the morning. Stay in Udaipur.</strong></p>
    <br>
    <li>Day 3</li>
    <p><strong>Tripureshwari temple has a pond inside its boundary which is famous for the soft shelled turtles, a unique species which is not found anywhere in the world. You can also witness the conservation efforts given by environmentalist to keep the few members alive in this world saving them from extinction. After Offering puja, we will head towards Dumboor Lake. The lake is spread across an area of 41 sq km. 120 km from Agartala, the Dumboor Lake is named after Lord Shiva’s Dumroo owing to its tabour or a small drum-like shape. The blue serene lake water looks brilliant against the backdrop of the lush greenery all around. Many species of migratory birds visit the lake, and the 48 islands here make the Dumoor Lake a beauty beyond compare. After a tiring day, night halt at Udaipur.</strong></p>
    <br>
    <li>Day 4</li>
    <p><strong>Visit some local spots like Bhubaneshwari temple and other local temples of the temple town. After a day’s visit, we will get back to Agartala, to prepare ourselves for North Tripura tour.CHABIMURA ROCK MURALS - On the banks of the Gomati River, around 7 km from the town of Amarpur, you can spot some of the most superb rock carved murals of Hindu Gods and Goddesses such as Lord Shiva, Vishnu, Kartika and Devi Durga. Dating back to 15th - 16th century, the Debtamura or the Chabimura Rock Murals adorn a steep mountain wall and add to the region’s mystic beauty. Undoubtedly, your visit to Tripura will be incomplete without a visit here. Additional one day is required to visit this place.</strong></p>
    <li>Day 5</li>
    <p><strong>UNAKOTI - About 178 km from Agartala lays Unakoti, a ‘Shaiba’ (Saivite) pilgrimage site that can be dated back to the 7th – 9th century. Home to awe-inspiring stone images, waterfalls and beautiful rock-carved figures of Gods and Goddesses, Unakoti is a popular tourist destination and a major contributor towards Archaeological Tourism in Tripura. The large central Shiva head and Ganesha figures are the highlights of the beautiful rock-cut carvings found here. Stay at Dharmanagar.</strong></p>

  </ul>
</div>
</body>

</html>