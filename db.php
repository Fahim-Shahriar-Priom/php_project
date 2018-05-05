<html>
<head><title></title></head>
<body>
	<?php 
	global $sql;
	global $arr;
	global $row;
	$conn=oci_connect("naimdb","tiger","localhost/XE");
	
	If (!$conn)
	{echo 'Failed to connect to Oracle';}
	function getJSONFromDB($sql){
	$conn=oci_connect("naimdb","tiger","localhost/XE");
	//echo $sql;
	$result = oci_parse($conn, $sql);
	if (oci_execute($result)){
		while($row = oci_fetch_assoc($result)) {
		$arr[]=$row;
	}
	return json_encode($arr);
	}
	//print_r($a);
	//while($row = oci_fetch_assoc($result)) {
		//$arr[]=$row;
	//}
	//return json_encode($arr);
}
	
    function getDataFromDB($sql){
	$conn = oci_connect("naimdb", "tiger","localhost/XE");
	//echo $sql;
	$result = oci_parse($conn, $sql);
	$arr=array();
	//print_r($result);
	oci_execute($result);
	while($row = oci_fetch_assoc($result)) {
		$arr[]=$row;
	}
	return $arr;
	}
	
	?>	
</body>
</html>
