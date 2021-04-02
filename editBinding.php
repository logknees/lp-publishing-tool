<script>
$(document).ready(function(){
	var pc_array = ["N/A", "Emmy", "Mallory", "Morgan", "Zack", "Emily", "Kayla", "Christina", "Kate", "Abbey"];
	$('body').on("dblclick", ".locked", function(){
		if($('#currentlyEditing').val() == false){
			$('#currentlyEditing').val(true);
			$(this).addClass("editable");
			$(this).removeClass("locked");
			$(this).find("td").each(function(){
				if($(this).hasClass("nonEditable")){
				}
				else if($(this).hasClass("dateEdit")){
					var date = $(this).text();
					var date_array = date.split("/");
					date = date_array[2] + "-" + date_array[0] + "-" + date_array[1];		
					$(this).html("<input type='date' value='"+date+"'>");
				}
				else if($(this).hasClass("signedEdit")){
					var isSigned = $(this).text();
					if(isSigned == "✔"){
						$(this).html("<select><option selected value='1'>Yes</option><option value='0'>No</option>");
					}		
					else{
						$(this).html("<select><option value='1'>Yes</option><option selected value='0'>No</option>");
					}
				}
				else if($(this).hasClass("pcEdit")){
					var pc = $(this).data("value");
					var string = "<select>";
					for(var i = 0; i < pc_array.length; i++){
						if(pc == i){
							string += "<option selected value='"+i+"'>"+pc_array[i]+"</option>";
						}
						else{
							string += "<option value='"+i+"'>"+pc_array[i]+"</option>";
						}
					}
					string += "</select>";
					$(this).html(string);
				}
				else{
					$(this).attr("contenteditable", "true");
				}
			});
			$('#editingButtons').show();
			$('#footer').hide();
		}
	});
	$('#editSubmit').click(function(){
		editSubmit(); //calls searchSubmit and closeEditing within the callback for the ajax call
	});
	$('#editDelete').click(function(){
		editDelete(); 
	});
	$('#editCancel').click(function(){
		searchSubmit(false); //not ideal
		closeEditing();
	});
});

</script>

<?php include "editSubmit.php" ?>
<?php include "editDelete.php" ?>
<?php include "closeEditing.php" ?>