<script>
$(document).ready(function(){
	$('body').on("dblclick", ".locked", function(){
		if($('#currentlyEditing').val() == false){
			$('#currentlyEditing').val(true);
			$(this).addClass("editable");
			$(this).removeClass("locked");
			$(this).find("td").each(function(){
				$(this).attr("contenteditable", "true");
			});
			$('#editingButtons').show();
		}
	});
	$('#editSubmit').click(function(){
		<?php include "closeEditing.php" ?>
	});
});
</script>