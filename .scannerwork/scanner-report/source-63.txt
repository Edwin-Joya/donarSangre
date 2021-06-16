<!DOCTYPE html>

<html> 

	<head> 

		<meta name="author" content="Edwin Joya">

	<head>



	<body>



		<?php

			

			$con = mysqli_connect("localhost", "root", "", "usuarios");

			if (mysqli_connect_errno())

			{

				echo "No se pudo conectar a la base de datos" . mysqli_connect_error();

			}

			

			$nom = mysqli_real_escape_string($con, $_POST["nombre"]);

            

            $dui = mysqli_real_escape_string($con, $_POST["dui"]);

           

	        $edad = mysqli_real_escape_string($con, $_POST["edad"]);



			$telefono = mysqli_real_escape_string($con, $_POST["telefono"]);

            

            $encargado = mysqli_real_escape_string($con, $_POST["encargado"]);

           

	        $contraseña = mysqli_real_escape_string($con, $_POST["contraseña"]);


	        

	        

			

			$sql = "INSERT INTO donantes (nombre, dui, edad, telefono, encargado, contraseña)

			VALUES ('$nom', '$dui','$edad','$telefono','$encargado','$contraseña')";



			if (!mysqli_query($con,$sql)) {

			 		die('Error: ' . mysqli_error($con));

				} else

				{

                    $mensaje = "¡REGISTRO EXITOSO!, Por favor inicia sesion";
                    echo "<script>";
                    echo "alert('$mensaje');";  
                    echo "window.location = '../login.html';";
                    echo "</script>"; 

						
        }

		?>



	</body>

</html>