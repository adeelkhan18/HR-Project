<?php

namespace App\Http\Controllers;

use App\Attendance;
use App\Holiday;
use App\LeaveCategory;
use App\AppliedCandidates;
use App\SetTime;
use App\Task;
use App\User;
use App\Job;
use App\WorkingDay;
use DB;
use PDF;

use Auth;
use Illuminate\Http\Request;

class TaskController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create(){
    	$employees = User::whereBetween('access_label', [2, 3])
			->where('deletion_status', 0)
			->select('id', 'name')
			->orderBy('id', 'DESC')
			->get()
			->toArray();

    	return view('administrator.task.creat', compact('employees'));

	}
	public function store(Request $request){
		$this->validate($request,[

    		'emp_id'=>'required',
    		'TaskDetail'=>'required'
    	
    	]);
	
	 $Task = new Task;
	 $Task->user_id=$request->emp_id;
	 //$Task->task_end_date=$request->date;
	 $Task->task_detail=$request->TaskDetail;
	 if($Task->save()){
		return back()->with('message','Successfully Added');
	 }else{
		return redirect('hrm/payroll/increment/search')->with('exception', 'Select Employee and Enter Amount !');
	 }

	 }	
	
	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */

	public function allTasks() {

		$taskdat = Task::join('users', 'users.id', '=', 'tasks.user_id')
		->select('tasks.id', '.users.name', 'tasks.created_at', 'tasks.task_detail', 'tasks.task_status')
		->get();
		foreach($taskdat as $data){
			$count = DB::table('tasks')
			  ->where('id', $data->id)
			  ->where('task_status', 'Completed')
              ->count();
			$Task[] = array(
                    'id'=> $data->id,
					'count'=> $count,
					'name'=> $data->name,
					'created_at'=> $data->created_at,
					'task_detail'=> $data->task_detail,
					'task_status'=> $data->task_status,
            );

		}
		//dd($Task);
		return view('administrator.task.taskList', compact('Task'));
	}
	public function allTasksForSingle() {

		$Task = Task::join('users', 'users.id', '=', 'tasks.user_id')
		->select('tasks.id', '.users.name', 'tasks.created_at', 'tasks.task_detail', 'tasks.task_status')
            ->where('user_id',Auth::user()->id)
		    ->get();
		return view('administrator.task.taskList', compact('Task'));
	}

	public function TasksCompleted($id) {

		$affected = DB::table('tasks')
              ->where('id', $id)
              ->update(['task_status' => "Completed"]);
			  return back()->with('message','Successfully Added');
	}

	public function TasksPending($id) {

		$affected = DB::table('tasks')
              ->where('id', $id)
              ->update(['task_status' => "Pending"]);
			  return back()->with('message','Successfully Added');
	}

    public function attDetails($id){

    	$attendance = Attendance::all()->where('user_id', $id);

    	return view('administrator.hrm.attendance.detailsAttendense', compact('attendance'));
    }



    public function attDetailsReportGo(){

    	$employees = User::whereBetween('access_label', [2, 3])
			->where('deletion_status', 0)
			->select('id', 'name')
			->orderBy('id', 'DESC')
			->get()
			->toArray();
         
    return view('administrator.hrm.attendance.detailsAttendenseReportGo', compact('employees'));
    }



    public function attDetailsReport(Request $request){

    	//return $request->emp_id;


	$empid= $request->emp_id;
	$daterange= $request->daterange;



	if($request->daterange=='' or $request->emp_id==0){
	
	return redirect('/hrm/attendance/details/report/go')->with('exception', 'Please select the Date Range');
	}else{

		$empid= $request->emp_id;
	$dates = explode(' - ', $request->daterange);

	 $date1 = $dates[0];
	 $date2 = $dates[1];
 
$startdate = date("Y-m-d", strtotime($date1));
$enddate = date("Y-m-d", strtotime($date2));


	$attendance = DB::table('attendances')->whereBetween('attendance_date', [$startdate, $enddate])->where('user_id', $empid)->get();

$attds=  DB::table('attendances')->where('attendance_status', 1)->where('user_id', $empid)->whereBetween('attendance_date', [$startdate, $enddate])->get();

$abs=  DB::table('attendances')->where('attendance_status', 0)->where('user_id', $empid)->whereBetween('attendance_date', [$startdate, $enddate])->get();


    	return view('administrator.hrm.attendance.detailsAttendenseReport', compact('attendance', 'startdate', 'enddate', 'empid', 'attds', 'abs'));
    }
}









public function attDetailsReportPdf(Request $request){

 
	$empid= $request->emp_id;

	$startdate= $request->date1;
    $enddate= $request->date2;

	$attendance = DB::table('attendances')->whereBetween('attendance_date', [$startdate, $enddate])->where('user_id', $empid)->get();

$attds=  DB::table('attendances')->where('attendance_status', 1)->where('user_id', $empid)->whereBetween('attendance_date', [$startdate, $enddate])->get();

$abs=  DB::table('attendances')->where('attendance_status', 0)->where('user_id', $empid)->whereBetween('attendance_date', [$startdate, $enddate])->get();


    	$pdf=PDF::loadView('administrator.hrm.attendance.detailsAttendenseReportPdf', compact('attendance', 'startdate', 'enddate', 'empid', 'attds', 'abs'));
	
		return $pdf->download('AttendenceStatement.pdf');

}












}
