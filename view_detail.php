<?php
include "database.php";
$q="SELECT * FROM `schemes` WHERE `scheme_id`='{$_GET['scheme_id']}' " ;
		$res=mysqli_query($con,$q);
		$record=mysqli_fetch_assoc($res);
?>
<h2>Description</h2><div><?= $record['description'] ?>
			<h2>Eligiblity</h2><div><?= $record['eligiblity'] ?></div>
			<h2>Websites</h2><div><?= $record['websites'] ?></div>
			<h2>Benefits</h2><div><?= $record['benefits'] ?></div>
			<h2>Add_info</h2><div><?= $record['add_info'] ?></div>
			<h2>How_to_apply</h2><div><?= $record['how_to_apply'] ?></div>
