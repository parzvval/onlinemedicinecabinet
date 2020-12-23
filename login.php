
<html>
<head>
<title> User login and Registration </title>
    <link rel="shortcut icon" type="image/png" href="icon.png">  
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="stylelogin.css">

</head>
<body>
<div class="container">
    <div class="login-box">
    <center><h1><a class="goback" href="index.php">← Go to homepage</a></h1></center>
    <div class="row">
    <div class="col-md-6 login-left">
         <h2> Login Here </h2>
             <form action="validation.php" method="POST">
               <div class="form-group">  
                  <label>Username</label>
                  <input type="text" name="user" class="form-control" required>  
               </div> 
               <div class="form-group">  
                  <label>Password</label>
                  <input type="password" name="password" class="form-control" required>  
               </div> 
               <button type="submit"  class="btn btn-primary"> Login </button>


             </form> 
    </div>

 <div class="col-md-6 login-right">
         <h2> Register Here </h2>
             <form action="registration.php" method="POST">
               <div class="form-group">  
                  <label>Username</label>
                  <input type="text" name="user" class="form-control" required>  
               </div> 
               <div class="form-group">  
                  <label>Password</label>
                  <input type="password" name="password" class="form-control" required>  
               </div> 
                

 <div class="form-group">  
                  <label>Full name</label>
                  <input type="text" name="fullname" class="form-control" required>  
               </div> 
                 <div class="form-group">  
                  <label>Age</label>
                  <input type="number" name="age" class="form-control" required>  
               </div> 
                 <div class="form-group">  
                  <label>Height in cm</label>
                  <input type="number" name="height" class="form-control" required>  
               </div> 
                 <div class="form-group">  
                  <label>Weight in kg</label>
                  <input type="number" name="weight" class="form-control" required>  
               </div> 
                 <div class="form-group">  
                  <label>UIN</label>
                  <input type="number" name="uin" class="form-control" required>  
               </div> 
               <div>
                      <label>Gender</label>
                
<input type="radio" id="male" name="gender" value="male">
<label for="male">Male</label>

<input type="radio" id="female" name="gender" value="female">
<label for="female">Female</label>

<input type="radio" id="other" name="gender" value="other">
<label for="other">Other</label>

</div>
<div>
                      <label>Profile type(By selecting patient, you agree to be bound bty the Patient Public Policy)</label>
                

<input type="radio" id="pat" name="profile" value="Patient">
<label for="pat">Patient</label>


</div>

               <button type="submit"  class="btn btn-primary"> Register </button>


             </form> 

    </div>



    </div> 


    </div>

</div>
</body>