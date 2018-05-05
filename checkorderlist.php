<head>
  
<meta charset="utf-8">
    <title>Check Order List</title>
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
$strSQL = "select C_ID,R_ID,F_ID,FPRICE,QUANTITY,ODATE FROM ORDER_ where num='1' ";  
$objParse = oci_parse ($conn, $strSQL);  
oci_execute ($objParse,OCI_DEFAULT);  
?>  
<table width="600" border="1" align="center">
<tr>
 <td><b>Custommer </b></td>
 <td><b>Restaurent</b> </td>
 <td><b>Food </b></td>
 <td><b>Quantity </b></td>
 <td><b>Price with charge</b></td>
 <td><b>Date </b></td>
 <td><b>Action </b></td>
</tr>
<?php
while($objResult = oci_fetch_array($objParse,OCI_BOTH))  
{  
?>    

<tr>
 <td><?=$objResult["C_ID"];?></td>
 <td><?=$objResult["R_ID"];?></td>
 <td><?=$objResult["F_ID"];?></td>
 <td><?=$objResult["QUANTITY"];?></td>
 <td><?=$objResult["FPRICE"]*$objResult["QUANTITY"];?></td>
 <td><?=$objResult["ODATE"];?></td>
 <td align="center"><a  href="checkorderlist2.php?CUS_ID=<?=$objResult["C_ID"];?>&SUP_ID=<?=$_SESSION["use"];?>">Received</a></td>
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