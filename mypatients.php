<?php

session_start();






$con = mysqli_connect('localhost','root', '');



mysqli_select_db($con, 'userregistration'); 
$stmt = "SELECT * FROM usertable";
$res = mysqli_query($con, $stmt);?>

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
<!-- BEGIN: Content-->
  <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title">My patients</h3>
            </div>
            <div class="content-body">
                <!-- DOM - jQuery events table -->
                <section id="dom">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                               
                                <div class="card-content collapse show">
                                    <div class="card-body card-dashboard dataTables_wrapper dt-bootstrap">                                        
                                        
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered dom-jQuery-events">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>username</th>
                                                        <th>Full name</th>
                                                        <th>Age</th>
                                                        <th>Height</th>
                                                        <th>Weight</th>
                                                        <th>UIN</th>
                                                           <th>complaints</th>
                                                           <th>prescriptions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php 
                                                    $i=1;
                                                    while($value = mysqli_fetch_assoc($res)) { ?>
                                                    <tr>
                                                        <td><?=$i?></td>
                                                        <td><?=$value['name']?></td>
                                                        <td><?=$value['fullname']?></td>
                                                        <td><?=$value['age']?></td>
                                                        <td><?=$value['height']?></td>
                                                        <td><?=$value['weight']?></td>
                                                        <td><?=$value['uin']?></td>
                                                        <td>
                                                            <?=$value['complaints']?>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">  
                  <label>Prescriptions</label>
                  <form method="POST" action="savepresc.php">
                    <textarea name="presc" class="form-control" cols="25" rows="3" required><?=$value['prescriptions']?></textarea>
                    <hr>
                    <input type="hidden" name="uin" value = <?=$value['uin']?>>
                    <input class="btn btn-primary" type="submit" name="" value="Save">
                    <input class="btn btn-secondary cancel-btn" type="button" name="" value="Cancel">
                  </form>
               </div> 
                                                        </td>

                                                    </tr>
                                                <?php $i++; } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- DOM - jQuery events table -->
            </div>
        </div>
    </div>
    <!-- END: Content-->

<script>
    $(".cancel-btn").click(function(){
       location.reload();
    })
    $(document).ready(function(){

    $('.cancel-button').on('click',function(){        
        swal({
            title: "Are you sure?",
            text: "To Delete This Record!",
            icon: "warning",
            buttons: {
                cancel: {
                    text: "Cancel",
                    value: null,
                    visible: true,
                    className: "",
                    closeModal: false,
                },
                confirm: {
                    text: "Delete",
                    value: true,
                    visible: true,
                    className: "",
                    closeModal: false
                }
            }
        })
        .then((isConfirm) => {
            if (isConfirm) {
                var id=this.id;
            $.ajax({
              url: "app/suppliers?id="+id,
              type: "GET",
              success: function(inputValue){
                swal("Deleted!", "Your Record has been deleted.", "success");
                setTimeout(function(){// wait for 5 secs(2)
                   location.reload(); // then reload the page.(3)
              }, 1000); 
                }
            });
                
            } else {
                swal("Cancelled", "Your Record is safe", "error");
            }
        });

    });   

});
</script>
  <section class="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="contacts">
            <h5>contacts</h5>
               <img src= "contacts.png">
             </div>
           </div>
         </div>
         <hr>
         <div class="row">
          <div class="col-md-8"><p clss="copyright">created by Akhmetov Bakhyzhan with <i class="fa fa-heart"></i></p></div>
           <div class="col-md-4"></div>

</div>
</div>
    </section>

    <iframe name="frame" width="0" height="0" border="0" style="display: none;"></iframe>
</body>
</html>