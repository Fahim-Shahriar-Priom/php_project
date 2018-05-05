 <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <title>InsertSupplier</title>
    <link rel="stylesheet" href="css/style.css">
<script type="text/javascript">
function validate(){
	var flag=true;
	m = document.getElementById("msg");
	if(document.fm.sname.value.length==0){
		document.fm.sname.focus();
		m.style.color="blue";
		m.innerHTML="Type supplier name";
		flag=false;
	}
	
	else if(document.fm.sid.value.length==0){
	    document.fm.sid.focus();
		m.style.color="blue";
		m.innerHTML="choose an id";
		flag=false;
	}
	else if(document.fm.sal.value.length==0){
	    document.fm.sal.focus();
		m.style.color="blue";
		m.innerHTML="choose a salary";
		flag=false;
	}
	else if(document.fm.area.value.length==0){
	    document.fm.area.focus();
		m.style.color="blue";
		m.innerHTML="choose an area";
		flag=false;
	}
	else if(document.fm.gender.value.length==0){
	    document.fm.gender.focus();
		m.style.color="blue";
		m.innerHTML="select Gender";
		flag=false;
	}
	else if(document.fm.sid.value.length != 6){
	    document.fm.sid.focus();
		m.style.color="blue";
		m.innerHTML="Supplierid must have 6 character";
		flag=false;
	}
	else if(document.fm.spass.value.length == 0){
	    document.fm.spass.focus();
		m.style.color="blue";
		m.innerHTML="password must have 6 character";
		flag=false;
	}
	else if(document.fm.spass.value.length != 6){
	    document.fm.spass.focus();
		m.style.color="blue";
		m.innerHTML="password must have 6 character";
		flag=false;
	}
	return flag;
}
</script>
</head>
<body>
<form action="insertsupvalidation.php" method="post" enctype="multipart/form-data" name="fm" id="fm">
 <div class="nav">
     
        <div class="nav_logo">
            <img src="images/logo.png" alt="" align="middle" />
        </div>
		 <div class="full_bnr1 full_banner1">
        <div class="main_wr main_banner">
		 <div class="banner_txt">
        
<h1 style="font-size:200%">Inserting New Supplier</h2>
<span id="msg"> </span></br>
<span> <?php echo $_GET['m'];?></span></br>

Name :
<input type="text" name="sname"></br></br>
Supplier id :
<input type="text" name="sid"></br></br>
Salary:
<input type="text" name="sal"></br></br>
Gender:
<select name="gender">
  <option value="Male">Male</option>
  <option value="Female">Female</option>
  </select> </br></br>
Location:
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
  </select></br></br>
PassWord:
<input type="password" name="spass"></br></br>
 </br></br>


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