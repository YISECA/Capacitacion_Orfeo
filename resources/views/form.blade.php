

@extends('master')                              
@section('content') 
<link rel="stylesheet" type="text/css" href="public/Css/form.css">
<form method="POST" action="insertar" id="form_gen" enctype="multipart/form-data">
   <div class="panel-body">
   <!-- nuevo formulario-->
   <div class="panel panel-default">
      <div class="panel-heading"><font size="3"color="#1995dc">INFORMACIÓN DEL ACUDIENTE O REPRESENTANTE LEGAL</font></div>
      <div class="panel-body">
         <div class="row">
            <div class="col-xs-6">
               <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput">Nombre Completo </label>
               <input required type="text" class="form-control" id="nombre_acudiente" name="nombre_acudiente" onkeyup="javascript:this.value=this.value.toUpperCase();">
            </div>

            <div class="col-xs-6">
               <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">Documento de Identidad </label>
               <input title="Se necesita una cedula" required type="number" class="form-control" id="cedula_acudiente" name="cedula_acudiente"><br>
            </div>

            <div class="col-xs-6">
               <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput">Ocupación </label>
               <input required type="text" class="form-control" id="ocupacion" name="ocupacion" onkeyup="javascript:this.value=this.value.toUpperCase();" >
            </div>
               <div class="col-xs-6"><label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">Correo Electrónico</label>
               <input required type="mail" class="form-control" id="mail" name="mail" ><br>
            </div>
   
            <div class="col-xs-6">
               <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput">Dirección de residencia </label>
               <input required type="text" class="form-control" id="direccion" name="direccion" >
            </div>
               <div class="col-xs-6"><label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">Teléfono </label>
               <input required type="number" class="form-control" id="telefono" name="telefono" ><br>
            </div>
            
            <div class="col-xs-6"><label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput">Localidad </label></div>
            <div class="col-xs-6">&nbsp;</div>
            <div class="col-xs-6">
               <select  required name="localidad" id="localidad" class="form-control" >
                  <option value="">Seleccione</option>
                  @foreach ($localidades as $localidad)
                  <option value="{{ $localidad->id_localidad }}">{{ $localidad->localidad}}</option>
                  @endforeach
               </select>
            </div>
            <div class="col-xs-6">&nbsp;<br></div>
         </div>
      </div>
   </div>
   <div class="panel panel-default">
      <div class="panel-heading">
         <h3 class="panel-title"><font size="3"color="#1995dc">INFORMACIÓN DEL NIÑO</font></h3>
      </div>
      <div class="panel-body">
         <div class="row">
            <div class="col-xs-6">
               <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput">Nombres Completos </label>
               <input required type="text" class="form-control" id="nombre_nino" name="nombre_nino" onkeyup="javascript:this.value=this.value.toUpperCase();">
            </div>
            <div class="col-xs-6">
               <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">Apellidos Completos</label>
               <input required type="text" class="form-control" id="apellido_nino" name="apellido_nino" onkeyup="javascript:this.value=this.value.toUpperCase();" ><br>
            </div>
         
            <div class="col-xs-6">
               <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput">Documento de Identificación </label>
               <input required type="text" class="form-control" id="cedula" name="cedula">
            </div>
            <div class="col-xs-6"><label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">Género</label>
            <select name="genero" id="genero" class="form-control" >
                  <option value="">Seleccione</option>
                  <option value="Masculino">Masculino</option>
                  <option value="Femenino">Femenino</option>
               </select> <br>
            </div>
  
            <div class="col-xs-6">
               <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput">Fecha de nacimiento </label>
               <input required type="text" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento">
            </div>
            <div class="col-xs-6">
               <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">Edad cumplida</label>
               <input required type="text" class="form-control" id="edad" name="edad"><br>
            </div>

            <div class="col-xs-6">
               <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput">Dirección de residencia </label>
               <input required type="text" class="form-control" id="direccion_nino" name="direccion_nino" >
            </div>
            <div class="col-xs-6">
               <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">Teléfono residencia </label>
               <input required type="number" class="form-control" id="telefono_nino" name="telefono_nino" ><br>
            </div>

            <div class="col-xs-6">
               <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput">EPS </label>
               <input required type="text" class="form-control" id="eps" name="eps" onkeyup="javascript:this.value=this.value.toUpperCase();" >
            </div>
            <div class="col-xs-6">
               <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">Institución Educativa</label>
               <input required type="text" class="form-control" id="institucion" name="institucion" onkeyup="javascript:this.value=this.value.toUpperCase();" ><br>
            </div>

            <div class="col-xs-6">
               <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput">Sector del colegio </label>
               <select name="sector_colegio" id="sector_colegio" class="form-control" >
                  <option value="">Seleccione</option>
                  <option value="Público">Público</option>
                  <option value="Privado">Privado</option>
               </select>
            </div>
             <div class="col-xs-6">
              <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput"><font color="#1995dc"><u>HORARIO DEL CURSO</u> </font></label>
              <select  required name="horario" id="horario" class="form-control" >
                  <option value="">Seleccione</option>
                  @foreach ($horarioss as $horarios)
                  <option value="{{ $horarios->id_horarios }}">{{ $horarios->horarios}}</option>
                  @endforeach
               </select><br>
            </div>
            <div class="col-xs-6">
               <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">Ha tomado clases o cursos de Natación</label>
               <select name="curso" id="curso" class="form-control" >
                  <option value="">Seleccione</option>
                  <option value="SI">SI</option>
                  <option value="NO">NO</option>
               </select>
               <br>
            </div>
            
           
            <div class="col-xs-6">&nbsp;</div>

            <div class="col-xs-6"><label > si selecciona <font color="#1995dc" size="3">SI</font> se realizará evaluación de Habilidades en el agua, y se ubicara en el mismo horario u otro disponible según resultado y cupos para el nivel evaluado</label></div>
         </div>
         <div class="col-xs-6"><input type="hidden" name="ciclo" id="ciclo" value="5"></div>
      </div>
   </div>
   <br>
   <p style="line-height: 22px; font-size: 11pt;color:#1995dc" align="justify">"Recuerde que el horario seleccionado por usted <strong>NO PODRA SER MODIFICADO,</strong> teniendo en cuenta la programación establecida por el IDRD y la cantidad de cupos habilitados por horario, ya que estos son limitados con el fin de ofrecer un buen servicio en el desarrollo técnico de la escuela deportiva."</p>
   <br>
   <p style="line-height: 27px; font-size: 11pt" align="justify"><strong>"ACEPTO TÉRMINOS Y CONDICIONES DE LA ESCUELA DE NATACIÓN DEL COMPLEJO ACUÁTICO SIMÓN BOLÍVAR - IDRD"</strong> </p>
   <br>
   <p style="line-height: 20px; font-size: 11pt" align="justify"><strong>* todos los campos son obligatorios y Recuerde que al Finalizar este proceso y ENVIAR LOS DATOS DE INSCRIPCIÓN el sistema le informa automáticamente si su pre-inscripción fue aceptada</strong> </p>
   </fieldset>
   <div class="freebirdFormviewerViewFormContent ">
   <div class="freebirdFormviewerViewHeaderHeader">
      <div class="freebirdFormviewerViewHeaderTitleRow">
         <div class="freebirdFormviewerViewHeaderTitle" dir="auto" role="heading" aria-level="1"></div>
      </div>
      <div class="freebirdFormviewerViewHeaderRequiredLegend" aria-hidden="true" dir="auto"></div>
   </div>
   <div class="freebirdFormviewerViewItemList" role="list">
      <div class="freebirdMaterialHeaderbannerLabelContainer freebirdFormviewerViewItemsPagebreakBanner" jsname="bLLMxc" role="heading">
         <div class="freebirdMaterialHeaderbannerLabelTextContainer freebirdSolidBackground freebirdMaterialHeaderbannerPagebreakBanner">
            <div class="freebirdMaterialHeaderbannerPagebreakText freebirdFormviewerViewItemsPagebreakBannerText"></div>
         </div>
      </div>
      <div class="freebirdFormviewerViewItemsPagebreakDescriptionText"></div>
      <div role="listitem" class="freebirdFormviewerViewItemsItemItem" jsname="ibnC6b" jscontroller="hIYTQc" jsaction="JIbuQc:qzJD1c;sPvj8e:e4JwSe" data-required="true" data-other-input="qSV85" data-other-hidden="MfYA1e" data-item-id="131124881">
         <div class="freebirdFormviewerViewItemsItemItemheader">
            <div class="freebirdFormviewerViewItemsItemItemTitleContainer">
               <div class="freebirdFormviewerViewItemsItemItemTitle" dir="auto" id="i1" role="heading" aria-level="2" aria-describedby="i.desc.131124881">Términos de inscripción <span class="freebirdFormviewerViewItemsItemRequiredAsterisk" aria-hidden="true">*</span><br><br><br><br><br></div>
               <div class="freebirdFormviewerViewItemsItemItemHelpText" id="i.desc.131124881" dir="auto">Usted acepta y cumple con los requisitos exigidos  al inicio de este proceso de pre-inscripción</div>
            </div>
         </div>
         <div jsname="JNdkSc" role="group" aria-labelledby="i1" aria-describedby="i.desc.131124881 i.err.131124881 i.req.131124881" class="">
            <div class="" jsname="MPu53c" jscontroller="GJQA8b" jsaction="JIbuQc:aj0Jcf" data-value="Acepto">
               <div class="freebirdFormviewerViewItemsCheckboxChoice">
                  <label class="docssharedWizToggleLabeledContainer freebirdFormviewerViewItemsCheckboxContainer">
                     <div class="exportLabelWrapper">
                        <input type="checkbox" required style="float: left;
                           margin: 0px;" name="acepto" id="acepto">
                        <div class="docssharedWizToggleLabeledContent">
                           <div class="docssharedWizToggleLabeledPrimaryText"><span dir="auto" class="docssharedWizToggleLabeledLabelText freebirdFormviewerViewItemsCheckboxLabel">Acepto</span></div>
                        </div>
                     </div>
                  </label>
               </div>
               <input name="entry.1642827248" jsname="ekGZBc" disabled="" type="hidden">
            </div>
         </div>
         <div id="i.req.131124881" class="screenreaderOnly"></div>
         <div jsname="XbIQze" class="freebirdFormviewerViewItemsItemErrorMessage" id="i.err.131124881" role="alert"></div>
      </div>
   </div>
   <div class="freebirdFormviewerViewNavigationNavControls" jscontroller="lSvzH" jsaction="rcuQ6b:npT2md;JIbuQc:V3upec(GeGHKb),HiUbje(M2UYVd),NPBnCf(OCpkoe)" data-shuffle-seed="-2327421662174229681">
      <div class="freebirdFormviewerViewNavigationButtonsAndProgress">
         <div class="freebirdFormviewerViewNavigationButtons">
            <input class="enviar" type="submit" value="Enviar"> 
         </div>
         <div class="freebirdFormviewerViewNavigationProgress">
            <div class="freebirdFormviewerViewNavigationProgressIndicator" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" aria-labelledby="lpd4pf" role="progressbar">
               <div class="freebirdFormviewerViewNavigationProgressIndicatorFill done" style="width:100%"></div>
            </div>
            <div id="lpd4pf" class="quantumWizButtonPaperbuttonContent" aria-hidden="true">Página 1 de 1</div>
         </div>
      </div>
      <div class="freebirdFormviewerViewNavigationPasswordWarning">.</div>
   </div>
</form>
<script type="text/javascript" src="public/Js/form.js" ></script>
@stop

