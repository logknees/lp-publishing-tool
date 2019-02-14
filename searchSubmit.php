<script>
function searchSubmit(){
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
		if(total_chars > 2){
			$('.loader').toggle();
			var website = $("#website").val();
			//build js object from form values
			var send_object = { website: $("#website").val(), names: $("#names").val(), email: $("#email").val(), phone: $("#phone").val(), order: order, direction: direction };
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
				    alert(errorThrown);
				}
			});
		}
		else{
			clearTable();
		}
	}

</script>