<head>  
<meta charset="utf-8">
    <title>Delete Food</title>
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
$strSQL = "select F_ID,R_ID,FNAME FROM FOOD WHERE VALUE LIKE '%1%'";  
$objParse = oci_parse ($conn, $strSQL);  
oci_execute ($objParse,OCI_DEFAULT);  
?>  
<table width="600" border="1" align="center">
<tr>
 <td>ID </td>
 <td>R_ID </td>
 <td>NAME </td>
 <td>DEL </td>
</tr>
<?php
while($objResult = oci_fetch_array($objParse,OCI_BOTH))  
{  
?>    

<tr>
 <td><?=$objResult["F_ID"];?></td>
 <td><?=$objResult["R_ID"];?></td>
 <td><?=$objResult["FNAME"];?></td>
 <td align="center"><a  href="delfood2.php?FOOD_ID=<?=$objResult["F_ID"];?>">Delete</a></td>
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