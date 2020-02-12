<script>

$(document).ready(function(){
	$("#pc, #start_date, #end_date").on("change", function(e){
		pcReportSubmit()
	});
});

</script>

<?php include "pc-report-submit.php" ?>