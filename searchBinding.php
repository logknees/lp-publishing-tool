<?php include "append.php"; ?>
<?php include "searchSubmit.php"; ?>

<script>

$(document).ready(function(){
	$("#website, #names, #email, #phone").on("input", function(e){
		if(e.which == 9 || e.which > 35 && e.which < 41 || e.which == 13){

		}
		else{
			searchSubmit(false);
		}
	});

	$("#publishing_coordinator").on("change", function(){
		searchSubmit(true);
	});

	$("#last_poc").on("change", function(){
		searchSubmit(true);
	});
});

</script>
