<?php

	session_start();

	$con = mysqli_connect('localhost','root', '');
	mysqli_select_db($con, 'userregistration');

	if (!isset($_POST['uin']) && !isset($_POST['compl'])) {
		?>
		<script type="text/javascript">
			alert("Error!");
			window.history.back();
		</script>
		<?php
		exit;
	}

	$uin = $_POST['uin'];
	$compl = $_POST['compl'];


	$save = "UPDATE usertable SET complaints = '".$compl."' WHERE uin = '".$uin."'";

	$res = mysqli_query($con, $save);

	if ($res) {
		?>
		<script type="text/javascript">
			alert("Saved!");
			window.location = "connectiond.php";
		</script>
		<?php
	}else{
		echo("Error description: " . mysqli_error($con));
		?>
		<script type="text/javascript">
			alert("Error!");
			window.location = "connectiond.php";
		</script>
		<?php
	}
?>