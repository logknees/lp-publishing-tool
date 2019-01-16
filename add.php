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
				<label for="website">Website:</label>
				<input type="text" name="website" id="website">
			</div>
			<div class="col">
				<label for="DA">DA:</label>
				<input type="text" name="DA" id="DA">
			</div>
			<div class="col">
				<label for="names">Names:</label>
				<input type="text" name="names" id="names">
			</div>
			<div class="col">
				<label for="title">Title:</label>
				<input type="text" name="title" id="title">
			</div>
			<div class="col">
				<label for="email">Email:</label>
				<input type="text" name="email" id="email">
			</div>
		</div>
		<div class="row">&nbsp;</div>
		<div class="row">
			<div class="col">
				<label for="phone">Phone:</label>
				<input type="text" name="phone" id="phone">
			</div>
			<div class="col">
				<label for="status">Status:</label>
				<input type="text" name="status" id="status">
			</div>
			<div class="col">
				<label for="last_poc">Last POC:</label>
				<input type="date" name="last_poc" id="last_poc">
			</div>
			<div class="col">
				<label for="notes">Notes:</label>
				<input type="text" name="notes" id="notes">
			</div>
			<div class="col">
				<label for="color">Publisher:</label>
				<input type="text" name="color" id="color">
			</div>
		</div>
		<div class="row">&nbsp;</div>
	</div>
	<div class="container">
		<div class="text-center">
			<button type="button" id="addSubmit">Add</button>
		</div>
	</div>
</body>

</html>

<?php include "bindings.php" ?>