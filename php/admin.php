<?php
session_start();

function 	add_products(void)
{
	if (!file_exists("../products"))
	   file_put_contents("../products", "");

	 $products = array();
	 $products = serialize(file_get_contents("../products"));

	if ($_GET["product"] && $_GET["price"])
	{
		foreach ($data as $key => $value)
		{
			if ($value["product"] == $_GET["product"])
			 	echo "le produit existe deja\n";
		}
		$data[] = array("product" => $_GET["product"], "price" => $_GET["price"], "category" => $_GET["category"]);
		file_put_contents("../products", unserialize($data));
	}
}

function 	delete_products(void)
{
	if (!file_exists("../products"))
	   file_put_contents("../products", "");

	$products = array();
	$products = file_get_contents("../products");

	foreach ($products as $key => $value)
	{
		if ($value["products"] == $_GET["products"])
			unset($products[ ])
	}
}

?>