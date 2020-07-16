<?php

namespace App\Http\Controllers;

use App\Attendance;
use App\Holiday;
use App\LeaveCategory;
use App\AppliedCandidates;
use App\SetTime;
use App\User;
use App\Job;
use App\WorkingDay;
use DB;
use Illuminate\Http\Response;
use PDF;
use Auth;	
use Illuminate\Http\Request;

class JobController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		return view('administrator.jobs.add_job');
	}
	public function listofAllJobs() {

		$jobs = Job::all();
		return view('administrator.jobs.manage_jobs', compact('jobs'));
	}
	public function listofAllAppliedCandidates() {

		$jobs = AppliedCandidates::join('jobs', 'jobs.id', '=', 'appliedcadidtes.jobid')
		->select('appliedcadidtes.id', 'appliedcadidtes.name', 'appliedcadidtes.created_at', 
		'appliedcadidtes.email', 'appliedcadidtes.phone', 'appliedcadidtes.phone', 'jobs.title', 'jobs.Joblevel', 'appliedcadidtes.application_status')
		->get();
		return view('administrator.jobs.candidates', compact('jobs'));
	}

	public function CanditeApproved($id) {

		$affected = DB::table('appliedcadidtes')
              ->where('id', $id)
			  ->update(['application_status' => "Approved"]);
		$user = AppliedCandidates::join('jobs', 'jobs.id', '=', 'appliedcadidtes.jobid')
				->select('appliedcadidtes.id', 'appliedcadidtes.name', 'appliedcadidtes.email',  'jobs.title')
				->where('appliedcadidtes.id',$id)
				->first();
			//   sending email

			     if (!empty($user->email)) {
					$to = $user->email;
            $body = "";
            $patientId = !empty($lastinsertid) ? $lastinsertid : "--";
            $fullName = !empty($fullname) ? $fullname : "--";
            $email = !empty($cuseremail) ? $cuseremail : "--";
            $phone = !empty($request->CellPhone) ? $request->CellPhone : "--";
            $address = !empty($request->Address) ? $request->Address : "--";
            //$to = "service@itunlock.com";
            $subject = "You are short Listed At Centangle Interactive as a $user->title";
            $message = "
                     <html>
                    <head>
                    <title>Message from Centangle Interactive</title>
                    </head>
                    <body>
                    <table cellpadding='0' cellspacing='0'>
                    <tr>
					<td>
<pre >
Centangle interactive
You have applied for post of ------
CONGRATULATIONS	
Your cv has been shortlisted 
Kindly contact on
centangle-hr@gmail.com for futher information
</pre>
					</td>
					</tr>
                    </table>
                    </body>
                    </html>
                    ";
            $eol = "\r\n";
            $headers = "From: Scheduler " ." <centangle-hr@gmail.com>" . $eol;
            $headers .= "Reply-To: " . strip_tags($user->email) . "\r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
            $body .= $message . $eol;
            $aa = mail($to, $subject, $body, $headers);


        }

			//ebd here sending email
			  return back()->with('message','Successfully Updated');
	}

	public function CanditeNotApproved($id) {

		$affected = DB::table('appliedcadidtes')
              ->where('id', $id)
              ->update(['application_status' => "Not Approved"]);
			  return back()->with('message','Successfully Updated');
	}

	public function DownloadFile($id){
        $data = DB::table('appliedcadidtes')
            ->where('id',$id)
            ->value('cv');
		$data= ltrim($data);
		return response()->download("public/CVs/{$data}");
	}	
	public function index() {
		return view('administrator.jobs.add_job');
	}
	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function set_attendance(Request $request) {


		$attendance_day = date("D", strtotime($request->date));

		$weekly_holidays = WorkingDay::where('working_status', 0)
			->get(['day'])
			->toArray();

		$monthly_holidays = Holiday::where('date', '=', $request->date)
			->first(['date']);

		if ($monthly_holidays['date'] == $request->date) {
			return redirect('/hrm/attendance/manage')->with('exception', 'You select a holiday !');
		}

		foreach ($weekly_holidays as $weekly_holiday) {
			if ($attendance_day == $weekly_holiday['day']) {
				return redirect('/hrm/attendance/manage')->with('exception', 'You select a holiday !');
			}
		}

		$employees = User::query()
			->leftjoin('designations as designations', 'users.designation_id', '=', 'designations.id')
			->orderBy('users.name', 'ASC')
			->where('users.access_label', '>=', 2)
			->where('users.access_label', '<=', 3)
			->get(['designations.designation', 'users.name', 'users.id'])
			->toArray();

		$leave_categories = LeaveCategory::get()
			->where('deletion_status', 0)
			->toArray();
		$date = $request->date;

		$attendances = Attendance::where('attendance_date', $date)
			->get()
			->toArray();

		if (empty($attendances)) {
			return view('administrator.hrm.attendance.set_attendance', compact('employees', 'leave_categories', 'date'));
		}
		return view('administrator.hrm.attendance.edit_attendance', compact('employees', 'leave_categories', 'date', 'attendances'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {
       
	   $job = new Job;
	   $job->title=$request->Title;
	   $job->Location=$request->Location;
	   $job->JobType=$request->JobType;
	   $job->Category=$request->Category;
	   $job->WorkShift=$request->WorkShift;
	   $job->NoOfOpenings=$request->NoOfOpenings;
	   $job->Joblevel=$request->Job_level;
	   $job->JobExperience=$request->JobExperience;
	   $job->JobDescription=$request->JobDescription;
	   $job->Responsibilities=$request->Responsibilities;
	   $job->SkillSet=$request->SkillSet;
	   $job->Salary_start=$request->Salary_start;
	   $job->Salary_end=$request->Salary_end;
	   $job->status=$request->status;
	   if( $job->save()){
		return back()->with('message','Successfully Added');
	   }else{
		return back()->with('hasError','Error in server side');
	   }
	  
		
	}

	

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request) {

  
		for ($i = 0; $i < count($request->user_id); $i++) {

			$attendance = Attendance::find($request->attendance_id[$i]);
			$attendance->user_id = $request->user_id[$i];
			$attendance->attendance_date = $request->attendance_date[$i];
			$attendance->attendance_status = $request->attendance_status[$i];
			$attendance->leave_category_id = $request->leave_category_id[$i];
			$attendance->check_in = '09:12:00';
			$attendance->check_out = '17:12:00';
			$affected_row = $attendance->save();


		}
		return redirect('/hrm/attendance/manage')->with('message', 'Update successfully.');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function report() {
		return view('administrator.hrm.attendance.report');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function get_report(Request $request) {
		$date = $request->date;
		$month = date("m", strtotime($date));
		$year = date("Y", strtotime($date));

		$number_of_days = cal_days_in_month(CAL_GREGORIAN, $month, $year);

		$attendances = Attendance::query()
			->leftjoin('leave_categories as leave', 'attendances.leave_category_id', '=', 'leave.id')
			->whereYear('attendances.attendance_date', '=', $year)
			->whereMonth('attendances.attendance_date', '=', $month)
			->get(['attendances.*', 'leave.leave_category'])
			->toArray();

		$employees = User::query()
			->leftjoin('designations as designations', 'users.designation_id', '=', 'designations.id')
			->orderBy('users.name', 'ASC')
			->where('users.access_label', '>=', 2)
			->where('users.access_label', '<=', 3)
			->get(['designations.designation', 'users.name', 'users.id'])
			->toArray();

		$weekly_holidays = WorkingDay::where('working_status', 0)
			->get()
			->toArray();

		$monthly_holidays = Holiday::whereYear('date', '=', $year)
			->whereMonth('date', '=', $month)
			->get(['date', 'holiday_name'])
			->toArray();

		return view('administrator.hrm.attendance.get_report', compact('date', 'attendances', 'employees', 'number_of_days', 'weekly_holidays', 'monthly_holidays'));
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */

     public function timeSet(Request $request) {

     	//return $request;

     	$id=$request->id;

     	$setimes= \App\SetTime::all();

     	if($setimes->count()>0){
     	 $setimes= SetTime::find($id);
         $setimes->in_time = $request->in_time;
         $setimes->out_time = $request->out_time;
         $setimes->save();

         return redirect('hrm/attendance/manage')->with('message', 'Set Update Successful!');

     	}else{
     	
     	 $setimes= new SetTime;
         $setimes->created_by = Auth::user()->id;
         $setimes->in_time = $request->in_time;
         $setimes->out_time = $request->out_time;
         $setimes->save();

         return redirect('hrm/attendance/manage')->with('message', 'Set Successful!');
         }

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
