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
<form>
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
$strSQL = "select S_ID,PASS FROM suplier_login WHERE S_ID LIKE '%".$user_id."%'";  
$objParse = oci_parse ($conn, $strSQL);  
oci_execute ($objParse,OCI_DEFAULT);  
?>  
<table align="center">
<?php
while($objResult = oci_fetch_array($objParse,OCI_BOTH))  
{  
?>    
<tr>
 <td>ID :</td>
 <td><?=$objResult["S_ID"];?></td>
 
</tr>

<tr>  
<td align="center"><a  href="schangepass2.php?SUP_ID=<?=$objResult["S_ID"];?>"><h2>Edit</h2></a></td> 
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
    
</form> 
</body>  
</html>