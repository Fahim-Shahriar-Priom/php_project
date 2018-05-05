<html>  
<head>  
<title></title>  
</head>  
<body>  
<?php  
session_start();
require('db.php'); 
  
$strSQL = "UPDATE FOOD SET ";  
$strSQL .="FNAME = '".$_POST["fname"]."' ";  
$strSQL .=",F_ID = '".$_POST["fid"]."' ";  
$strSQL .=",R_ID = '".$_POST["rid"]."' "; 
$strSQL .=",PRICE = '".$_POST["price"]."' "; 
$strSQL .=",FDATE = '".$_POST["fdate"]."' ";  
$strSQL .=",VALUE = '".$_POST["valu"]."' ";   
$strSQL .="WHERE F_ID = '".$_GET["FOOD_ID"]."' ";  
$objParse = oci_parse($conn, $strSQL);  
$objExecute = oci_execute($objParse, OCI_DEFAULT);  
if($objExecute)  
{  
oci_commit($conn); //*** Commit Transaction ***//
  $user = "Update successful";
                echo "<script type='text/javascript'>alert('$user');</script>";
				header('Refresh: 1; URL=adminhome.php');

}  
else  
{  
oci_rollback($conn); //*** RollBack Transaction ***//  
$e = oci_error($objParse);  
echo "Error Save [".$e['message']."]";  
}  
oci_close($conn);  
?>  
</body>  
</html>