				
<?php
function register()
{
	session_start();
	$_SESSION['error'] = 0;
	$verif = 0;
	$i = 0;
	if(!file_exists("./private"))
		mkdir("./private");
	if(!file_exists("./private/passwd"))
		file_put_contents("./private/passwd", "");

	$array = unserialize(file_get_contents("./private/passwd"));
	if ($array && ($_POST['passwd'] || $_POST['login'] || $_POST['rpasswd']))
	{
		if($_POST['submit'] != 'OK' || $_POST['login'] == '' || $_POST['passwd'] == '' || $_POST['rpasswd'] == '')
		{
			$_SESSION['error'] = 1;
		}
		foreach ($array as $value)
		{
			if ($value["login"] == $_POST["login"])
			{
				$_SESSION['error'] = 1;
			}
			if ($_POST['passwd'] != $_POST['rpasswd'])
			{
				$_SESSION['error'] = 1;			
			}
			$i++;
			$i = 0;
		}
	}
	$array[] = array("login" => $_POST['login'], "passwd" => hash("whirlpool", $_POST["passwd"]));
	file_put_contents("./private/passwd", serialize($array));
}
?>