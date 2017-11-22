@extends('master')                              

@section('content') 
 <link rel="stylesheet" type="text/css" href="public/Css/form.css">
         <section id="page2">
    	<div class="panel panel-default">
  	<div class="panel-heading">
  	<center><font size="5" face="Comic Sans MS,arial,verdana"><h3>PRE-INSCRIPCIÓN CURSOS DE NATACIÓN ALUMNOS NUEVOS</h3></font></center>
  	</div>
  	
  	<div class="panel-body"> 
  	<center><p style="font-size: 14pt;">RANGO DE EDAD DE 5 A 7 AÑOS</strong></p></center>

  	<p style="line-height: 27px; font-size: 11pt" align="justify">Una vez realizado la pre-inscripción del niño(a) por favor compruebe el número de registro asignado ingresando el número de identidad del mismo tal cual como lo hizo en el registro y presione en botón Imprimir Registro, recuerde que para formalizar la inscripción deberá dirigirse a la coordinación de la escuela de natación CASB - IDRD y radicar la documentación exigida.</p>   
  	<br>                    
    <form action="carnet" method="POST"> 
		<fieldset class="form-group">
			<label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput">Número de documento del niño</label>
			<input title="Se nesesita el codigo" required type="number" class="form-control" id="id" name="id" >
		</fieldset>
		<fieldset class="form-group">
	
			<input type="submit" class="btn btn-success" value="Descargar">
		</fieldset>
				
	</section>
      
       
@stop
