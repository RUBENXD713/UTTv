<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;
use App\Video;
use App\User;
use Illuminate\Support\Facades\Hash;
use Log;

class videoController extends Controller
{
    public function nuevo(Request $request)
    {   $request->validate([
            'nombre'=>'required',
            'descripcion'=>'required',
            'url'=>'required',
            'categoria'=>'required',
            'tipo'=>'required',
        ]);

        $video = new Video();
        $video->nombre=$request->nombre; 
        $video->descripcion=$request->descripcion;
        $video->url=$request->url;
        $video->categoria=$request->categoria;   
        $video->tipo=$request->tipo;
        $video->likes='0';
        $video->dislikes='0';
        $video->estatus='1';
    
        if($video->save()){
            return response()->json($video);
        }
        return abort(402, "Error al Insertar");
    }
    
    public function getVideos()
    {
        $videos=Video::all();
        return response()
        ->json($videos);
    }

    public function video(Request $request){
        $video=Video::find($request->id);

        return response()->json($video);
    }

    public function getVideosCategoria(Request $request)
    {
        $videos=DB::table('videos')
        ->where('videos.categoria','=',$request->categoria)
        ->select('*')
        ->get();
        return ($videos);
    }

    public function likeVideo(Request $request)
    {
        $video=Video::find ($request->id);  
        $video->likes= $video->likes + 1;
        if($video->save()){  
            return response()->json(["Like"=>$video]);   
        }
        return response()->json(null,400); 
    }

    public function disLikeVideo(Request $request)
    {
        $video=Video::find ($request->id);  
        $video->dislikes= $video->dislikes + 1;
        if($video->save())
        { 
            return response()->json(["Like"=>$video]);   
        }
        return response()->json(null,400); 
    }

    public function buscador(Request $request)
    {
        $videos = DB::table('videos')->where('videos.nombre','LIKE','%'.$request->nombre.'%')
        ->get(); 
        return response()->json($videos);
    }
    
}
