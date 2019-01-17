<?php include "append.php"; ?>

<script>
/*
$(document).ready(function(){
	
	$("#submit").on("click", function(){
		$('.loader').toggle();
		var searchField = $('#searchBy').val();
		var searchData = $('#searchData').val();
		var sortData = $('#sortData').val();
		var sortOrder = $('#sortOrder').val();
		$.ajax({
			type: "POST",
			url: 'search.php',
			data: {
				searchField: searchField,
				searchData: searchData,
				sortData: sortData,
				sortOrder: sortOrder
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
	});

});
*/
$(document).ready(function(){
	$("#website, #names, #email, #phone").on("keyup", function(){
		var total_chars = ($("#website").val().length) +  ($("#names").val().length) +  ($("#email").val().length) +  ($("#phone").val().length);
		if(total_chars > 2){
			$('.loader').toggle();
			//build js object from form values
			var send_object = {website: $("#website").val(), names: $("#names").val(), email: $("#email").val(), phone: $("#phone").val()};
			$.ajax({
				type: "POST",
				url: 'search.php',
				data: {
					send_object: JSON.stringify(send_object)
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
	});
});

</script>
