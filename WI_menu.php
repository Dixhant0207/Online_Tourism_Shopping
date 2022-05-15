<html lang="en">
<head>
<meta charset="UTF-8">
<title>West India page</title>
<link rel="stylesheet" type ="text/css" href="menu_style.css">
<style>
    body{
    background-image: url('images\\WI_menu.jpg');
    }
</style></head>
<body>
<br><br><ul>
<div id="marker"></div>
<li><h2>Where in West India would you like to visit?</h2></li>
<li><a href="WI_op1.php">Goa</a></li>
<li><a href="WI_op2.php">Daman & Diu</a></li>
<li><a href="WI_op3.php">Gujarat</a></li>
<li><a href="WI_op4.php">Maharashtra</a></li>
<li><a href="WI_op5.php">Rajasthan</a></li>
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