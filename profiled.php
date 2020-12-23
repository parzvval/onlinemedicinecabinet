<?php

session_start();






$con = mysqli_connect('localhost','root', '');

mysqli_select_db($con, 'userregistration'); ?>


<html>
<head>
<title>
Medicine Cabinet Online
</title>
  <link rel="shortcut icon" type="image/png" href="icon.png">  
<link rel="stylesheet" href="profilestyle.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
       
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>

    <!-----NavigationBar----->
    <section id="nav-bar">
    <nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="#"><img src="logo.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="homed.php">Main page</a>
      </li>
         <li class="nav-item">
        <a class="nav-link" href="mypatients.php">Patients</a>
      </li>
         <li class="nav-item">
        <a class="nav-link" href="Logout.php">Logout</a>
      </li>
    </ul>
  </div>
</nav>
    </section>


   
 
    <section id="medcard">

        <div class="cardpage">My doctor card</div>
    <div class="container">
        <div style="width: 60%; margin:auto;" class="infobox row">
          
              <div class="col-md-6">
                <div class="doctor1"><img src= "alimash.jpeg" class="d-block img-fluid"></div>
              </div>
              <div class="col-md-6">
                
            <h2><?php $name=$_SESSION['username'] ;
            $query=mysqli_query($con, "SELECT fullname FROM doctortable WHERE name='$name' " );
            $row=mysqli_fetch_array($query);
             echo $row['fullname']; 

            ?></h2>
           
            

            <hr>
            <div style="text-align: center;">
              <h3><?php $name=$_SESSION['username'] ;
              $query=mysqli_query($con, "SELECT profile FROM doctortable WHERE name='$name' " );
              $row=mysqli_fetch_array($query);
               echo $row['profile'];
               


              ?></h3>
               <h4><?php $name=$_SESSION['username'] ;
              $query=mysqli_query($con, "SELECT gender FROM doctortable WHERE name='$name' " );
              $row=mysqli_fetch_array($query);
               echo $row['gender'];
               


              ?></h4>
            </div>
              </div>
           
             
        </div>
        </div>

    </section>
    
    <section class="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="contacts">
            <h5>contacts</h5>
               <img src= "contacts.png">
             </div>
           </div>
         </div>
         <hr>
         <div class="row">
          <div class="col-md-12"><p clss="copyright">created by Akhmetov Bakhyzhan with <i class="fa fa-heart"></i></p></div>

</div>
</div>
    </section>
</body>
</html>
