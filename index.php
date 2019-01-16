<?php include "connection.php"; ?>
<html lang="en">
<?php include "header.php"; ?>
</head>
<body>
	<?php include "nav.php"; ?>
	<div class="container">
		<h1 class="display-1">Publishing Tool</h1>
		<div class="row">
			&nbsp;
		</div>
		<!--<div class="row">
			<div class="col">
				<p>Search:</p>
			</div>
			<div class="col">
				<select id="searchBy">
					<option id="search_name" name="search_name" value="names">Name(s)</option>
					<option id="search_website" name="search_website" value="website">Website Name</option>
					<option id="search_DA" name="search_DA" value="DA">Domain Rating</option>
				</select>
			</div>
			<div class="col">
				<p>equals</p>
			</div>
			<div class="col" id="inputText">
				<input type="text" name="searchData" id="searchData">
			</div>
			<div class="col">
				<p>sorted by:</p>
			</div>
			<div class="col">
				<select id="sortData">
					<option id="sort_name" name="sort_name" value="names">Name(s)</option>
					<option id="sort_website" name="sort_website" value="website">Website Name</option>
					<option id="sort_DA" name="sort_DA" value="DA">Domain Rating</option>
				</select>
			</div>
			<div class="col">
				<select id="sortOrder">
					<option id="ASC" name="ASC" value="ASC">Ascending</option>
					<option id="DESC" name="DESC" value="DESC">Descending</option>
				</select>
			</div>
			<div class="col">
				<button name="data" type="button" id="submit">Go!</button>
			</div>
		</div>-->
	</div>
	<div id="results">


	</div>
	<div class="loader"></div>
	<div class="container">
		<div class="footer fixed-bottom lp-footer rounded">
			<div class="row">
				<div class="col"><label for="website">Website</label></div>
				<div class="col"><label for="DA">DA</label></div>
				<div class="col"><label for="names">Names</label></div>
				<div class="col"><label for="title">Titles</label></div>
				<div class="col"><label for="email">Email</label></div>
				<div class="col"><label for="phone">Phone</label></div>
				<div class="col"><label for="status">Status</label></div>
				<div class="col"><label for="last_poc">Last POC</label></div>
				<div class="col"><label for="times_contacted">Times Contacted</label></div>

				<div class="col"><label for="notes">Notes</label></div>
				<div class="col"><label for="signed">Signed?</label></div>
				<div class="col"><label for="publishing_coordinator">Coordinator</label>
				</div>
			</div>
			<div class="row">
				<div class="col"><input type="text" class="form-control" name="website" id="website"></div>
				<div class="col"><input type="text" class="form-control" name="DA"></div>
				<div class="col"><input type="text" class="form-control" name="names" id="names"></div>
				<div class="col"><input type="text" class="form-control" name="title"></div>
				<div class="col"><input type="text" class="form-control" name="email" id="email"></div>
				<div class="col"><input type="text" class="form-control" name="phone" id="phone"></div>
				<div class="col"><input type="text" class="form-control" name="status"></div>
				<div class="col"><input type="text" class="form-control" name="last_poc"></div>
				<div class="col"><input type="text" class="form-control" name="times_contacted"></div>
				<div class="col"><input type="text" class="form-control" name="notes"></div>
				<div class="col"><input type="checkbox" class="form-control" name="signed"></div>
				<div class="col">
					<select class="form-control" name="publishing_coordinator">
						<option value="1">Emmy</option>
						<option value="2">Mallory</option>
						<option value="3">Morgan</option>
					</select>
				</div>
			</div>
		</div>
	</div>
</body>

</html>

<?php include "submitSearch.php"; ?>
<?php include "bindings.php" ?>