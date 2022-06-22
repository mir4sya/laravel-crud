<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Tasks;
class TasksController extends Controller
{
    public function index()
    {
        $tasks = Tasks::all();
        return view ('tasks.index')->with('tasks', $tasks);
    }
    
    public function create()
    {
        return view('tasks.create');
    }
  
    public function store(Request $request)
    {
        $input = $request->all();
        Tasks::create($input);
        return redirect('tasks')->with('flash_message', 'Tasks Addedd!');  
    }
    
    public function show($id)
    {
        $tasks = Tasks::find($id);
        return view('tasks.show')->with('tasks', $tasks);
    }
    
    public function edit($id)
    {
        $tasks = Tasks::find($id);
        return view('tasks.edit')->with('tasks', $tasks);
    }
  
    public function update(Request $request, $id)
    {
        $tasks = Tasks::find($id);
        $input = $request->all();
        $tasks->update($input);
        return redirect('tasks')->with('flash_message', 'Tasks Updated!');  
    }
  
    public function destroy($id)
    {
        Tasks::destroy($id);
        return redirect('tasks')->with('flash_message', 'Tasks deleted!');  
    }
}