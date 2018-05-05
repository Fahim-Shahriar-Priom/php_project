<html>  
<head>  

<meta charset="utf-8">
    <title>Update Food</title>
    <link rel="stylesheet" href="css/style.css">
 <style>
	table {
    align: center;
    color: white;
} 
	</style>
</head>  
<body>  
<form  action="updatefood3.php?FOOD_ID=<?=$_GET["FOOD_ID"];?>"  name="frmEdit" method="post">  
<div class="nav">
     
        <div class="nav_logo">
            <img src="images/logo.png" alt="" align="middle" />
        </div>
		 <div class="full_bnrm full_bannerm">
        <div class="main_wr main_banner">
		 <div class="banner_txt">  
<?php  

require('db.php'); 
$strSQL = "SELECT * FROM FOOD WHERE F_ID =  '".$_GET["FOOD_ID"]."' ";  
$objParse = oci_parse ($conn, $strSQL);  
oci_execute ($objParse,OCI_DEFAULT);  
$objResult = oci_fetch_array($objParse,OCI_BOTH);  
if(!$objResult)  
{  
echo "Not found F_ID=".$_GET["FOOD_ID"];  
}  
else  
{  
  
?>  
<table width="400" border="1" align="center">  
<tr>  
<th > <div align="center">FOOD NAME  </div></th>  
<th > <div align="center">F_ID  </div></th>  
<th > <div align="center">R_ID  </div></th>  
<th > <div align="center">PRICE  </div></th>  
<th > <div align="center">FDATE  </div></th>  
<th > <div align="center">VALUE  </div></th>   
</tr> 
<tr>  
<td><div align="center"><input type="text"  name="fname" size="20"  value="<?=$objResult["FNAME"];?>"></div></td>  
<td><input type="text" name="fid" size="20"  value="<?=$objResult["F_ID"];?>"></td>  
<td><input type="text" name="rid" size="20"  value="<?=$objResult["R_ID"];?>"></td>  
<td><input type="text" name="price" size="20"  value="<?=$objResult["PRICE"];?>"></td>
<td><div align="center"><input type="text"  name="fdate" size="20"  value="<?=$objResult["FDATE"];?>"></div></td>  
<td align="right"><input type="text" name="valu" size="2"  value="<?=$objResult["VALUE"];?>"></td>  
</tr>  
</table>  
<input type="submit" name="submit" value="submit"> 
 
<?php  
}  
oci_close($conn);  
?>  
</div>
        </div> </div>
		    <div class="end1">
        <address> Dhanmondi,Dhaka-1216 <br>
		
Copyright (c) 2017 HungryBd,
All Rights Reserved
</address>
    </div> 
</form>  
</body>  
</html>