<?php
	include "database.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">
	<?php
	include "database.php";
	if(isset($_POST['add_fm']))
	{
	$q1="insert into `family` (emobile,name,gender,bday,cancer_patient)values('{$_SESSION["emobile"]}','{$_POST["name"]}','{$_POST["gender"]}','{$_POST["bday"]}','{$_POST["cancer"]}')";
	mysqli_query($con,$q1)  or die(mysqli_error($con));
	$q2="SELECT * FROM  `signup` WHERE `emobile`='{$_SESSION['emobile']}'";
		$res=mysqli_query($con,$q2);
		$record=mysqli_fetch_assoc($res);
		$state=$record['state'];
		$bpl=$record['bpl'];
		$gender=$_POST['gender'];
		$cancer=$_POST['cancer'];
		$dob=$_POST['bday'];
		$diff = (date('Y') - date('Y',strtotime($dob)));
		
		$q="SELECT * FROM `criteria`";
$res=mysqli_query($con,$q);
while($row=mysqli_fetch_assoc($res)) 
{
	$i=0;
if($gender==$row['gender'] ||$row['gender']==3)
	$i++;
if($bpl==$row['need_bpl'] ||$row['need_bpl']==0)
	$i++;
if($state==$row['state'] ||$row['state']==0)
	$i++;
if($cancer==$row['cancer_patient'] ||$row['cancer_patient']==0)
	$i++;

if($diff >= $row['min_age'] && $diff <= $row['max_age'])
	$i++;
	if($i==5)
	{
		$q="SELECT * FROM `schemes` WHERE `criteria_id`='{$row['criteria_id']}' " ;
		$res=mysqli_query($con,$q);
		$record=mysqli_fetch_assoc($res);
		?>
		<h1><div id= "scheme_name<?= $record['scheme_id']?>"><?= $record['sheme_name'] ?></div></h1>
		<div class ="scheme_detail" id= "scheme_detail<?= $record['scheme_id']?>">
			
			<h2>Description</h2><div><?= $record['description'] ?></div>
			<h2>Eligiblity</h2><div><?= $record['eligiblity'] ?></div>
			<h2>Websites</h2><div><?= $record['websites'] ?></div>
			<h2>Benefits</h2><div><?= $record['benefits'] ?></div>
			<h2>Add_info</h2><div><?= $record['add_info'] ?></div>
			<h2>How_to_apply</h2><div><?= $record['how_to_apply'] ?></div>
			
</div>

<script>
	
$("#<?='scheme_detail'.$record['scheme_id']?>").hide();
$("#<?='scheme_name'.$record['scheme_id']?>").click(function(){
$("#<?='scheme_detail'.$record['scheme_id']?>").show();

});

</script>
	<?php
	}
}
		
	}
	?>
</html>
