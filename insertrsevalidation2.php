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
	$sql = 'BEGIN addrestaurent(:rname, :rid, :area, :val); END;';

$stmt = oci_parse($conn,$sql);

//  Bind the input parameter
oci_bind_by_name($stmt,':rname',$_REQUEST['rname'],100);
oci_bind_by_name($stmt,':rid',$_REQUEST['rid'],100);
oci_bind_by_name($stmt,':area',$_REQUEST['area'],100);
oci_bind_by_name($stmt,':val',$name,100);
// Assign a value to the input 
$name = 1;
oci_execute($stmt);

	if(oci_execute($stmt)){
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
