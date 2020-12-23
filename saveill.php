<?php
	session_start();

	$con = mysqli_connect('localhost','root', '');
	mysqli_select_db($con, 'userregistration');	


	if (!isset($_POST['id']) && !isset($_POST['illname']) && !isset($_POST['symptoms']) && !isset($_POST['shortinf']) && !isset($_POST['possdrug'])) {
		?>
		<script type="text/javascript">
			alert("Error!");
			window.history.back();
		</script>
		<?php
		exit;
	}

	$id = $_POST['id'];
	$name = $_POST['illname'];
	$symptoms = $_POST['symptoms'];
	$shortinf = $_POST['shortinf'];
	$possdrug = $_POST['possdrug'];

	$save = "UPDATE illnesses SET illname = '".$name."', symptoms = '".$symptoms."', shortinf = '".$shortinf."', possdrug = '".$possdrug."' WHERE id = '".$id."'";
	$res = mysqli_query($con, $save);
	if ($res) {
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