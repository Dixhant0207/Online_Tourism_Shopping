<html lang="en">
<head>
<meta charset="UTF-8">
<title>East India page</title>
<link rel="stylesheet" type ="text/css" href="menu_style.css">
<style>
    body{
    background-image: url('images\\EI_menu.jpg');
    }
</style>
</head>
<body>
<br>
<br><br><ul>
<div id="marker"></div>
<h2>Where in East India would you like to visit?</h2>
<li><a href="East_1.php">Sikkim</a></li>
<li><a href="East_2.php">Arunachal Pradesh</a></li>
<li><a href="East_3.php">Meghalaya</a></li>
<li><a href="East_4.php">Manipur</a></li>
<li><a href="East_5.php">Tripura</a></li>
</ul>
<script>
const marker = document.querySelector('#marker');
const item = document.querySelectorAll('ul li a');

function indicator(e){
    marker.style.top = e.offsetTop+'px';
    marker.style.width = e.offsetWidth+'px';
}
item.forEach(link => {
    link.addEventListener('mousemove', (e) => {
        indicator(e.target);
    })
})
</script>
</body>
</html>