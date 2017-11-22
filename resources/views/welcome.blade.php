

@extends('master')                              
@section('content')         
<link rel="stylesheet" type="text/css" href="public/Css/form.css">
<link rel="stylesheet" type="text/css" href="public/Css/slider_styles.css">
<section id="page1">
   <div class="panel panel-default">
   
   <div class="panel-body">
   <div class="freebirdFormviewerViewFormContent ">
   <div class="freebirdFormviewerViewHeaderHeader">
   <div class="freebirdFormviewerViewHeaderTitleRow">
      <script src="public/Js/jquery.sldr.js"></script>
      <div class="freebirdFormviewerViewHeaderDescription" dir="auto">
         <br>
         <link rel="stylesheet" type="text/css" href="public/Css/form.css">
         <form method="POST" action="insertar" id="form_gen" enctype="multipart/form-data">
         <input type="hidden" name="horas-json" id="horas-json" value="{{ $horas }}"></input>
            <div class="panel-body">
               <!-- nuevo formulario-->
               <div class="panel panel-default">
                  <div class="panel-heading">
                     <center><h3 class="panel-title"><font size="5"color="#1995dc">INSCRIPCIÓN</font></h3></center>
                  </div>
                  <div class="panel-body">
                     <div class="row">
                        <div class="col-xs-6">
                           <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput">Documento de Identificación </label>
                           <input required type="text" class="form-control" id="cedula" name="cedula">
                        </div>
                        <div class="col-xs-6">
                           <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">Nombre Completo</label>
                           <input required type="text" class="form-control" id="nombre" name="nombre" onkeyup="javascript:this.value=this.value.toUpperCase();" ><br>
                        </div>
                        <div class="col-xs-6">
                           <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput">Área o dependencia a la cual pertenece </label>
                           <input required type="text" class="form-control" id="area" name="area"  onkeyup="javascript:this.value=this.value.toUpperCase();">
                        </div>
                        <div class="col-xs-6">
                           <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">Cargo</label>
                           <input required type="text" class="form-control" id="cargo" name="cargo"  onkeyup="javascript:this.value=this.value.toUpperCase();">
                           <br>
                        </div>
                        <div class="col-xs-6">
                           <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput">Fecha de Buceo</label>
                           <select name="fecha" id="fecha" class="form-control" >
                              <option value="">Seleccione</option>
                                 @foreach ($fechas as $fecha)
                                     <option value="{{ $fecha->id }}">{{ $fecha->fecha}}</option>
                                 @endforeach
                           </select>
                        </div>
                        <div class="col-xs-6">
                           <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">Horario de Buceo </label>
                           <select  required name="hora" id="hora" class="form-control" >
                              <option value="">Seleccione</option>           
                         </select><br>
                        </div>
               </div>
               <br>
            
               </fieldset>
               <div class="freebirdFormviewerViewFormContent ">
                 <!-- <div class="freebirdFormviewerViewHeaderHeader">
                     <div class="freebirdFormviewerViewHeaderTitleRow">
                        <div class="freebirdFormviewerViewHeaderTitle" dir="auto" role="heading" aria-level="1"></div>
                     </div>
                     <div class="freebirdFormviewerViewHeaderRequiredLegend" aria-hidden="true" dir="auto"></div>
                  </div>-->
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
                              <div class="freebirdFormviewerViewItemsItemItemHelpText" id="i.desc.131124881" dir="auto">Usted acepta y cumple con los requisitos exigidos  al inicio de este proceso de inscripción</div>
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
                                        <div class="docssharedWizToggleLabeledPrimaryText"><span dir="auto" class="docssharedWizToggleLabeledLabelText freebirdFormviewerViewItemsCheckboxLabel">&nbsp;  Acepto</span></div>
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
                        
                     </div>
                     <div class="freebirdFormviewerViewNavigationPasswordWarning">.</div>
                  </div>
         </form>
         <script type="text/javascript" src="public/Js/form.js" ></script>
         
@stop

