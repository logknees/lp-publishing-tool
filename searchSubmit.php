<script>
function searchSubmit(bypass){ //if they switch publishing coordinator or last POC, you should be able to bypass the 3 character rule 
	var order, direction;
	$('th').each(function(){
		if($(this).hasClass("sorted_asc")){
			order = $(this).attr('class').split(' ')[0].split("table_")[1];
			direction = "ASC";
		}
		else if($(this).hasClass("sorted_desc")){
			order = $(this).attr('class').split(' ')[0].split("table_")[1];
			direction = "DESC";
		}
	});
	var total_chars = ($("#website").val().length) +  ($("#names").val().length) +  ($("#email").val().length) +  ($("#phone").val().length);
		if(total_chars > 2 || bypass == true){
			$('.loader').toggle();
			var website = $("#website").val();
			//build js object from form values
			var send_object = { website: $("#website").val(), names: $("#names").val(), email: $("#email").val(), date: $('#last_poc').val(), phone: $("#phone").val(), pc: $("#publishing_coordinator").val(), order: order, direction: direction };
			$.ajax({
				type: "POST",
				url: 'search.php',
				data: {
					send_object: JSON.stringify(send_object).removeQuotes()
				},
				success: function(data)
				{
					append(JSON.parse(data));
				    $('.loader').toggle();
				},
				error: function(XMLHttpRequest, textStatus, errorThrown) {
				    toastr.error(errorThrown);
				    $('.loader').toggle();
				}
			});
		}
		else{
			clearTable();
		}
	}

</script>