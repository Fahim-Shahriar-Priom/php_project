
<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>UserHome</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<?php
if(isset($_SESSION["use"])){
	if (strlen($_SESSION["use"]) == 7){
}
else if(strlen($_SESSION["use"]) == 6)
{
	header("location: sup_home.php");
}
else
{
	header("location: adminhome.php");
}
	
}
else{
	header("location: login.php");
}
?>
<form>
    <div class="nav">
        
        <div class="nav_logo">
            <img src="images/logo.png" alt="" align="middle" />
        </div>
        
    </div>
    <!-- Navigation part is end -->

    <div class="full_menu">
        <div class="main">
            <nav class="navbar_wr">
                <ul>
                    <li><a href="umyprofile.php">My Profile</a></li>
                    <li><a href="#">Edit Profile</a>
                      <ul>
                            <li><a href="updateuser1.php">Edit Information</a>
                               
                            </li>
                            
                            <li><a href="uchangepass.php">Change Password</a>
                               
                            </li>
                            
                        
                        </ul>  
                    </li>
                    <li><a href="orderindex.php">Ordered Food</a>
					 
                
                    <li><a href="logout.php">logout</a></li>

                </ul>
            </nav>
        </div>
    </div>


    <div class="full_bnr full_banner">
        <div class="main_wr main_banner">
            <div class="banner_txt">
                <h1>Hello Food </h1>
                <p>
                    Quality and Service is our First priority.
                </p>
            </div>
        </div>
    </div> <br>


    <div class="end">
        <address> Dhanmondi,Dhaka-1216 <br>
		
Copyright (c) 2017 HungryBd,
All Rights Reserved
</address>
</body>
</form>
</html>
