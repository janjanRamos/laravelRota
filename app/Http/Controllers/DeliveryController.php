<?php

namespace App\Http\Controllers;

use DB;
use Datetime;
use App\Delivery;
use App\Deliverybackup;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\DeliveryRepository;
use App\Repositories\DeliverybackupRepository;

class DeliveryController extends Controller
{
    /**
     * The task repository instance.
     *
     * @var TaskRepository
     */
    protected $deliveries;
    protected $deliveriesbackup;

    /**
     * Create a new controller instance.
     *
     * @param  TaskRepository  $tasks
     * @return void
     */
    public function __construct(DeliveryRepository $deliveries, DeliverybackupRepository $deliveriesbackup)
    {

        $this->deliveries = $deliveries;
        $this->deliveriesbackup = $deliveriesbackup;
    }
	
    /**
     * Display a list of all of the user's task.
     *
     * @param  Request  $request
     * @return Response
     */
    public function index(Request $request)
    {
        	$deliveries = Delivery::orderByRaw(DB::raw('SUBSTR(deadline,3,3) ASC, LEFT(deadline, 2) ASC'))->paginate(30);

        return view('deliveries.index', [
            'deliveries' => $deliveries,
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
            'company' => 'required|max:255',
            'name' => 'required|max	:255',
            'deadline' => 'required|max:255',
            'activity' => 'required|max:255',
            'description' => 'required|max:500',
            'priority' => 'required|max:255',
        ]);
		
        $delivery = new Delivery;
        $delivery->name = $request->name;
        $delivery->company = $request->company;
        $delivery->institution = $request->institution;
        $delivery->activity = $request->activity;
        $delivery->description = $request->description;
        $delivery->priority = $request->priority;
        $date = DateTime::createFromFormat('Y-m-d', $request->deadline);
        $delivery->deadline = $date->format('d-m-Y');
        $delivery->save();

        return redirect('/deliveries');
    }

    /**
     * Destroy the given task.
     *
     * @param  Request  $request
     * @param  Task  $task
     * @return Response
     */
    public function destroy(Request $request, Delivery $delivery)
    {

        //$this->authorize('destroy', $delivery);
		$deliverybackup = new Deliverybackup;
        $deliverybackup->name = $delivery->name;
        $deliverybackup->company = $delivery->company;
        $deliverybackup->institution = $delivery->institution;
        $deliverybackup->activity = $delivery->activity;
        $deliverybackup->description = $delivery->description;
        $deliverybackup->priority = $delivery->priority;
        $deliverybackup->deadline = $delivery->deadline;
        $deliverybackup->status = $delivery->status;
        $deliverybackup->statusdescription = $delivery->statusdescription;
        $deliverybackup->save();
        
        $delivery->delete();

        return redirect('/deliveries');
    }
        public function viewedit(Request $request, Delivery $delivery)
    {
        $date = DateTime::createFromFormat('d-m-Y', $delivery->deadline);  
        return view('deliveries.edit',array(
            'company' => $delivery->company,
            'institution' => $delivery->institution,            
            'name' => $delivery->name,
            'activity' => $delivery->activity,
            'description' => $delivery->description,
            'priority' => $delivery->priority,
            'deadline' => $date->format('Y-m-d'),
            'status' => $delivery->status,
            'statusdescription' => $delivery->statusdescription,
            'id' => $delivery->id,
            ));
        //return $delivery->name;
    }
        public function edit(Request $request, Delivery $delivery)
    {
        $delivery = Delivery::find($request->id);
        $delivery->name = $request->name;
        $delivery->company = $request->company;
        $delivery->institution = $request->institution;
        $delivery->activity = $request->activity;
        $delivery->description = $request->description;
        $delivery->priority = $request->priority;
        $date = DateTime::createFromFormat('Y-m-d', $request->deadline);
        $delivery->deadline = $date->format('d-m-Y');
        $delivery->status = $request->status;
        $delivery->statusdescription = $request->statusdescription;
        $delivery->save();
        return redirect('/deliveries');
    }
}
