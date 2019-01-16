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
		<div class="row">
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
		</div>
	</div>
	<div id="results">


	</div>
	<div class="loader"></div>

	<div class="fixed-bottom">
		<div class="row">
			<div class="col">
				test
			</div>
			<div class="col">
				test
			</div>
			<div class="col">
				test
			</div>
			<div class="col">
				test
			</div>
			<div class="col">
				test
			</div>
		</div>
	</div>
</body>

</html>

<?php include "submitSearch.php"; ?>
<?php include "bindings.php" ?>