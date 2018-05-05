
<?php
session_start();
require("db.php");
if(isset($_REQUEST["rid"]) && isset($_REQUEST["fprice"]) && isset($_REQUEST["quan"]) && isset($_REQUEST["fid"])&& isset($_REQUEST["cid"])){
	
	$sql="INSERT INTO ORDER_ VALUES ('".$_REQUEST['cid']."','".$_REQUEST['rid']."','".$_REQUEST['fid']."','".$_REQUEST['fprice']."','".$_REQUEST['quan']."',to_date(sysdate,'DD/MM/YYYY'),'1')";
	echo $sql;
	$a=oci_parse($conn, $sql);
	if(oci_execute($a)){
		$user = "Order successful";
                echo "<script type='text/javascript'>alert('$user');</script>";
				header('Refresh: 1; URL=userprofile.php');
	}
	else 
	{
		echo "not connected";
	}
}
else{
	echo "Invalid parameter !";
}

?>
