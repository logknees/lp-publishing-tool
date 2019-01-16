<?php include "createTable.php" ?>
<script>
	createTable();
	function append(data){
		var table = ""
		data.forEach(function(currentRow){
			table += "<tr>";
			for (var key in currentRow){
				if(key == "website_id"){

				}
				else if(key =="active"){
					
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