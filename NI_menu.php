 <html lang="en">
<head>
<meta charset="UTF-8">
<title>North India page</title>
<link rel="stylesheet" type ="text/css" href="menu_style.css">
<style>
    body{
    background-image: url('images\\NI_menu.jpg');
    }
</style></head>
<body>
<br>
<ul>
<div id="marker"></div>
<h2>Where in North India would you like to visit?"</h2>
<li><a href="N_1.php">New Delhi</a></li>
<li><a href="N_2.php">Himachal Pradesh</a></li>
<li><a href="N_3.php">Uttar Pradesh</a></li>
<li><a href="N_4.php">Leh-Ladakh</a></li>
<li><a href="N_5.php">Punjab</a></li>
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