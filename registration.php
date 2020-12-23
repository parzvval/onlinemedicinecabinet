<?php



session_start();



header('location:login.php');



$con = mysqli_connect('localhost','root', '');

mysqli_select_db($con, 'userregistration');

$name = $_POST['user'];
$pass = $_POST['password'];
$fullname = $_POST['fullname'];
$age = $_POST['age'];
$height = $_POST['height'];
$weight = $_POST['weight'];
$uin = $_POST['uin'];
$gender = $_POST['gender'];
$profile = $_POST['profile'];

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);
$U = "Username Already Taken";
$S = "Registration Successful";

if($num == 1){

    echo $U ; 
}


elseif($profile == "Doctor"){



    $reg= "insert into doctortable(name, password, fullname, age, height, weight, uin, gender, profile) values ('$name','$pass','$fullname','$age','$height','$weight','$uin','$gender', '$profile')";
    mysqli_query($con, $reg);
    echo $S; 
}
else{
	 $reg= "insert into usertable(name, password, fullname, age, height, weight, uin, gender, profile) values ('$name','$pass','$fullname','$age','$height','$weight','$uin','$gender', '$profile')";
    mysqli_query($con, $reg);
    echo $S; 
}

?>