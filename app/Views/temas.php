<style {csp-style-nonce}>
		#container{
			background-color: #fff;
			margin: 0 auto;
			padding: 5px;
			width: 50px;
		}

			.contenedor{
			display: flex;

			background-color: darkgrey;
			color: #fff;
			border-radius:25px ;
		}
		.text{
			padding-left: 15px;
		}
		.cont2{
			display: flex;
		}
		.txt{
			padding-right: 150px;
			background-color: darkgrey;
			color: #fff;
			border-radius:5px ;
			position: relative;
		}
		#container{
			background-color: #fff;
			margin: 0 auto;
			padding: 15px;
			width: 500px;
		}

		#container ul{
		}

		#container ul li{
		}
		.img{
			background-image: url('https://twitter.com/Belanova/photo');
		}
		.btn-enviar{
    padding: 15px;
    font-size: 16px;
    border: none;
    outline: 10px;
    background: orange;
    color: white;
    border-radius: 17px;
    cursor: pointer;
    transition: all 300ms ease;
	padding-right: 100%;

}
.lista{
	padding: 15px;
    font-size: 16px;
    border: none;
    outline: 10px;
    background: orange;
    color: white;
    border-radius: 27px;
    cursor: pointer;
    transition: all 300ms ease;
	padding-right: 20%;
}
.btn-enviar{
    padding: 15px;
    font-size: 16px;
    border: none;
    outline: 0px;
    background: orange;
    color: white;
    border-radius: 3px;
    cursor: pointer;
    transition: all 300ms ease;
}

.contact-info {
    background: ;
}

.contact-info h4, .contact-info ul, .contact-info p {
    text-align: center;
    margin: 0 0 1rem 0;
}


* {
    box-sizing: border-box;
}

body {
    background: #DAF7A6 ;
    color: #fff;
    line-height: 1.6;
    font-family: 'Quicksand', sans-serif;
    padding: 0 1.5em;
}

.container {
    max-width: 1170px;
    margin-left: auto;
    margin-right: auto;
    padding: 1.5em;
}

ul {
    list-style: none;
    padding: 0;
}

.logo {
    text-align: center;
    font-size: 3em;
}

.logo span {
    color: #B70E21;
}

.contact-wrapper {
    box-shadow: 0 0 20px 0 rgba(255, 255, 255, .3);
}

.contact-wrapper > * {
    padding: 1em;
}

.contact-form {
    background: #222222;
}

.contact-form form {
    display: grid;
    grid-template-columns: 1fr 1fr;
}

.contact-form form label {
    display: block;
}

.contact-form form p {
    margin: 0;
    padding: 1em;
}

.contact-form form .block {
    grid-column: 1 / 3;
}

.contact-form form button,
.contact-form form input,
.contact-form form textarea {
    width: 100%;
    padding: .7em;
    border: none;
    background: none;
    outline: 0;
    color: #fff;
    border-bottom: 1px solid #d63031;
}

.contact-form form button {
    background: #B70E21;
    border: 0;
    text-transform: uppercase;
    padding: 1em;
}



/* CONTACT INFO */
.contact-info {
    background: #000;
}

.contact-info h4, .contact-info ul, .contact-info p {
    text-align: center;
    margin: 0 0 1rem 0;
}

/* LARGE SIZE */
@media(min-width: 700px) {
    body {
        padding: 0 4em;
    }
    .contact-wrapper {
        display: grid;
        grid-template-columns: 2fr 1fr;
    }
    .contact-wrapper > * {
        padding: 2em;
    }
    .contact-info h4,
    .contact-info ul,
    .contact-info p {
        text-align: left;
    }
}
 .btn-enviar{
    padding: 15px;
    font-size: 16px;
    border: none;
    outline: 0px;
    background: orange;
    color: white;
    border-radius: 3px;
    cursor: pointer;
    transition: all 300ms ease;
}
 .campo{
    width: 100%;
    padding: 15px 10px;
    font-size: 16px;
    border: 1px solid #dbdbdb;
    margin-bottom: 20px;
    border-radius: 3px;
    outline: 0px;
}
.btn{
	position: center;
	display: block;
  padding: 15px 25px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;	
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
  width: 100%;



 
}
.btn:hover {background-color: #fff}

.btn:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    padding: 12px 16px;
    z-index: 1;
}

.dropdown:hover .dropdown-content {
    display: block;
}
/* Style The Dropdown Button */
.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
    position: relative;
    display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

/* Links inside the dropdown */
.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #f1f1f1}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
    display: block;
}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}
details{
  background:#9A9A9A  ;
  padding: 1rem;
  margin: 0.5rem;
  border-radius: 6px;
  cursor: pointer;
}
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}


//////////////////////////////////////////////////////////////////////selection/////////////////////////////////////////
h2 {
  margin: 16px;
}

.container {
  margin-top: 100px;
  padding: 32px;
}

.select-box {
  display: flex;
  width: 400px;
  flex-direction: column;
}

.select-box .options-container {
  background: #2f3640;
  color: #f5f6fa;
  max-height: 0;
  width: 100%;
  opacity: 0;
  transition: all 0.4s;
  border-radius: 8px;
  overflow: hidden;

  order: 1;
}

.selected {
  background: #2f3640;
  border-radius: 8px;
  margin-bottom: 8px;
  color: #f5f6fa;
  position: relative;

  order: 0;
}

.selected::after {
  content: "";
  background: url("img/arrow-down.svg");
  background-size: contain;
  background-repeat: no-repeat;

  position: absolute;
  height: 100%;
  width: 32px;
  right: 10px;
  top: 5px;

  transition: all 0.4s;
}

.select-box .options-container.active {
  max-height: 240px;
  opacity: 1;
  overflow-y: scroll;
}

.select-box .options-container.active + .selected::after {
  transform: rotateX(180deg);
  top: -6px;
}

.select-box .options-container::-webkit-scrollbar {
  width: 8px;
  background: #0d141f;
  border-radius: 0 8px 8px 0;
}

.select-box .options-container::-webkit-scrollbar-thumb {
  background: #525861;
  border-radius: 0 8px 8px 0;
}

.select-box .option,
.selected {
  padding: 12px 24px;
  cursor: pointer;
}

.select-box .option:hover {
  background: #414b57;
}

.select-box label {
  cursor: pointer;
}

.select-box .option .radio {
  display: none;
}


</style>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<center><h1>Tema De Atencion</h1></center>
<div class="contenedor">
            
		<div class="img">

		</div>
		<div class="text">
			<center><h2>Datos del alumno</h2></center>
			 <ul>
			<li>Programa educativo: Tecnico Superior Universitario en tecnologias de la infomacion y desarrollo de software</li>	
            <li>Nombre: Monsserrath Rojo Bautista</li>
            <li>Matricula:20200749</li>
            <li>Cuatrimestre:1ro</li>
            <li>Grupo:B</li>
          </ul>
		</div>
	</div>
	<br>
	<div>
		<center><h1>Temas de atención</h1></center>
	</div>
	<div class="content">

       

        
    <div class="container">
      <h2>Tema de atencion</h2>

      <div class="select-box">
        <div class="options-container">
          <div class="option">
            <input
              type="radio"
              class="radio"
              id="automobiles"
              name="category"
            />
            <label for="automobiles">Reprobación</label>
          </div>

          <div class="option">
            <input type="radio" class="radio" id="film" name="category" />
            <label for="film">Mala conducta</label>
          </div>

          <div class="option">
            <input type="radio" class="radio" id="science" name="category" />
            <label for="science">Por falta de asistencia</label>
          </div>

          <div class="option">
            <input type="radio" class="radio" id="art" name="category" />
            <label for="art">Desempeño académico</label>
          </div>

          <div class="option">
            <input type="radio" class="radio" id="music" name="category" />
            <label for="music">Trabajo en equipo</label>
          </div>

          <div class="option">
            <input type="radio" class="radio" id="travel" name="category" />
            <label for="travel">Economico</label>
          </div>

        </div>

        <div class="selected">
          Tema de Atencion
        </div>
      </div>
      <script>

const selected = document.querySelector(".selected");
const optionsContainer = document.querySelector(".options-container");

const optionsList = document.querySelectorAll(".option");

selected.addEventListener("click", () => {
  optionsContainer.classList.toggle("active");
});

optionsList.forEach(o => {
  o.addEventListener("click", () => {
    selected.innerHTML = o.querySelector("label").innerHTML;
    optionsContainer.classList.remove("active");
  });
});
      </script>

    </div>
    

<div>
 
 <!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<!-- Button trigger modal -->
<button type="button" style=" width: 400px; margin-top:-150px; margin-left:440px;" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
Agregar tema
</button>


<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Agrega tema de atención </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <textarea type="text" style="width:450px;"></textarea>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>
<center>
<div >
<form action="/action_page.php">
    <label for="fname">Agregar version de la situación</label>
    <input type="text" id="fname" name="tutor" placeholder="versión del tutor">

    <label for="lname">Alumno</label>
    <input type="text" id="lname" name="alumno" placeholder="versión del Alumno">

    <label for="lname">observacion</label>
    <input type="text" id="lname" name="observaciones" placeholder="observaciones">
</div>
</center>

<div class="cont2">
		
		<form action="Canalizacion" autocomplete="off">
            <a href="Canalizacion"  name="enviar" value="siguiente" class="btn-enviar">Canalizacion</a>
           
        </form>
	</div>
</body>
</html>

   





