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
<form  action="schangepass3.php?SUP_ID=<?=$_GET["SUP_ID"];?>"  name="frmEdit" method="post">  
<div class="nav">
     
        <div class="nav_logo">
            <img src="images/logo.png" alt="" align="middle" />
        </div>
		 <div class="full_bnrm full_bannerm">
        <div class="main_wr main_banner">
		 <div class="banner_txt">  
<?php  
session_start();
require('db.php'); 
$strSQL = "SELECT * FROM suplier_login WHERE S_ID =  '".$_GET["SUP_ID"]."' ";  
$objParse = oci_parse ($conn, $strSQL);  
oci_execute ($objParse,OCI_DEFAULT);  
$objResult = oci_fetch_array($objParse,OCI_BOTH);  
if(!$objResult)  
{  
echo "Not found ID=".$_GET["SUP_ID"];  
}  
else  
{  
  
?>  
<table align="center">
<tr>
 <td>ID :</td>
 <td><input type="text" name="sid" size="20"  value="<?=$objResult["S_ID"];?>"></td>
</tr>

<tr>  
<td> PASS  : </td>
<td><input type="password" name="pass" size="20"  value="<?=$objResult["PASS"];?>"></td>   
</tr> 

<td>  </td>
<td align="left"></br><input type="submit" name="submit" value="submit" style="height:25px; width:100px">  </td>

</table>  

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