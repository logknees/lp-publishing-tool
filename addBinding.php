<script>
$(document).ready(function(){
	$('#footer').keydown(function (e){
		if(e.keyCode == 13){
			if(e.keyCode == 13 && e.shiftKey){
			}
			else{
				var total_chars = ($("#website").val().length) +  ($("#names").val().length) +  ($("#email").val().length) +  ($("#phone").val().length);
				if(total_chars > 2){
					$('#confirmModal').modal('show');
				}
				else{
					$('#invalidModal').modal('show');
				}
			}
		}
	});
	$('#add_submit').on("click", function(){
		addSubmit();
	});
});


</script>
<?php include "addSubmit.php" ?>