
<style {csp-style-nonce}>
* {
    box-sizing: border-box;
}

body {
    background: #DAF7A6  ;
    color: #FFFFFF ;
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
    box-shadow: 0 0 20px 0 rgba(255, 255, 255 );
}

.contact-wrapper > * {
    padding: 1em;
}

.contact-form {
    background: #FDFEFE   ;
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
    color: #000000 ;
    border-bottom: 1px solid #000000;
}

.contact-form form button {
    background: #B70E21;
    border: 0;
    text-transform: uppercase;
    padding: 1em;
}

.contact-form form button:hover,
.contact-form form button:focus {
    background:#000000;
    color: #000000;
    transition: background-color 1s ease-out;
    outline: 0;
}

/* CONTACT INFO */
.contact-info {
    background: #47993B;
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
        text
    }
}
 .btn-enviar{
    padding: 15px;
    font-size: 16px;
    border: none;
    outline: 0px;
    background: blue;
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
.contenedor{
			display: flex;

			background-color: darkgrey;
			color: #fff;
			border-radius:25px ;
		}
		.text{
			padding-left: 25px;
		}
        label{
            color:black;
        }

  	</style>
 <?=$header?>
<?=$welcome_message?>
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
    </div>

<div class="content">
        <div class="contact-wrapper animated bounceInUp">
            <div class="contact-form">
                <div class="form">
                <form method="get" action="<?=base_url('guardar')?>" enctype="multipart/form-data">
                            <p class="block">
                            <label>Programa educativo</label> 
                                <textarea id="programaedu" name="programaedu" rows="1"></textarea>
                            </p>
                            <p>
                                <label>Nombre</label>
                                <input id="nombre" type="text" name="nombre">
                            </p>
                            <p>
                                <label>Apellido Paterno</label>
                                <input id="apellidoP" type="text" name="apellidoP">
                            </p>
                            <p>
                                <label>Apellido Materno</label>
                                <input id="apellidoM" type="text" name="apellidoM">
                            </p>
                            <p>
                                <label>Matricula</label>
                                <input id="matricula" type="text" name="matricula">
                            </p>
                            <p>
                                <label>Cuatrimestre</label>
                                <input id="cuatrimestre" type="text" name="cuatrimestre">
                            </p>
                            <p>
                                <label>Grupo</label>
                                <input id="grupo" type="text" name="grupo">
                            </p>
                            <p>
                                <label>Periodo</label>
                                <input id="periodo" type="text" name="periodo">
                            </p>
                            <p>
                                <label>Fecha de nacimeinto</label>
                                <input id="fechadenac" type="text" name="fechadenac">
                            </p>

                            <p class="block">
                            <label>Motivo de Baja</label> 
                                <textarea id="motivo" name="message" rows="motivo"></textarea>
                            </p>
                            <div>
                            <p><input type="file"  accept="image/*" name="image" id="file"  onchange="loadFile(event)" style="display: inline-block;"></p>
                            <p><label for="file" style="cursor: pointer;">Firma digital del alumno:</label></p>
                            <p><img id="output" width="200" /></p>
                            </div

                            <div>
                            <p><input type="file"  accept="image/*" name="image" id="fil"  onchange="loadfile2(event)" style="display: inline-block;"></p>
                            <p><label for="file" style="cursor: pointer;">Firma digital del tutor:</label></p>
                            <p><img id="count"  width="200" /></p>
                            </div>                      
                           <button class="btn btn-success" type="submmit">Guardar</button>
                </form>
                </div>
               
            </div>
            <div class="contact-info">
                <center><h1>TIPO DE BAJA</h1></center>
                <ul>
                <br>
                <input type="radio" name="transporte2" value="1">Definitiva
                <br>
                <br>
                <input type="radio" name="transporte2" value="2" checked>Temporal
                </ul>
               
                <form action= href="<?=base_url('demoPDF') ?>" autocomplete="off">

 
            <br>
            <input type="submit" name="enviar" value="Descargar Pdf" class="btn-enviar" onclick="demoPDF()">
        </form>
            </div>
        </div>

    </div>