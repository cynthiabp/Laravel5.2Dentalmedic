<!doctype html>
<html lang="en-US">
<head>

	<meta charset="utf-8">

	<title>Social Navigation</title>

	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
      <link href="css/Inicioseccion.css" rel="stylesheet" >
      <link href ="https://fonts.googleapis.com/css?family=Poiret+One" rel ="stylesheet">

</head>

<body>

    <div id="login-form">

        <h1>Inicio de Sesión</h1>

        <fieldset>

            <form action="" method="get"  >

               

                <input type="text" name="nombre"  placeholder="Usuario"  
                minlength="6" maxlength="12"   required pattern="[A-Za-z0-9]{6,12}"
         title="Letras y números. Tamaño mínimo: 6. Tamaño máximo: 12" required> 


                
                <input type="password" placeholder="Contraseña"  name="contrasena" minlength="6" maxlength="12"   required pattern="[A-Za-z0-9]{6,12}"
         title="Letras y números. Tamaño mínimo: 6. Tamaño máximo: 12" required> 

                

                <input type="submit" value="Iniciar">
                  <input  type="button" name="cancelar"  align="right" value="Cancelar" onClick="window.location.href='layout'">


                

            </form>

        </fieldset>

    </div> 


 
</body>
</html>