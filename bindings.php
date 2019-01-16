<script>
/*
$(document).ready(function(){
	$("#searchBy").on("change", function(){

		if($("#searchBy").val() == "last_poc"){
			$('#inputDate').show();
			$('#inputText').hide();
		}
		else{
			$('#inputDate').hide();
			$('#inputText').show();
		}
		
		var searchField = $('#searchBy').val();
		var searchData = $('#searchData').val();
		$.ajax({
			type: "POST",
			url: 'search.php',
			data: {
				searchField: searchField,
				searchData: searchData
			},
			success: function(data)
			{
			    append(JSON.parse(data));
			    $('.loader').toggle();
			}
		});
	});

});
*/
</script>