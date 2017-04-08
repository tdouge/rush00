<?php

include('function.php');
header_e("admin.php", 'Administrator Page');
menu_e();

 ?>
<body>
  <div class="middle">
    <div>
  	<form method="post" action="admin.php" class="form">
      <div class="product">
        ADD PRODUCT:<input type="text" name ="add" style="width:150px;" /><br />
        PRICE:<input type="text" name ="add" style="width:150px;"/><br />
        CATEGORIE:<input type="text" name ="add" style="width:150px;"/>
      </div>
      <div class="product">DEL PRODUCT:
      <select name="del_product" size="1" style="width:150px;">
      <OPTION>product_1
        <OPTION>product_1
          <OPTION>product_1
            <OPTION>product_1
      </select>
      </div>
      <div class="product">MODIF PRODUCT:
      <select name="del_product" size="1" style="width:150px;">
        <!-- pour remplacer les exemples product lire la database et faire une boucle sur larray remvoyer et echo "<option> $name_product" -->
        </option>product->name"
        <OPTION style="font-style:bold">product_1
          <OPTION>product_1
            <OPTION>product_1
              <OPTION>product_1
      </select><br />
      PRICE:<input type="text" name ="add" style="width:150px;"/><br />
      CATEGORIE:<input type="text" name ="add" style="width:150px;"/>
      </div>
  		<br /><input type="submit" name="valid_admin" value="VALID" class="login" style="text-align:center; width:380px"><br />
      <?php
        if ($_POST['valid_admin'] === "VALID")
          echo '<p style="position:relative; left:130px;"> Modification add</p>';
       ?>
  	</form>
  </div>

</body>
