<?php 
	include_once '../../includes/db.inc.php';
	if (isset($_POST['add'])) {
		$cname = $_POST['cname'];
		$website = $_POST['website'];
		$ctype = $_POST['ctype'];
		$status = $_POST['status'];
		$address = $_POST['address'];
		$phone = $_POST['telephone'];
		$minper = $_POST['minper'];

		$sql1 = "INSERT INTO `company` VALUES (NULL, '$cname', '$ctype', '$address', '$phone', '$website', '$status', '$minper');";
		$res1 = mysqli_query($conn, $sql1);
		if (!$res1) {
			?>
			<script>
				alert("Company could not be added");
				window.location.replace("../addcompanies.php?result=fail");
			</script>
			<?php
		} else {
			?>
			<script>
				alert("Company has been added successfully");
				window.location.replace("../viewcompanies.php?result=success");
			</script>
			<?php
		}
	}

?>