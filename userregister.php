<html>
<head><title></title></head>
<body>
<?php
    require('db.php');
	global $msg;
	global $m;
	if(isset($_REQUEST["uname"]) && isset($_REQUEST["uid"])  && isset($_REQUEST["uphone"]) && isset($_REQUEST["upass"]) && isset($_REQUEST["cpass"]) && isset($_REQUEST["area"])){
		if (strlen($_REQUEST["uname"]) == 0){
			$msg ="Any field can't be empty";
			header('location: backtoregitation.php?m='.$msg);
		}
		if (strlen($_REQUEST["uid"]) == 0){
			$msg ="Any field can't be empty";
			header('location: backtoregitation.php?m='.$msg);
		}
		elseif (strlen($_REQUEST["uphone"]) == 0){
			$msg ="Any field can't be empty";
			header('location: backtoregitation.php?m='.$msg);
		}
		elseif (strlen($_REQUEST["upass"]) == 0){
			$msg ="Any field can't be empty";
			header('location: backtoregitation.php?m='.$msg);
		}
		elseif (strlen($_REQUEST["cpass"]) == 0){
			$msg ="Any field can't be empty";
			header('location: backtoregitation.php?m='.$msg);
		}
		elseif (strlen($_REQUEST["cpass"]) == 0){
			$msg ="Any field can't be empty";
			header('location: backtoregitation.php?m='.$msg);
		}
		elseif (strlen($_REQUEST["uid"]) != 7){
			$msg ="User id must be 7 character";
			header('location: backtoregitation.php?m='.$msg);
		}
		elseif (strlen($_REQUEST["uphone"]) != 11){
			$msg ="Phone no must be 11 digit";
			header('location: backtoregitation.php?m='.$msg);
		}
		elseif (strlen($_REQUEST["upass"]) != 6){
			$msg ="User id must be 7 character";
			header('location: backtoregitation.php?m='.$msg);
		}
		elseif (strlen($_REQUEST["cpass"]) != strlen($_REQUEST["upass"])){
			$msg ="password didn't match";
			header('location: backtoregitation.php?m='.$msg);
		}
		else {
	$sql = 'BEGIN CUSTOMER_ADD(:id,:name,:contact,:val,:loc); END;';
	//$sql="INSERT INTO customer VALUES ('".$_REQUEST['uid']."','".$_REQUEST['uname']."','".$_REQUEST['uphone']."',to_date(sysdate,'DD/MM/YYYY'),'1','".$_REQUEST['area']."')";
	$a=oci_parse($conn, $sql);
	oci_bind_by_name($a,':name',$_REQUEST['uname'],100);
    oci_bind_by_name($a,':id',$_REQUEST['uid'],100);
    oci_bind_by_name($a,':contact',$_REQUEST['uphone'],100);
    oci_bind_by_name($a,':val',$name,100);
	oci_bind_by_name($a,':loc',$_REQUEST['area'],100);
	$name = 1;
	if(oci_execute($a)){
			$sql2="INSERT INTO login VALUES ('".$_REQUEST['uid']."','".$_REQUEST['upass']."')";
			$b=oci_parse($conn,$sql2);
			if(oci_execute($b))
			{
				$user = "Dear ".$_REQUEST['uname']. " You have completed the registration now please sign in";
                echo "<script type='text/javascript'>alert('$user');</script>";
				header('Refresh: 1; URL=login.php');
			}
			else{
				echo "not connected";
			}
			
	}
	
}
}
?>
	
</body>
</html>
