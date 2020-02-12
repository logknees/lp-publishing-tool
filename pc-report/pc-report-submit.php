<?php include "../append.php" ?>

<script>
function pcReportSubmit(){
	var pc = $('#pc').val()
    var start_date = $('#start_date').val()
    var end_date = $('#end_date').val()
    var send_object = { pc: pc, start_date: start_date, end_date: end_date };
    if(pc !== '' && start_date !== '' && end_date !== '')
        $.ajax({
            type: "POST",
            url: 'pc-report-endpoint.php',
            data: {
                send_object: JSON.stringify(send_object)
            },
            success: function(data)
            {
                data = JSON.parse(data)
                $('#created').text(data.created_count)
                console.log(data.created_count)
                $('#emailed').text(data.emailed_count)
                console.log(data.emailed_count)
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
                toastr.error(errorThrown);
                $('.loader').toggle();
            }
        });
}

</script>