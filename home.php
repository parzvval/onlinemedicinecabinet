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
<link rel="stylesheet" href="style.css">
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
        <a class="nav-link" href="#">Main page</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#doctors">Your doctor</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#library">Library</a>
      </li>
         <li class="nav-item">
        <a class="nav-link" href="profile.php"><?= $_SESSION['username'] ?></a>
      </li>
    </ul>
  </div>
</nav>
    </section>
    <!-----Slider----->
    <div id= "slider">
        <div id="headerSlider" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#headerSlider" data-slide-to="0" class="active"></li>
    <li data-target="#headerSlider" data-slide-to="1"></li>
    <li data-target="#headerSlider" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="onlinedoc.jpg" class="d-block img-fluid">
        <div class="carousel-caption">
            <h5>Online Medicine Cabinet is a web-platform where you can analyze the condition of your health with Musainova Alimash from comfortable place.</h5>
        </div>
    </div>
    
    <div class="carousel-item">
      <img src="connect.jpg" style="margin: auto;" class="d-block img-fluid">
         <div class="carousel-caption">
            <h5>Keep in touch with your health!</h5>
        </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#headerSlider" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#headerSlider" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    
    </div>
<!-----Doctors----->
    <section id="doctors">
        <center><div class="doctorslist">Information about doctor</div>
            <h2><?php 
            $query=mysqli_query($con, "SELECT fullname FROM doctortable WHERE id='1' " );
            $row=mysqli_fetch_array($query);
             echo $row['fullname'];
            


            ?></h2>
          </center>
    <div class="container " style="display: flex; padding-top: 30px; text-align: center;">     
        <div class="col-md-1"></div>
        <div class="col-md-4">
            <div class="doctor1"><img style="margin:auto"  src= "alimash.jpeg" class="d-block img-fluid"></div>
            <h5> Alimash Musainova with Dr. Bubnovskiy on the photo </h5>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-6">
          
            <h5> 

                Musainova Alimash is a medical consultant whose working experience is over 30 years. Alimash graduated from Aktobe State Medical Institute in 1987. She was qualified as a doctor. 
              Alimash has large experience of working. In 1987, she worked as intern doctor in Rudnyi City Hospital. In 1988, she worked as a district doctor at the Uritskaya central district hospital. In period from 2010 to 2012 Alimash was an ambulance doctor at the Aktobe ambulance station. Since 2012, she has been working in a network of Bubnovsky physical therapy centers(143 centers all over the mainland) as chief medical officer. 
Alimash is well versed in the treatment of problems with the spine, can advise on sets of exercises for postural disorders, she has extensive experience in the preparation and rehabilitation after total hip arthroplasty and rehabilitation of patients who have suffered a cerebral stroke, rehabilitation after a spinal injury.</h5>
              

    </section>
     <!-----Library----->
    <section id="library">
        <center><div class="illnesseslist">ILLNESSES</div></center>
    <div class="container">
        <div class="row">
         <?php
            $s = "SELECT * FROM illnesses";
            $result = mysqli_query($con, $s);
            if (mysqli_num_rows($result) > 0) 
            while ($row = mysqli_fetch_assoc($result)) {
          ?>
          <div class="col-md-6 card">
            <h2>
              <?=$row['illname']?>
              
            </h2>
            <div class="illness1"><img src= "illness.jpg" class="d-block img-fluid">
            </div>
            <div class="modal fade" id="illness<?=$row['id']?>" tabindex="-1" role="dialog" aria-labelledby="illness<?=$row['id']?>label" aria-hidden="true">
              <div class="modal-dialog" style="max-width: 600px;" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title" id="illness<?=$row['id']?>label"><?=$row['illname']?></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                      <table class="illness-table">
                        <tr>
                          <td class="column">Симптомы: </td>
                          <td><?=$row['symptoms']?></td>
                        </tr>
                        <tr>
                          <td class="column">Информация: </td>
                          <td><?=$row['shortinf']?></td>
                        </tr>
                        <tr>
                          <td class="column">Лекарства для лечения: </td>
                          <td><?=$row['possdrug']?></td>
                        </tr>
                      </table>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
            <button type="button" data-toggle="modal" data-target="#illness<?=$row['id']?>" class="btn btn-primary">MORE</button>
          </div>
          <?php
            }
          ?>

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