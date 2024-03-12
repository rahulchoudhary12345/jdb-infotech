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
  $sql = "select * from slider"; 
    $result = ($conn->query($sql)); 
    //declare array to store the data of database 
    $row = [];  
  
    if ($result->num_rows > 0)  
    { 
        // fetch all data from db into array  
        $row = $result->fetch_all(MYSQLI_ASSOC);   
    }    

     $sql1 = "select * from card1"; 
    $result1 = ($conn->query($sql1)); 
    //declare array to store the data of database 
    $row1 = [];  
  
    if ($result1->num_rows > 0)  
    { 
        // fetch all data from db into array  
        $row1 = $result1->fetch_all(MYSQLI_ASSOC);   
    }    

    $sql2 = "select * from card2"; 
    $result2 = ($conn->query($sql2)); 
    //declare array to store the data of database 
    $row2 = [];  
  
    if ($result2->num_rows > 0)  
    { 
        // fetch all data from db into array  
        $row2 = $result2->fetch_all(MYSQLI_ASSOC);   
    }    
?>



<html>

<head>

	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<style>
	.head{
align-items: center;
background: #d9dadb;

	}




/* Slider */

.slick-slide {
    margin: 0px 20px;
}

.slick-slide img {
    width: 100%;
}

.slick-slider
{
    position: relative;
    display: block;
    box-sizing: border-box;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
            user-select: none;
    -webkit-touch-callout: none;
    -khtml-user-select: none;
    -ms-touch-action: pan-y;
        touch-action: pan-y;
    -webkit-tap-highlight-color: transparent;
}

.slick-list
{
    position: relative;
    display: block;
    overflow: hidden;
    margin: 0;
    padding: 0;
}
.slick-list:focus
{
    outline: none;
}
.slick-list.dragging
{
    cursor: pointer;
    cursor: hand;
}

.slick-slider .slick-track,
.slick-slider .slick-list
{
    -webkit-transform: translate3d(0, 0, 0);
       -moz-transform: translate3d(0, 0, 0);
        -ms-transform: translate3d(0, 0, 0);
         -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
}

.slick-track
{
    position: relative;
    top: 0;
    left: 0;
    display: block;
}
.slick-track:before,
.slick-track:after
{
    display: table;
    content: '';
}
.slick-track:after
{
    clear: both;
}
.slick-loading .slick-track
{
    visibility: hidden;
}

.slick-slide
{
    display: none;
    float: left;
   
    min-height: 1px;
}
[dir='rtl'] .slick-slide
{
    float: right;
}
.slick-slide img
{
    display: block;
}
.slick-slide.slick-loading img
{
    display: none;
}
.slick-slide.dragging img
{
    pointer-events: none;
}
.slick-initialized .slick-slide
{
    display: block;
}
.slick-loading .slick-slide
{
    visibility: hidden;
}
.slick-vertical .slick-slide
{
    display: block;
    height: auto;
    border: 1px solid transparent;
}
.slick-arrow.slick-hidden {
    display: none;
}



.sli{
background:#ecf0eb ;
}








.image-wrapper {
  position: relative;
  padding-bottom:100%;
}

.image-wrapper img {
  position: absolute;
  object-fit: cover;
  width: 100%;
  height: 100%;
}












.card{
    position: relative;
    width: 280px;
    height: 200px;
    cursor: pointer;
    border-radius: 16px;
    box-shadow: 0 0 13px 0px rgba(0,0,0,.3);
    transition: .5s;
    overflow: hidden;
    margin: .85rem;
}
.card:hover{
    height: 397px;
}

.card img{
    width: 100%;
    border-radius: 16px;
    transition: .5s;
}
.card:hover img{
    border-radius: 16px 16px 0 0;
}

.card .card-body{
    padding: .5rem .85rem 1rem;
    height: 0;
}

.card .card-body h6{
    margin: .5rem 0;
    font-size: .85rem;
    color: crimson;
    letter-spacing: 3px;
}

.card .card-body p{
    text-align: justify;
    font-size: .9rem;
    line-height: 25px;
}

.card .card-body div{
    text-align: right;
    width: 100%;
}

.card .card-body div a{
    position: relative;
    text-decoration: none;
    color: #526ffd;
    padding: .5rem;
    text-align: center;
    z-index: 999;
    font-size: .85rem;
}

.card .card-body div a::before{
    position: absolute;
    content: '';
    width: 13px;
    height: 13px;
    background: #526ffd;
    border-radius: 300px;
    left: -13px;
    top: 3px;
    z-index: -1;
    transition: .3s;
}

.card .card-body div a:hover{
    color: #fff;
}

.card .card-body div a:hover::before{
    width: 100%;
    height: 88%;
    left: 0;
}









.custom-slider{
  width: 90%;
  margin: auto;
}
.custom-box{
  width: 200px;
  height: 380px;
 
  box-shadow: 2px 2px 3px gray;
  margin: 15px;
  
  
}
.slick-prev, .slick-next{
  position: absolute;
  line-height: 0;
  top: -20px;
  width: 70px;
  height: 30px;
  display: block;
  padding: 0;
  -webkit-transform: translate(0, -50%);
  transform: translate(0, -50%);
  cursor: pointer;
  color: transparent;
  border: none;
  outline: none;
  border-radius: 50px;
  background: #043e46;
}
.slick-slider{
  user-select: none;
  position: relative;
}
.slick-next{
  right: 40px;


}
.slick-prev{
  right: 120px;


}
.slick-next:before{
  content: '\003e';
  font-size: 1.2em;
  font-weight: 1000;
  padding-left: 22px;
  color: white;
}
.slick-prev:before{
  content: '\003c';
  font-size: 1.2em;
  font-weight: 1000;
  padding-left: 22px;
  color: white;
}






html {
  background: rgb(12,12,12);
  font-family: sans-serif;
}

*, ::after, ::before {
  box-sizing: border-box;
}

@keyframes slide-up2 {
	0% {
		transform: translateY(.5em);
		opacity: 0;
	}
	100%{
		transform: translateY(0);
		opacity: 1;
	}
}

@keyframes glow-load {
	0% {
		box-shadow: none;
	}
	100%{
		box-shadow:
			0px 0px 50px #f0860c;
	}
}

@keyframes continuous-glow {
	0% {
	box-shadow: 0 0 5px rgba(255, 157, 9, 0.39), inset 0 0 5px rgba(255, 153, 0, 0.356), 0 2px 0 #000;
	}	
	100% {
	box-shadow: 0 0 20px rgba(255, 153, 0, 0.6), inset 0 0 10px rgba(255, 145, 0, 0.4), 0 2px 0 #000;
	}
}

@keyframes blur-load {
	0% {
		opacity: 0;
		filter:blur(0.2em);
	}
	100%{
		opacity: 1;
		filter:blur(0);
	}
}

.form-container {
  margin: auto;
  width: 90%;
}

.form-item,
.textarea-div {
	opacity: 0;
}

.form-item1 {
	animation: .2s cubic-bezier(0.47, 0, 0.745, 0.715) .3s 1 slide-up2 ;
  animation-fill-mode: forwards;
}

.form-item2 {
	animation: .2s cubic-bezier(0.47, 0, 0.745, 0.715) .4s 1 slide-up2 ;
  animation-fill-mode: forwards;
}

.form-item3 {
	animation: .2s cubic-bezier(0.47, 0, 0.745, 0.715) .5s 1 slide-up2 ;
  animation-fill-mode: forwards;
}

.form-item4 {
	animation: .2s cubic-bezier(0.47, 0, 0.745, 0.715) .6s 1 slide-up2 ;
  animation-fill-mode: forwards;
}

form {
	background-color: rgb(12, 12, 12);
	border-radius: 1.25em;
	padding: 1.5em;
	animation: 1s cubic-bezier(0.47, 0, 0.745, 0.715) .7s 1 glow-load;
	animation-fill-mode: forwards;
}

form label {
	color: rgb(191, 191, 191);
}

option, select, input, .textarea-div textarea {
  background: #1b1a1a;
  color: rgb(255, 229, 195);
}

.form-header {
	text-align: center;
	font-size: 28px;
	padding: 0;
	margin-bottom: 1.25em;
	color: #f0860c	;
}

label {
	display: block;
	margin-bottom: 0.35em;
	margin-top: 0.35em;
}

input:not(.btn), select {
	padding: 0.625em 1em;
	width: 100%;
	outline: 0;
	margin-bottom: 1.25em;
	border-radius: 1.25em;
	border: 0;
}

.textarea-div {
	width: 100%;
}

textarea {
	padding: 10px;
	width: 100%;
	outline: 0;
	margin-bottom: 20px;
	border-radius: 20px;
	border: 0;
	font-size: 14px;
	height: 100px;
}

.btn-container {
  margin: auto;
  padding-bottom: 1em;
}

.form-btn { 
	background: rgb(12, 12, 12) ;
	border: none ;
	margin-top: 1em ;
  font-size: 20px;
  padding: .5em;
}

.btn-glow {
	animation: .5s ease-out 0s 1 blur-load;
	border-radius: 2em ;
	color: white ;
	transition:.4s ;
}

.btn-glow:hover {
	box-shadow: 0px 0px 10px #f0860c;
}

.form-btn:hover { 
	background: #f0860c ;
}

.form-container input:focus,
.form-container select:focus,
.form-container textarea:focus  {
	animation: continuous-glow 800ms ease-out infinite alternate;
	box-shadow: 0 0 5px #f0860c, inset 0 0 5px #f0860c, 0 2px 0 #000;
	color: rgb(255, 229, 195);
}

@media only screen and (min-width: 35.8em) {
	.form {
		display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
	}
	
	.form-item {
		width: 45%;
	}

	.form-container {
		padding: 5em 0;
    width: 80%;
  }
}

@media only screen and (min-width: 60.625em) {
  .form-container {
		padding: 8em 0;
    width: 70%;
  }
}



.qqq{
margin-left: 700px;
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


</style>
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

<br><br><br><br>



<div class="container-fluid">
<div class="row" style=" background:#ecf0eb;">
<div class="col-md-12">
		<br>
	<center><h1 ><b>JDB INFOTECH</b></h1>
	<b>Home/<span style="color: #5da0e3;"> Become Mentor</span></b>
    </center>
	<br>
</div>
</div>
</div>

<div class="container">
<div class="row">
	<div class="col-md-6"><br><br><br>
<h3><b>Let’s Transform Careers of Future Professionals!</b> </h3>
<br>
<div style="font-size:17px;">
<p>Join the professional team of WsCube Tech mentors on a mission to create an impact and empower over 100 Million career aspirants over the next 5 years!</p>

<p>If you have the zeal to teach online, offline, or record courses, WsCube Tech is the right platform for you. You can become an instructor with us and offer training in Digital Marketing, Web Development, App Development, Programming Languages, Cyber Security, Cloud Computing, and 10+ more domains.</p>
<p>Whether you want to do it full-time or as a side become an instructor with us and offer training in Digital Marketing, Web become an instructor with us and offer training in Digital Marketing, Web  hustle, the choice is yours.</p><br>

<p>after the professional team of WsCube Tech mentors on a mission to create an impact and empower over 100 Million career aspirants over the next 5 years!</p><br>

 <button style="height:50px; width: 150px; border-radius: 10px; border:1px solid lightseagreen;" class="btn btn-outline-success my-2 my-sm-0"><b>Apply Now</b>
 </button>

	</div>
	</div>


  <div class="col-md-6">
  <div class="image-wrapper"><br><br>
    <img src="https://jdb-infotect.netlify.app/image/jdb_infotech-removebg-preview.png" class="glob" alt="" />
  </div>
</div>


	
	
</div>
</div>
<br><br>








<div class="sli">

<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

      

  
  


<div class="container"><center>
  <h3><b>Our Learners Work At Global Companies & Startups</b></h3></center><br>
    
   <section class="customer-logos slider">
    <?php foreach ($row as $values) {
            
         ?>
      <div class="slide"> <img src="jdbimg/<?php echo $values['image'];?>" ></div>
      <!-- <div class="slide sli1"><img src="https://www.wscubetech.com/images/tcs.svg"></div>
      <div class="slide"><img src="https://www.wscubetech.com/images/cognizant.svg"></div>
      <div class="slide"><img src="https://www.wscubetech.com/images/mmt.svg"></div>
      <div class="slide"><img src="https://www.wscubetech.com/images/thrillophilia.svg"></div>
      <div class="slide"><img src="https://www.wscubetech.com/images/ibm.svg"></div>
      <div class="slide"><img src="https://www.wscubetech.com/images/capgemini.svg"></div>
      <div class="slide"><img src="https://www.wscubetech.com/images/infosys.svg"></div>
      <div class="slide sli1"><img src="https://www.wscubetech.com/images/tcs.svg"></div>
      <div class="slide"><img src="https://www.wscubetech.com/images/cognizant.svg"></div>
      <div class="slide"><img src="https://www.wscubetech.com/images/mmt.svg"></div>
      <div class="slide"><img src="https://www.wscubetech.com/images/thrillophilia.svg"></div>
      <div class="slide"><img src="https://www.wscubetech.com/images/ibm.svg"></div>
      <div class="slide"><img src="https://www.wscubetech.com/images/capgemini.svg"></div> -->
     <br><br>
      <?php 
      }  
    ?>
   </section>
      
</div><br><br>
</div>

<br><br>


<div class="container">
	<div class="row">
    <?php foreach ($row1 as $values1) {
            
         ?>
		<div class="col-md-4">
      <center>
    <div class="card">
         <img src="jdbimg/<?php echo $values1['image'];?>" class="card-img-top" alt="..." height="200px">
        <div class="card-body">
            <h4><?php echo $values1['title']; ?></h4>
            <h5><?php echo $values1['description']; ?></h5>
            <div><br>
               <center> <a href="#" style="font-size: 20px;">Read More</a></center>
            </div>
        </div>
    </div>
  </center>
</div>




    


<?php 
      }  
    ?>


</div>
</div>
<br><br>


<div class="container-fluid">
	<div class="row">
		  <div class="col-md-5">
      
  <div class="image-wrapper">
    <img src="https://www.wscubetech.com/images/e-learn-center.webp" alt="" />
  </div>

</div>
<div class="col-md-1"></div>
<div class="col-md-6"><br><br>
<h1><b>Jdb Infotech: The Vernacular Upskilling Edtech</b></h1><br>
<h4>jdb infoTech, a Vernacular Upskilling Edtech, develops and disseminates Tech-powered Career Acceleration Programs and Job Oriented Professional Courses curated for Job Aspirants from Tier 2, 3 & 4 Demographics (Bharat), readying them for Global workforce opportunities.</h4><br>
<h4>With its Tech-enabled hybrid delivery environment, the Company aims to disrupt Career Readiness at scale for over 100 Million Job Aspirants in deep demographics of “Bharat“ and set them competitively ready with professional hands-on skills to crack their dream career opportunities. Thus, jdb infotech distinctively stands with the “Upskilling Bharat” Proposition.</h4>
<br><br>
<center>
     <button style="height:60px; width: 170px; border-radius: 10px; border: 2px solid lightblue;" class="btn btn-outline-info my-2 my-sm-0"><b>Learn More</b>
 </button>
</center>

</div>
</div>
</div>


<br><br><br>


<h1 style="padding-left: 80px;">Explore Our Live Online Courses</h1>
<div class="custom-slider">
<?php foreach ($row2 as $values2) {
            
         ?>
  <div class="custom-box">
<div class="">
  <img src="jdbimg/<?php echo $values2['image'];?>" alt="...">
  <div class="card-body">
    <a href="#" class="btn btn-primary">digital marketing</a>
    <h3><b><?php echo $values2['title']; ?></b> </h3>
   
    <b><p><?php echo $values2['description']; ?></p></b>
    
  </div>
</div>



  </div> 
  <?php 
      }  
    ?>
</div>







	<section class="form-container">
		<form method="post" action="jdbinsert.php">
			<h1 class="form-header">Request a Quote</h1>
			<div class="form">
				<div class="form-item form-item1">
					<label for="firstname">First Name</label>
					<input id="firstname" type="text" name="name"/>
				</div>
				
				<div class="form-item form-item1">
					<label for="lastname">Last Name</label>
					<input for="lastname" type="text" name="lname"/>
				</div>
				
				<div class="form-item form-item2">
					<label for="phonenumber">Phone Number</label>
					<input id="phonenumber" type="tel"name="contact"/>
				</div>

				<div class="form-item form-item2">
					<label for="email">Email</label>
					<input id="email" type="email" name="email"/>
				</div>

				
				<div class="textarea-div form-item4">
					<label for="message">Job Description</label>
					<textarea id="message" type="text" name="message" placeholder="What would you have me do?"></textarea>
				</div>
				<div class="btn-container">
					<input id="submit" class="btn btn-glow form-btn" type="submit" name="submit" value="Request Quote"/>
				</div>
			</div>
		</form>
	</section>
	



	<div  class="container-fluid">
		<div class="row">
			<div class="col-md-9">
				<h1><b>Placement Assistance To Get Hired Faster</b></h1>
				<br>
				<h4>On course completion, we align your job interviews with reliable organizations with reliable or and prepare you for the interview.<br> Our aim is to help you jumpstart your career fasterwe align your job interviews with reliable organizations and prepare you for the interview. Our aim is to help you jumpstart your career faster</h4>
			</div>
			<div class="col-md-3">
				<br><br><br>
<center>
     <button style="height:60px; width: 170px; border-radius: 10px; border: 2px solid lightblue;" class="btn btn-primary my-2 my-sm-0"><b>Start Leaning More</b>
 </button>
</center>
			</div>
		</div>
	</div>
	<br><br>

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4">
				<div style="border: 1px solid #d9d7d7; border-radius: 10px; height:100%;" ><br>
				<div class="col-md-3"><br>
					<center><img src="https://www.wscubetech.com/images/job-portal-icon.svg"></center>
				</div>
				<div class="col-md-9">
					<h4><b>Profile-Centric Resume Creation</b> </h4>
					<h5>Craft minimalist & appealing resumes<br><br></h5>
				</div>
			</div>
			</div>
      <br>

			<div class="col-md-4">
				<div style="border: 1px solid #d9d7d7; border-radius: 10px; height: 100%;" ><br>
				<div class="col-md-3"><br>
					<center><img src="https://www.wscubetech.com/images/career-coach-icon.svg"></center>
				</div>
				<div class="col-md-9">
					<h4><b>Interview Preparation & Mentorship</b> </h4>
					<h5>Practice with mock interviews, before the actual interview<br><br></h5>
				</div>
			</div>
			</div>
      <br>

			<div class="col-md-4">
				<div style="border: 1px solid #d9d7d7; border-radius: 10px; height:100%;" ><br>
				<div class="col-md-3"><br>
					<center><img src="https://www.wscubetech.com/images/mentorship-icon.svg"></center>
				</div>
				<div class="col-md-9">
					<h4><b>Internship Opportunities</b> </h4>
					<h5>Get more exposure & experience with internships<br><br></h5>
				</div>
			</div>
			</div>
		</div>
	</div>
<br><br><br>





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



<script>

$(document).ready(function(){
    $('.customer-logos').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 3
            }
        }]
    });
});






$('.custom-slider').slick({
  slidesToShow: 4,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
 responsive: [
    {
        breakpoint: 1200,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          infinite: true,
          dots: false
        }
      },
    {
        breakpoint: 900,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          infinite: true,
          dots: false
        }
      },
    {
        breakpoint: 550,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
          dots: false
        }
      }
    ]
});
</script>
</body>
</html>