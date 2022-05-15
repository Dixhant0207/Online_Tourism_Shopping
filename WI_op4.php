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
  background-image: url('images\\mumbai.jpg');
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

<h1>Maharashtra</h1>
<img id="image" src="images\\mumbai1.jpg" style="width:700px; height:400px">
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

var imageSources = ["images\\mumbai3.jpg", "images\\mumbai2.jpg", "images\\mumbai1.jpg"]

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
  <font size='+2'>
    Maharashtra, state of India, occupying a substantial portion of the Deccan plateau in the western peninsular part of the subcontinent. Its shape roughly resembles a triangle, with the 450-mile (725-km) western coastline forming the base and its interior narrowing to a blunt apex some 500 miles (800 km) to the east. Maharashtra is bounded by the Indian states of Gujarat to the northwest, Madhya Pradesh to the north, Chhattisgarh to the east, Telangana to the southeast, Karnataka to the south, and Goa to the southwest and by the union territory of Dadra and Nagar Haveli and the Arabian Sea to the west. Maharashtra’s capital, Mumbai (formerly Bombay), is an island city on the western coast, connected to the mainland by roads and railways. Aptly called the gateway of India, Maharashtra is one of India’s biggest commercial and industrial centres, and it has played a significant role in the country’s social and political life. Maharashtra is a leader among Indian states in terms of agricultural and industrial production, trade and transport, and education. Its ancient culture, at one stage considerably obscured by British dominance, survives largely through the medium of a strong literary heritage. A common literature in Marathi, the predominant language of the state, has in fact played an important role in nurturing a sense of unity among the Maharashtrians. Area 118,800 square miles (307,690 square km). Pop. (2011) 112,372,972.
  </font>
</p>
<div class = "itih">
  Itinerary
</div>
<div>
  <ul class = "iti" id = "pformat">
    <li>Day 1</li>
    <p><strong>
    On arriving in Mumbai, meet an IHPL representative who helps you with an assisted transfer to the hotel.  Known as the ‘Dream City, Maharashtra’s capital, Mumbai is one of the most sought-after destinations of the country, which is flocked by travelers from all around the world for varied reasons, be it business or leisure. After check-in, you are free to spend the day as per your own liking. You can visit the popular markets, can visit the nearby attractions and more. Stay overnight.
    </strong><p>
    <li>Day 2</li>
    <p><strong>
    On day 2, post-breakfast, get all set to visit the popular attractions of Mumbai. The list of today’s sightseeing might include the Gate of India- erected during the British rule it is now a popular landmark, Prince of Wales Museum- now The Chhatrapati Shivaji Maharaj Vastu Sangrahalaya it houses several interesting ancient artifacts, Hanging Gardens- also known as Pherozeshah Mehta Gardens it is a beautiful terrace garden, Haji Ali Dargah-not only a mosque but a landmark placed on an islet and so on. In the evening, you can visit the famous beaches like Juhu Beach and Chowpatty Beach where you can taste the lip-smacking street food, view the mesmerizing sunset, indulge in fun activities etc. Overnight in Mumbai. 
    </strong></p>
    <li>Day 3</li>
    <p><strong>
    Today, get all set to get transferred to Lonavala, by road. After breakfast, begin driving for Lonavala, via Khandala. While on the way, treat your eyes to the lush greenery spread all around, soak-in the cool breeze. You can take a halt here and click some nice pictures with the loved ones. After reaching Lonavala, check-into your hotel. You are now free to explore the lakes, waterfalls and caves of this hill town. Some of attractions include Bhaja Caves-Buddhist caves etched during 2nd century, Karla Caves-India largest cave temples and Koregad fort-ideal for trekking expedition. Overnight stay
    </strong></p>
    <li>Day 4</li>
    <p><strong>
    On the 4th day, begin driving towards Mahabaleshwar, another mesmerizing hill resort of the state, thronged by tourists from all around. As you reach, complete the check-in formalities. Leave the hotel room for visiting the attractions. Enjoy the amazing weather. Visit popular points like Arthur’s Seat, Babbington Point and Sunset Point to admire some panoramic views of the surrounding areas. Visit Morarji Castle, known for its British architecture. Taste the local renditions and so on. Overnight in Mahabaleshwar.         
    </strong></p>
    <li>Day 5</li>
    <p><strong>
    After breakfast, get all set to get transferred to Alibagh, by road. A popular weekend spot, Alibagh is known for its clean and beautiful beaches. Check-into the hotel, after arrival. Later, partake in sightseeing. Explore the popular forts like Khanderi Fort, Kolaba Fort and Undheri Fort. Kihim beach, Akshi beach are two of the very popular beaches of Alibagh. Stay overnight.
    </strong></p>
  </ul>
</div>
</body>
</html>