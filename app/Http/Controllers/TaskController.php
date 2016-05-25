<?php

namespace App\Http\Controllers;

use App\Task;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\TaskRepository;

class TaskController extends Controller
{
    /**
     * The task repository instance.
     *
     * @var TaskRepository
     */
    protected $tasks;

    /**
     * Create a new controller instance.
     *
     * @param  TaskRepository  $tasks
     * @return void
     */
    public function __construct(TaskRepository $tasks)
    {
        $this->middleware('auth');

        $this->tasks = $tasks;
    }

    /**
     * Display a list of all of the user's task.
     *
     * @param  Request  $request
     * @return Response
     */
    public function index(Request $request)
    {
        return view('tasks.index', [
            'tasks' => $this->tasks->forUser($request->user()),
        ]);
    }

    public function table(Request $request)
    {  
        $tasks = Task::all();
        return view('tasks.table', [
            'tasks' => $tasks,
        ]);
    }


    /**
     * Create a new task.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'company' => 'required|max:255',
            'doubtsector' => 'required|max:255',
            'doubt' => 'required',

        ]);

        $request->user()->tasks()->create([
            'name' => $request->name,
            'company' => $request->company,
            'doubtsector' => $request->doubtsector,
			'doubt' => $request->doubt,
            'operator' => $request->user()->name,
        ]);

        return redirect('/tasks');
    }

    /**
     * Destroy the given task.
     *
     * @param  Request  $request
     * @param  Task  $task
     * @return Response
     */
    public function destroy(Request $request, Task $task)
    {
        $this->authorize('destroy', $task);

        $task->delete();

        return redirect('/tasks');
    }
	    
	public function getResults(Request $request)
    {
        $query = $request->input('q');

        if (!$query) {
            return redirect()->route('tabletasks');
        }

        $users = User::searchForUser($query);

        return view('name::search.results', compact('users'));
    }
}
