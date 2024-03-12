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
  $sql = "select * from card1"; 
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
<style >
    /* Webpixels CSS */
/* Utility and component-centric Design System based on Bootstrap for fast, responsive UI development */
/* URL: https://github.com/webpixels/css */

@import url(https://unpkg.com/@webpixels/css@1.1.5/dist/index.css);

/* Bootstrap Icons */
@import url("https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.4.0/font/bootstrap-icons.min.css");





.form-box {
  max-width: 500px;
  margin: auto;
  padding: 50px;
  background: #ffffff;
  border: 10px solid #f2f2f2;
}

h1, p {
  text-align: center;
}

input, textarea {
  width: 100%;
}




/* tables */
table {
  border-collapse: collapse;
  width: 96%;
  margin: 2%;
}

th {
  text-align: left;
  font-weight: 400;
  font-size: 13px;
  text-transform: uppercase;
  border-bottom: 1px solid rgba(0, 0, 0, 0.1);
  padding: 0 10px;
  padding-bottom: 14px;
}

tr:not(:first-child):hover {
  background: rgba(0, 0, 0, 0.1);
}

td {
  line-height: 40px;
  font-weight: 300;
  padding: 0 10px;
}



    td,th { 
        border: 1px solid pink; 
        padding: 10px; 
        margin: 5px; 
        text-align: center; 
        background: gray;
        color: white;
    } 
    th{
        color: black;
    } 

</style>
</head>
<body>

<!-- Banner -->
<a href="https://webpixels.io/components?ref=codepen" class="btn w-full btn-primary text-truncate rounded-0 py-2 border-0 position-relative" style="z-index: 1000;">
    <strong>Crafted with Webpixels CSS:</strong> The design system for Bootstrap 5. Browse all components →
</a>

<!-- Dashboard -->
<div class="d-flex flex-column flex-lg-row h-lg-full bg-surface-secondary">
    <!-- Vertical Navbar -->
    <nav class="navbar show navbar-vertical h-lg-screen navbar-expand-lg px-0 py-3 navbar-light bg-white border-bottom border-bottom-lg-0 border-end-lg" id="navbarVertical">
        <div class="container-fluid">
            <!-- Toggler -->
            <button class="navbar-toggler ms-n2" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarCollapse" aria-controls="sidebarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Brand -->
            <a class="navbar-brand py-lg-2 mb-lg-5 px-lg-6 me-0" href="#">
                <img src="https://preview.webpixels.io/web/img/logos/clever-primary.svg" alt="...">
            </a>
            <!-- User menu (mobile) -->
            <div class="navbar-user d-lg-none">
                <!-- Dropdown -->
                <div class="dropdown">
                    <!-- Toggle -->
                    <a href="#" id="sidebarAvatar" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="avatar-parent-child">
                            <img alt="Image Placeholder" src="https://images.unsplash.com/photo-1548142813-c348350df52b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80" class="avatar avatar- rounded-circle">
                            <span class="avatar-child avatar-badge bg-success"></span>
                        </div>
                    </a>
                    <!-- Menu -->
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="sidebarAvatar">
                        <a href="#" class="dropdown-item">Profile</a>
                        <a href="#" class="dropdown-item">Settings</a>
                        <a href="#" class="dropdown-item">Billing</a>
                        <hr class="dropdown-divider">
                        <a href="#" class="dropdown-item">Logout</a>
                    </div>
                </div>
            </div>
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidebarCollapse">
                <!-- Navigation -->
               <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="jdbdasbord.php">
                            <i class="bi bi-house"></i> Dashboard
                        </a>
                    </li>
                  
                    <li class="nav-item">
                        <a class="nav-link" href="jdbsliderrecord.php">
                            <i class="bi bi-bar-chart"></i> Slider
                        </a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="jdbcard1rec.php">
                            <i class="bi bi-bar-chart"></i> Features
                        </a>
                    </li>
                   
                    

                    <li class="nav-item">
                        <a class="nav-link" href="jdbcard2rec.php">
                            <i class="bi bi-bar-chart"></i> Courses
                        </a>
                    </li>
                   
                    <li class="nav-item">
                        <a class="nav-link" href="blogrec.php">
                            <i class="bi bi-bar-chart"></i> Blog
                        </a>
                    </li>
                </ul>
                <!-- Divider -->
                <hr class="navbar-divider my-5 opacity-20">
                <!-- Navigation -->
                <ul class="navbar-nav mb-md-4">
                    <li>
                        <div class="nav-link text-xs font-semibold text-uppercase text-muted ls-wide" href="#">
                            Contacts
                            <span class="badge bg-soft-primary text-primary rounded-pill d-inline-flex align-items-center ms-4">13</span>
                        </div>
                    </li>
                    <li>
                        <a href="#" class="nav-link d-flex align-items-center">
                            <div class="me-4">
                                <div class="position-relative d-inline-block text-white">
                                    <img alt="Image Placeholder" src="p.jpg" class="avatar rounded-circle">
                                    <span class="position-absolute bottom-2 end-2 transform translate-x-1/2 translate-y-1/2 border-2 border-solid border-current w-3 h-3 bg-success rounded-circle"></span>
                                </div>
                            </div>
                            <div>
                                <span class="d-block text-sm font-semibold">
                                    Pankaj Ji
                                </span>
                                <span class="d-block text-xs text-muted font-regular">
                                    clint
                                </span>
                            </div>
                            <div class="ms-auto">
                                <i class="bi bi-chat"></i>
                            </div>
                        </a>
                    </li>
                   
                </ul>
                <!-- Push content down -->
                <div class="mt-auto"></div>
                <!-- User (md) -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="bi bi-person-square"></i> Account
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="bi bi-box-arrow-left"></i> Logout
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Main content -->
    <div class="h-screen flex-grow-1 overflow-y-lg-auto">
        <!-- Header -->
        <header class="bg-surface-primary border-bottom pt-6">
            <div class="container-fluid">
                <div class="mb-npx">
                    <div class="row align-items-center">
                        <div class="col-sm-6 col-12 mb-4 mb-sm-0">
                            <!-- Title -->
                            <h1 class="h2 mb-0 ls-tight">Application</h1>
                        </div>
                        <!-- Actions -->
                        <div class="col-sm-6 col-12 text-sm-end">
                            <div class="mx-n1">
                                <a href="#" class="btn d-inline-flex btn-sm btn-neutral border-base mx-1">
                                    <span class=" pe-2">
                                        <i class="bi bi-pencil"></i>
                                    </span>
                                    <span>Edit</span>
                                </a>
                                <a href="jdbcard1.php" class="btn d-inline-flex btn-sm btn-primary mx-1">
                                    <span class=" pe-2">
                                        <i class="bi bi-plus"></i>
                                    </span>
                                    <span>Create</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Nav -->
                   <br>
                </div>
            </div>
        </header>
        <!-- Main -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <table> 
        <thead> 
            <tr><th>Sr no.</th>
               
                <th>Image</th>
                <th>Title</th>
                <th>Description</th>
                <th>Action</th>                 
               
            </tr> 
        </thead> 
        <tbody> 
            <?php 
               if(!empty($row)) 
               foreach($row as $rows) 
              {  
            ?> 
            <tr>  <td><?php echo $rows['id']; ?></td>
                  <td><?php echo $rows['title']; ?></td>
              <td><?php echo $rows['description']; ?></td>
                <td><img src="jdbimg/<?php echo $rows['image'];?>" style="height: 50px;"></td>
                <td><button class="btn  btn-info"><a href="jdbcard1edit.php?id=<?php echo $rows['id'];  ?>" style="color: white;"> Edit</a></button> 

              <button class="btn  btn-primary"><a href="jdbcard1view.php?id=<?php echo $rows['id'];  ?>" style="color: white;"> View</a></button>

                <button class="btn  btn-danger"><a href="jdbcard1delet.php?id=<?php echo $rows['id'];  ?>" style="color: white;"> Delete</a></button> </td> 
  
            </tr> 
            <?php } ?> 
        </tbody> 
   </table>   
<?php    
    mysqli_close($conn); 
?>
                </div>
            </div>
        </div>
        

            </div>
        </div>
       
   
</body>
</html>