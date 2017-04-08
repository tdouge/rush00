<?php
$verif = 0;
$i = 0;
$j = 0;
if($_POST['submit'] != "OK" || $_POST['login'] == '' || $_POST['oldpw'] == '' || $_POST['newpw'] == '')
{
	$message = "ERROR\n";
	echo $message;
	exit;
}
$array = array();
$array = unserialize(file_get_contents("../private/passwd"));
	while($array[$i])
	{
		if ($array[$i]["login"] == $_POST['login'])
		{
			if ($array[$i]['passwd'] != hash("whirlpool", $_POST["oldpw"]))
			{
				echo $array[$i]['passwd']."\n";
				echo hash("whirlpool", $_POST["oldpw"]);
				echo "ERROR\n";
				exit;
			}
			else
				$array[$i]["passwd"] = hash("whirlpool", $_POST["newpw"]);
		}
		$i++;
	}
file_put_contents("../private/passwd", serialize($array));
echo "OK\n";
?>