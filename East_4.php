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
  background-image: url('images\\mani_back.jpg');
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

<h1>Manipur</h1>
<img id="image" src="images\\bis2.png" style="width:700px; height:400px">
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

var imageSources = ["images\\bis3.jpg", "images\\bis2.png"]

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
  <font size=+2>Manipur, state of India, located in the northeastern part of the country. It is bordered by the Indian states of Nagaland to the north, Assam to the west, and Mizoram to the southwest and by Myanmar (Burma) to the south and east. Like other northeastern states, it is largely isolated from the rest of India. The name Manipur means “land of gems.” Its economy centres on agriculture and forestry, and trade and cottage industries also are important. The state capital is Imphal, located in the centre of the state. Area 8,621 square miles (22,327 square km). Pop. (2001) 2,293,896; (2011) 2,855,794.</font>
</p>
<div class = "itih">
  Itinerary   
</div>
<div>
  <ul class = "iti" id = "pformat">
    <li>Day 1</li>
    <p><strong>Arrive at Imphal, visit  Kangla Fort, Khwairamband Keithel or Ima Market (Women Local Market)  and Govindaji Temple.  SHRI SHRI GOVINDAJEE TEMPLE – is an elegant Vaishnavite shrine located in Imphal, the capital city of Manipur. It stands adjacent to the palace of the former rulers of the state. The temple was built in the early 18th century by Rajarishi Bhagyachandra. It has a beautiful image of Lord Vishnu, which is flanked by the idols of Lord Balram and Lord Krishna. Shri Govindajee Temple is simple in its architecture. It has two golden domes, a paved courtyard and a large raised congregation hall  O/N hotel at Imphal.</strong><p>
    <li>Day 2</li>
    <p><strong>Transfer to Moreh village by car. Moreh is the border of India and Myanmar. . It is the border town of Manipur on the national highway Number 39, surrounded by hills, mountains & rivers which is 110 kilometres from Imphal. It is located on the Indo – Myanmar Road, a commercial town attracting a large numbers of people from neighbouring places. It is only 5 kilometres away from Tamu, its Myanmar counterpart and is especially the best place for shopping & business. The recent opening of the Border trade turned Moreh into an important commercial hub in North – East. Just on the other side of the border, at Namphanglong, there is a big Myanmar’s market complex where all kinds of Thai and Chinese consumer goods are available at a reasonable low price. You can have a small visit to Tamu (Myanmar part by submitting your i card). Night stay at Imphal.</strong></p>
    <br>
    <li>Day 3</li>
    <p><strong>Today is the most adventuresome day. Hence, go light on breakfast. Have a light meal that fills your tummy. Do not overeat as today you are going to Tsomgo Lake Excursion and Baba Mandir.</strong></p>
    <br>
    <li>Day 4</li>
      <p><strong>After breakfast transfer to Ukhrul ( 6 to 7 hrs journey).  A picturesque hill town of Manipur – lies about 84 km kilometers to the North East of Imphal. The place is inhabited by Tangkhul Tribes. The life and art of Tangkhuls are attractive and captivating. Their different costumes and wears, utensils, architecture, monumental erections and memorial set-up depict their dexterity in art, which also speak of  their sense of beauty and finesse  . Night stay at Ukhrul.</strong></p>
    <li>Day 5</li>
    <p><strong>Early morning have a small hike to the Sirui Lily hills . If you can climb 1.5 kms you will enjoy the savana and exotic views. Later after lunch you can proceed to Imphal ( 3 hrs drive).</strong></p>

  </ul>
</div>
</body>

</html>