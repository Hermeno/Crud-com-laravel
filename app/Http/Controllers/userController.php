<?php

namespace App\Http\Controllers;
use App\Models\userModel;
use Illuminate\Http\Request;


class userController extends Controller
{
    public function index() {
     $all_info = userModel::all();
    return view('index', ['all_informa'=>$all_info]);
    }

    public function create () {
        return view('insert');
    }
    public function store(Request $request) {
        userModel::create($request->all());
        return redirect()->route('app-index');
    }
    public function edit($id) {
        $recc = userModel::where('id', $id)->first();
        return view('insert', ['rec'=>$recc]);
    
    }
    public function update(request $request, $id) {
        $data= [
            'name'=>$request->name,
            'age'=>$request->age,
            'surname'=>$request->surname,
            'color'=>$request->color,
        ];
        userModel::where('id', $id)->update($data);
        return redirect()->route('app-index');

    }

    public function delete($id) {
       userModel::where('id', $id)->delete();
       return redirect()->route('app-index'); 
    }
}
