<html>  
<head>  
<meta charset="utf-8">
    <title>update supplier</title>
    <link rel="stylesheet" href="css/style.css">
 <style>
	table {
    align: center;
    color: white;
} 
	</style>
</head>  
<body>  
<?php  
require('db.php');  
$strSQL = "SELECT * FROM FOOD WHERE VALUE='1'";  
$objParse = oci_parse ($conn, $strSQL);  
oci_execute ($objParse,OCI_DEFAULT);  
?>  
<div class="nav">
     
        <div class="nav_logo">
            <img src="images/logo.png" alt="" align="middle" />
        </div>
		 <div class="full_bnrm full_bannerm">
        <div class="main_wr main_banner">
		 <div class="banner_txt">
<table width="600" border="1" align="center">  
<tr>  
<th width="200"> <div align="center">FOOD NAME  </div></th>  
<th width="98"> <div align="center">F_ID  </div></th>  
<th width="198"> <div align="center">R_ID  </div></th>  
<th width="97"> <div align="center">PRICE  </div></th>     
<th width="30"> <div align="center">Edit  </div></th>  
</tr>  
<?php
while($objResult = oci_fetch_array($objParse,OCI_BOTH))  
{  
?>  
<tr>  
<td><div  align="center"><?=$objResult["FNAME"];?></div></td>  
<td><?=$objResult["F_ID"];?></td>  
<td><?=$objResult["R_ID"];?></td>  
<td><?=$objResult["PRICE"];?></td>   
<td align="center"><a  href="updatefood2.php?FOOD_ID=<?=$objResult["F_ID"];?>">Edit</a></td>  
</tr>  

<?php  
}  
?>  
</table>  
</div>
        </div> </div>
		    <div class="end1">
        <address> Dhanmondi,Dhaka-1216 <br>
		
Copyright (c) 2017 HungryBd,
All Rights Reserved
</address>
    </div>
    
<?php  
oci_close($conn);  
?>  
</body>  
</html>