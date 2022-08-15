<style {csp-style-nonce}>
	/*
	Color fondo: #632432;
	Color header: 246355;
	Color borde: 0F362D;
	Color iluminado: 369681;
*/
body{
	background-color: #DAF7A6;
	font-family: Arial;
}

#main-container{
	margin: 150px auto;
	width: 600px;
}

table{
	background-color: white;
	text-align: left;
	border-collapse: collapse;
	width: 100%;
}

th, td{
	padding: 20px;
}

thead{
	background-color: #246355;
	border-bottom: solid 5px #0F362D;
	color: white;
}

tr:nth-child(even){
	background-color: #ddd;
}

tr:hover td{
	background-color: #369681;
	color: white;
}
	</style>

<div id="main-container">

		<table>
			<thead>
				<tr>
					<th>Descripción</th><th>Mes</th><th>Calificaciones</th>
				</tr>
			</thead>

			<tr>
				<td>mes 1</td><td>1</td><td>8</td>
			</tr>
			<tr>
				<td>mes 2</td><td>2</td><td>8</td>
			</tr>
			<tr>
				<td>mes 3</td><td>3</td><td>8</td>
			</tr>
			<tr>
				<td>mes 4</td><td>4</td><td>8</td>
			</tr>
		</table>
</div>