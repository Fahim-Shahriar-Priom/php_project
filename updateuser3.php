<html>  
<head>  
<title></title>  
</head>  
<body>  
<?php  
  session_start();
require('db.php'); 
$user_id=$_SESSION["use"];  
$strSQL = "UPDATE CUSTOMER SET ";   
$strSQL .="CNAME = '".$_POST["cname"]."' ";  
$strSQL .=",PHONE = '".$_POST["phone"]."' "; 
$strSQL .=",C_LOC = '".$_POST["area"]."' ";  
$strSQL .="WHERE C_ID = '".$_GET["CUS_ID"]."' ";  
$objParse = oci_parse($conn, $strSQL);  
$objExecute = oci_execute($objParse, OCI_DEFAULT); 
echo $strSQL; 
if($objExecute)  
{  
oci_commit($conn); //*** Commit Transaction ***//
  $user = "Profile update successful";
                echo "<script type='text/javascript'>alert('$user');</script>";
				header('Refresh: 1; URL=userprofile.php');

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