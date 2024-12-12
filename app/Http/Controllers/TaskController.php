<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = DB::table('tasks')->get();
        return view('tasks' , compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $task_name = $_POST['name'];
        DB::table('tasks')->insert(['name' => $task_name]);
        return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $task = DB::table('tasks')->where('id' , $id)->first();
        $tasks = DB::table('tasks')->get();
        return view('tasks' , compact('task', 'tasks'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update()
    {
        $id = $_POST['id'];
        DB::table('tasks')->where('id' , $id)->update(['name' => $_POST['name']]);
        return redirect('tasks');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('tasks')->where('id' , $id)->delete();
        return redirect()->back();
    }
}
