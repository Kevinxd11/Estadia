


<style {csp-style-nonce}>
		*{
	margin: 0;
	padding: 0;
}

body{
	background: #e4e4e4;
	font-family: 'Raleway';
	font-size: 14px;
}

.navegacion{
	width: 100%;
}

.navegacion nav{
	width: 90%;
	max-width: 1100px;
	background: #2D3447;
	margin: 40px auto;
}

.navegacion nav ul{
	list-style: none;
	position: relative;
}

.navegacion nav > ul > li{
	display: inline-block;
}

.navegacion nav > ul > li > a{
	color: #fff;
	text-decoration: none;
	display: block;
	padding: 20px;
}

.navegacion nav > ul > li > a span{
	font-size: 20px;
	position: absolute;
	bottom: -8px;
	display: none;
}

.navegacion nav > ul > li:hover span{
	display: block;
}

.navegacion nav ul li .submenu{
	background: #fff;
	padding: 20px;
	position: absolute;
	display: none;
	-webkit-box-shadow: 0px 0px 5px 1px rgba(0,0,0,0.24);
	-moz-box-shadow: 0px 0px 5px 1px rgba(0,0,0,0.24);
	box-shadow: 0px 0px 5px 1px rgba(0,0,0,0.24);
}

.navegacion nav ul li:hover .submenu{
	display: flex;
}

.navegacion nav ul li .submenu .submenu-items{
	margin: 0 20px;
}

.navegacion nav ul li .submenu .submenu-items p{
	font-weight: 600;
	width: 110px;
	display: block;
	padding-bottom: 5px;
	border-bottom: 1px solid #565656;
	margin-bottom: 10px;
}

.navegacion nav ul li .submenu .submenu-items a{
	color: #474747;
	text-decoration: none;
	margin: 6px 0;
	display: block;
}
.circulo {
     width: 20px;
     height: 20px;
     -moz-border-radius: 50%;
     -webkit-border-radius: 50%;
     border-radius: 50%;
     background: #5cb85c;
}
	</style>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listas de alumnos</title>
</head>
<?=$header?>
<?=$welcome_message?>
	<body>
		<div class="navegacion">
			<nav>	
				<ul>
					<li><a href="#">1A TI <span class="icon icon-up-dir"></span></a>
						<div class="submenu">
								<div class="submenu-items">

										<table class="table table-light">
											<thead class="thead-light">
												<tr>
													<th>Nombre</th>
													<th>Apellido Paterno</th>
													<th>Apellido Materno</th>
													<th>Matricula</th>
													<th></a></th>
												</tr>
											</thead>
									

											<?php foreach($alumnos as $alumno): ?>   

												<tr>
													<td><?=$alumno['vchNombre'];?> </td>
													<td><?=$alumno['vchApellidoP'];?></td>
													<td><?=$alumno['vchApellidoM'];?></td>
													<td><?=$alumno['pkMatricula'];?></td>
													<td><a href="" class="circulo"></td>
												</tr>

											<?php endforeach;?>
												
											</tbody>
										</table>
								</div>	
						</div>								
					</li>
				</ul>
			</nav>
		</div>
	</body>
</html>