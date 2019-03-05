<script>
	function editSubmit(){
		var id = $('.editable').attr('id');
		id = id.split("website_id_")[1];
		var edit_submit_obj = {};
		var key, value;
		$('.editable').find("td").each(function(){
			if($(this).hasClass("dateEdit")){
				key = $(this).data('submission');
				value = $(this).find("input").val();
				if(value == ''){
					value = "0000-00-00";
				}
				edit_submit_obj[key] = value;
			}
			else if($(this).hasClass("signedEdit")){
				key = $(this).data('submission');
				value = $(this).find("select").val();
				edit_submit_obj[key] = value;
			}
			else if($(this).hasClass("pcEdit")){
				key = $(this).data('submission');
				value = $(this).find("select").val();
				edit_submit_obj[key] = value;
			}
			else if($(this).hasClass("nonEditable")){

			}
			else{
				key = $(this).data('submission');
				value = $(this).text();
				edit_submit_obj[key] = value;
			}
		});
		edit_submit_obj['active'] =  1;
		$.ajax({
			type: "POST",
			url: 'edit.php',
			data: {
				id: id, edit_submit_obj: JSON.stringify(edit_submit_obj).removeQuotes()
			},
			success: function(data)
			{
			    searchSubmit();
				closeEditing();
				toastr.success("Editing successful.");
			},
			error: function(XMLHttpRequest, textStatus, errorThrown) {
			    toastr.error(errorThrown);
			}
		});
	}
</script>