<html>  
<head>  
<title></title>  
</head>  
<body>  
<?php  
session_start();
require('db.php'); 
  
$strSQL = "UPDATE CUSTOMER SET ";  
$strSQL .="VALUE = '0' ";  
$strSQL .="WHERE C_ID = '".$_GET["CUS_ID"]."' ";  
$objParse = oci_parse($conn, $strSQL);  
$objExecute = oci_execute($objParse, OCI_DEFAULT);  
if($objExecute)  
{  
oci_commit($conn); //*** Commit Transaction ***//
  $user = "User Removed";
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