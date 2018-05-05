<html>  
<head>  
<title>Update RESTAURENT</title>  
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
<div class="nav">
     
        <div class="nav_logo">
            <img src="images/logo.png" alt="" align="middle" />
        </div>
		 <div class="full_bnrm full_bannerm">
        <div class="main_wr main_banner">
		 <div class="banner_txt">  
<form  action="updateres3.php?Res_ID=<?=$_GET["Res_ID"];?>"  name="frmEdit" method="post"> 

 
<?php  
require('db.php'); 
$strSQL = "SELECT * FROM RESTAURENT WHERE R_ID =  '".$_GET["Res_ID"]."' ";  
$objParse = oci_parse ($conn, $strSQL);  
oci_execute ($objParse,OCI_DEFAULT);  
$objResult = oci_fetch_array($objParse,OCI_BOTH);  
if(!$objResult)  
{  
echo "Not found R_ID=".$_GET["Res_ID"];  
}  
else  
{  
  
?>  
<table width="600" border="1">  
<tr>  
<th width="91"> <div align="center">R_ID   </div></th>  
<th width="160"> <div align="center">RNAME  </div></th>  
<th width="198"> <div align="center">R_LOC  </div></th>  
<th width="97"> <div align="center">CDATE  </div></th>  
<th width="70"> <div align="center">VALUE  </div></th>    
</tr>  
<tr>  
<td><div align="center"><input type="text"  name="rid" size="20"  value="<?=$objResult["R_ID"];?>"></div></td>  
<td><input type="text" name="rname" size="20"  value="<?=$objResult["RNAME"];?>"></td>  
<td><input type="text" name="area" size="20"  value="<?=$objResult["R_LOC"];?>"></td>  
<td><div align="center"><input type="text"  name="cdate" size="20"  value="<?=$objResult["CDATE"];?>"></div></td>  
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