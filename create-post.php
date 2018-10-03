<?php
require 'php/server.php';
require 'include/bootstrap.php';
require 'include/header.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class = "container-fluid">
	<form method="post">
		<div class = "card">
			<div class = "card-body col-lg-6">
				<div class  = "card-title">
					Create a post!
				</div>
				<div class = "form-group">
					<label>Title</label>
					<input type="text" name="P_TITLE" class="form-control" placeholder="Title of your post">
				</div>

				<div class = "form-group">
					<label>Description</label>
					<textarea class = "form-control rounded-0" style = "resize: none;" rows = "4" placeholder="Enter text here..."></textarea>
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