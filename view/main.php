<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Main</title>
		<link href="/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<style></style>
		<script></script>
	</head>
	<body>
		<div class="container">
			<div class='row'>
				<h1>Sacred Gladias... Main</h1>
			</div>
			<br>
			<br>
			<div class='row'>
				<div class='span6'>
					<table class="table table-condensed">
						<tr>
							<td>Player ID</td>
							<td><?=$userID ?></td>
						</tr>
						<tr>
							<td>Email</td>
							<td><?=$email ?></td>
						</tr>
					</table>
				</div>
			</div>
			<div class='row'>
				<div class='span'>
					<form action='<?=$linkSignOut ?>' method='post'>
						<button class='btn'>
							Sign out
						</button>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>