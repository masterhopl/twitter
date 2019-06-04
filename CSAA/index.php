<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		
	</head>
	<body>
		<!--навигация-->
		
		<?php $connect = mysqli_connect('127.0.0.1', 'root', '', 'ivan_pndelnik09');
		$query = mysqli_query($connect, 'SELECT * FROM tweet'); ?>
		<div class="content">
			<div class="container">
				
				<div class="row mt-2">
					<!--левая колонка-->
					<div class="col-3 pl-2">
						<?php $connect = mysqli_connect('127.0.0.1', 'root', '', 'ivan_pndelnik09');
						$query = mysqli_query($connect, 'SELECT * FROM tweet ORDER BY id DESC'); ?>
						
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</div>
					<!--средняя колонка-->

					

					<div class="col-6 pl-2 ">
						<form method="POST" action="insert.php">
							<input type="" name="text">
							<button>твит</button>
						</form>
					
						
						<?php for($i = 0; $i < $query->num_rows; $i++) { ?>
						
						<div class="row">
							
						<div class="col-2 ">
							<a href="">
								<?php $logo = $query->fetch_assoc(); echo '<img src="' . $logo['logo'] . '">';?>
							</a>
						</div>
						
						<div class="col-10">
							<div class="row">
								<h5>
									<a href="#">
										<?php  echo '<h5>' . $logo['title'] . '</h5>'; ?>
									</a>
								</h5>
							</div>
						<div>
							<p>
						<?php  echo $logo['text']; ?>
							</p>
						</div>
						<div>
						<?php echo '<img class="w-100" src="' . $logo['img'] . '">'; ?>
						</div>
						<div class="row">
							<div class="col-3">
								<img src="comment.png" alt="">
							</div>
							<div class="col-3">
								<img src="retweet.png" alt="">
							</div>
							<div class="col-3 ">
								<img src="like.png" alt="">
							</div>
							<div class="col-3 ">
								<img src="envelope.png" alt="">
							</div>
							
							<form action="delete.php" method="GET">
								
								<?php echo '<input name="id" value="' . $logo['id'] . ' " style="display: none " >'; ?>

								<button>удалить</button>


							</form>
							<form action="change.php" method="POST">
								
								<?php echo '<input  type=""hidden name="id" value="' . $logo['id'] . '"">'; ?>
								<?php echo '<input name="text" value="' . $logo['text'] . '" style="display: none">'; ?>
								<button>редактировать</button> 


							</form>
					</div>
				</div>
			</div>
						<?php } ?>
		</div>
					
					<!--правая колонка-->
					<div class="col-3 pl-2">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet porro voluptate sed optio temporibus voluptatum quaerat maxime aliquid placeat qui, hic ut, debitis pariatur esse cum cumque excepturi illum sit.
					</div>
				</div>
			</div>
		
		</div>
	</body>
</html>