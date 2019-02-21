<script>
	function addSubmit(){
		var add_submit_obj = {};
		$('#add_fields').find('div').each(function(){
			if($(this).find(":first-child").attr('type') == 'checkbox'){
				if($(this).find(":first-child:checked").length > 0){
					add_submit_obj["is_signed"] = 1;
				}
				else{
					add_submit_obj["is_signed"] = 0;
				}
			}
			else{
				var name = $(this).find(":first-child").attr("name");
				var val = $(this).find(":first-child").val();
				add_submit_obj[name] = val;
			}
		});
		$.ajax({
			type: "POST",
			url: 'add.php',
			data: {
				add_submit_obj: JSON.stringify(add_submit_obj).removeQuotes()
			},
			success: function(data)
			{
			    searchSubmit();
			},
			error: function(XMLHttpRequest, textStatus, errorThrown) {
			    alert(errorThrown);
			}
		});
	}
</script>