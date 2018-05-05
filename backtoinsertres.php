 <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <title>InsertRestaurent</title>
    <link rel="stylesheet" href="css/style.css">
<script type="text/javascript">
function validate(){
	var flag=true;
	m = document.getElementById("msg");
	if(document.fm.rname.value.length==0){
		document.fm.rname.focus();
		m.style.color="blue";
		m.innerHTML="Type Restaurent name";
		flag=false;
	}
	
	else if(document.fm.rid.value.length==0){
	    document.fm.rid.focus();
		m.style.color="blue";
		m.innerHTML="choose a resid";
		flag=false;
	}
	else if(document.fm.rid.value.length < 5){
	    document.fm.rid.focus();
		m.style.color="blue";
		m.innerHTML="resid must have 5 character";
		flag=false;
	}
	return flag;
}
</script>
</head>
<body>
<form action="insertresvalidation.php" method="post" enctype="multipart/form-data" name="fm" id="fm">
<div class="nav">
     
        <div class="nav_logo">
            <img src="images/logo.png" alt="" align="middle" />
        </div>
		 <div class="full_bnr1 full_banner1">
        <div class="main_wr main_banner">
		 <div class="banner_txt">
<h1 style="font-size:200%">inserting new restaurent</h2> </br> </br>
<span id="msg"> </span></br>
<span> <?php echo $_GET['m'];?></span></br>

Name :
<input type="text" name="rname"></br></br>
Restaurent id :
<input type="text" name="rid"></br></br>
LOC :
 <select name="area">
  <option value="Choose an area"></option>
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
<input type="submit" onclick="return validate();" name="submit" value="submit" style="height:25px; width:100px"> </br> </br> </br>

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
