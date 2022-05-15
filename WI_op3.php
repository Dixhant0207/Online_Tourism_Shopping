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
  background-image: url('images\\bhuj.jpg');
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

<h1>Gujarat</h1>
<img id="image" src="images\\bhuj2.jpg" style="width:700px; height:400px">
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

var imageSources = ["images\\bhuj3.jpg", "images\\bhuj2.jpg"]

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
  Gujarat, state of India, located on the country’s western coast, on the Arabian Sea. It encompasses the entire Kathiawar Peninsula (Saurashtra) as well as the surrounding area on the mainland. The state is bounded primarily by Pakistan to the northwest and by the Indian states of Rajasthan to the north, Madhya Pradesh to the east, and Maharashtra to the southeast. Gujarat also shares a small segment of its southeastern border with the Indian union territory of Dadra and Nagar Haveli, and, together with the Arabian Sea, it surrounds the territory of Daman and Diu. The coastline of Gujarat is 992 miles (1,596 km) long, and no part of the state is more than 100 miles (160 km) from the sea. The capital is Gandhinagar, on the outskirts of the north-central city of Ahmadabad (Ahmedabad)—the former capital, the largest city in the state, and one of the most-important textile centres in India. It was in Ahmadabad that Mohandas (Mahatma) Gandhi built his Sabarmati ashram (Sanskrit: ashrama, “retreat” or “hermitage”) as a headquarters for his campaigns against British rule of India. Gujarat draws its name from the Gurjara (supposedly a subtribe of the Huns), who ruled the area during the 8th and 9th centuries CE. The state assumed its present form in 1960, when the former Bombay state was divided between Maharashtra and Gujarat on the basis of language. Area 75,685 square miles (196,024 square km). Pop. (2011) 60,383,628
  </font>
</p>
<div class = "itih">
  Itinerary
</div>
<div>
  <ul class = "iti" id = "pformat">
    <li>Day 1</li>
    <p><strong>
    Get ready to leave for the sightseeing tour of Ahmedabad. We will visit the Gandhi Ashram next to the banks of the River Sabarmati. It is the place where Mahatma Gandhi set out on his Dandi March and has now been converted into a museum. You can witness the intricate carvings at the Hate Singh Jain Temple and marvel at the grand architecture of the Akshardham Temple here. Later return back to the hotel for an overnight stay.
    </strong><p>
    <li>Day 2</li>
    <p><strong>
    Today post morning breakfast, check out from the hotel and leave for Jamnagar by road. En-route, visit the ancient and delightfully carved steep well. On reaching Jamnagar, check into the hotel. In the evening, you can visit the Bala Hanuman Temple. It is listed in the Guinness Book of World Records for the continuous chanting of 'Shri Ram, Jai Ram, Jai Jai Ram' by its devotees since 1964. Enjoy an overnight stay in the hotel in Jamnagar.    </strong></p>
    <li>Day 3</li>
    <p><strong>
    In the morning post breakfast, check out from the hotel and leave by road for Dwarka. On reaching Dwarka, check into the hotel. Post lunch, we will visit the Beyt Dwarka, believed to be the original abode of Lord Krishna and the famous 'Nageshwar Jyotirlinga Temple', which is home to one of the 12 Swayambhu Jyotirlingas in the world. Later, we will visit the Gopi Talav, the lake where Gopis are said to have reunited with Lord Krishna. Thereafter, we will visit the Rukmini Devi Temple, dedicated to the wife of Lord Krishna. Later, return back to the hotel to take pleasure of an in Dwarka.    </strong></p>
    <li>Day 4</li>
    <p><strong>
    After breakfast in the morning, we will proceed to visit Somnath. En-route, we will visit the famous Kirti Mandir in Porbandar, the Haveli in which Mahatma Gandhi was born. Now it has been converted into a museum. Also, we will visit the Sudama Temple, which is built to honour the friendship between Krishna and Sudama. On reaching Somnath, go to the Somnath Temple and Bhalka Tirth Temple, where Lord Krishna is said to have been accidentally shot in the foot. Enjoy an overnight stay in Somnath    </strong></p>
    <li>Day 5</li>
    <p><strong>
    Post breakfast in the morning, check out from the hotel and drive towards Gir. Sasan Gir is the famed place for Lion sightseeing and is well acknowledged as the only forest reserve in Asia for housing wild Lions,. Other animal species include the Sambhar, Spotted Deer, Nilgai and the Chausingha (the world's only four-horned antelope) can also be spotted in the forest. Even crocodiles can be seen in the reservoir and rivers flowing through the sanctuary. In the afternoon, we will go for a jungle safari in the National Park. Enjoy a night stay in Gir    </strong></p>
  </ul>
</div>
</body>
</html>