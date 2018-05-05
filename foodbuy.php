<?php
session_start();
require("db.php");
global $productByCode;
 if(isset($_SESSION["use"])){

if(!empty($_GET["action"])) {
switch($_GET["action"]) {
	case "add":
		if(!empty($_POST["quantity"])) {
			$stSQL="select * from FOOD where F_ID='".$_GET["code"]."'";
	$obj = oci_parse ($conn, $stSQL);  
    oci_execute ($obj,OCI_DEFAULT); 
	while($row = oci_fetch_assoc($obj) )
	{
		$productByCode[]=$row;
	}
			$itemArray = array($productByCode[0]["F_ID"]=>array('name'=>$productByCode[0]["FNAME"], 'code'=>$productByCode[0]["F_ID"], 'quantity'=>$_POST["quantity"], 'price'=>$productByCode[0]["PRICE"]));
			
			if(!empty($_SESSION["cart_item"])) {
				if(in_array($productByCode[0]["F_ID"],array_keys($_SESSION["cart_item"]))) {
					foreach($_SESSION["cart_item"] as $k => $v) {
							if($productByCode[0]["F_ID"] == $k) {
								if(empty($_SESSION["cart_item"][$k]["quantity"])) {
									$_SESSION["cart_item"][$k]["quantity"] = 0;
								}
								$_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
							}
					}
				} else {
					$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
				}
			} else {
				$_SESSION["cart_item"] = $itemArray;
			}
		}
	break;
	case "remove":
		if(!empty($_SESSION["cart_item"])) {
			foreach($_SESSION["cart_item"] as $k => $v) {
					if($_GET["code"] == $k)
						unset($_SESSION["cart_item"][$k]);				
					if(empty($_SESSION["cart_item"]))
						unset($_SESSION["cart_item"]);
			}
		}
	break;
	case "empty":
		unset($_SESSION["cart_item"]);
	break;	
}
}
?>
<HTML>
<HEAD>
<TITLE>Shopping Cart</TITLE>
<link href="style.css" type="text/css" rel="stylesheet" />
</HEAD>
<BODY>
</div>
<div id="product-grid">
	<div class="txt-heading">Products</div>
	<?php
	
	$strSQL="select * from food where R_ID = '".$_REQUEST["rid"]."' ";
	$va = $_REQUEST["rid"];
	$objParse = oci_parse ($conn, $strSQL);  
    $results= oci_execute ($objParse,OCI_DEFAULT); 
	while($row = oci_fetch_assoc($objParse) )
	{
		$product_array[]=$row;
	}
	if (!empty($product_array)) {
		foreach($product_array as $key=>$value){
	?>
		<div class="product-item">
			<form method="post" action="foodbuy.php?action=add&code=<?php echo $product_array[$key]["F_ID"]; ?>&rid=<?php echo "$va";?>">
			<div><strong><?php echo $product_array[$key]["FNAME"]; ?></strong></div>
			<div class="product-price"><?php echo "$".$product_array[$key]["PRICE"]; ?></div>
			<div><input type="text" name="quantity" value="0" size="2" /><input type="submit" value="Add to cart" class="btnAddAction" /></div>
			</form>
		</div>
	<?php
			}
	}

	?>
	
</div>
<div id="shopping-cart">
<div id="product-grid">Shopping Chart</div>

<?php
if(isset($_SESSION["cart_item"])){
    $item_total = 0;
?>	
<table cellpadding="10" cellspacing="1">
<tbody>
<tr>
<th style="text-align:left;"><strong>Name</strong></th>
<th style="text-align:left;"><strong>Food_Id</strong></th>
<th style="text-align:left;"><strong>Quantity</strong></th>
<th style="text-align:left;"><strong>Price</strong></th>
<th style="text-align:center;"><strong>Action</strong></th>
</tr>	
<?php		
/*$strSQL="select * from food where R_ID = '".$_REQUEST["rid"]."' ";
	$va = $_REQUEST["rid"];
	$objParse = oci_parse ($conn, $strSQL);  
    $results= oci_execute ($objParse,OCI_DEFAULT); 
	while($row = oci_fetch_assoc($objParse) )
	{
		$product_array[]=$row;
	}
	if (!empty($product_array)) {*/
    foreach ($_SESSION["cart_item"] as $item){
		?>
				<tr>
				<td style="text-align:left;border-bottom:#F0F0F0 1px solid;"><strong><?php echo $item["name"]; ?></strong></td>
				<td style="text-align:left;border-bottom:#F0F0F0 1px solid;"><?php echo $item["code"]; ?></td>
				<td style="text-align:left;border-bottom:#F0F0F0 1px solid;"><?php echo $item["quantity"]; ?></td>
				<td style="text-align:left;border-bottom:#F0F0F0 1px solid;"><?php echo "$".$item["price"]; ?></td>
				<td style="text-align:center;border-bottom:#F0F0F0 1px solid;"><a href="foodbuy.php?action=remove&code=<?php echo $item["code"]; ?>&rid=<?php echo "$va";?>" class="btnRemoveAction">Remove Item</a></td>
				</tr>
				<?php
        $item_total += ($item["price"]*$item["quantity"]);
		}
		?>

<tr>
<td colspan="5" align=right><strong>Total:</strong> <?php echo "$".$item_total; ?></td>
</tr>
</tbody>
</table>		
</div>
  <?php
	}
//}
?>
<div>
<?php
 //<a href="orderback.php?fid=5">submit</a><br/>
 
?>
<a href="food.php?action=empty&rid=<?php echo "$va";?>&fprice=<?php echo "$item[price]";?>&quan=<?php echo "$item[quantity]";?>&fid=<?php echo "$item[code]";?>&cid=<?php echo "$_SESSION[use]";?>" class="btnAddAction">submit</a>
<a href="userprofile.php" class="btnAddAction">Back to home</a>
<?php
 }
 else {
	header("location: login.php");
}

 ?>
</div>
</BODY>
</HTML>
