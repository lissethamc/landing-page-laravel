<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacto;
//use Illuminate\Support\Facades\Request;

class PaginaController extends Controller
{
    public function contacto(Request $request, $codigo = null){
        dd($request);
        if($codigo == 123){
            $nombre = "Samuel";
            $correo = "example@example.com";//toma en "name del http"
            $mensaje = "asdf";
        }
        else{

        }
        return view('contacto',compact('nombre','correo'));
    }
    public function guarda(Request $request){

        $request->validate([
            'nombre'=> ['required','min:5'],
            'correo'=> 'required|email',
            'mensaje'=>'required|min:5',
        ]);
    

    // dd( $request -> all(), 
    //     $request -> only('nombre','correo'),
    //     $request -> except('_token'),
    //     $request -> nombre,
    //     $request -> input('nombre'));

    // DB::table('contactos')->insert([
    //     'nombre' => $request->nombre,
    //     'correo' => $request->correo,
    //     'mensaje'=> $request->mensaje,
    // ]);


    //DB::table('contactos')->insert([ $request -> except('_token')]);
    // $contacto = new Contacto();
    // $contacto->nombre = $request->nombre;
    // $contacto->mensaje = $request->mensaje;
    // $contacto->correo = $request->correo; //izquierda BD, derecha inputs del formulario 
    // $contacto->save();


        Contacto::create($request->all());

        Contacto::create([
            'nombre' => $request->nombre,
            'correo' => $request->correo,
            'mensaje'=> $request->mensaje,
        ]);

        return redirect('/contacto');
    }
}
