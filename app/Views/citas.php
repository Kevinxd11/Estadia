<style {csp-style-nonce}>
* {
  
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  background-attachment: fixed;
}

.form-register {
  width: 400px;
  background: #24303c;
  padding: 30px;
  margin: auto;
  margin-top: 100px;
  border-radius: 4px;
  font-family: 'calibri';
  color: white;
  box-shadow: 7px 13px 37px #000;
}

.form-register h4 {
  font-size: 22px;
  margin-bottom: 20px;
}

.controls {
  width: 100%;
  background: #24303c;
  padding: 10px;
  border-radius: 4px;
  margin-bottom: 16px;
  border: 1px solid #1f53c5;
  font-family: 'calibri';
  font-size: 18px;
  color: white;
}

.form-register p {
  height: 40px;
  text-align: center;
  font-size: 18px;
  line-height: 40px;
}

.form-register a {
  color: white;
  text-decoration: none;
}

.form-register a:hover {
  color: white;
  text-decoration: underline;
}

.form-register .botons {
  width: 100%;
  background: #1f53c5;
  border: none;
  padding: 12px;
  color: white;
  margin: 16px 0;
  font-size: 16px;
}
//////////////////////////////////////////////
input[type=date] {
  height: 35px;
  margin: 0 auto;
  width: 100%;
  font-family: arial, sans-serif;
  font-size: 18px;
  font-weight: bold;
  text-transform: uppercase;
  background-color: #959595;
  outline: none;
  border: 0;
  border-radius: 3px;
  padding: 0 3px;
  color: #fff;
}

	</style>


<script>
$(document).ready(function () {
    $('input[type="date"]').click();

});

function closeDate(dateInput) {
    $(dateInput).attr('type', 'text');
    $(dateInput).attr('type', 'date');
}
$(".readonly").keydown(function(e){
    e.preventDefault();
});
</script>
<section class="form-register">
<form action="../../form-result.php" method="post" target="_blank">
      <h1>Agenda fecha y hora</h1>
  <p>
  <label for="start">Start date:</label>

<input type="date" id="start" name="trip-start"
       value="2022-08-10"
       min="2022-01-01" max="2023-12-31">



  </p>
  <br>
  <p>Hora: <input type="time" name="eta"> </p>
  <br>
  
  <p>

    AULA

    <select name="AULA">

      <option>K21</option>

      <option>D21</option>

    </select>

  </p>
  <br> 
  <p>

  Tipo de atencion

<select name=" TIPO de atención">

  <option>Grupal</option>

  <option>Individual</option>

</select> 
<p>
Tutor

<select name=" Nombre del Tutor">

  <option>M.T.I. Gadiel Ramos Hernández</option>

  <option>M.T.I. José de Jesús González Torres </option>

</select> 
<br> 
</p>
<p>
Alumno

<select name=" Nombre del Alumno">

  <option>Monsserrath Rojo Bautista</option>

  <option>Thania Rivera Adan </option>

</select> 
<br> 
</p>
<p>
Descripcion 
  <label for="Alumno"></label>
<input type="text">
<br> 
<p>



</select>
</p>
<center><input type="submit" value="Agregar datos"></center>
</p>

