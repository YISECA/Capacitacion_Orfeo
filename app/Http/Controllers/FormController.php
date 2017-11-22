<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB as DB;
use Redirect;
use Validator;
use Session;
use App\Form;
use Idrd\Usuarios\Repo\Acceso;
use App\Fechas;
use App\Horas;
use App\Cupo;
use Mail;



class FormController extends BaseController

{
    var $url;

     public function index()
    {

      //$fechas = Fechas::with('horas')->get();
      $fechas = Fechas::all();
      $horas = Horas::all();

      //dd($horas); exit();
      return view('welcome',["fechas"=>$fechas, "horas"=>$horas,]);
    }

    private function cifrar($M)

    {   

      $C="";
      $k = 18; 
      for($i=0; $i<strlen($M); $i++)$C.=chr((ord($M[$i])+$k)%255);
      return $C;
    }

    private function decifrar($C)
    {   

      $M="";
      $k = 18;
      for($i=0; $i<strlen($C); $i++)$M.=chr((ord($C[$i])-$k+255)%255);
      return $M;
    }



   public function listar_datos(){

    $acceso = Form::with('horas', 'horas.fecha')->whereYear('created_at', '=', date('Y'))->get(); 
    
    $tabla='<table id="lista">
        <thead>
           <tr>
             <th style="text-transform: capitalize;">id</th>
             <th style="text-transform: capitalize;">Documento de identidad</th>   
             <th style="text-transform: capitalize;">Nombre Completo</th>
             <th style="text-transform: capitalize;">Área  o dependencia</th>                     
             <th style="text-transform: capitalize;">Cargo</th>
             <th style="text-transform: capitalize;">Fecha</th>
             <th style="text-transform: capitalize;">hora</th>
            </tr>
        </thead>
        <tbody id="tabla">';
      foreach ($acceso as $key => $value) {
     

       $tabla.='<tr><td>'.$value->id.'</td>';
       $tabla.='<td>'.$value->cedula.'</td>';
       $tabla.='<td>'.$value->nombre.'</td>';   
       $tabla.='<td>'.$value->area.'</td>';   
       $tabla.='<td>'.$value->cargo.'</td>';    
       $tabla.='<td>'.$value->horas->fecha['fecha'].'</td>';
       $tabla.='<td>'.$value->horas['hora'].'</td></tr>';
       

      }
      $tabla.='</tbody></table>';

      echo $tabla;

    }

  
    public function logear(Request $request)
    {

      $usuario = $request->input('usuario');
      $pass = $request->input('pass');
      $acceso = Acceso::where('Usuario',$usuario)->where('Contrasena', sha1($this->cifrar($pass)) )->first();

      if (empty($usuario)) { return view('error',['error' => 'Usuario o contraseña invalida!'] ); exit(); }
      if (empty($acceso)) { return view('error',['error' => 'Usuario o contraseña invalida!'] ); exit(); }
       
       session_start() ;
       $_SESSION['id_usuario'] = json_encode($acceso);

      return view('admin'); exit(); 
    }


//insertar

    public function insertar(Request $request){

      $post = $request->input();



      $usuario = Form::where('cedula', $request->input('cedula'))->first(); 

       if (!empty($usuario)) { return view('error',['error' => 'Este usuario ya fue registrado!'] ); exit(); }

       $formulario = new Form([]);
        
        //envio de correo
        $registros = $this->inscritos($request->input('hora'));
        var_dump($registros->count());
        //exit();
       if($registros->count() <12){

        $this->store($formulario, $request->input());

        
      }else{

        return view('error', ['error' => 'Lo sentimos el limite de inscritos fue superado!']);

      }

        //envio de correo

        return view('error', ['error' => 'Usted quedó registrado para la capacitación']);

    }

    //fin insertar
   
// conteo de la tabla

    private function inscritos($hora){
      $registros = Form::where('hora', $hora)->get();
      return $registros;
    }

    private function store($formulario, $input)

    {
        $formulario['cedula'] = $input['cedula'];
        $formulario['nombre'] = $input['nombre'];
        $formulario['area'] = $input['area'];
        $formulario['cargo'] = $input['cargo'];
        $formulario['fecha'] = $input['fecha'];
        $formulario['hora'] = $input['hora'];
        $formulario->save();

        return $formulario;

        

    }

}
