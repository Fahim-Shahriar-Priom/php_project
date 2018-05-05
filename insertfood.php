 <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <title>HungryBd</title>
    <link rel="stylesheet" href="css/style.css">
<script type="text/javascript">
function validate(){
	var flag=true;
	m = document.getElementById("msg");
	if(document.fm.fname.value.length==0){
		document.fm.fname.focus();
		m.style.color="blue";
		m.innerHTML="Type food name";
		flag=false;
	}
	
	else if(document.fm.fid.value.length==0){
	    document.fm.fid.focus();
		m.style.color="blue";
		m.innerHTML="choose a foodid";
		flag=false;
	}
	else if(document.fm.fprice.value.length==0){
	    document.fm.fprice.focus();
		m.style.color="blue";
		m.innerHTML="choose a foodid";
		flag=false;
	}
	else if(document.fm.rid.value.length==0){
	    document.fm.rid.focus();
		m.style.color="blue";
		m.innerHTML="choose a foodid";
		flag=false;
	}
	else if(document.fm.fid.value.length < 5){
	    document.fm.fid.focus();
		m.style.color="blue";
		m.innerHTML="foodid must have 5 character";
		flag=false;
	}
	else if(document.fm.rid.value.length < 5){
	    document.fm.rid.focus();
		m.style.color="blue";
		m.innerHTML="foodid must have 5 character";
		flag=false;
	}
	return flag;
}
</script>
</head>
<body>
<form action="insertfoodvalidation.php" method="post" enctype="multipart/form-data" name="fm" id="fm">
 <div class="nav">
     
        <div class="nav_logo">
            <img src="images/logo.png" alt="" align="middle" />
        </div>
		 <div class="full_bnr1 full_banner1">
        <div class="main_wr main_banner">
		 <div class="banner_txt">
        

<h1>inserting food</h2>
<span id="msg"> </span></br>
Name :
<input type="text" name="fname"></br></br>
Foodid :
<input type="text" name="fid"></br></br>
Resid:
<input type="text" name="rid"></br></br>
Price:
<input type="text" name="fprice"></br></br>
</select> </br></br>
<input type="submit" onclick="return validate();" name="submit" value="submit">
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
