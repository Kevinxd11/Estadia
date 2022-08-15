<style {csp-style-nonce}>
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
		.contenedor{
			display: flex;

			background-color: darkgrey;
			color: #fff;
			border-radius:25px ;
		}
		.text{
			padding-left: 25px;
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
			background-color: #DAF7A6;
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
    background: #DAF7A6;
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
    background: #DAF7A6 ;
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
</style>

<div class="contenedor">

		<div class="img">

		</div>
		<div class="text">
			<table class=  "table dark">
                <thead class="table-ligth">
                    <tr>
                        <th>id</th>
                        <th>Nombre</th>
                        <th>Apellido Materno</th>
                        <th>Apellido Paterno</th>
                        <th>Fecha de De Nacimiento</th>
                        <th>Foto</th>
                    </tr>
                </thead>  
                <tbody>
                    <?php foreach($Alumnos as $Alumnos): ?>
                        <tr>
                            <td><?$Alumnos['pkMatricula'];?></td>
                            <td><?$Alumnos['vchNombre'];?></td>
                            <td><?$Alumnos['vchApellidoP'];?></td>
                            <td><?$Alumnos['vchApellidoM'];?></td>
                            <td><?$Alumnos['dateFechaNacimiento'];?></td>
                            <td><?$Alumnos['vchFoto'];?></td>
                </tbody>  
          </ul>
		</div>
	</div>
</div>
	
