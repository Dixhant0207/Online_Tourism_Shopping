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
  background-image: url('images\\dnd.jpg');
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

<h1>Daman and Diu</h1>
<img id="image" src="images\\dnd2.jpg" style="width:700px; height:400px">
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

var imageSources = ["images\\dnd3.jpg", "images\\dnd4.jpg", "images\\dnd2.jpg"]

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
  Daman and Diu, former union territory of India, which comprised two widely separated districts on the country’s western coast. Daman is an enclave on the state of Gujarat’s southern coast, situated 100 miles (160 km) north of Mumbai (Bombay). Diu encompasses an island off the southern coast of Gujarat’s Kathiawar Peninsula, 40 miles (64 km) southeast of Veraval, as well as a small area on the mainland. The town of Daman, in the Daman district, was the capital of the territory. In January 2020 the two districts joined Dadra and Nagar Haveli to become Dadra and Nagar Haveli and Daman and Diu union territory. Area 43 square miles (112 square km). Pop. (2011) 242,911.  
</font>
</p>
<div class = "itih">
  Itinerary
</div>
<div>
  <ul class = "iti" id = "pformat">
    <li>Day 1</li>
    <p><strong>
    Get freshen up and proceed to visit: Jampore Beach: Spend a day in the sand and sea at Jampore Beach, a clean stretch of shoreline with black sand. Numerous food stalls line the beach and offer quick, local snacks and drinks. Stretch out and sunbathe, or get adventurous with one of the water sports, including jet-skiing and parasailing. If you want something a bit more relaxed, you can enjoy camel and horseback rides. 
    </strong><p>
    <li>Day 2</li>
    <p><strong>
    Keep in mind that the beach gets very crowded on weekends, so stick to visiting on weekdays if you prefer a quieter scene. Devka Beach: Ride a horse or camel across the black sands of Devka Beach, which serves as a recreational hub for tourists and locals, who come here to play volleyball and swim
    </strong></p>
    <li>Day 3</li>
    <p><strong>
    Come as early as you can to pick up colorful seashells and rocks undisturbed by big crowds.Overnight stay at Daman.
    </strong></p>
    <li>Day 4</li>
    <p><strong>
    Daman: After breakfast proceed to visit: Silvassa Vasona Lion Safari – At your own: Get a close up view of endangered Asiatic lions at Silvassa Vasona Lion Safari, a walled wildlife conservation area keeping these rare animals. Mirasol Lake Garden: Walk among the lush garden with abundant pools and fountains at Mirasol Lake Garden and enjoy the peaceful, natural atmosphere. Rest by the lake which separates two artificial islands which are connected by a bridge, and enjoy the scenery it provides. Rent a vessel, including peddle boats, motor boats, and family boats, and sail across the water. Suitable for the whole family as it provides activities for children and adults alike. Revive your memories with a reminiscent ride in a toy train with your kids
    </strong></p>
    <li>Day 5</li>
    <p><strong>
    Restaurants available in the vicinity--try Daal-chawal specialty with vegetables. Sawaminarayan Temple: Admire intricately carved light pink colored rocks of Swaminarayan Temple, a replica of the Akshardham Temple of Gandhi Nagar built in the banks of Daman Ganga River. The temple features elaborate carvings all over its fa çade on marble, granite and other stones, housing a gilt-statue of Lord Hanuman flanked by two equally ornate images of goddesses
    </strong></p>
    <li>Day 6</li>
    <p><strong>
    A popular tourist destination in Silvassa, the temple of the Swaminarayan branch of Hinduism is visited by large numbers of pilgrims every year. Enjoy the well-maintained green gardens around the temple and try food in the temple’s canteen. Dudhni Lake: Take a colorful Shikara boat ride on the peaceful waters of Dudhni Lake. Observe the picturesque landscape replete with winding rivers, rusty soil, and green trees. Other water activities available from a nearby water-sport complex include kayaking, canoeing, and jet skiing. Consider bringing along a picnic with you, and if you enjoy driving, the journey here rewards with winding roads traversing the attractive area. Overnight stay at Daman.
    </strong></p>
  </ul>
</div>
</body>
</html>