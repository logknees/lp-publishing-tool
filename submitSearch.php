<?php include "append.php"; ?>

<script>

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

$(document).ready(function(){
	
	$("#website, #names, #email, #phone").on("keyup", function(){
		if(this.value.length > 2){
			console.log('hi');
		}
		/*$('.loader').toggle();
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
		});*/
	});

});

</script>
