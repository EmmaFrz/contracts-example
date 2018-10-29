<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Contrato</title>
</head>
<body>
	<h1>Contrato</h1>
	<form method="post" action="send_mail.php">
		<label for="">Email</label>
		<input type="email" name="email" required>

		<label for="">Nombre</label>
		<input type="text" name="name" required>

		<label for="">Apellido</label>
		<input type="text" name="last_name" required>

		<label for="">Telefono</label>
		<input type="text" name="phone" required>
		
		<label for="">Direccion</label>
		<input type="text" name="dir" required>



		<input type="submit">
	</form>
</body> 
</html>