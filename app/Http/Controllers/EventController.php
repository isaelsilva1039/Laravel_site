<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Facade\FlareClient\View;

class EventController extends Controller
{
    //action do metodo principal. retornar nossa view homi
    public function index(){
        $search = request('search');
        if($search){
            $events = Event::where([
                ['title','like','%'.$search.'%']
            ])->get();
        }else{

            $events = Event::all();
        }
        return view('welcome',['events'=>$events,'search'=>$search]);
    }

    // metodo pra retorna a view creat
    public function creat(){
        return view('envents.creat');
    }

    // Request capitura o que vem via POST
    // metodo para salvar no banco de dados
    public function store(Request $request){
        $events = new Event();

        $events->title       = $request->title;
        $events->cyti        = $request->cyti;
        $events->private     = $request->private;
        $events->descript    = $request->descript; //001
        $events->items       = $request->items;
        $events->date       = $request->date;

          if($request->hasFile('image') && $request->file('image')->isValid()) {
            $requestImagem = $request->image; //pegando do furmulario via request
            $extension = $requestImagem->extension(); //pegando a extensao da imagems ex: png, jpg , png
            $imageNome = md5($requestImagem->getClientOriginalName() . strtotime("now")) . "." .$extension; //criando nome unico pra imagem
            $requestImagem->move(public_path('img/envents'),$imageNome);//movendo arquivo pra pasta
            $events->image = $imageNome;  // passando nome da imagem pro atributo pra salvar no banco refer :001

        }else{
            redirect('/')->with("msgErro", "Tipo da imagem não suportada");
        }
            $events->save();
            return redirect('/')->with('msg', 'Evento criado com sucesso!');
        }

    // metodo pra tazer so um registro (semelhante a fetch do php)
    public function show($id){
        $event = Event::findOrFail($id);
        return view('envents.show',['event'=>$event]);
    }

}

