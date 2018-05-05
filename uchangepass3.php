<html>  
<head>  
body {background-color:rgb(255, 230, 166);} 
</head>  
<body>  
<?php  
session_start();
require('db.php'); 
  
$strSQL = "UPDATE login SET ";  
$strSQL .="U_ID = '".$_POST["uid"]."' ";  
$strSQL .=",PASS = '".$_POST["pass"]."' ";   
$strSQL .="WHERE U_ID = '".$_GET["CUS_ID"]."' ";  
$objParse = oci_parse($conn, $strSQL);  
$objExecute = oci_execute($objParse, OCI_DEFAULT);  
if($objExecute)  
{  
oci_commit($conn); //*** Commit Transaction ***//
  $user = "Your Password is changed";
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