<?php
require("db.php");
?>
<div class="products">
<?php
$current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
$strSQL = "SELECT F_ID, FNAME, R_ID , price FROM FOOD";  
$objParse = oci_parse ($conn, $strSQL);  
$results= oci_execute ($objParse,OCI_DEFAULT); 
if($results){
$products_item = '<ul class="products">';
//fetch results set as object and output HTML
while($objResult = oci_fetch_array($objParse,OCI_BOTH)) 
{
$products_item .= <<<EOT
    <li class="product">
    <form method="post" action="cart_update.php">
	<div class="product-ID"><h3>{$objResult["F_ID"]}</h3>
	<div class="product-NAME"><h3>{$objResult["FNAME"]}</h3>
    <div class="RESTAURENT-ID"><h3>{$objResult["R_ID"]}</h3>
    <div class="product-info">
    Price {$objResult["PRICE"]}
   
    <fieldset>
   
    <label>
        <span>Quantity</span>
        <input type="text" size="2" maxlength="2" name="product_qty" value="1" />
    </label>
   
    </fieldset>
    <input type="hidden" name="product_code" value="{$objResult["F_ID"]}" />
    <input type="hidden" name="type" value="add" />
    <input type="hidden" name="return_url" value="{$current_url}" />
    <div align="center"><button type="submit" class="add_to_cart">Add</button></div>
    </div></div>
    </form>
    </li>
EOT;
}
$products_item .= '</ul>';
echo $products_item;
}
?>
</div>
