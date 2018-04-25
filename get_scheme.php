<?php
include "database.php";
$gender= $_POST['gender'];
$state= $_POST['state'];
$bpl= $_POST['bpl'];
$dob= $_POST['bday'];
$cancer= $_POST['cancer'];
$diff = (date('Y') - date('Y',strtotime($dob)));
$q="SELECT * FROM `criteria`";
$res=mysqli_query($con,$q);
while($row=mysqli_fetch_assoc($res)) 
{
	$i=0;
if($gender==$row['gender']||$row['gender']==3)
{$i++;}
if($bpl==$row['need_bpl']||$row['need_bpl']==0)
{$i++;}
if($state==$row['state']||$row['state']==0)
{$i++;}
if($cancer==$row['cancer_patient']||$row['cancer_patient']==0)
{$i++;}
   // echo $diff;
if($diff>=$row['min_age'] && $diff <= $row['max_age'])
{$i++;}
	if($i==5)
	{
		$q="SELECT * FROM `schemes` WHERE `criteria_id`='{$row['criteria_id']}' " ;
		$res=mysqli_query($con,$q);
		$record=mysqli_fetch_assoc($res);
		?>
		<div id= "scheme_name<?= $record['scheme_id']?>"><a href="view_detail.php?scheme_id=<?=$record['scheme_id'] ?>" target="_blank"><button ><?= $record['sheme_name'] ?></button></a></div>


	<?php
	}
}
?>