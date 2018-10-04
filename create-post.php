<?php
require 'php/server.php';
require 'include/header.php';
require 'include/bootstrap.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class = "container-fluid">
	<form method="post" action = "php/cpost-function.php">
		<div class = "card">
			<div class = "card-body col-lg-6">
				<div class  = "card-title">
					<h3>Create a post</h3>
				</div>
				<hr>
				<div class = "form-group">
					<label>Title</label>
					<input type="text" name="PO_Title" class="form-control" placeholder="Title of your post">
				</div>

				<div class = "form-group">
					<label>Description</label>
					<textarea class = "form-control rounded-0" name = "PO_Desc" style = "resize: none;" rows = "5" placeholder="Enter text here..."></textarea>
				</div>

				<div class = "form-group">
					<button class = "btn btn-primary" type = "submit" name = "user-post">Submit</button>
				</div>
			</div>
		</div>
	</form>
	</div>

</body>
</html>