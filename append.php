<?php include "clearTable.php" ?>
<script>
	clearTable();
	function append(data){
		var table = "";
		data.forEach(function(currentRow){
			for (var key in currentRow){
				if(key == "website_id"){
					table += "<tr class='locked' id='website_id_"+currentRow[key]+"'>";
				}
				else if(key =="active"){
					
				}
				else if(key == "last_poc"){
					table += "<td class='dateEdit' data-submission='"+key+"'>";
					if(currentRow[key] == '0000-00-00'){	
						table += "";
					}	
					else{
						table += moment(currentRow[key]).format('MM/DD/YYYY');
					}
					table += "</td>";
				}
				else if(key == "is_signed"){
					table += "<td class='signedEdit' data-submission='"+key+"'>";
					if(currentRow[key] == 1){
						table += "&#10004;"
					}
					table += "</td>";
				}
				else if(key == "DA"){
					table += "<td class='editableFilter' data-submission='"+key+"'>";
					table += currentRow[key];
					table += "</td>";
				}
				else if(key == "publishing_coordinator"){
					table += "<td class='pcEdit' data-value='"+currentRow[key]+"' data-submission='"+key+"'>";
					if(currentRow["pc_name"] == null){

					}
					else{
						table += currentRow["pc_name"];
					}
					table += "</td>";
				}
				else if(key == "created_on"){
					table += "<td class='nonEditable'>";
					if(currentRow[key] == null){
						table += "";
					}
					else{
						table += currentRow[key];
					}
					table += "</td>";
				}
				else if(key == "pc_id" || key == "pc_name"){

				}
				else{
					table += "<td data-submission='"+key+"'>";
					table += currentRow[key];
					table += "</td>";
				}
			}
			table += "</tr>";
		});
		document.getElementById('data').innerHTML = table;
	}

</script>