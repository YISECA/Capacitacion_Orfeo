<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB as DB;
use App\Http\Requests;
use Validator;
use Session;
use PDF;
use App\Form;

class PdfController extends BaseController {

    public function carnet(Request $request)
    {

      date_default_timezone_set('America/Bogota');

      $post = $request->input();

      $id = $post['id'];


      $usuario = Form::where('cedula', $id)->first();   

      if (empty($usuario)) { return view('error',['error' => 'No existe este usuario'] ); exit(); }

      /* return view('carnet', ['formulario' => $usuario, 'horarioss' => $usuario]);

      exit();*/

      $view =  view('carnet', ['formulario' => $usuario])->render();

      $pdf = PDF::loadHTML($view);

      return $pdf->setPaper('a5', 'portrait')->stream(' Comprobante de Inscripción'.date('  F Y'));     

    }



}