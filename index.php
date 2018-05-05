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
        <div class="nav_icon">
            <a href="" target="_blank"><img src="images/facebook.png" alt="" /></a>
            <a href="" target="_blank"><img src="images/instagram.png" alt="" /></a>
            <a href="" target="_blank"><img src="images/twitter.png" alt="" /></a>
        </div>
        <div class="nav_logo">
            <img src="images/logo.png" alt="" align="middle" />
        </div>
        <div class="nav_login">
            <a href="login.php" target="_self">Login</a>
        </div>
		<div class="nav_search">
            	
		</div>
    </div>
    <!-- Navigation part is end -->

    <div class="full_menu">
        <div class="main">
            <nav class="navbar_wr">
               
                   <div class="topnav">
  <a class="active" href="#home">Home</a>
  <a href="#about">About</a>
  <a href="#service">Contact</a>
 
            </nav>
        </div>
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
<h2><span id="txtHint" ></span></h2>
</div>
 </div>
	<div>
    
    </div>
        </div>
    </div> <br>

    <div class="full_wr" id="">
        <div class="last_part" id="">
            <div class="last_part_one">
                <h1 id="about">ABOUT US</h1>
                <p>The menu takes its inspiration from classic American dishes like beef, lamb, pork and walleye, creatively prepared, vibrantly presented, and influenced by cuisines around the world reflecting the global, sophisticated, expanded palates of today. </p>
            </div>
            <div class="last_part_two">
                <h1 id="service">SERVICE & FACILITIES</h1>
                <ul>
                    <li> >Surves quickly</li>
                    <li> >Low cost Delivery</li>
                    <li> >Home Delivery</li>
                    <li> >Online Order</li>
                </ul>
            </div>
            <div class="last_part_three">
                <h1>SEND US MESSAGE</h1>

                <form action="php/message.php" method="POST">
                    
                    <textarea name="msg" placeholder=" Enter your message"></textarea>
                    <input type="submit" name="submit" value="Send">
                </form>
            </div>
        </div>
    </div><br>


    <div class="end">
        <address> Dhanmondi,Dhaka-1216 <br>
		
Copyright (c) 2017 HungryBd,
All Rights Reserved
</address>
    </div>

</body>

</html>
