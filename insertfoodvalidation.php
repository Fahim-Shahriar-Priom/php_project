<html>
<head><title></title></head>
<body>
<?php
    require('db.php');
	if(isset($_REQUEST["fname"]) && isset($_REQUEST["fid"]) && isset($_REQUEST["rid"]) && isset($_REQUEST["fprice"])){
	
	$sql="INSERT INTO FOOD VALUES ('".$_REQUEST['fname']."','".$_REQUEST['fid']."','".$_REQUEST['rid']."','".$_REQUEST['fprice']."',to_date(sysdate,'DD/MM/YYYY'),'1')";
	
	$a=oci_parse($conn, $sql);
	if(oci_execute($a)){
		$user = "Registration successful";
                echo "<script type='text/javascript'>alert('$user');</script>";
		header('Refresh: 1; URL=adminhome.php');
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
	
</body>
</html>
