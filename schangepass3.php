<html>  
<head>  
<title></title>  
</head>  
<body>  
<?php  
session_start();
require('db.php'); 
  
$strSQL = "UPDATE suplier_login SET ";  
$strSQL .="S_ID = '".$_POST["sid"]."' ";  
$strSQL .=",PASS = '".$_POST["pass"]."' ";   
$strSQL .="WHERE S_ID = '".$_GET["SUP_ID"]."' ";  
$objParse = oci_parse($conn, $strSQL);  
$objExecute = oci_execute($objParse, OCI_DEFAULT);  
if($objExecute)  
{  
oci_commit($conn); //*** Commit Transaction ***//
  $user = "Password Changed Back to home";
                echo "<script type='text/javascript'>alert('$user');</script>";
				header('Refresh: 1; URL=sup_home.php');

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