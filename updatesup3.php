<html>  
<head>  
<title></title>  
</head>  
<body>  
<?php  
session_start();
require('db.php'); 
  
$strSQL = "UPDATE suplier SET ";  
$strSQL .="S_ID = '".$_POST["sid"]."' ";  
$strSQL .=",SNAME = '".$_POST["sname"]."' ";  
$strSQL .=",SALARY = '".$_POST["sal"]."' "; 
$strSQL .=",GENDER = '".$_POST["gender"]."' "; 
$strSQL .=",VALUE = '".$_POST["valu"]."' ";  
$strSQL .=",S_LOC = '".$_POST["area"]."' ";  
$strSQL .=",SDATE = '".$_POST["date"]."' ";  
$strSQL .="WHERE S_ID = '".$_GET["SUP_ID"]."' ";  
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