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
  background-image: url('images\\ooty1.jpg');
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

<h1>Kerala</h1>
<img id="image" src="images\\ooty2.jpg" style="width:700px; height:400px">
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

var imageSources = ["images\\ooty3.jpg", "images\\ooty4.jpg", "images\\ooty2.jpg"]

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
  Kerala, southwestern coastal state of India. It is a small state, constituting only about 1 percent of the total area of the country. Kerala stretches for about 360 miles (580 km) along the Malabar Coast, varying in width from roughly 20 to 75 miles (30 to 120 km). It is bordered by the states of Karnataka (formerly Mysore) to the north and Tamil Nadu to the east and by the Arabian Sea to the south and west; it also surrounds Mahe, a segment of the state of Puducherry, on the northwestern coast. The capital is Thiruvananthapuram (Trivandrum). Although isolated from the Indian interior by the mountainous belt of the Western Ghats, Kerala has been exposed to many foreign influences via its long coastline; consequently, the state has developed a unique culture within the subcontinent, not only with a diverse religious tradition but also with its own language, Malayalam. Also notable is the high social status that continues to be accorded to women of Kerala, owing to the former strength of a matrilineal kinship system. Area 15,005 square miles (38,863 square km). Pop. (2011) 33,387,677.  </font>
</p>
<div class = "itih">
  Itinerary
</div>
<div>
  <ul class = "iti" id = "pformat">
    <li>Day 1</li>
    <p><strong>
    After landing in Kochi, get welcomed by our representative at the airport/railway station. The representative will help you get transferred to Munnar, a place known for its tea plantations, rolling hills, picture postcard hamlets and undulating valleys. On your way to Munnar, visit the cascading Valara and Cheyyappara waterfalls and capture some beautiful moments there. Pay a visit to the tea gardens to understand what it takes to make a perfect cup of tea. Later get transferred to the hotel in a sanitized vehicle and enjoy a drive to the hotel. You can spend the rest of the day at leisure. Stroll around the markets or visit nearby places to witness the beauty of this place.
    </strong><p>
    <li>Day 2</li>
    <p><strong>
    After Breakfast, check out from the hotel, drive to Alleppey and embark on your private houseboat and cruise on the Backwaters. The splendid area is full of canals, lakes and coves. Your houseboat is luxurious with well-appointed bedrooms and bathrooms. After check-in, enjoy the delicious lunch with the sound of water rippling as your houseboat makes its way through the backwaters. You can sunbathe on the deck or observe the palm-fringed landscape from your cabins Apart from the mesmerizing surroundings, it's the life along the backwaters that makes this a fascinating experience. Enjoy the dinner with a mesmerizing view of the backwaters.    <br>
    </strong></p>
    <li>Day 3</li>
    <p><strong>
    After Breakfast, check out from the hotel, drive to Alleppey and embark on your private houseboat and cruise on the Backwaters. The splendid area is full of canals, lakes and coves. Your houseboat is luxurious with well-appointed bedrooms and bathrooms. After check-in, enjoy the delicious lunch with the sound of water rippling as your houseboat makes its way through the backwaters. You can sunbathe on the deck or observe the palm-fringed landscape from your cabins Apart from the mesmerizing surroundings, it's the life along the backwaters that makes this a fascinating experience. Enjoy the dinner with a mesmerizing view of the backwaters    
    </strong></p>
    <li>Day 4</li>
    <p><strong>
    After a lavish breakfast at the lodging, you will head to the wonderful Kumarakom. This town is a gathering of flawless little islands on the Vembanad Lake, Kerala’s greatest lake in South India. It offers a beautiful viewpoint of the emerald green backwaters of Kerala flanked by rich vegetation and paddy fields. When you touch base at Kumarakom, register with the inn and take some rest. In the evening, you will be taken for boating along the lake and bird watching at the sanctuary.
    </strong></p>
  </ul>
</div>
</body>
</html>