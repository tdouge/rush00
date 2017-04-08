<?php
function install()
{
	$array = array();
	if(!file_exists("./private"))
		mkdir("./private");
	if(!file_exists("./private/passwd"))
	{
		file_put_contents("./private/passwd", "");
		$array[] = array("login" => "admin", "passwd" => hash("whirlpool", "admin"));
		file_put_contents("./private/passwd", serialize($array));
	}
	if (!file_exists("../products"))
	   file_put_contents("../products", "");
}
?>