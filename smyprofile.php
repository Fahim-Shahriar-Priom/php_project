<html>
<head>
<meta charset="utf-8">
    <title>Supplier_Profile</title>
    <link rel="stylesheet" href="css/style.css">
</style>
</head>
<body>
<form>
<div class="nav">
     
        <div class="nav_logo">
            <img src="images/logo.png" alt="" align="middle" />
        </div>
		 <div class="full_bnr1 full_banner1">
        <div class="main_wr main_banner">
		 <div class="banner_txt">
<?php
session_start();

require("db.php");
$user_id=$_SESSION["use"];
$jsonData= getJSONFromDB("select * from suplier WHERE S_ID LIKE '%".$user_id."%'");

$jsn=json_decode($jsonData,true);

foreach($jsn as $v){
	echo "<h1> ID :".$v["S_ID"]." </br>Name :".$v["SNAME"]."</br> Phone : ".$v["SALARY"]." </br>ADDRESS : ".$v["GENDER"]."</br> Phone : ".$v["S_LOC"]."</h1>";
	//echo "<p>".$v->name." with cgpa : ".$v->cgpa."</p>";
}
?>
</div>
        </div> </div> 
 <div class="end1">
        <address> Dhanmondi,Dhaka-1216 <br>
		
Copyright (c) 2017 HungryBd,
All Rights Reserved
</address>
    </div>

</form>
</BODY>
</html>