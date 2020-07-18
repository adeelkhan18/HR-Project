<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

header("Cache-Control: no-cache, must-revalidate");
header('Access-Control-Allow-Origin:  *');
header('Access-Control-Allow-Methods:  POST, GET, OPTIONS, PUT, DELETE');
header('Access-Control-Allow-Headers:  Content-Type, X-Auth-Token, Origin, Authorization');

//Route::get('/', 'Auth\LoginController@showLoginForm')->name('login');
Route::get('/', 'FrontEndController@Index')->name('index');

Route::get('career/', 'FrontEndController@careers')->name('jobs');

Route::get('jobdetail/{id}', 'FrontEndController@jobDetail')->name('jobdetail');
Route::get('All/jobs', 'FrontEndController@allJobs')->name('alljobs');
Route::get('apply/job/{id}', 'FrontEndController@applyJobs')->name('applyjob');
Route::post('save/job/', 'FrontEndController@SaveJobs')->name('savejobs');
Auth::routes();

Route::group(['prefix' => 'setting', 'middleware' => 'auth', 'as' => 'setting.'], function () {
	Route::resource('role', 'RoleController');
});

Route::group(['middleware' => 'auth'], function () {

	Route::get('/dashboard', 'HomeController@index')->name('dashboard');

	

	// Leave Category Section //
	Route::get('/setting/leave_categories', 'LeaveCatController@index')->middleware('can:admin');
	Route::get('/setting/leave_categories/create', 'LeaveCatController@create')->middleware('can:admin');
	Route::post('/setting/leave_categories/store', 'LeaveCatController@store')->middleware('can:admin');
	Route::get('/setting/leave_categories/published/{id}', 'LeaveCatController@published')->middleware('can:admin');
	Route::get('/setting/leave_categories/unpublished/{id}', 'LeaveCatController@unpublished')->middleware('can:admin');
	Route::get('/setting/leave_categories/details/{id}', 'LeaveCatController@show')->middleware('can:admin');
	Route::get('/setting/leave_categories/edit/{id}', 'LeaveCatController@edit')->middleware('can:admin');
	Route::post('/setting/leave_categories/update/{id}', 'LeaveCatController@update')->middleware('can:admin');
	Route::get('/setting/leave_categories/delete/{id}', 'LeaveCatController@destroy')->middleware('can:admin');
	
	//Application Listes//
	Route::get('/hrm/application_lists', 'LeaveAppController@apllicationLists')->middleware('can:admin');
	Route::get('/hrm/leave_application/approved/{id}', 'LeaveAppController@approved')->middleware('can:admin');
	Route::get('/hrm/leave_application/not_approved/{id}', 'LeaveAppController@not_approved')->middleware('can:admin');
	Route::get('/hrm/application_lists/{id}', 'LeaveAppController@show')->middleware('can:admin');

	//Leave Application//
	Route::get('/hrm/leave_application', 'LeaveAppController@index');
	Route::get('/hrm/leave_application/create', 'LeaveAppController@create');
	Route::post('/hrm/leave_application/store', 'LeaveAppController@store');
	Route::get('/hrm/leave_application/{id}', 'LeaveAppController@show')->middleware('can:admin');
	Route::get('/hrm/leave-reports', 'LeaveAppController@reports')->middleware('can:admin');
	Route::get('/hrm/leave-reports/pdf-reports', 'LeaveAppController@pdf_reports')->middleware('can:admin');
	
	

	// Designations Section //
	Route::get('/setting/designations', 'EmpDesignationController@index')->middleware('can:admin');
	Route::get('/setting/designations/create', 'EmpDesignationController@create')->middleware('can:admin');
	Route::post('/setting/designations/store', 'EmpDesignationController@store')->middleware('can:admin');
	Route::get('/setting/designations/published/{id}', 'EmpDesignationController@published')->middleware('can:admin');
	Route::get('/setting/designations/unpublished/{id}', 'EmpDesignationController@unpublished')->middleware('can:admin');
	Route::get('/setting/designations/details/{id}', 'EmpDesignationController@show')->middleware('can:admin');
	Route::get('/setting/designations/edit/{id}', 'EmpDesignationController@edit')->middleware('can:admin');
	Route::post('/setting/designations/update/{id}', 'EmpDesignationController@update')->middleware('can:admin');
	Route::get('/setting/designations/delete/{id}', 'EmpDesignationController@destroy')->middleware('can:admin');

	// Customer Section //
	Route::get('/people/clients', 'CustomerController@index')->middleware('can:admin');
	Route::get('/people/clients/print', 'CustomerController@print')->middleware('can:admin');
	Route::get('/people/clients/clients-pdf', 'CustomerController@clients_pdf')->middleware('can:admin');
	Route::get('/people/clients/create', 'CustomerController@create')->middleware('can:admin');
	Route::post('/people/clients/store', 'CustomerController@store')->middleware('can:admin');
	Route::get('/people/clients/active/{id}', 'CustomerController@active')->middleware('can:admin');
	Route::get('/people/clients/deactive/{id}', 'CustomerController@deactive')->middleware('can:admin');
	Route::get('/people/clients/details/{id}', 'CustomerController@show')->middleware('can:admin');
	Route::get('/people/clients/download-pdf/{id}', 'CustomerController@pdf')->middleware('can:admin');
	Route::get('/people/clients/edit/{id}', 'CustomerController@edit')->middleware('can:admin');
	Route::post('/people/clients/update/{id}', 'CustomerController@update')->middleware('can:admin');
	Route::get('/people/clients/delete/{id}', 'CustomerController@destroy')->middleware('can:admin');
	
	// Customer Types Section //
	Route::get('/setting/client-types', 'CustomerTypeController@index')->middleware('can:admin');
	Route::get('/setting/client-types/create', 'CustomerTypeController@create')->middleware('can:admin');
	Route::post('/setting/client-types/store', 'CustomerTypeController@store')->middleware('can:admin');
	Route::get('/setting/client-types/published/{id}', 'CustomerTypeController@published')->middleware('can:admin');
	Route::get('/setting/client-types/unpublished/{id}', 'CustomerTypeController@unpublished')->middleware('can:admin');
	Route::get('/setting/client-types/details/{id}', 'CustomerTypeController@show')->middleware('can:admin');
	Route::get('/setting/client-types/edit/{id}', 'CustomerTypeController@edit')->middleware('can:admin');
	Route::post('/setting/client-types/update/{id}', 'CustomerTypeController@update')->middleware('can:admin');
	Route::get('/setting/client-types/delete/{id}', 'CustomerTypeController@destroy')->middleware('can:admin');

	// Departments Section //
	Route::get('/setting/departments', 'EmplDepartmentController@index')->middleware('can:admin');
	Route::get('/setting/departments/create', 'EmplDepartmentController@create')->middleware('can:admin');
	Route::post('/setting/departments/store', 'EmplDepartmentController@store')->middleware('can:admin');
	Route::get('/setting/departments/published/{id}', 'EmplDepartmentController@published')->middleware('can:admin');
	Route::get('/setting/departments/unpublished/{id}', 'EmplDepartmentController@unpublished')->middleware('can:admin');
	Route::get('/setting/departments/details/{id}', 'EmplDepartmentController@show')->middleware('can:admin');
	Route::get('/setting/departments/edit/{id}', 'EmplDepartmentController@edit')->middleware('can:admin');
	Route::post('/setting/departments/update/{id}', 'EmplDepartmentController@update')->middleware('can:admin');
	Route::get('/setting/departments/delete/{id}', 'EmplDepartmentController@destroy')->middleware('can:admin');

	// Employee Reference Section //
	Route::get('/people/references', 'EmpReferenceController@index')->middleware('can:admin');
	Route::get('/people/references/print', 'EmpReferenceController@print')->middleware('can:admin');
	Route::get('/people/references/references-pdf', 'EmpReferenceController@references_pdf')->middleware('can:admin');
	Route::get('/people/references/create', 'EmpReferenceController@create')->middleware('can:admin');
	Route::post('/people/references/store', 'EmpReferenceController@store')->middleware('can:admin');
	Route::get('/people/references/active/{id}', 'EmpReferenceController@active')->middleware('can:admin');
	Route::get('/people/references/deactive/{id}', 'EmpReferenceController@deactive')->middleware('can:admin');
	Route::get('/people/references/details/{id}', 'EmpReferenceController@show')->middleware('can:admin');
	Route::get('/people/references/download-pdf/{id}', 'EmpReferenceController@pdf')->middleware('can:admin');
	Route::get('/people/references/edit/{id}', 'EmpReferenceController@edit')->middleware('can:admin');
	Route::post('/people/references/update/{id}', 'EmpReferenceController@update')->middleware('can:admin');
	Route::get('/people/references/delete/{id}', 'EmpReferenceController@destroy')->middleware('can:admin');

	// Employee Section //
	Route::get('/people/employees', 'EmplController@index')->middleware('can:admin');
	Route::get('/people/employees/print', 'EmplController@print')->middleware('can:admin');
	Route::get('/people/employees/create', 'EmplController@create')->middleware('can:admin');
	Route::post('/people/employees/store', 'EmplController@store')->middleware('can:admin');
	Route::get('/people/employees/active/{id}', 'EmplController@active')->middleware('can:admin');
	Route::get('/people/employees/deactive/{id}', 'EmplController@deactive')->middleware('can:admin');
	Route::get('/people/employees/details/{id}', 'EmplController@show')->middleware('can:admin');
	Route::get('/people/employees/download-pdf/{id}', 'EmplController@pdf')->middleware('can:admin');
	Route::get('/people/employees/edit/{id}', 'EmplController@edit')->middleware('can:admin');
	Route::post('/people/employees/update/{id}', 'EmplController@update')->middleware('can:admin')->middleware('can:admin');
	Route::get('/people/employees/delete/{id}', 'EmplController@destroy')->middleware('can:admin');


	// Folder Section //
	//Route::get('/folders', 'FolderController@index');
	//Route::get('/folders/create', 'FolderController@create');
	//Route::post('/folders/store', 'FolderController@store');

	// File Section //
	Route::get('/files/{id}', 'FileController@index');
	Route::get('/files/create/{id}', 'FileController@create');
	Route::post('/files/store/{id}', 'FileController@store');
	Route::get('/files/download/{file}', 'FileController@download');

	// Profile Section
	Route::get('/profile/user-profile', 'ProfileController@index');
	Route::post('/profile/update-profile', 'ProfileController@update');
	Route::get('/profile/change-password', 'ProfileController@change_password');
	Route::post('/profile/update-password', 'ProfileController@update_password');

	
	

	//////////////////////////// HRM ////////////////////////////

	//Attendance Section
	Route::get('/hrm/attendance/manage', 'AttendanceController@index')->middleware('can:admin');
	Route::post('/hrm/attendance/set', 'AttendanceController@set_attendance')->middleware('can:admin');
	Route::post('/hrm/attendance/store', 'AttendanceController@store')->middleware('can:admin');
	Route::post('/hrm/attendance/update', 'AttendanceController@update')->middleware('can:admin');
	Route::get('/hrm/attendance/report', 'AttendanceController@report')->middleware('can:admin');
	Route::post('/hrm/attendance/get-report', 'AttendanceController@get_report')->middleware('can:admin');
	Route::post('/hrm/attendance/time/set', 'AttendanceController@timeSet')->middleware('can:admin');
	Route::get('/hrm/attendance/details/{id}', 'AttendanceController@attDetails')->middleware('can:admin');
	Route::get('/hrm/attendance/details/report/go', 'AttendanceController@attDetailsReportGo')->middleware('can:admin');
	Route::get('/hrm/attendance/details/report/all', 'AttendanceController@attDetailsReport')->middleware('can:admin');
	
	Route::get('/hrm/attendance/details/report/pdf', 'AttendanceController@attDetailsReportPdf')->middleware('can:admin');


	// Payroll Section
	Route::get('/hrm/payroll', 'PayrollController@index')->middleware('can:admin');
	Route::post('/hrm/payroll/go', 'PayrollController@go')->middleware('can:admin');
	Route::get('/hrm/payroll/manage-salary/{id}', 'PayrollController@create')->middleware('can:admin');
	Route::post('/hrm/payroll/store', 'PayrollController@store')->middleware('can:admin');
	Route::get('/hrm/payroll/salary-list', 'PayrollController@list')->middleware('can:admin');
	Route::get('/hrm/payroll/details/{id}', 'PayrollController@show')->middleware('can:admin');
	Route::post('/hrm/payroll/update/{id}', 'PayrollController@update')->middleware('can:admin');

	//Increment//
	Route::get('/hrm/payroll/increment/search', 'IncrementController@newIncrementSearch')->middleware('can:admin');
	Route::post('/hrm/payroll/increment/store', 'IncrementController@newIncrementStore')->middleware('can:admin');
	Route::get('/hrm/payroll/increment/list', 'IncrementController@incrementList')->middleware('can:admin');

	//Salary Statement//
	Route::get('/hrm/salary/statement/search', 'IncrementController@salaryStatementSearch')->middleware('can:admin');
	Route::get('/hrm/salary/statement/view', 'IncrementController@salaryStatementView')->middleware('can:admin');
	Route::get('/hrm/salary/statement/preview', 'IncrementController@salaryStatementPreview')->middleware('can:admin');
	Route::get('/hrm/salary/statement/pdf', 'IncrementController@salaryStatementPdf')->middleware('can:admin');

	// Bonus Section //
	Route::get('/hrm/bonuses', 'BonusController@index')->middleware('can:admin');
	Route::get('/hrm/bonuses/create', 'BonusController@create')->middleware('can:admin');
	Route::post('/hrm/bonuses/store', 'BonusController@store')->middleware('can:admin');
	Route::get('/hrm/bonuses/details/{id}', 'BonusController@show')->middleware('can:admin');
	Route::get('/hrm/bonuses/edit/{id}', 'BonusController@edit')->middleware('can:admin');
	Route::post('/hrm/bonuses/update/{id}', 'BonusController@update')->middleware('can:admin');
	Route::get('/hrm/bonuses/delete/{id}', 'BonusController@destroy')->middleware('can:admin');

	// Deduction Section //
	Route::get('/hrm/deductions', 'DeductionController@index')->middleware('can:admin');
	Route::get('/hrm/deductions/create', 'DeductionController@create')->middleware('can:admin');
	Route::post('/hrm/deductions/store', 'DeductionController@store')->middleware('can:admin');
	Route::get('/hrm/deductions/details/{id}', 'DeductionController@show')->middleware('can:admin');
	Route::get('/hrm/deductions/edit/{id}', 'DeductionController@edit')->middleware('can:admin');
	Route::post('/hrm/deductions/update/{id}', 'DeductionController@update')->middleware('can:admin');
	Route::get('/hrm/deductions/delete/{id}', 'DeductionController@destroy')->middleware('can:admin');

	// Loan Section //
	Route::get('/hrm/loans', 'LoanController@index')->middleware('can:admin');
	Route::get('/hrm/loans/create', 'LoanController@create')->middleware('can:admin');
	Route::post('/hrm/loans/store', 'LoanController@store')->middleware('can:admin');
	Route::get('/hrm/loans/details/{id}', 'LoanController@show')->middleware('can:admin');
	Route::get('/hrm/loans/edit/{id}', 'LoanController@edit')->middleware('can:admin');
	Route::post('/hrm/loans/update/{id}', 'LoanController@update')->middleware('can:admin');
	Route::get('/hrm/loans/delete/{id}', 'LoanController@destroy')->middleware('can:admin');

	// Payment Section
	Route::get('/hrm/salary-payments', 'SalaryPaymentController@index')->middleware('can:admin');
	Route::post('/hrm/salary-payments/go', 'SalaryPaymentController@go')->middleware('can:admin');
	Route::get('/hrm/salary-payments/manage-salary/{id}/{salary_month}', 'SalaryPaymentController@create')->middleware('can:admin');
	Route::get('/hrm/salary-payments/pdf/{id}/{salary_month}', 'SalaryPaymentController@pdf')->middleware('can:admin');
	Route::post('/hrm/salary-payments/store', 'SalaryPaymentController@store')->middleware('can:admin');
	// Generate Payslip
	Route::get('/hrm/generate-payslips/', 'SalaryPaymentController@show')->middleware('can:admin');
	Route::post('/hrm/generate-payslips/', 'SalaryPaymentController@generate')->middleware('can:admin');
	Route::get('/hrm/generate-payslips/salary-list/{salary_month}', 'SalaryPaymentController@list')->middleware('can:admin');
	//
	Route::get('/hrm/provident-funds/', 'SalaryPaymentController@provident_fund')->middleware('can:admin');

	// Noyon

	//working daya
	Route::get('/setting/working-days', 'WorkingDayController@index')->middleware('can:admin');
	Route::post('/setting/working-days/update/', 'WorkingDayController@update')->middleware('can:admin');

	//Holidays list
	Route::get('/setting/holidays', 'HolidayController@index')->middleware('can:admin');
	Route::get('/setting/holidays/create', 'HolidayController@create')->middleware('can:admin');
	Route::post('/setting/holidays/store', 'HolidayController@store');
	Route::get('/setting/holidays/published/{id}', 'HolidayController@published')->middleware('can:admin');
	Route::get('/setting/holidays/unpublished/{id}', 'HolidayController@unpublished')->middleware('can:admin');
	Route::get('/setting/holidays/details/{id}', 'HolidayController@show')->middleware('can:admin');
	Route::get('/setting/holidays/edit/{id}', 'HolidayController@edit')->middleware('can:admin');
	Route::post('/setting/holidays/update/{id}', 'HolidayController@update')->middleware('can:admin');
	Route::get('/setting/holidays/delete/{id}', 'HolidayController@destroy')->middleware('can:admin');

	// Personal Event Section //
	Route::get('/setting/personal-events', 'PersonalEventController@index')->middleware('can:admin');;
	Route::get('/setting/personal-events/create', 'PersonalEventController@create')->middleware('can:admin');
	Route::post('/setting/personal-events/store', 'PersonalEventController@store')->middleware('can:admin');
	Route::get('/setting/personal-events/published/{id}', 'PersonalEventController@published')->middleware('can:admin');
	Route::get('/setting/personal-events/unpublished/{id}', 'PersonalEventController@unpublished')->middleware('can:admin');
	Route::get('/setting/personal-events/details/{id}', 'PersonalEventController@show')->middleware('can:admin');
	Route::get('/setting/personal-events/edit/{id}', 'PersonalEventController@edit')->middleware('can:admin');
	Route::post('/setting/personal-events/update/{id}', 'PersonalEventController@update')->middleware('can:admin');
	Route::get('/setting/personal-events/delete/{id}', 'PersonalEventController@destroy')->middleware('can:admin');

	//notice//
	Route::get('/hrm/notice', 'NoticeController@index')->middleware('can:admin');
	Route::get('/hrm/notice/create', 'NoticeController@create')->middleware('can:admin');
	Route::post('/hrm/notice/store', 'NoticeController@store')->middleware('can:admin');
	Route::get('/hrm/notice/published/{id}', 'NoticeController@published')->middleware('can:admin');
	Route::get('/hrm/notice/unpublished/{id}', 'NoticeController@unpublished')->middleware('can:admin');
	Route::get('/hrm/notice/edit/{id}', 'NoticeController@edit')->name('editnotice')->middleware('can:admin');
	Route::post('/hrm/notice//update/{id}', 'NoticeController@update')->name('updatenotice')->middleware('can:admin');
	Route::get('/hrm/notice/delete/{id}', 'NoticeController@destroy')->middleware('can:admin');

	Route::get('/hrm/notice/show', 'NoticeController@show');


//jobs//
	Route::get('/job/all', 'JobController@listofAllJobs')->name('jobindex')->middleware('can:admin');
	Route::get('job/delete/{id}', 'JobController@deleteJob')->name('deletejob')->middleware('can:admin');;
	Route::get('job/candidates', 'JobController@listofAllAppliedCandidates')->name('jobcandi')->middleware('can:admin');
	Route::get('candidates/approved{id}', 'JobController@CanditeApproved')->name('cand_app')->middleware('can:admin');
	Route::get('candidates/notpproved{id}', 'JobController@CanditeNotApproved')->name('cand_not_app')->middleware('can:admin');
	Route::get('/candidates/download-pdf/{id}', 'JobController@DownloadFile')->name('download_pdf')->middleware('can:admin');
    Route::get('/job/create', 'JobController@create')->name('c_job')->middleware('can:admin');
	Route::post('/job/store', 'JobController@store')->name('jobstore')->middleware('can:admin');
	Route::get('tasks/Approved{id}', 'TaskController@TasksCompleted')->name('taskcom');
	//Tasks managements//
	Route::get('/tasks/create', 'TaskController@create')->name('tcreat')->middleware('can:admin');
	Route::get('tasks/all', 'TaskController@allTasks')->name('tall');
	Route::get('performance', 'TaskController@performance')->name('performance');
	Route::get('all/tasks', 'TaskController@allTasksForSingle')->name('taskall');
	Route::get('tasks/completed{id}', 'TaskController@TasksCompleted');
	Route::get('tasks/pending{id}', 'TaskController@TasksPending')->name('taskpend');
    Route::post('/tasks/store', 'TaskController@store')->name('tstore')->middleware('can:admin');
	//expence managements//





	//employee award Category//
	Route::get('/setting/award_categories', 'AwardCategoryController@index')->middleware('can:admin');
	Route::get('/setting/award_categories/create', 'AwardCategoryController@create')->middleware('can:admin');
	Route::post('/setting/award_categories/store', 'AwardCategoryController@store')->middleware('can:admin');
	Route::get('/setting/award_categories/published/{id}', 'AwardCategoryController@published')->middleware('can:admin');
	Route::get('/setting/award_categories/unpublished/{id}', 'AwardCategoryController@unpublished')->middleware('can:admin');
	Route::get('/setting/award_categories/edit/{id}', 'AwardCategoryController@edit')->middleware('can:admin');
	Route::post('/setting/award_categories/update/{id}', 'AwardCategoryController@update')->middleware('can:admin');
	Route::get('/setting/award_categories/delete/{id}', 'AwardCategoryController@destroy')->middleware('can:admin');

	//employee awards//
	Route::get('/hrm/employee-awards', 'EmployeeAwardController@index');
	Route::get('/hrm/employee-awards/create', 'EmployeeAwardController@create')->middleware('can:admin');
	Route::post('/hrm/employee-awards/store', 'EmployeeAwardController@store')->middleware('can:admin');
	Route::get('/hrm/employee-awards/published/{id}', 'EmployeeAwardController@published')->middleware('can:admin');
	Route::get('/hrm/employee-awards/unpublished/{id}', 'EmployeeAwardController@unpublished')->middleware('can:admin');
	Route::get('/hrm/employee-awards/edit/{id}', 'EmployeeAwardController@edit')->middleware('can:admin');
	Route::post('/hrm/employee-awards/update/{id}', 'EmployeeAwardController@update')->middleware('can:admin');
	Route::get('/hrm/employee-awards/details/{id}', 'EmployeeAwardController@show')->middleware('can:admin');
	Route::get('/hrm/employee-awards/delete/{id}', 'EmployeeAwardController@destroy')->middleware('can:admin');

});