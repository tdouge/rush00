<?PHP
function loggy()
{
	session_start();
	include("auth.php");
	$_SESSION['verif'] = 1;
	if ($_POST['login'] != "" || $_POST['passwd'] != "")
	{
		if (auth($_POST["login"], $_POST["passwd"]))
		{
			$_SESSION["loggued_on_user"] = $_POST["login"];
			$_SESSION['verif'] = 1;
		}
		else
		{
			$_SESSION["loggued_on_user"] = "";
			$_SESSION['verif'] = 0;
		}
	}
}
?>
