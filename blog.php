<?php
$servername="localhost";
$username="root";
$password="";
$dbname="jdb";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
  die("connection failed:".$conn->connect_error);
}
else{
  
}
  $sql = "select * from jdbblog"; 
    $result = ($conn->query($sql)); 
    //declare array to store the data of database 
    $row = [];  
  
    if ($result->num_rows > 0)  
    { 
        // fetch all data from db into array  
        $row = $result->fetch_all(MYSQLI_ASSOC);   
    } 
    ?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style type="text/css">
	@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

nav{
  position: fixed;
  z-index: 99;
  width: 100%;
  margin: 0px -15px;


  
  background: #faf7f9;
}
nav .wrapper{
  position: relative;
  max-width: 1300px;
  padding: 0px 100px;
  height: 70px;
  line-height: 70px;
  margin: auto;
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.wrapper .logo a{
  color: #f2f2f2;
  font-size: 30px;
  font-weight: 600;
  text-decoration: none;
  margin: 0px -30px;
}
.wrapper .nav-links{
  display: inline-flex;
}
.nav-links li{
  list-style: none;
}
.nav-links li a{
  color: black;
  text-decoration: none;
  font-size: 18px;
  font-weight: 500;
  padding: 9px 10px;
  border-radius: 5px;
  transition: all 0.3s ease;
}
.nav-links li a:hover{
  background: ;
  color: white;
}
.nav-links .mobile-item{
  display: none;
}
.nav-links .drop-menu{
  position: absolute;
  background: #242526;
  width: 180px;
  line-height: 45px;
  top: 85px;
  opacity: 0;
  visibility: hidden;
  box-shadow: 0 6px 10px rgba(0,0,0,0.15);
}
.nav-links li:hover .drop-menu,
.nav-links li:hover .mega-box{
  transition: all 0.3s ease;
  top: 70px;
  opacity: 1;
  visibility: visible;
}
.drop-menu li a{
  width: 100%;
  display: block;
  padding: 0 0 0 15px;
  font-weight: 400;
  border-radius: 0px;
}
.mega-box{
  position: absolute;
  left: 0;
  width: 100%;
  padding: 0 30px;
  top: 85px;
  opacity: 0;
  visibility: hidden;
}
.mega-box .content{
  background:  #33001a;
  padding: 25px 20px;
  display: flex;
  width: 100%;
  justify-content: space-between;
  box-shadow: 0 6px 10px rgba(0,0,0,0.15);
}
.mega-box .content .row{
  width: calc(25% - 30px);
  line-height: 45px;
}
.content .row img{
  width: 100%;
  height: 100%;
  object-fit: cover;
}
.content .row header{
  color: white;
  font-size: 20px;
  font-weight: 500;
}
.content .row .mega-links{
  margin-left: -40px;
  border-left: 1px solid rgba(255,255,255,0.09);
}
.row .mega-links li{
  padding: 0 20px;
}
.row .mega-links li a{
  padding: 0px;
  padding: 0 20px;
  color: white;
  font-size: 17px;
  display: block;
}
.row .mega-links li a:hover{
  color: #f2f2f2;
}
.wrapper .btn{
  color: #fff;
  font-size: 20px;
  cursor: pointer;
  display: none;
}
.wrapper .btn.close-btn{
  position: absolute;
  right: 30px;
  top: 10px;
}

@media screen and (max-width: 970px) {
  .wrapper .btn{
    display: block;
  }
  .wrapper .nav-links{
    position: fixed;
    height: 100vh;
    width: 100%;
    max-width: 350px;
    top: -20;
    left: -100%;
    background: #242526;
    display: block;
    padding: 50px 10px;
    line-height: 50px;
    overflow-y: auto;
    box-shadow: 0px 15px 15px rgba(0,0,0,0.18);
    transition: all 0.3s ease;
  }
  /* custom scroll bar */
  ::-webkit-scrollbar {
    width: 10px;
  }
  ::-webkit-scrollbar-track {
    background: #242526;
  }
  ::-webkit-scrollbar-thumb {
    background: #3A3B3C;
  }
  #menu-btn:checked ~ .nav-links{
    left: 0%;
  }
  #menu-btn:checked ~ .btn.menu-btn{
    display: none;
  }
  #close-btn:checked ~ .btn.menu-btn{
    display: block;
  }
  .nav-links li{
    margin: 15px 10px;
  }
  .nav-links li a{
    padding: 0 20px;
    display: block;
    font-size: 20px;
  }
  .nav-links .drop-menu{
    position: static;
    opacity: 1;
    top: 65px;
    visibility: visible;
    padding-left: 20px;
    width: 100%;
    max-height: 0px;
    overflow: hidden;
    box-shadow: none;
    transition: all 0.3s ease;
  }
  #showDrop:checked ~ .drop-menu,
  #showMega:checked ~ .mega-box{
    max-height: 100%;
  }
  .nav-links .desktop-item{
    display: none;
  }
  .nav-links .mobile-item{
    display: block;
    color: #f2f2f2;
    font-size: 20px;
    font-weight: 500;
    padding-left: 20px;
    cursor: pointer;
    border-radius: 5px;
    transition: all 0.3s ease;
  }
  .nav-links .mobile-item:hover{
    background: #3A3B3C;
  }
  .drop-menu li{
    margin: 0;
  }
  .drop-menu li a{
    border-radius: 5px;
    font-size: 18px;
  }
  .mega-box{
    position: static;
    top: 65px;
    opacity: 1;
    visibility: visible;
    padding: 0 20px;
    max-height: 0px;
    overflow: hidden;
    transition: all 0.3s ease;
  }
  .mega-box .content{
    box-shadow: none;
    flex-direction: column;
    padding: 20px 20px 0 20px;
  }
  .mega-box .content .row{
    width: 100%;
    margin-bottom: 15px;
    border-top: 1px solid rgba(255,255,255,0.08);
  }
  .mega-box .content .row:nth-child(1),
  .mega-box .content .row:nth-child(2){
    border-top: 0px;
  }
  .content .row .mega-links{
    border-left: 0px;
    padding-left: 15px;
  }
  .row .mega-links li{
    margin: 0;
  }
  .content .row header{
    font-size: 19px;
  }
}
nav input{
  display: none;
}

.body-text{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 100%;
  text-align: center;
  padding: 0 30px;
}
.body-text div{
  font-size: 45px;
  font-weight: 600;
}



@media only screen and (max-width: 600px) {
 .slick-prev, .slick-next{

top: 23%;
z-index: 999;

 }

 .slick-next{
  right: 20px;
  width: 40px;


}
.slick-prev{
  left: 20px;
  width: 40px;


}
.slick-next:before{

  padding-left: 15px;

}
.slick-prev:before{

  padding-left: 15px;

}






}



.glob{
margin-top: -30px;

}

@import url(https://fonts.googleapis.com/css?family=Open+Sans:400,500,300,700);

* {
  font-family: Open Sans;
}



.footer-distributed{
	background: #d1d1d1;
	box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
	box-sizing: border-box;
	width: 100%;
	text-align: left;
	font: bold 16px sans-serif;
	padding: 35px 50px;
}

.footer-distributed .footer-left,
.footer-distributed .footer-center,
.footer-distributed .footer-right{
	display: inline-block;
	vertical-align: top;
}

/* Footer left */

.footer-distributed .footer-left{
	width: 40%;
}

/* The company logo */

.footer-distributed h3{
	color:  #ffffff;
	font: normal 36px 'Open Sans', cursive;
	margin: 0;
}

.footer-distributed h3 span{
	color:  lightseagreen;
}

/* Footer links */

.footer-distributed .footer-links{
	color:  #ffffff;
	margin: 20px 0 12px;
	padding: 0;
}

.footer-distributed .footer-links a{
	display:inline-block;
	line-height: 1.8;
  font-weight:400;
	text-decoration: none;
	color:  inherit;
}

.footer-distributed .footer-company-name{
	color:  #222;
	font-size: 14px;
	font-weight: normal;
	margin: 0;
}

/* Footer Center */

.footer-distributed .footer-center{
	width: 35%;
}

.footer-distributed .footer-center i{
	background-color:  #33383b;
	color: #ffffff;
	font-size: 25px;
	width: 38px;
	height: 38px;
	border-radius: 50%;
	text-align: center;
	line-height: 42px;
	margin: 10px 15px;
	vertical-align: middle;
}

.footer-distributed .footer-center i.fa-envelope{
	font-size: 17px;
	line-height: 38px;
}

.footer-distributed .footer-center p{
	display: inline-block;
	color: #ffffff;
  font-weight:400;
	vertical-align: middle;
	margin:0;
}

.footer-distributed .footer-center p span{
	display:block;
	font-weight: normal;
	font-size:14px;
	line-height:2;
}

.footer-distributed .footer-center p a{
	color:  lightseagreen;
	text-decoration: none;;
}

.footer-distributed .footer-links a:before {
  content: "|";
  font-weight:300;
  font-size: 20px;
  left: 0;
  color: black;
  display: inline-block;
  padding-right: 5px;
}

.footer-distributed .footer-links .link-1:before {
  content: none;
}

/* Footer Right */

.footer-distributed .footer-right{
	width: 20%;
}

.footer-distributed .footer-company-about{
	line-height: 20px;
	color:  #92999f;
	font-size: 13px;
	font-weight: normal;
	margin: 0;
}

.footer-distributed .footer-company-about span{
	display: block;
	color:  #ffffff;
	font-size: 14px;
	font-weight: bold;
	margin-bottom: 20px;
}

.footer-distributed .footer-icons{
	margin-top: 25px;
}

.footer-distributed .footer-icons a{
	display: inline-block;
	width: 35px;
	height: 35px;
	cursor: pointer;
	background-color:  #33383b;
	border-radius: 2px;

	font-size: 20px;
	color: #ffffff;
	text-align: center;
	line-height: 35px;
	padding: 5px;
	margin-right: 3px;
	margin-bottom: 5px;
}

/* If you don't want the footer to be responsive, remove these media queries */

@media (max-width: 880px) {

	.footer-distributed{
		font: bold 14px sans-serif;
	}

	.footer-distributed .footer-left,
	.footer-distributed .footer-center,
	.footer-distributed .footer-right{
		display: block;
		width: 100%;
		margin-bottom: 40px;
		text-align: center;
	}

	.footer-distributed .footer-center i{
		margin-left: 0;
	}

}


.bbbb{
gap: 10px;

}

.blg{

	height: 170px;
	background: #adb0f7;
	margin-top: 70px;
	padding-top: 55px;
	color: white;
}
.card-container {
      margin-bottom: 20px;
    }

    .card {
      border: none;
      cursor: pointer;
      transition: background-color 0.3s ease-in-out;
      overflow: hidden;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .card:hover {
      background-color: #fff;
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    .card img {
      width: 100%;
      height: auto;
    }


    .hover-button {
    display: inline-block;
    padding: 10px 20px;
    font-size: 16px;
    text-align: center;
    text-decoration: none;
    border: 2px;
    color: #3498db;
    border-radius: 5px;
    transition: background-color 0.3s, color 0.3s;
}

.hover-button:hover {
    background-color: #3498db;
    color: #fff;
}
</style>
</head>
<body>
<div class="container-fluid">
	<div style="background:#d9dadb;" class="row">
		<div class="col-md-12">
			<nav>
  <div class="wrapper">
    <div class="logo"><a href="jdbinfotech.php"><img src="https://www.jdbinfotech.co.in/images/logo.png" height="" > </a></div>
    <input type="radio" name="slider" id="menu-btn">
    <input type="radio" name="slider" id="close-btn">
    <ul class="nav-links">
      <label for="close-btn" class="btn close-btn"><i class="fa-solid fa-bars"></i></label>
     <li>
        <a href="#" class="desktop-item"> Offline</a>
        <input type="checkbox" id="showMega">
        <label for="showMega" class="mobile-item"> Offline</label>
        <div class="mega-box">
          <div class="content">
             <div class="row">
              <header><b>CMS & Web Technologies</b></header>
              <ul class="mega-links">
                <li><a href="#"> Full Stack Web Development Course
Wordpress Course </a></li>
                
              </ul>

              </div>
            <div class="row">
              <header><b>Programming</b> </header>
              <ul class="mega-links">
                <li><a href="#">Graphics</a></li>
                <li><a href="#">Java Course</a></li>
                <li><a href="#">C Programming Course</a></li>
                <li><a href="#"> C++ Programming Course</a></li>
              </ul>
            </div>
            <div class="row">
              <header><b>Digital Marketing</b></header>
              <ul class="mega-links">
                <li><a href="#"> SEO Course</a></li>
                <li><a href="#">Digital Marketing Course </a></li>
              
              </ul>
            </div>
            <div class="row">
              <header><b>App Development</b></header>
              <ul class="mega-links">
                <li><a href="#">Android App Development Course</a></li>
                <li><a href="#">Flutter App Development Course</a></li>
                
              </ul>
            </div>

          
            
          </div>
        </div>
      </li>


      <li>
        <a href="#" class="desktop-item">Live Online</a>
        <input type="checkbox" id="showMega">
        <label for="showMega" class="mobile-item">Live Online</label>
        <div class="mega-box">
          <div class="content">
             <div class="row">
              <header>Web Development</header>
              <ul class="mega-links">
                <li><a href="#"> Full Stack Web Development Course</a></li>
                <li><a href="#">WordPress Course </a></li>
                
              </ul>

              </div>
            <div class="row">
              <header>App Development</header>
              <ul class="mega-links">
                <li><a href="#">Android App Development Course</a></li>
                <li><a href="#">Flutter App Development Course</a></li>
                
              </ul>
            </div>
            <div class="row">
              <header>Digital Marketing</header>
              <ul class="mega-links">
                <li><a href="#"> SEO Course</a></li>
                <li><a href="#">Digital Marketing Course</a></li>
                <li><a href="#">Full Online Ads Course</a></li>
         
              </ul>
            </div>
            <div class="row">
              <header>Professional Training</header>
              <ul class="mega-links">
                <li><a href="#">Data Science Course</a></li>
                <li><a href="#">Data Analytics Course</a></li>
                <li><a href="#">Python Course</a></li>
                <li><a href="#">Graphic Design Course</a></li>
              </ul>
            </div>
          </div>
        </div>
      </li>

      <li><a href="#">Self-Placed</a></li>
      
      <li>
        <a href="#" class="desktop-item">Free Resource</a>
        <input type="checkbox" id="showMega">
        <label for="showMega" class="mobile-item">Free Resource</label>
        <div class="mega-box">
          <div class="content">
            <div class="row">
              <header>Programming</header>
              <ul class="mega-links">
                <li><a href="#">Python Course</a></li>
                <li><a href="#">Java Course</a></li>
                <li><a href="#">C++ Programming Course</a></li>
                <li><a href="#">C Programming Course</a></li>
              </ul>

              </div>
            <div class="row">
              <header>Design Services</header>
              <ul class="mega-links">
                <li><a href="#">Graphics</a></li>
                <li><a href="#">Vectors</a></li>
                <li><a href="#">Business cards</a></li>
                <li><a href="#">Custom logo</a></li>
              </ul>
            </div>
            <div class="row">
              <header>Email Services</header>
              <ul class="mega-links">
                <li><a href="#">Personal Email</a></li>
                <li><a href="#">Business Email</a></li>
                <li><a href="#">Mobile Email</a></li>
                <li><a href="#">Web Marketing</a></li>
              </ul>
            </div>
            <div class="row">
              <header>Security services</header>
              <ul class="mega-links">
                <li><a href="#">Site Seal</a></li>
                <li><a href="#">VPS Hosting</a></li>
                <li><a href="#">Privacy Seal</a></li>
                <li><a href="#">Website design</a></li>
              </ul>
            </div>
          </div>
        </div>
      </li>
     
       <li><a href="blog.php">Blog</a></li>
    </ul>

    <label for="menu-btn" class="btn menu-btn"><i class="fas fa-bars"></i></label>

  </div>

</nav>


</div>
</div>
</div>





<div class="container-fluid">
	<div class="row blg">
		<div class="col-md-12">
			<center><h1><b>BLOG</b></h1></center>
		</div>
	</div>
</div>
<br><br>


  <div class="container">
    <div class="row">
    	
    	<?php foreach ($row as $values1) {
            
         ?>
    	
      <div class="col-md-6">
        <div class="card-container">
          <div class="card p-3">
            <img src="jdbimg/<?php echo $values1['image'];?>" alt="Card Image 1">
            <div class="mt-3">
              <b><?php echo $values1['title']; ?></b><br><br>
              <p><?php echo $values1['description']; ?> </p><br>
               <button class="hover-button">Read more</button>
            </div>
          </div>
        </div>
      </div>

    

     

      <?php 
      }  
    ?>
      <!-- Add more col-md-3 divs for additional cards -->

    </div>
  </div><br>
<footer class="footer-distributed">

			<div class="footer-left">

				<h3><img src="https://www.jdbinfotech.co.in/images/logo.png" height=""></h3>

				<p style="color:black;" class="footer-links">
		

					<a href="#">Offline</a>
				
					<a href="#">Live Online</a>
				
					<a href="#">Free Resource</a>
					
					<a href="#">Self-Placed</a>
					
					<a href="#">More</a>
				</p>

				<p class="footer-company-name">JDB INFOTECH</p>
			</div>

			<div class="footer-center">

				<div>
					<i class="fa fa-map-marker"></i>
					<p style="color:black;" style="color:black;"><span>444 S. Cedros Ave</span> Solana Beach, California</p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p style="color:black;" style="color:black;">+1.555.555.55555.5555</p>
				</div>

				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:support@company.com">support@company.com</a></p>
				</div>

			</div>

			<div class="footer-right">

				<p style="color:black;" class="footer-company-about">
					<span style="color:black;">About the company</span>
					Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
				</p>

				<div class="footer-icons">

					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-github"></i></a>

				</div>

			</div>

		</footer>


</body>
</html>