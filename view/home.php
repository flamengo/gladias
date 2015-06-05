<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Home</title>
		<link href="/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<style></style>
		<script>
			$(document).ready(function() {
				$('[link]').click(function() {
					$('form').attr('action', $(this).attr('link')).submit();
				});
			});
		</script>
	</head>
	<body>
		<div class="container">
			<div class='row'>
				<h1>Sacred Gladias...</h1>
			</div>
			<br>
			<br>
			<div class='row'>
				<div class='span'>
					<form class="form-horizontal" method="post">
						<div class="control-group">
							<label class="control-label">Email</label>
							<div class="controls">
								<input type="text" name='email' placeholder="Email">
							</div>
						</div>
						<div class="control-group">
							<label class="control-label">Password</label>
							<div class="controls">
								<input type="password" name='password' placeholder="Password">
							</div>
						</div>
						<div class="control-group">
							<div class="controls">
								<label class="checkbox">
									<input type="checkbox">
									Remember me </label>
								<div class="btn" link="<?=$linkSignIn?>">
									Sign in
								</div>
								<div class="btn" link="<?=$linkSignUp?>">
									or Sign up
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>