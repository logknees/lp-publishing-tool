<?php include "connection.php"; ?>
<html lang="en">

<?php include "header.php"; ?>

<?php include "inputFilter.php"; ?>
<?php include "removeQuotes.php"; ?>
<?php include "clearFooter.php"; ?>

</head>

<body>
	<div id="currentlyEditing" value="false"></div>
	<?php include "nav.php"; ?>

	<div id="results">
		<table class="table" id="table_results">
			<thead>
				<th scope="col" style="display: none" class="table_website_id"></th>
				<th scope="col" class="table_website sorted_asc">Website</th>
				<th scope="col" class="table_DA">DA</th>
				<th scope="col" class="table_names">Names</th>
				<th scope="col" class="table_title">Title</th>
				<th scope="col" class="table_email">Email</th>
				<th scope="col" class="table_phone">Phone</th>
				<th scope="col" class="table_site_status">Status</th>
				<th scope="col" class="table_last_poc">Last POC</th>
				<th scope="col" class="table_created_on">Created On</th>
				<th scope="col" class="table_notes">Notes</th>
				<th scope="col" class="table_is_signed">Signed?</th>
				<th scope="col" class="table_publishing_coordinator">Publishing Coordinator</th>
			</thead>
			<tbody id="data"></tbody>
		</table>
	</div>
	<div class="loader"></div>
	<div class="container">
		<div class="footer fixed-bottom lp-footer rounded" id="footer">
			<div class="row">
				<div class="col"><label for="website">Website</label></div>
				<div class="col"><label for="DA">DA</label></div>
				<div class="col"><label for="names">Names</label></div>
				<div class="col"><label for="title">Titles</label></div>
				<div class="col"><label for="email">Email</label></div>
				<div class="col"><label for="phone">Phone</label></div>
				<div class="col"><label for="site_status">Status</label></div>
				<div class="col"><label for="last_poc">Last POC</label></div>
				<div class="col"><label>&nbsp;</label></div>
				<div class="col"><label for="notes">Notes</label></div>
				<div class="col"><label for="signed">Signed?</label></div>
				<div class="col"><label for="publishing_coordinator">Coordinator</label>
				</div>
			</div>
			<div class="row" id="add_fields">
				<div class="col"><input type="text" class="form-control" name="website" id="website"></div>
				<div class="col"><input type="text" class="form-control inputFilter" name="DA"></div>
				<div class="col"><input type="text" class="form-control" name="names" id="names"></div>
				<div class="col"><input type="text" class="form-control" name="title"></div>
				<div class="col"><input type="text" class="form-control" name="email" id="email"></div>
				<div class="col"><input type="text" class="form-control" name="phone" id="phone"></div>
				<div class="col"><input type="text" class="form-control" name="site_status"></div>
				<div class="col"><input type="date" class="form-control" name="last_poc" id="last_poc"></div>
				<div class="col">&nbsp;</div>
				<div class="col"><input type="text" class="form-control" name="notes"></div>
				<div class="col" style="display: none;"><input type="text" value="1" name="active"></div>
				<div class="col"><input type="checkbox" class="form-control" name="is_signed"></div>
				<div class="col">
					<select class="form-control" name="publishing_coordinator" id="publishing_coordinator">
						<option value="0">All</option>
						<option value="1">Emmy</option>
						<option value="2">Mallory</option>
						<option value="3">Morgan</option>
						<option value="4">Zack</option>
						<option value="5">Emily</option>
						<option value="6">Kayla</option>
						<option value="7">Christina</option>
						<option value="8">Kate</option>
						<option value="9">Abbey</option>
					</select>
				</div>
			</div>
		</div>

		<!-- Modal -->
		<div id="confirmModal" class="modal fade" role="dialog">
			<div class="modal-dialog modal-lg">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Are you sure?</h4>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
					<div class="modal-body">
						<p>Are you sure you want to enter this row into the database?</p>
						<p>You may click out of this window to cancel.
						</p>
					</div>
					<div class="modal-footer">
						<button class='btn btn-success' data-dismiss='modal' id="add_submit">Submit!</button>
						<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
					</div>
				</div>
			</div>
		</div>
		<div id="invalidModal" class="modal fade" role="dialog">
			<div class="modal-dialog modal-lg">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Invalid input</h4>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
					<div class="modal-body">
						<p>You didn't enter enough information!</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		<div id="deleteModal" class="modal fade" role="dialog">
			<div class="modal-dialog modal-lg">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Confirm Deletion</h4>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
					<div class="modal-body">
						<p>Are you sure you want to delete this row?</p>
						<p>You may click out of this window to cancel.
						</p>
					</div>
					<div class="modal-footer">
						<button class='btn btn-danger' data-dismiss='modal' id="delete_submit">Delete!</button>
						<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>
<?php include "scrollingThead.php"; ?>
<?php include "addBinding.php"; ?>
<?php include "editBinding.php"; ?>
<?php include "searchBinding.php"; ?>
<?php include "orderBinding.php"; ?>
<?php include "pasteBinding.php"; ?>
<?php include "clearBinding.php"; ?>