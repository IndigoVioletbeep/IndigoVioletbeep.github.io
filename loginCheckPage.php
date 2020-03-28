<!DOCTYPE html>
<html>

<head>
	
	<title> TheAWord.com </title>
<!-- Below is the Code for the navigation of different pages and top bar-->
<body style="background-color:black;">

<fieldset class="nav">

<h1 class="Title" align="left"> <b> The A Word.com </b> </h1> 

<p class="date" align="center">
<script> document.write(new Date().toLocaleDateString()); </script>
</p> 

<fieldset class="navButtons" align="right">
<button onclick="location.href='index.html'" type="button" class="nav">Home</button>
<button onclick="location.href='blog.html'" type="button" class="nav">Blog</button>
<button onclick="location.href='about.html'" type="button" class="nav">About</button>
</fieldset>

</fieldset>
<!-- End of top bar -->
	
</head>

<body>
<link rel="stylesheet" href="stylesheetMain.css">
<br><br><br><br><br><br>

<?php 
var EnteredUser = $_POST["Username"];
echo EnteredUser;
?>

</body>

</html>