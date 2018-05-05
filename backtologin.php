<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <title>Delete Food</title>
    <link rel="stylesheet" href="css/style.css">
 <style>
	table {
    align: center;
    color: white;
} 
	</style>
<script type="text/javascript">
function validate(){
	var flag=true;
	m = document.getElementById("msg");
	if(document.fm.uid.value.length==0){
		document.fm.uid.focus();
		m.style.color="blue";
		m.innerHTML="Type your id";
		flag=false;
	}
	else if(document.fm.uid.value.length < 5){
	    document.fm.uid.focus();
		m.style.color="blue";
		m.innerHTML="userid must have 5 character";
		flag=false;
	}
	else if(document.fm.upass.value.length==0){
	    document.fm.upass.focus();
		m.style.color="blue";
		m.innerHTML="Type Password";
		flag=false;
	}
	else if(document.fm.upass.value.length<6){
	    document.fm.upass.focus();
		m.style.color="blue";
		m.innerHTML="password must have 6 digit";
		flag=false;
	}
	return flag;
}
</script>
</head>
<body>
<form action="loginvalidate.php" method="get" enctype="multipart/form-data" name="fm" id="fm"> 
<div class="nav">
     
        <div class="nav_logo">
            <img src="images/logo.png" alt="" align="middle" />
        </div>
		 <div class="full_bnrm full_bannerm">
        <div class="main_wr main_banner">
		 <div class="banner_txt">
<h2>Login with your id and password<h2>
<span id="msg"> </span></br>
<span>User Id Password Didn't Match</span></br></br>
Userid :
<input type="text" value="" name="uid"></br></br>
Password :
<input type="password" value="" name="upass"></br></br>


<input type="submit" onclick="return validate();" name="submit" value="login" style="height:25px; width:100px"></br></br> </br>
<div class="nav_login">
<a href="Regitation.php">Create an account</a> </div>
</form>
</div>
        </div> </div>
		    <div class="end1">
        <address> Dhanmondi,Dhaka-1216 <br>
		
Copyright (c) 2017 HungryBd,
All Rights Reserved
</address>
    </div>
    
</body>
</html>