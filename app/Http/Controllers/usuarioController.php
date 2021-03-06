<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;
use App\User;
use Illuminate\Support\Facades\Hash;
use Log;

class usuarioController extends Controller
{
    public function LogIn(Request $request)
    {
        $request->validate([
            'email'=>'required|email',
            'password'=>'required',
        ]);
        $user=User::where('email',$request->email)->first();

        if(!$user || !Hash::check($request->password, $user->password)){
            throw ValidationException::withMessages([
                'email|password'=>['Datos Incorrectos']
            ]);
        }
        if($user->tipo == '1')
        {
            $token=$user->createToken($request->email, ['admin:admin'])->plainTextToken;
            return response()->json(["token"=>$token],201);
        }
        else
        {
            $token=$user->createToken($request->email, ['user:user'])->plainTextToken;
            return view('welcome');
            // return view('welcome', compact('name'));
        }
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function LogOut(Request $request)
    {
        return response()->json(["destroyed" => $request->user()->tokens()->delete()],200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function Registro(Request $request)
    {
        $request->validate([
            'email'=>'required|email',
            'password'=>'required',
            'name'=>'required',
        ]);
        $user = new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=Hash::make($request->password);
        $user->tipo='0';

        // if($user->save()){
        //     return response()->json($user);
        // }
        if($user->save()){
            return view('Login');
        }
        return abort(402, "Error al Insertar");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comentarioss  $comentarioss
     * @return \Illuminate\Http\Response
     */



    public function index(Request $request)
    {
        
        if($request->user()->tokenCan('user:user'))
        {
            return response()->json(['Perfil'=>$request->user()],200);
        }
        if($request->user()->tokenCan('admin:admin'))
        {
            return response()->json(['Usuarios'=>User::all()],200);
        }     
        $user = new User();
        $user=$request->user();
        
        return abort(200,"Tus permisos no son validos");
    }


    public function actualizar(Request $request)
    {
        $user=User::find ($request->id);  
        $user->tipo=$request->tipo;  
        if($user->save()){
        return response()->json(["Permiso Actualizado a"=>$user]);
        }
        return response()->json("Algo salio mal",400);  
    }
}
