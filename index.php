<?php include "connection.php"; ?>
<html lang="en">
<?php include "header.php"; ?>
<?php include "addBinding.php"; ?>

</head>
<body>
	<?php include "nav.php"; ?>
	
	<div id="results">


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
				<div class="col"><label for="times_contacted">Times Contacted</label></div>

				<div class="col"><label for="notes">Notes</label></div>
				<div class="col"><label for="signed">Signed?</label></div>
				<div class="col"><label for="publishing_coordinator">Coordinator</label>
				</div>
			</div>
			<div class="row" id="add_fields">
				<div class="col"><input type="text" class="form-control" name="website" id="website"></div>
				<div class="col"><input type="text" class="form-control" name="DA"></div>
				<div class="col"><input type="text" class="form-control" name="names" id="names"></div>
				<div class="col"><input type="text" class="form-control" name="title"></div>
				<div class="col"><input type="text" class="form-control" name="email" id="email"></div>
				<div class="col"><input type="text" class="form-control" name="phone" id="phone"></div>
				<div class="col"><input type="text" class="form-control" name="site_status"></div>
				<div class="col"><input type="date" class="form-control" name="last_poc"></div>
				<div class="col"><input type="text" class="form-control" name="times_contacted"></div>
				<div class="col"><input type="text" class="form-control" name="notes"></div>
				<div class="col" style="display: none;"><input type="text" value="1" name="active"></div>
				<div class="col"><input type="checkbox" class="form-control" name="is_signed"></div>
				<div class="col">
					<select class="form-control" name="publishing_coordinator">
						<option value="1">Emmy</option>
						<option value="2">Mallory</option>
						<option value="3">Morgan</option>
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
	</div>
</body>

</html>

<?php include "submitBinding.php"; ?>