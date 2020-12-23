<?php
	session_start();

	$con = mysqli_connect('localhost','root', '');
	mysqli_select_db($con, 'userregistration');	

	if (!isset($_POST['id'])) {
		?>
		<script type="text/javascript">
			alert("Error!");
			window.history.back();
		</script>
		<?php
		exit;
	}

	$id = $_POST['id'];

	$delete = "DELETE FROM illnesses WHERE id = '".$id."'";

	$res = mysqli_query($con, $delete);

	if ($res) {
		?>
		<script type="text/javascript">
			alert("Deleted!");
			window.location = "homed.php#library";
		</script>
		<?php
	}else{
		?>
		<script type="text/javascript">
			alert("Error!");
			window.location = "homed.php#library";
		</script>
		<?php
	}
?>