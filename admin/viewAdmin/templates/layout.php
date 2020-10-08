<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="public/css/boostrap.css">
	<link rel="stylesheet" type="text/css" href="public/css/mystyle.css">
	<link rel="stylesheet" type="text/css" href="public/css/font-awesome.min.css">

	<script src="public/is/jquery.min.js"></script>
	<script src="public/js/boostrap.min.js"></script>
	<script type="text/javascript" src="public/js/ajaxupload.3.5.js"></script>
</head>
<body>
	<div class="container">

		<?php 
			if (isset($_SESSION["userId"]) && isset($_SESSION["sessionId"])) {
		?>

		<div class="header clearfix">
			<nav class="navbar navbar-default">
				<div class="container-fluid">
					<?php 
						echo '<ul class="nav nav-pills pull-right">
						<li role="button">'.$_SESSION["name"].'<a href="logout" style="display:inline;">Выйти<i class="fa fa-sign-out"></i></a></li></ul>';
						if(isset($_SESSION["status"]) && $_SESSION["status"]=="admin"){
							echo '<h4><a href="../" target=_blank>WEB SITE News portal</a>';
							echo ' &#187 <a href="./">Start admin</a>';
							echo ' &#187 <a href="categoryAdmin">News categories</a>';
							echo ' &#187 <a href="newsAdmin">News List</a>';
							echo ' </h4>';	
						}else{
							echo '<h4>У вас нет прав!</h4>';
						}
					?>

				</div>
			</nav>
		</div>
		<?php
		}
		?>
		<div id="content" style="padding-top: 20px;">
			<?php echo $content; ?>
		</div>
		
		<footer class="footer">
			<p>&copy; 2020 Design Admin dashboard<i class="fa fa-child"></i></p>
		</footer>
	</div>

</body>
</html>