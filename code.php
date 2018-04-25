<script>
	
$("#<?='scheme_detail'.$record['scheme_id']?>").hide();
$("#<?='scheme_name'.$record['scheme_id']?>").click(function(){
$("#<?='scheme_detail'.$record['scheme_id']?>").show();

});

</script>


			<h2>Description</h2><div><?= $record['description'] ?></div>
			<h1>Eligiblity</h1><div><?= $record['eligiblity'] ?></div>
			Websites<div><?= $record['websites'] ?></div>
			Benefits<div><?= $record['benefits'] ?></div>
			Add_info<div><?= $record['add_info'] ?></div>
			How_to_apply<div><?= $record['how_to_apply'] ?></div>


localhost/hash/view_detail.php?scheme_id=<?=$record['scheme_id'] ?>