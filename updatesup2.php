<html>  
<head>  
<title></title>  
</head>  
<body>  
<form  action="updatesup3.php?SUP_ID=<?=$_GET["SUP_ID"];?>"  name="frmEdit" method="post">  
<?php  
require('db.php'); 
$strSQL = "SELECT * FROM SUPLIER WHERE S_ID =  '".$_GET["SUP_ID"]."' ";  
$objParse = oci_parse ($conn, $strSQL);  
oci_execute ($objParse,OCI_DEFAULT);  
$objResult = oci_fetch_array($objParse,OCI_BOTH);  
if(!$objResult)  
{  
echo "Not found SUP_ID=".$_GET["SUP_ID"];  
}  
else  
{  
  
?>  
<table width="600" border="1" align="center">  
<tr>  
<th width="200"> <div align="center">SUPPLIER ID  </div></th>  
<th width="98"> <div align="center">SUPPLIER NAME  </div></th>  
<th width="198"> <div align="center">SALARY  </div></th>  
<th width="97"> <div align="center">GENDER  </div></th>  
<th width="97"> <div align="center">VALUE  </div></th>  
<th width="59"> <div align="center">S_LOC  </div></th>   
<th width="160"> <div align="center">SDATE  </div></th> 
<th width="30"> <div align="center">Edit  </div></th> 
</tr> 
<tr>  
<td><div align="center"><input type="text"  name="sid" size="20"  value="<?=$objResult["S_ID"];?>"></div></td>  
<td><input type="text" name="sname" size="20"  value="<?=$objResult["SNAME"];?>"></td>  
<td><input type="text" name="sal" size="20"  value="<?=$objResult["SALARY"];?>"></td>  
<td><input type="text" name="gender" size="20"  value="<?=$objResult["GENDER"];?>"></td>
<td><div align="center"><input type="text"  name="valu" size="20"  value="<?=$objResult["VALUE"];?>"></div></td>  
<td align="right"><input type="text" name="area" size="2"  value="<?=$objResult["S_LOC"];?>"></td>  
<td align="right"><input type="text" name="date" size="2"  value="<?=$objResult["SDATE"];?>"></td>  
</tr>  
</table>  
<input type="submit" name="submit" value="submit">  
<?php  
}  
oci_close($conn);  
?>  
</form>  
</body>  
</html>