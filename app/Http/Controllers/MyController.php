<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\MyModel;
use Request;

class MyController extends Controller
{
    public function index(){
        $data1=MyModel::all();
        return view('myfile.display',compact('data1'));
    }


    public function create(){
    	//
    	return view('myfile.myform');
    }


    public function store(Request $request){
    	//insert
    	MyModel::create(Request::all());
    	return redirect('index');

    }


    public function show($id){
    	//display
    	$data1=MyModel::find($id);
    	return view('myfile.show',compact('data1'));
    }


     public function edit($id){
        //edit
        $data1=MyModel::find($id);
        return view('myfile.update',compact('data1'));
    }


    public function update(Request $request, $id){
        //update
        $data=MyModel::find($id);
        $data->update(Request::all());
        return redirect('index');
    }

    
    public function delete($id){
        //delete data
        $data=MyModel::find($id);
        $data->delete();
        return redirect('index');

    }

}
