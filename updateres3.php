<html>  
<head>  
<title></title>  
</head>  
<body>  
<?php  
session_start();
require('db.php'); 
  
$strSQL = "UPDATE RESTAURENT SET ";  
$strSQL .="RNAME = '".$_POST["rname"]."' ";  
$strSQL .=",R_ID = '".$_POST["rid"]."' ";  
$strSQL .=",R_LOC = '".$_POST["area"]."' ";  
$strSQL .=",CDATE = '".$_POST["cdate"]."' ";  
$strSQL .=",VALUE = '".$_POST["valu"]."' ";   
$strSQL .="WHERE R_ID = '".$_GET["Res_ID"]."' ";  
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