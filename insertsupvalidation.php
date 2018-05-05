<html>
<head><title></title></head>
<body>
<?php
    session_start();
    require('db.php'); 
	if(isset($_REQUEST["sname"]) && isset($_REQUEST["sid"])  && isset($_REQUEST["sal"]) && isset($_REQUEST["gender"]) && isset($_REQUEST["area"]) && isset($_REQUEST["spass"])){
	
		if (strlen($_REQUEST["sname"]) == 0){
			$msg ="Any field can't be empty";
			header('location: backtoinsertsup.php?m='.$msg);
		}
		elseif (strlen($_REQUEST["sid"]) == 0){
			$msg ="Any field can't be empty";
			header('location: backtoinsertsup.php?m='.$msg);
		}
		elseif (strlen($_REQUEST["sal"]) == 0){
			$msg ="Any field can't be empty";
			header('location: backtoinsertsup.php?m='.$msg);
		}
		elseif (strlen($_REQUEST["area"]) == 0){
			$msg ="Any field can't be empty";
			header('location: backtoinsertsup.php?m='.$msg);
		}
		elseif (strlen($_REQUEST["spass"]) == 0){
			$msg ="Any field can't be empty";
			header('location: backtoinsertsup.php?m='.$msg);
		}
		elseif (strlen($_REQUEST["spass"]) < 6 ){
			$msg ="Password must be more than 5 digit";
			header('location: backtoinsertsup.php?m='.$msg);
		}
		elseif (strlen($_REQUEST["sid"]) != 6){
			$msg ="Id must me 6 character";
			header('location: backtoinsertsup.php?m='.$msg);
		}
		elseif (strlen($_REQUEST["sname"]) < 3){
			$msg ="Right a valid name";
			header('location: backtoinsertsup.php?m='.$msg);
		}
		else{
	$sql = 'BEGIN SUPLIER_ADD(:id,:name,:salary,:gender,:val,:loc,:pass); END;';
	//$sql="INSERT INTO suplier VALUES ('".$_REQUEST['sid']."','".$_REQUEST['sname']."','".$_REQUEST['sal']."','".$_REQUEST['gender']."','1','".$_REQUEST['area']."',to_date(sysdate,'DD/MM/YYYY'))";
	$a=oci_parse($conn, $sql);
	oci_bind_by_name($a,':name',$_REQUEST['sname'],100);
    oci_bind_by_name($a,':id',$_REQUEST['sid'],100);
    oci_bind_by_name($a,':salary',$_REQUEST['sal'],100);
	oci_bind_by_name($a,':gender',$_REQUEST['gender'],100);
    oci_bind_by_name($a,':val',$name,100);
	oci_bind_by_name($a,':loc',$_REQUEST['area'],100);
	oci_bind_by_name($a,':pass',$_REQUEST['spass'],100);
	$name = 1;
	if(oci_execute($a)){
		//$sql2="INSERT INTO suplier_login VALUES ('".$_REQUEST['sid']."','".$_REQUEST['spass']."')";
			//$b=oci_parse($conn,$sql2);
			//if(oci_execute($b))
			
				$user = "Registration successful";
                echo "<script type='text/javascript'>alert('$user');</script>";
				header('Refresh: 1; URL=adminhome.php');
	}
			else{
				echo "not connected";
			}
	
	
}
	}
	?>
	
</body>
</html>
