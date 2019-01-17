<script>
$(document).ready(function(){
	$('#footer').keydown(function (e){
		if(e.keyCode == 13){
			var total_chars = ($("#website").val().length) +  ($("#names").val().length) +  ($("#email").val().length) +  ($("#phone").val().length);
			if(total_chars > 2){
				$('#confirmModal').modal('show');
			}
			else{
				$('#invalidModal').modal('show');
			}
		}
	});
	$('#add_submit').on("click", function(){
		var add_submit_obj = {};
		$('#add_fields').find('div').each(function(){
			if($(this).find(":first-child").attr('type') == 'checkbox'){
				if($(this).find(":first-child:checked").length > 0){
					add_submit_obj["signed"] = 1;
				}
				else{
					add_submit_obj["signed"] = 0;
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
				add_submit_obj: JSON.stringify(add_submit_obj)
			},
			success: function(data)
			{
			    console.log(JSON.parse(data));
			},
			error: function(XMLHttpRequest, textStatus, errorThrown) {
			    alert(errorThrown);
			}
		});
	});
});
</script>