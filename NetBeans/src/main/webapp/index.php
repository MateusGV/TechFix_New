<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Sistema de comentário</title>
	</head>
	<body>
		<!-- https://inatitude.wordpress.com/2010/12/06/tutorial-php-sistema-de-comentarios/ -->
		<h1>Digite seu comentário - Funciona criatura divina</h1>

		<form method="post" action="validar.php">
			<div>Nome: </div>
				<div>
					<input type="text" name="nome" />
				</div>
			<div>Email: </div>
				<div>
					<input type="text" name="email" />
				</div>
			<div>Comentário: </div>
				<div>
					<textarea cols="30" rows="5" name="comentario"></textarea>
				</div>
			<hr/>
			<div>
				<input type="submit" value="Enviar" />
			</div>
		</form>
		
		<?php
		
			require('conexao.php');

			while ($employee = mysqli_fetch_assoc($records)) {
				echo $employee['nome'];
				echo $employee['email'];
				echo $employee['comentario'];

			}

		?>
	</body>
</html>