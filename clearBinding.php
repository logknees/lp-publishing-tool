<script>
$(document).ready(function(){
	$('body').keydown(function (e){
		if(e.keyCode == 27){
			if($('#deleteModal').is(":visible")){
				$('#deleteModal').modal('hide');
			}
			else if($('#editingButtons').is(":visible")){
				searchSubmit(false);
				closeEditing();
			}
			else if($('#confirmModal').is(":visible")){
				$('#confirmModal').modal('hide');
			}
			
			else{
				clearFooter();
			}
		}
	});
});
</script>
