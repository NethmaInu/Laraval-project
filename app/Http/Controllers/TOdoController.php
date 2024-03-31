<?php

namespace App\Http\Controllers;

use App\Models\todo;
use App\Models\Student;
use App\Models\Student as ModelsStudent;
use Illuminate\Http\Request;
use Inertia\Inertia;

class TOdoController extends ParentController
{
    protected $task;
    public function __construct(){

        $this->task=new Student();

    }
    public function index(){
        $responce['task']=$this->task->all();

        return Inertia::render('Students/index',$responce);     
    }
    public function store(Request $request){

        $tasks=TodoFacade::all();
        return response()->json($tasks);
    }
    public function delete($id){
        $task=$this->task->find($id);
        $task->delete();
        return redirect()->back();
    }
    public function update($id){
        $task=$this->task->find($id);
        $task->states="Active";
        $task->update();
        return redirect()->back();
    }


}
