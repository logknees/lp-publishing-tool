<script>
	function editDelete(){
		$('#deleteModal').modal("show");
		$('#delete_submit').on("click", function(){
			var id = $('.editable').attr('id');
			id = id.split("website_id_")[1];
			$.ajax({
				type: "POST",
				url: 'delete.php',
				data: {
					id: id,
				},
				success: function(data)
				{
				    searchSubmit();
					closeEditing();
				},
				error: function(XMLHttpRequest, textStatus, errorThrown) {
				    alert(errorThrown);
				}
			});
		});
	}
</script>