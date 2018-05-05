<html>  
<head>
<meta charset="utf-8">
    <title>Change Password</title>
    <link rel="stylesheet" href="css/style.css">
 <style>
	table {
    align: center;
    color: white;
} 
	</style> 
</head>  
<body>  
<form  action="updateuser3.php?CUS_ID=<?=$_GET["CUS_ID"];?>"  name="frmEdit" method="post"> 
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
$objResult = oci_fetch_array($objParse,OCI_BOTH);  
if(!$objResult)  
{  
echo "Not found ID=".$_GET["CUS_ID"];  
}  
else  
{  
  
?>  
<table width="600" border="1" align="center">  
<tr>  
<th width="200"> <div align="center">CUSTOMER ID</div></th>  
<th width="98"> <div align="center">CNAME  </div></th>  
<th width="198"> <div align="center">PHONE  </div></th>  
<th width="97"> <div align="center">CLOC  </div></th>    
<th width="30"> <div align="center">Edit  </div></th>  
</tr>  
<tr>  
<td><div align="center"><input type="text"  name="cid" size="20"  value="<?=$objResult["C_ID"];?>"></div></td>  
<td><input type="text" name="cname" size="20"  value="<?=$objResult["CNAME"];?>"></td>  
<td><input type="text" name="phone" size="20"  value="<?=$objResult["PHONE"];?>"></td>  
<td><input type="text" name="area" size="20"  value="<?=$objResult["C_LOC"];?>"></td>
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