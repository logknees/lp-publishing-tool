<script>

function createTable(){

var table = '<table class="table" id="table_results"><thead><tr><th scope="col" style="display: none" class="table_website_id"></th><th scope="col" class="table_website">Website</th><th scope="col" class="table_DA">DA</th><th scope="col" class="table_names">Names</th><th scope="col" class="table_title">Title</th><th scope="col" class="table_email">Email</th><th scope="col" class="table_phone">Phone</th><th scope="col" class="table_status">Status</th><th scope="col" class="table_last_poc">Last POC</th><th scope="col" class="table_notes">Notes</th><th scope="col" class="table_coordinator">Publishing Coordinator</th></tr></thead><tbody id="data"></tbody></table>';

document.getElementById('results').innerHTML = table;
}

</script>