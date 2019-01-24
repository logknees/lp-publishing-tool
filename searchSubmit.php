<script>
function searchSubmit(){
var total_chars = ($("#website").val().length) +  ($("#names").val().length) +  ($("#email").val().length) +  ($("#phone").val().length);
	if(total_chars > 2){
		$('.loader').toggle();
		var website = $("#website").val();
		//build js object from form values
		var send_object = {website: $("#website").val(), names: $("#names").val(), email: $("#email").val(), phone: $("#phone").val()};
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
		createTable();
	}
}

</script>