<?php

namespace App\Http\Controllers;

use App\Models\Membre;
use Illuminate\Http\Request;
use PDO;

class MemberController extends Controller
{
    public function index(){
        $membres = Membre::all(); 

        return view('index', compact('membres')); 
    }

    public function create(){
        return view('pages.addmembre'); 
    }

    public function store(Request $request){
        $member = new Membre(); 

        $member->nom  = $request->name; 
        $member->age   = $request->age; 
        $member->genre = $request->genre; 
        $member->save(); 

        return redirect()->route('home');
    }

    public function destroy(Membre $id){
        $id->delete(); 
        return redirect()->route('home'); 
    }

    public function show($genre=null){ 
        $membres = Membre::all(); 

        $memfemme = $membres->where('genre', 'femme'); 
        $memhomme = $membres->where('genre', 'homme'); 
        $memhom15 = $memhomme->take(15); 

        return view('pages.showmember', compact('memfemme', 'memhomme', 'memhom15', 'genre')); 
    }
}
