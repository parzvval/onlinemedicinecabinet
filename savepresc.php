<?php

	session_start();

	$con = mysqli_connect('localhost','root', '');
	mysqli_select_db($con, 'userregistration');

	if (!isset($_POST['uin']) && !isset($_POST['presc'])) {
		?>
		<script type="text/javascript">
			alert("Error!");
			window.history.back();
		</script>
		<?php
		exit;
	}

	$uin = $_POST['uin'];
	$presc = $_POST['presc'];

	$save = "UPDATE usertable SET prescriptions = '".$presc."' WHERE uin = '".$uin."'";

	$res = mysqli_query($con, $save);

	if ($res) {
		?>
		<script type="text/javascript">
			alert("Saved!");
			window.location = "mypatients.php";
		</script>
		<?php
	}else{
		echo("Error description: " . mysqli_error($con));
		?>
		<script type="text/javascript">
			alert("Error!");
			window.location = "mypatients.php";
		</script>
		<?php
	}
?>