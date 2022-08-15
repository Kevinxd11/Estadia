<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Welcome to CodeIgniter 4!</title>
	<meta name="description" content="The small framework with powerful features">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/png" href="/favicon.ico"/>

	<!-- STYLES -->

	<style {csp-style-nonce}>
		      .titulo h3{
			font-size: 1.5rem;
			font-weight: 500;
      text-align: center;
      margin-top: 1em;
		  }
      h4{
        text-align: center;
        font-family: Georgia black;
        font-size: 15px;
        color: #006600;
        background: -webkit-linear-gradient(#E5E8E8,#F2F3F4);
      }


    
    li a:hover:not(.act) {
    background-color:  black;
}
li a:hover:not(.act) {
    background-color: black;
}

/*  Activar Form*/
li a:hover:not(.activar) {
    background-color:  RGB(21, 144, 31 );
}

li a.activar {
    color: black;
    background-color: RGB(149, 229, 156);
}


	</style>
</head>
<body>

</head>
</body>
<nav class="navbar navbar-dark bg-dark text-dark">
<div class="container-fluid">

      <li class="navbar-item">
      <a class="navbar-brand" href="Home">Cerrar sesion</a>
      </li>

      <li class="navbar-item">
        <a class="navbar-brand"  href="Usuario">Datos del usuario</a>
      </li>
      <li class="nav-item">
      <a class="navbar-brand" href="listas">lista de alumnos</a>
      </li>
      <li class="nav-item">
      <a class="navbar-brand" href="Citas">Agendar citas</a>
      </li>
     <li class="nav-item">
      <a class="navbar-brand" href="Tema">Temas</a>
      </li>
      <li class="nav-item">
      <a class="navbar-brand" href="Canalizacion">Reporte de canalizacion</a>
      </li>
      <li class="nav-item">
      <a class="navbar-brand" href="baja">Reporte de baja</a>
      </li>
      <li class="nav-item">
      <a class="navbar-brand" href="Historial">Historiales</a>
      </li>
      
      
    </nav>
  </div>
</header>

<footer>
	

</footer>

<!-- SCRIPTS -->

<script>
	function toggleMenu() {
		var menuItems = document.getElementsByClassName('menu-item');
		for (var i = 0; i < menuItems.length; i++) {
			var menuItem = menuItems[i];
			menuItem.classList.toggle("hidden");
		}
	}
</script>

<!-- -->

</body>
</html>
