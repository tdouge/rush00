<?php
include("php/log.php");
loggy();
?>
<HTML>

<HEAD>

<TITLE>index.html</TITLE>
<link rel="stylesheet" href="index.css">
<meta name="viewport">
<meta charset="utf-8">
</HEAD>
<HEADER class="title">

<div class="sitename"><center><br /><br />LE MEILLEUR SITE D E-COMMERCE DU MONDE</center></div>

</HEADER>
<BODY>
<div class="middle">



	<div class ="register">
	<form method="post" action="login.php" class="form">
		<div class ="username">USERNAME <input type="text" name ="login"> </div>
		<br />PASSWORD  <input type="password" name= "passwd"><br />
		<?php
		if ($_SESSION['verif'] == 0)
			echo "<p>Bad password or login</p>";
		?>
		<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="submit" value="LOGIN" class="login">
	</form>
</div>
</div>



</BODY>

<footer>

<div class="copyrigth">

made by ramichia and tdouge
</div>

</footer>
</HTML>