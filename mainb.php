<?php
require("db.php");
//echo "i am talking from server<br>";
//echo "Hello : ".$_REQUEST['uname'];

if(isset($_REQUEST["area"])){
	$val = $_REQUEST["area"];
	$sql="select * from restaurent where R_LOC like '%".$val."%'";
	//$sql="select * from restaurent where name like '%.$_REQUEST["uname"].%'";
	//echo $sql;
	$a=getDataFromDB($sql);
	//echo "<pre>";print_r($a);echo "<pre>";
	foreach($a as $v){
		//echo "<h4>".$v["RNAME"]."</h4>";
		//echo "<p>".$v["name"]."</p>";
		//echo "<a href='restaurent.php'".$v["RNAME"]."</a><br/>";
		echo "<a href='foodbuy.php?rid=".$v['R_ID']."'>".$v["RNAME"]."</a><br/>";

	}
}
?>