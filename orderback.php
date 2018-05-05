<?php>
session_start();
require("db.php");

    $val = $_REQUEST["fid"];
	$sql="select R_ID from food where F_ID like '%".$val."%'";
    $s=getDataFromDB($sql);
	if(isset($_REQUEST["fid"]) && isset($_REQUEST["quantity"]) && isset($_SESSION["cid"])){
	
	$sql="INSERT INTO order VALUES ('".$_REQUEST['cid']."','".$s."','".$_REQUEST['fid']."','".$_REQUEST['quantity']."',to_date(sysdate,'DD/MM/YYYY'),'1')";
	echo $sql;
	$a=oci_parse($conn, $sql);
	if(oci_execute($a)){
		echo "hsgdh";
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