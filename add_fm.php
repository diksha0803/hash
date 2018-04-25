<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
	<form action="scheme_view_fm.php" method="post">
	Name:<input type="text" name="name">
	Gender:<select name="gender" id="gender">
  <option value="0">Female</option>
  <option value="1">Male</option>
</select>
		Birthday:<input type="date" value="bday" name="bday"><br><br>
	
	Are you Suffering From Life Threating Diesease:<select name="cancer">																				<option value="0">No</option>
  															<option value="1">Yes</option>
															</select>
  	<p class="small">(*like cancer,heart,lungs disease)</p>	
	
	<input type="submit" name="add_fm" id="submit" value="submit" class="custom-button-1">
	</form>	
		
	
</html>