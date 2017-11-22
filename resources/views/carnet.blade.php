<!DOCTYPE html>

<html>

<head>

<style>
body{
    font-family: sans-serif;
    width: 100%; 
    height:375px;
}
img{
    width: 100%;
}
</style> 
</head>
<body>

 <img src="https://www.idrd.gov.co/sitio/idrd/sites/default/files/Cabezote%20limpio.jpg">

      <p align="center" style="font-size: 9pt;"><strong>ESCUELA DEPORTIVA DE NATACIÓN COMPLEJO ACUÁTICO SIMÓN BOLIVAR – IDRD 2017</strong></p>
      <p align="center" style="font-size: 7pt;"><strong>PRE-INSCRIPCIÓN CURSOS DE NATACIÓN ALUMNOS NUEVOS</strong></p>
      <p align="center" style="font-size: 7pt;"><strong>RANGO DE EDAD DE 5 A 7 AÑOS</strong></p>
<br>
<center><table border="0" width="100%" style="font-size: 7pt;">
 <tr>
      <td colspan="4" align="center"><strong>INFORMACIÓN DEL NIÑO</strong></td>
    </tr>
    <tr>
      <td colspan="4" align="center">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2">Número  de Inscripción:</td>
      <td colspan="2"><font size="4" color="#00ade6">{{$formulario->cedula}}&nbsp;-{{$formulario->id}}</strong></font></td>
    </tr>
    <tr>
      <td colspan="2">Documento de identificación:</td>
      <td colspan="2"><strong>{{$formulario->cedula}}</strong></font></td>
    </tr>
    <tr>
      <td colspan="2">Nombre Completo:</td>
      <td colspan="2"><strong>{{$formulario->nombre_nino}}&nbsp;{{$formulario->apellido_nino}}</strong></td>
    </tr>
    <tr>
      <td colspan="2">Género:</td> 
      <td colspan="2"><strong>{{$formulario->genero}}</strong></td>
    </tr>
    <tr>
      <td colspan="2">Edad Cumplida:</td>
      <td colspan="2"><strong>{{$formulario->edad}}</strong></td>
     </tr>
     <tr> 
      <td colspan="2">Dirección Residencia:</td>
      <td colspan="2"><strong>{{$formulario->direccion_nino}}</strong></td>
    </tr>
    <tr>
      <td colspan="2">Teléfono de Residencia:</td>
      <td colspan="2"><strong>{{$formulario->telefono_nino}}</strong></td>
      </tr>
    <tr>
      <td colspan="2">Eps:</td>
      <td colspan="2"><strong>{{$formulario->eps}}</strong></td>
    </tr>
     <tr>
      <td colspan="2">Institución Educativa:</td>
      <td colspan="2"><strong>{{$formulario->institucion}}</strong></td>
     </tr>
     <tr> 
      <td colspan="2">Sector del colegio:</td>
      <td colspan="2"><strong>{{$formulario->sector_colegio}}</strong></td>
    </tr>
     <tr>
      <td colspan="2">Ha tomado clases o cursos de Natación:</td>
      <td colspan="2"><strong>{{$formulario->curso}}</strong></td>
     </tr>
     <tr> 
      <td colspan="2">Horario:</td>
      <td colspan="2"><strong>{{$formulario->horario}}</strong></td>
    </tr>
    <tr>
      <td colspan="2" align="center">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="4" align="center"><strong>INFORMACIÓN DEL ACUDIENTE O REPRESENTANTE LEGAL</strong></td>
    </tr>
    <tr>
      <td colspan="4" align="center">&nbsp;</td>
    </tr>
     <tr>
      <td colspan="2">Nombre del acudiente:</td>
      <td colspan="2"><strong>{{$formulario->nombre_acudiente}}</strong></td>
     </tr>
     <tr> 
      <td colspan="2">Documento:</td>
      <td colspan="2"><strong>{{$formulario->cedula_acudiente}}</strong></td>
    </tr>
     <tr>
      <td colspan="2">Ocupación:</td>
      <td colspan="2"><strong>{{$formulario->ocupacion}}</strong></td>
     </tr>
     <tr> 
      <td colspan="2">Correo Electrónico:</td>
      <td colspan="2"><strong>{{$formulario->mail}}</strong></td>
    </tr>
    <tr>
      <td colspan="2">Dirección:</td>
      <td colspan="2"><strong>{{$formulario->direccion}}</strong></td>
     </tr>
     <tr> 
      <td colspan="2">Teléfono:</td>
      <td colspan="2"><strong>{{$formulario->telefono}}</strong></td>
    </tr>
</table> </center>
    

    <p align="justify" style="font-size: 7pt"><br><br>
        <strong>Recuerde que para formalizar la inscripción deberá dirigirse a la coordinación de la escuela de natación CASB - IDRD y radicar la documentación exigida.</strong>
      </p>

      <p align="justify" style="font-size: 6pt">
        Cualquier inquietud acércate a las Instalaciones del IDRD Calle 63 No 59a-06 Área de Recreación, o llama al teléfono 6605400 Ext. 2007 y 3002.
      </p>
  
    </body>

</html>
