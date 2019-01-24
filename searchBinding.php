<?php include "append.php"; ?>
<?php include "searchSubmit.php"; ?>

<script>

$(document).ready(function(){
	$("#website, #names, #email, #phone").on("keyup", function(){
		searchSubmit();
	});
});

</script>
