	<?php

	session_start();

	$con = mysqli_connect('localhost','root', '');

	mysqli_select_db($con, 'userregistration');


	if (!isset($_POST['user']) && !isset($_POST['password'])) {
		?>
		<script type="text/javascript">
			alert("Error!");
			window.history.back();
		</script>
		<?php
		exit;
	}

	$name = $_POST['user'];
	$pass = $_POST['password'];


	$s = " select * from usertable where name = '$name' && password = '$pass'";
	$d = " select * from doctortable where name = '$name' && password = '$pass'";
	$pd = " select * from doctortable where name = '$name' && profile = 'Doctor'";
	$pp = " select * from usertable where name = '$name' && profile = 'Patient'";

	$result = mysqli_query($con, $s);
	$resultd = mysqli_query($con, $d);
	$pdcheck = mysqli_query($con, $pd);
	$ppcheck = mysqli_query($con, $pp);


	$num = mysqli_num_rows($result);
	$numd = mysqli_num_rows($resultd);
	$numm = mysqli_num_rows($pdcheck);
	$nummm = mysqli_num_rows($ppcheck);

	if (($numd == 1)  && ($numm == 1)) 
	{$_SESSION['username'] = $name;
	     	header('location:homed.php');
	}
	elseif (($num == 1) && ($nummm == 1)) {
	 	$_SESSION['username'] = $name;
	     	header('location:home.php');
	 } 
	else {header('location:login.php');}











	?>
