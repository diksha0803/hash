

<?php
session_start();
include "database.php";
if(isset($_POST['submit']))
{
	$q="UPDATE `signup` SET `bday`='{$_POST['bday']}',`gender`='{$_POST['gender']}',`state`='{$_POST['state']}',`bpl`='{$_POST['bpl']}',`cancer`='{$_POST['cancer']}' WHERE `emobile`='{$_SESSION['emobile']}'";
	 
	mysqli_query($con,$q) OR mysqli_error($con);
}
?>

<!DOCTYPE html>
<html>
	<script type="text/javascript" src="jquery.js"></script>
<head>
<style>
div {
    border: 1px solid black;
    background-color: lightblue;
    padding-top: 50px;
    padding-right: 100px;
    padding-bottom: 50px;
    padding-left: 80px;
}
	.scheme_detail{
		background-color:white;
	}
</style>
</head>
<body>

<h2>You can apply to these schemes</h2>
</body>
</html>




<?php
$que1="SELECT * FROM `signup` WHERE `emobile`='{$_SESSION['emobile']}'";
$res1=mysqli_query($con,$que1);
$rec=mysqli_fetch_assoc($res1);
	
$q="SELECT * FROM `criteria`";
$res=mysqli_query($con,$q);
while($row=mysqli_fetch_assoc($res)) 
{
	$i=0;
if($rec['gender']==$row['gender'] ||$row['gender']==3)
	$i++;
if($rec['bpl']==$row['need_bpl'] ||$row['need_bpl']==0)
	$i++;
if($rec['state']==$row['state'] ||$row['state']==0)
	$i++;
if($rec['cancer']==$row['cancer_patient'] ||$row['cancer_patient']==0)
	$i++;
$dob=$rec['bday'];
$diff = (date('Y') - date('Y',strtotime($dob)));
   // echo $diff;
if($diff >= $row['min_age'] && $diff <= $row['max_age'])
	$i++;
	if($i==5)
	{
		$q="SELECT * FROM `schemes` WHERE `criteria_id`='{$row['criteria_id']}' " ;
		$res=mysqli_query($con,$q);
		$record=mysqli_fetch_assoc($res);
		?>
		<div id= "scheme_name<?= $record['scheme_id']?>"><?= $record['sheme_name'] ?></div>
		<div class ="scheme_detail" id= "scheme_detail<?= $record['scheme_id']?>">
			
			Description<div><?= $record['description'] ?></div>
			Eligiblity<div><?= $record['eligiblity'] ?></div>
			Websites<div><?= $record['websites'] ?></div>
			Benefits<div><?= $record['benefits'] ?></div>
			Add_info<div><?= $record['add_info'] ?></div>
			How_to_apply<div><?= $record['how_to_apply'] ?></div>
			
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

?>
<html>
<a href="add_fm.php"><button class="custom-button-1">+Add your Dependencies</button></a><br>
<h2>See scheme for Dependencies</h2> 
	<?php
	$q="SELECT `name` FROM `family` WHERE emobile='{$_SESSION['emobile']}'";
	$res=mysqli_query($con,$q);
	while($record=mysqli_fetch_assoc($res))
	{
	?>
	<a href="scheme_view_fm2.php?name=<?= $record['name'] ?>"><?= $record['name'].'<br>' ?></a>
	<?php
	}
	?>
	
</html>




















