<?php 
require_once('../_config/config.php');

$chk = @$_POST['checked'];
if (!isset($chk)) {
	echo "<script>alert('No Data Selected!'); window.location='data.php'</script>";
} else {
	foreach ($chk as $id) {
		$sql = mysqli_query($con, "DELETE FROM tb_dokter WHERE id_dokter = '$id'") or die(mysqli_error($con));
	}
	if ($sql) {
		echo "<script>alert('Succesfully Delete ".count($chk)." Data!'); window.location='data.php'</script>";
	} else {
		echo "<script>alert('Failed to Delete Data!'); window.location='data.php'</script>";
	}
}
?>