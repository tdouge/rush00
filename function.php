<?php

function header_e($name_page,$title)
{
echo '<HTML>
<HEAD>
<TITLE>'.$name_page.'</TITLE>
<link rel="stylesheet" href="index.css">
<meta name="viewport">
<meta charset="utf-8">
</HEAD>
<HEADER class="title">
<div class="sitename"><center><br /><br />'.$title.'</center></div>
</HEADER>';
}

function menu_e()
{
  echo '<div class="bandeau">

  	<div class="box">
  		<a href="login.html" alt="Lien vers login.html" style="display:block;width:100%;height:100%;">
  			<img src="img/log.png" alt=log.png width="100%" height="100%">
  		</a>
  	</div>
  	<div class="box">
  		<a href="register.html" alt="register.html" style="display:block;width:100%;height:100%;">
  			<img src="img/register.jpg" alt=panier.jpg width="100%" height="100%">
  		</a>
  	</div>
  	<div class="box">
  		<a href="panier.html" alt="panier.html" style="display:block;width:100%;height:100%;">
  			<img src="img/panier.jpg" alt=panier.jpg width="100%" height="100%">
  		</a>
  	</div>
  	<div class="box"><a href="cat_1.html" alt="Lien vers caterogie_1" style="display:block;width:100%;height:100%;"></a></div>
  	<div class="box"><a href="cat_1.html" alt="Lien vers caterogie_1" style="display:block;width:100%;height:100%;"></a></div>
  	<div class="box"><a href="cat_1.html" alt="Lien vers caterogie_1" style="display:block;width:100%;height:100%;"></a></div>
  	<div class="box"><a href="cat_1.html" alt="Lien vers caterogie_1" style="display:block;width:100%;height:100%;"></a></div>
  	<div class="box"><a href="cat_1.html" alt="Lien vers caterogie_1" style="display:block;width:100%;height:100%;"></a></div>
  	<div class="box"><a href="cat_1.html" alt="Lien vers caterogie_1" style="display:block;width:100%;height:100%;"></a></div>
  	<div class="box"><a href="cat_1.html" alt="Lien vers caterogie_1" style="display:block;width:100%;height:100%;"></a></div>
  	<div class="box"><a href="cat_1.html" alt="Lien vers caterogie_1" style="display:block;width:100%;height:100%;"></a></div>
  </div>';
}
 ?>
