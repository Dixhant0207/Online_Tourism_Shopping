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
  background-image: url('images\\ap_backjpg.jpg');
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

<h1>Arunachal Pradesh</h1>
<img id="image" src="images\\taw2.png" style="width:700px; height:400px">
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

var imageSources = ["images\\taw3.jpg", "images\\taw2.png"]

var index = 0;
setInterval (function(){
  if (index == imageSources.length) {
    index = 0;
  }
  document.getElementById("image").src = imageSources[index];
  index++;
} , 2000);

</script>
  <div>
    <p style="font-family: cursive;">
      <font size=+2>
        Arunachal Pradesh, state of India. It constitutes a mountainous area in the extreme northeastern part of the country and is bordered by the kingdom of Bhutan to the west, the Tibet Autonomous Region of China to the north, Myanmar (Burma) and the Indian state of Nagaland to the south and southeast, and the Indian state of Assam to the south and southwest. The capital is Itanagar.
        Arunachal Pradesh, meaning “Land of the Rising Sun,” long has been a recognized region of the Indian subcontinent, receiving mention in such ancient Hindu literature as the Kalika-purana and the epic poems Mahabharata and Ramayana. Formerly known as the North East Frontier Agency (from the British colonial era), the area was part of Assam until it was made the Indian union territory of Arunachal Pradesh in 1972, and in 1987 it became an Indian state. The region, however, has been the subject of an ongoing sovereignty dispute between India and China. Area 32,333 square miles (83,743 square km). Pop. (2011) 1,382,611.

      </font>
    </p>
</div>
<div class = "itih">
      Itinerary   
</div>
<div>
  <ul class = "iti" id = "pformat">
    <li>Day 1</li>
    <p><strong>Welcome to Guwahati. On arrival at Guwahati Airport/Station meet your driver and drive to Tezpur. Tezpur is a charming town with some beautifully kept parks, attractive lakes and enchanting views of the mighty Brahmaputra River as it laps the town’s edge.</strong><p>
    <li>Day 2</li>
    <p><strong>After breakfast drive to Tawang. En-route witness the snowcapped Sella Pass at 14000 ft and the Jaswant Garh War Memorial. (Legend has it that Jaswant (Mahavir Chakra Awardee (Posthumous) of 4th Batallion Garhwal Rifles), fought a lone battle against the invading Chinese during the 1962 war. His spirit is still believed to protect the place). Tawang is situated at an altitude of 3500m. The natural beauty and solitude of Gudpi and Chong-Chugmi ranges, Tawang chu River and Tawang Valley are mesmerizing. The inhabitants of the districts are all of Monpa tribes except Shyo village which is dominated by people of Tibetan Origin. Overnight in Tawang.</strong></p>
    <br>
    <li>Day 3</li>
    <p><strong>After Breakfast, proceed for sightseeing of 400 years (17th century) old Tawang Monastery which is the second largest monastery in the world after Potala Palace in Tibet. The building is about 113 feet long and 80 feet wide and houses valuable antiquities, books and manuscripts-handwritten and printed. Later visit Tawang War Memorial, a 40-foot-high multi-hued memorial, has a structure constructed in stupa design. Dedicated to the martyrs of Sino-Indo War held in 1962, this memorial is nestled among beautiful peaks, which overlooks the Tawang-Chu valley. Rest of the day free to stroll round the streets of the town. Overnight in Tawang.</strong></p>
    <br>
    <li>Day 4</li>
    <p><strong>After breakfast drive to Bomdila. Bomdila is the headquarters of West Kameng district located at the height of 8500 ft above the sea level. It has a lot of attractions for the tourists with its cool climate, Apple orchards, artistic people, snow-capped Himalayan peaks and Buddhist Gompas. The Buddhist monastery of Bomdila is the repository of culture. Explore the town in the afternoon. Overnight in Bomdila.</strong></p>
    <li>Day 5</li>
    <p><strong>After breakfast, drive to Guwahati. The gateway to the northeast and the largest and most cosmopolitan city in the region, Guwahati serves as the starting block for most Northeast itineraries. It’s a somewhat featureless city – a prosaic heap of glass and concrete for the most part – but there are scattering of interesting temples to explore. Walk its back alleys and old quarters, however, and you will be able to salvage a generous amount of local flavour that lingers amid its suburban sprawl of ponds, palm trees, small single-storey traditional houses and old colonial-era mansions. Overnight in Guwahati.</strong></p>
  </ul>
</div>
</body>

</html>