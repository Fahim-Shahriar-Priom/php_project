<!DOCTYPE html>


<html>

<head>
    <meta charset="utf-8">
    <title>HungryBd</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
 <script>
function showArea(str) {
  var xhttp;    
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txtHint").innerHTML = this.responseText;
    }
  };
  var url = "mainb.php?area="+str;
  //alert(url);
  xhttp.open("GET",url, true);
  xhttp.send();
}
</script>
    <div class="nav">
        <div class="nav_logo">
            <img src="images/logo.png" alt="" align="middle" />
        </div>
        
		<div class="nav_search">
            	
		</div>
    </div>
    <!-- Navigation part is end -->

    <div class="full_menu">
        
    </div>

  <div class="full_bnrm full_bannerm">
        <div class="main_wr main_banner">
         <div class="banner_txt">
		 <h2>Enter An Area</h2>
    <div>
<select name="area" onchange="showArea(this.value)">
<option value="Choose an area">Choose An Area</option>
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

</select>

<h2><span id="txtHint" ></span></h2></>

<div class="nav_login">
<a href="userprofile.php">Back To Home</a> </div>
</div>
</div>
 </div>
	<div>
    
    </div>
        </div>
    </div> <br>

   

    <div class="end1">
        <address> Dhanmondi,Dhaka-1216 <br>
		
Copyright (c) 2017 HungryBd,
All Rights Reserved
</address>
    </div>

</body>

</html>
