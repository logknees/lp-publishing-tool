<?php include "createTable.php" ?>
<script>
	createTable();
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
					table += "<td>";
					table += currentRow[key];
					table += "</td>";
				}
				else if(key == "signed"){
					table += "<td>";
					if(currentRow[key] == 1){
						table += "&#10004;"
					}
					table += "</td>";
				}
				else if(key == "DA"){
					table += "<td class='editableFilter'>";
					table += currentRow[key];
					table += "</td>";
				}
				else if(key == "times_contacted"){
					table += "<td class='editableFilter'>";
					table += currentRow[key];
					table += "</td>";
				}
				else{
					table += "<td>";
					table += currentRow[key];
					table += "</td>";
				}
			}
			table += "</tr>";
		});
		document.getElementById('data').innerHTML = table;
	}

</script>