<html lang="en">
<head>
<meta charset="UTF-8">
<title>South India page</title>
<link rel="stylesheet" type ="text/css" href="menu_style.css">
<style>
    body{
    background-image: url('images\\SI_menu.jpg');
    }
</style></head>
<body>
<br>
<br><br><ul>
<div id="marker"></div>
<h2>Where in South India would you like to visit?</h2>
<li><a href="SI_op1.php">Karnataka</a></li>
<li><a href="SI_op2.php">Tamil Nadu</a></li>
<li><a href="SI_op3.php">Kerala</a></li>
<li><a href="SI_op4.php">Telangana</a></li>
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