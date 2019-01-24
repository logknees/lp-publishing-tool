<script>
	function closeEditing(){
		$('#currentlyEditing').val(false);
		$('.editable').each(function(){
			$(this).addClass("locked");
			$(this).removeClass("editable");
			$(this).find("td").each(function(){
				$(this).attr("contenteditable", "false");
			});
		});
		$('#editingButtons').hide();
	}
</script>