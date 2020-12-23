<?php
	session_start();

	$con = mysqli_connect('localhost','root', '');
	mysqli_select_db($con, 'userregistration');	

	if (!isset($_POST['illname']) && !isset($_POST['symptoms']) && !isset($_POST['shortinf']) && !isset($_POST['possdrug'])) {
		?>
		<script type="text/javascript">
			alert("Error!");
			window.history.back();
		</script>
		<?php
		exit;
	}

	$illname = $_POST['illname'];
	$symptoms = $_POST['symptoms'];
	$shortinf = $_POST['shortinf'];
	$possdrug = $_POST['possdrug'];

	$new = "INSERT INTO illnesses(illname, symptoms, shortinf, possdrug) VALUES('".$illname."','".$symptoms."','".$shortinf."','".$possdrug."')";

	$res = mysqli_query($con, $new);

	if($res){
		?>
		<script type="text/javascript">
			alert("Saved!");
			window.location = "homed.php#library";
		</script>
		<?php
	}else{
		echo("Error description: " . mysqli_error($con));
		?>
		<script type="text/javascript">
			alert("Error!");
			window.location = "homed.php#library";
		</script>
		<?php
	}

?>