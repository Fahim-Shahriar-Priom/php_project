<html>  
<head> 
<meta charset="utf-8">
    <title>Edit Information</title>
    <link rel="stylesheet" href="css/style.css">
 <style>
	table {
    align: center;
    color: white;
} 
	</style>
</head>  
<body>  
<div class="nav">
     
        <div class="nav_logo">
            <img src="images/logo.png" alt="" align="middle" />
        </div>
		 <div class="full_bnrm full_bannerm">
        <div class="main_wr main_banner">
		 <div class="banner_txt">
<?php  
session_start();
require("db.php");
$user_id=$_SESSION["use"];  
$strSQL = "select C_ID,CNAME,PHONE,C_LOC from CUSTOMER WHERE C_ID LIKE '%".$user_id."%'";  
$objParse = oci_parse ($conn, $strSQL);  
oci_execute ($objParse,OCI_DEFAULT);  
?>  
<table width="600" border="1" align="center">  
<tr>  
<th width="200"> <div align="center">CUSTOMER ID</div></th>  
<th width="98"> <div align="center">CNAME  </div></th>  
<th width="198"> <div align="center">PHONE  </div></th>  
<th width="97"> <div align="center">CLOC  </div></th>    
<th width="30"> <div align="center">Edit  </div></th>  
</tr>  
<?php
while($objResult = oci_fetch_array($objParse,OCI_BOTH))  
{  
?>  
<tr>  
<td><div  align="center"><?=$objResult["C_ID"];?></div></td>  
<td><?=$objResult["CNAME"];?></td>  
<td><?=$objResult["PHONE"];?></td>  
<td><?=$objResult["C_LOC"];?></td>  
<td align="center"><a  href="updateuser2.php?CUS_ID=<?=$objResult["C_ID"];?>">Edit</a></td>  
</tr>  
<?php  
}  
?>  
</table>  
<?php  
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

</body>  
</html>