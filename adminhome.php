<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <title>Admin Home</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
if(isset($_SESSION["use"])){
	if (strlen($_SESSION["use"]) == 5){
}
else if(strlen($_SESSION["use"]) == 6)
{
	header("location: sup_home.php");
}
else
{
	header("location: userprofile.php");
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
                    <li><a href="adprofile.php">My Profile</a></li>
                    <li><a href="#">Edit User</a>
                        <ul>
                            <li><a href="delcus.php">Delete User</a>
                               
                            </li>
                            
                        </ul>
                    </li>
					<li><a href="checkorder.php">Check Order</a>
					<li><a href="#">Modify</a>
					
					  <ul>
                         <li><a href="#">Edit Supplier</a>
					        <ul>
                               <li><a href="insertsup.php">Insert</a>
                               
                                </li>
				     	   		 <li><a href="updatesup1.php">update </a>
                               
                                </li>
                                <li><a href="delsup.php">Delete </a>
                               
                                </li>
                            </ul>
                    <li><a href="#">Edit Restaurent</a>
					 <ul>
                            <li><a href="insertres.php">Insert</a>
                               
                            </li>
							 <li><a href="updateres1.php">update </a>
                               
                            </li>
                             <li><a href="delres.php">Delete </a>
                               
                            </li>
                        </ul>
                    <li><a href="#">Edit Food</a>
					
					 <ul>
                            <li><a href="insertfood.php">Insert</a>
                               
                            </li>
							 <li><a href="updatefood.php">update </a>
                               
                            </li>
                             <li><a href="delfood.php">Delete </a>
                               
                            </li>
                        </ul>
					
					</li>
					</ul>
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
</div>

</form>
</body>
</html>


