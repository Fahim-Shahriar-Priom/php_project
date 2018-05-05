<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <title>Registration</title>
    <link rel="stylesheet" href="css/style.css">
<script type="text/javascript">
function validate(){
	var flag=true;
	m = document.getElementById("msg");
	if(document.fm.uname.value.length==0){
		document.fm.uname.focus();
		m.style.color="blue";
		m.innerHTML="Type your name";
		flag=false;
	}
	
	else if(document.fm.uid.value.length==0){
	    document.fm.uid.focus();
		m.style.color="blue";
		m.innerHTML="choose a userid";
		flag=false;
	}
	else if(document.fm.uid.value.length != 7){
	    document.fm.uid.focus();
		m.style.color="blue";
		m.innerHTML="userid must have 7 character";
		flag=false;
	}
	else if(document.fm.uphone.value.length==0){
	    document.fm.uphone.focus();
		m.style.color="blue";
		m.innerHTML="choose your phone number";
		flag=false;
	}
	else if(document.fm.uphone.value.length<11){
	    document.fm.uphone.focus();
		m.style.color="blue";
		m.innerHTML="phone number must be 11 digit";
		flag=false;
	}
	
	else if(document.fm.upass.value.length==0){
	    document.fm.upass.focus();
		m.style.color="blue";
		m.innerHTML="choose a password";
		flag=false;
	}
	else if(document.fm.upass.value.length<6){
	    document.fm.upass.focus();
		m.style.color="blue";
		m.innerHTML="password must have 6 digit";
		flag=false;
	}
	else if(document.fm.cpass.value.length==0){
		document.fm.cpass.focus();
		m.style.color="blue";
		m.innerHTML="retype password";
		flag=false;
	}
	else if(document.fm.cpass.value!=document.fm.upass.value){
		document.fm.cpass.focus();
		m.style.color="blue";
		m.innerHTML="password didn't match";
		flag=false;
	}
	return flag;
}
</script>
</head>
<body>
<form action="userregister.php" method="post" enctype="multipart/form-data" name="fm" id="fm">
<div class="nav">
     
        <div class="nav_logo">
            <img src="images/logo.png" alt="" align="middle" />
        </div>
		 <div class="full_bnr1 full_banner1">
        <div class="main_wr main_banner">
		 <div class="banner_txt">
        
            
<h1 style="font-size:200%">Please Fill up the Form</h1></br>
<span id="msg"><?php echo $_GET['m'];?> </span></br>
Name :
<input type="text" name="uname"></br></br></td></tr>
Userid :
<input type="text" name="uid"></br></br>
phone :
<input type="text" name="uphone"></br></br>
Password :
<input type="password" name="upass"></br></br>
ConfirmPassword :
<input type="password" name="cpass"></br></br>
Area :
 <select name="area">
  <option value="Choose an area">choose An Area</option>
  <option value="Mirpur">Mirpur</option>
  <option value="Uttara">Uttara</option>
  <option value="Khilkhet">Khilkhet</option>
  <option value="Kuril">Kuril</option>
  <option value="Kuratoli">Kuratoli</option>
  <option value="Badda">Badda</option>
  <option value="Rampura">Rampura</option>
  <option value="Basabho">Basabho</option>
  <option value="Saydabad">Saydabad</option>
  <option value="Jatrabari">Jatrabari</option>
  <option value="Banani">Banani</option>
  <option value="Dhanmondi">Dhanmondi</option>
</select> </br></br>
<a  href="login.php">Back</a>
<input type="submit" onclick="return validate();" name="submit" value="submit" style="height:25px; width:100px" >
 </div>
        </div> </div> 
 <div class="end1">
        <address> Dhanmondi,Dhaka-1216 <br>
		
Copyright (c) 2017 HungryBd,
All Rights Reserved
</address>
    </div>
</form>

</body>
</html>
