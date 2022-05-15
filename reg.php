<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
	<title>Travels | Home</title>
<style>
body {
  font-family: Arial;
  color: black;
  background-color: WhiteSmoke;
}

.split {
  height: 100%;
  position: fixed;
  z-index: 1;
  top: 0;
  overflow-x: hidden;
}

.left{
  width:70%;
}

.right {
  padding-top: 20px;
  right: 0;
  width:30%;
}

.submit input[type="submit"] {
     background: #4CAF50;
     color: white;
	   border-radius: 4px;
     cursor: pointer;
     height: 50px;
     width: 300px;
     font: bold 15px arial, sans-serif;
}

a{
  text-decoration:none;
  margin-right:20px;
}

a:hover{
  cursor:pointer;
}

.center_right {
  margin-top:150px;
  margin-left:20px;
  margin-block-start: 1em;
  margin-block-end: 1em;
  padding-inline-start: 40px;
  font: 700 13px/20px 'Open Sans', sans-serif;
  color: #282828;
}

h1 {
  font: 700 45px/31px;
  font-family: cursive;
  color: #282828;
}

span {
  color:orange;
}
input{
  border-radius : 20px white;
  height: 25px;
  width: 200px;
}
</style>
</head>
<body>
<div class="split left">
<img width="100%" height="96%" src="https://images.unsplash.com/photo-1476514525535-07fb3b4ae5f1?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"></img><br><br>

</div>

<div class="split right">
<h1 align=center>Register</h1>
<div class="center_right"><br><br>

  <form action="Regist.php" method="POST" autocomplete="off">
    <label for="fname">Full Name<span>*</span></label><br>
    <input type="text" name="fname" id="f" placeholder="Your name.."><br><br>
    <label for="lname">Email ID<span>*</span></label><br>
    <input type="text"  name="email" placeholder="Email" id="f"><br><br>
	  <label for="lname">Contact No<span>*</span></label><br>
    <input type="text" name="No" id="f" placeholder="Contact No"><br><br>
    <label for="lname">Password<span>*</span></label><br>
    <input type="password" name="Pass" id="f" placeholder="Password"><br><br>
    <label for="lname">Confirm Password<span>*</span></label><br>
    <input type="password" name="CPass" id="f" placeholder="Confirm Password"><br><br>
    <div class="submit"><input type="submit" value="Register" name="sentForm"></div><br><br>
    <div>Already have an account <a href='login.php'>Login</a></div>
  </form>
 </div>
</body>