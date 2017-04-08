<?php
include("php/create_log.php");
register();
include('function.php');
header_e("register.php", 'LE MEILLEUR SITE D E-COMMERCE DU MONDE');
menu_e();
?>

<BODY>
	<div class="middle">

		<div class ="register">
			<form method="post" action="register.php" class="form">
				<div class ="username">USERNAME <input type="text" name ="login"> </div>
				<br />PASSWORD  <input type="password" name= "passwd"><br />
				<br />REPEAT PASSWORD  <input type="password" name= "rpasswd"><br />
				<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="submit" value="OK">
				<?php
				if ($_SESSION['error'] == 1)
				{
					echo "<h1>EVERYTHING IS NOT GOOD</h1>";
				}
				?>

			</form>

		</BODY>

		<footer>

			<div class="copyrigth">

				made by ramichia and tdouge
			</div>

		</footer>
	</HTML>
