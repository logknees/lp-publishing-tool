<script>

$('document').ready(function(){
	$('body').on("click", "th", function(){
		if($("#editingButtons").is(":visible")){

		}
		else{
			if($(this).hasClass("sorted_asc")){
				$(this).removeClass("sorted_asc");
				$(this).addClass("sorted_desc");
			}
			else{
				$("th").each(function(){
					$(this).removeClass("sorted_asc");
					$(this).removeClass("sorted_desc");
				});
				$(this).addClass("sorted_asc");
			}
			searchSubmit();
		}	
	});
});

</script>