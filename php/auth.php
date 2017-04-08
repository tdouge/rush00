<?PHP
function auth($login, $passwd)
{
	$data = array();
	$data = unserialize(file_get_contents("./private/passwd"));
		$i = 0;
	if ($login && $passwd)
	{
		while($data[$i])
		{
			if ($data[$i]["login"] == $login)
			{
				if (hash("whirlpool", $passwd) != $data[$i]["passwd"])
					return (FALSE);
				else
					return (TRUE);
			}
			$i++;
		}

	}
	else
	{
		return (FALSE);
	}
}
?>
