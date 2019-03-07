<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\bikes;

class bikescontroller extends Controller
{
    public function index(){
        $bikes = bikes::all();        
        return view('bikes.index', ['bikes' => $bikes]);
    }
    public function create(){                     
        return view('bikes.create');
    }
    public function show($id){     
        $bikes = bikes::findorfail($id);  
        return view('bikes.show',['bikes' => $bikes]);
    }
    public function store(){
        request()->validate([
            'brand' => ['required','min:2','max:255'],
            'model' => ['required','min:2','max:255'],
            'price' => ['required','min:2','max:255']
        ]);
        bikes::create([
            'brand' => request('brand'),'model' => request('model'),'price' => request('price')
        ]);   
        return redirect('/bikes');
    }
    public function edit($id){     
        $bikes = bikes::findorfail($id);  
        return view('bikes.edit',['bikes' => $bikes]);
    }
    public function update($id){     
        $bikes = bikes::findorfail($id);
        $bikes = bikes::create([
            'brand' => request('brand'),'model' => request('model'),'price' => request('price')
        ]);    
        return redirect('/bikes');
    }
    public function delete($id){     
        bikes::findorfail($id)->delete();
        return redirect('/bikes');          
    }    
}
