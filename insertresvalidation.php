<html>
<head><title></title></head>
<body>
<?php
    require('db.php');
	if(isset($_REQUEST["rname"]) && isset($_REQUEST["rid"])  && isset($_REQUEST["area"])){
	if (strlen($_REQUEST["rname"]) == 0){
			$msg ="Any field can't be empty";
			header('location: backtoinsertres.php?m='.$msg);
		}
		elseif (strlen($_REQUEST["rid"]) == 0){
			$msg ="Any field can't be empty";
			header('location: backtoinsertres.php?m='.$msg);
		}
		elseif (strlen($_REQUEST["area"]) == 0){
			$msg ="Any field can't be empty";
			header('location: backtoinsertres.php?m='.$msg);
		}
		elseif (strlen($_REQUEST["rid"]) <= 3){
			$msg ="Enter a valid Restaurent id";
			header('location: backtoinsertres.php?m='.$msg);
		}
		else{
	$sql="INSERT INTO restaurent VALUES ('".$_REQUEST['rname']."','".$_REQUEST['rid']."','".$_REQUEST['area']."',to_date(sysdate,'DD/MM/YYYY'),'1')";
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
	}
	?>
	
</body>
</html>
