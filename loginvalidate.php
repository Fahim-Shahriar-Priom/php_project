<?php
session_start();
?>
<html>
<head><title></title></head>
<body>
<?php
require('db.php');
$user_id = $_REQUEST['uid'];
$pass = $_REQUEST['upass'];
global $p;

$_SESSION['use']=$user_id;
if(isset($_REQUEST["uid"]) && isset($_REQUEST["upass"])){
	
$sql_user = "SELECT * FROM login,CUSTOMER WHERE LOGIN.u_id=CUSTOMER.C_ID AND LOGIN.U_ID like '%".$user_id."%' AND VALUE ='1'" ; 
$login_user = oci_parse($conn,$sql_user);
$sql_admin ="SELECT * FROM admin_login WHERE a_id like '%".$user_id."%'"; 
$login_admin = oci_parse($conn,$sql_admin);
$sql_suplier ="SELECT * FROM suplier_login,SUPLIER WHERE SUPLIER_LOGIN.S_ID=SUPLIER.S_ID AND SUPLIER_LOGIN.S_ID like '%".$user_id."%' AND VALUE='1'"; 
$login_suplier = oci_parse($conn,$sql_suplier);


}
else
{
	?><center><h1><a href="login.php">Login incorrect please submit again</a><h1><center><?php
	exit;
}

if(oci_execute($login_user)){
while(oci_fetch_array($login_user))
{
    $p = oci_result($login_user,"PASS");
}

if ($pass == $p)
{
    header("location: userprofile.php");
}
else if (oci_execute($login_admin))
{
    while(oci_fetch_array($login_admin))
{
    $p = oci_result($login_admin,"PASS");
}

if ($pass == $p)
{
    header("location: adminhome.php");
}
else if (oci_execute($login_suplier))
{
	while(oci_fetch_array($login_suplier))
{
    $p = oci_result($login_suplier,"PASS");
}

if ($pass == $p)
{
    header("location: sup_home.php");
}
else
{
    header("location: backtologin.php");
	
}
}
}
}

?>
</body>
</html>
