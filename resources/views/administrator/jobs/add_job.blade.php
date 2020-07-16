@extends('administrator.master')
@section('title', __('Add Job'))

@section('main_content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
           {{ __(' Add Job') }}
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('/dashboard') }}"><i class="fa fa-dashboard"></i>{{ __('Dashboard') }} </a></li>
            <li class="active">{{ __('Add Job') }}</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- SELECT2 EXAMPLE -->
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">{{ __('Add Job') }}</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                </div>
            </div>
            <!-- /.box-header -->
            <form action="{{ route('jobstore') }}" method="post" name="employee_add_form">
                {{ csrf_field() }}
                <div class="box-body">
                    <div class="row">
                        <!-- Notification Box -->
                        <div class="col-md-12">
                            @if (!empty(Session::get('message')))
                            <div class="alert alert-success alert-dismissible" id="notification_box">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <i class="icon fa fa-check"></i> {{ Session::get('message') }}
                            </div>
                            @elseif (!empty(Session::get('exception')))
                            <div class="alert alert-warning alert-dismissible" id="notification_box">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <i class="icon fa fa-warning"></i> {{ Session::get('exception') }}
                            </div>
                            @else
                            <!-- <p class="text-yellow">{{ __('Enter team member details. All (*)field are required. (Default password for added user is 12345678)') }}</p> -->
                            @endif
                        </div>
                        <!-- /.Notification Box -->

                        <div class="col-md-6">
                             <!-- /.form-group -->

                             <label for="name">{{ __('Title') }} <span class="text-danger">*</span></label>
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} has-feedback">
                                <input type="text" name="Title" id="Title" class="form-control" value="{{ old('Title') }}" placeholder="{{ __('Enter name..') }}">
                                @if ($errors->has('Title'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('Title') }}</strong>
                                </span>
                                @endif
                            </div>
                            <!-- /.form-group -->
                            
                            <label for="Category">{{ __('Category') }}</label>
                            <div class="form-group{{ $errors->has('Category') ? ' has-error' : '' }} has-feedback">
                                <input type="text" name="Category" id="Category" class="form-control" value="{{ old('Category') }}" placeholder="{{ __('Enter Categorye..') }}">
                                @if ($errors->has('Category'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('Category') }}</strong>
                                </span>
                                @endif
                            </div>
                            <!-- /.form-group -->

                            <label for="status">{{ __('status') }} <span class="text-danger">*</span></label>
                            <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }} has-feedback">
                                <select name="status" id="status" class="form-control">
                                    <option value="" selected disabled>{{ __('Select one') }}</option>
                                    <option value="Publish">{{ __('Publish') }}</option>
                                    <option value="unpublish">{{ __('unpublish') }}</option>
                                </select>
                                @if ($errors->has('status'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('status') }}</strong>
                                </span>
                                @endif
                            </div>
                            <!-- /.form-group -->

                            <label for="WorkShift">{{ __('Work Shift') }} <span class="text-danger">*</span></label>
                            <div class="form-group{{ $errors->has('WorkShift') ? ' has-error' : '' }} has-feedback">
                                <select name="WorkShift" id="WorkShift" class="form-control">
                                    <option value="" selected disabled>{{ __('Select one') }}</option>
                                    <option value="Day Shift">{{ __('Day Shift') }}</option>
                                    <option value="Night Shift">{{ __('Night Shift') }}</option>
                                </select>
                                @if ($errors->has('WorkShift'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('WorkShift') }}</strong>
                                </span>
                                @endif
                            </div>
                            <!-- /.form-group -->

                            <label for="JobExperience">{{ __('Job Experience') }} </label>
                            <div class="form-group{{ $errors->has('JobExperience') ? ' has-error' : '' }} has-feedback">
                                <input type="text" name="JobExperience" id="JobExperience" class="form-control" value="{{ old('JobExperience') }}" placeholder="{{ __('Enter spouse name..') }}">
                                @if ($errors->has('JobExperience'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('JobExperience') }}</strong>
                                </span>
                                @endif
                            </div>
                            <!-- /.form-group -->

                            <label for="Salary_end">{{ __('Salary End') }} <span class="text-danger">*</span></label>
                            <div class="form-group{{ $errors->has('Salary_end') ? ' has-error' : '' }} has-feedback">
                            <input type="text" name="Salary_end" id="Salary_end" class="form-control" value="{{ old('Salary_end') }}" placeholder="{{ __('Enter Salary end..') }}">
                                @if ($errors->has('Salary_end'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('Salary_end') }}</strong>
                                </span>
                                @endif
                            </div>
                            <!-- /.form-group -->

                        </div>
                        <!-- /.col -->

                        <div class="col-md-6">
                            <label for="marital_status">{{ __('Job level') }} </label>
                            <div class="form-group{{ $errors->has('Job_level') ? ' has-error' : '' }} has-feedback">
                                <select name="Job_level" id="Job_level" class="form-control">
                                    <option value="" selected disabled>{{ __('Select one') }}</option>
                                    <option value="Executive">{{ __('Executive') }}</option>
                                    <option value="Director">{{ __('Director') }}</option>
                                    <option value="Manager">{{ __('Manager') }}</option>
                                    <option value="Associate">{{ __('Associate') }}</option>
                                    <option value="Staff">{{ __('Staff') }}</option>
                                </select>
                                @if ($errors->has('Job_level'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('Job_level') }}</strong>
                                </span>
                                @endif
                            </div>
                            <!-- /.form-group -->
                            <label for="mother_name">{{ __('Location') }} </label>
                            <div class="form-group{{ $errors->has('Location') ? ' has-error' : '' }} has-feedback">
                                <input type="text" name="Location" id="Location" class="form-control" value="{{ old('Location') }}" placeholder="{{ __('Enter Location..') }}">
                                @if ($errors->has('Location'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('Location') }}</strong>
                                </span>
                                @endif
                            </div>
                            <!-- /.form-group -->

                            <label for="gender">{{ __('Job Type') }} <span class="text-danger">*</span></label>
                            <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }} has-feedback">
                                <select name="JobType" id="JobType" class="form-control">
                                    <option value="" selected disabled>{{ __('Select one') }}</option>
                                    <option value="Fulltime">{{ __('Fulltime') }}</option>
                                    <option value="Halftime">{{ __('Halftime') }}</option>
                                </select>
                                @if ($errors->has('JobType'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('JobType') }}</strong>
                                </span>
                                @endif
                            </div>
                            <!-- /.form-group -->

                            <label for="NoOfOpenings">{{ __('No Of Openings') }} <span class="text-danger">*</span></label>
                            <div class="form-group{{ $errors->has('NoOfOpenings') ? ' has-error' : '' }} has-feedback">
                                <input type="number" name="NoOfOpenings" id="NoOfOpenings" class="form-control" placeholder="Number Of Openings" >
                            
                                @if ($errors->has('NoOfOpenings'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('NoOfOpenings') }}</strong>
                                </span>
                                @endif
                            </div>
                            <!-- /.form-group -->

                            <label for="Salary_start">{{ __('Salary Start') }} <span class="text-danger">*</span></label>
                            <div class="form-group{{ $errors->has('Salary_start') ? ' has-error' : '' }} has-feedback">
                            <input type="text" name="Salary_start" id="Salary_start" class="form-control" value="{{ old('Salary_start') }}" placeholder="{{ __('Enter Salary_start..') }}">
                                @if ($errors->has('Salary_start'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('Salary_start') }}</strong>
                                </span>
                                @endif
                            </div>
                            <!-- /.form-group -->

                            <!-- /.form-group -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-12">
                            <label for="JobDescription">{{ __('Job Description') }}</label>
                            <div class="form-group{{ $errors->has('JobDescription') ? ' has-error' : '' }} has-feedback">
                                <textarea name="JobDescription" id="JobDescription" class="form-control textarea" placeholder="{{ __('Enter Job Description..') }}">{{ old('academic_qualification') }}</textarea>
                                @if ($errors->has('JobDescription'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('JobDescription') }}</strong>
                                </span>
                                @endif
                            </div>
                            <!-- /.form-group -->

                            <label for="Responsibilities">{{ __('Responsibilities') }}</label>
                            <div class="form-group{{ $errors->has('Responsibilities') ? ' has-error' : '' }} has-feedback">
                                <textarea name="Responsibilities" id="Responsibilities" class="form-control textarea" placeholder="{{ __('Enter Responsibilities..') }}">{{ old('professional_qualification') }}</textarea>
                                @if ($errors->has('Responsibilities'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('Responsibilities') }}</strong>
                                </span>
                                @endif
                            </div>
                            <!-- /.form-group -->

                            <label for="SkillSet">{{ __('Skill Set') }}</label>
                            <div class="form-group{{ $errors->has('SkillSet') ? ' has-error' : '' }} has-feedback">
                                <textarea name="SkillSet" id="SkillSet" class="form-control textarea" placeholder="{{ __('Enter SkillSet..') }}">{{ old('SkillSet') }}</textarea>
                                @if ($errors->has('SkillSet'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('SkillSet') }}</strong>
                                </span>
                                @endif
                            </div>
                       
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <a href="{{ url('/people/employees') }}" class="btn btn-danger btn-flat"><i class="icon fa fa-close"></i>{{ __('Cancel') }} </a>
                    <button type="submit" class="btn btn-primary btn-flat"><i class="icon fa fa-plus"></i> {{ __('Add') }}</button>
                </div>
            </form>
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->
</div>
<script type="text/javascript">
    document.forms['employee_add_form'].elements['gender'].value = "{{ old('gender') }}";
        document.forms['employee_add_form'].elements['id_name'].value = "{{ old('id_name') }}";
    document.forms['employee_add_form'].elements['designation_id'].value = "{{ old('designation_id') }}";
    document.forms['employee_add_form'].elements['role'].value = "{{ old('role') }}";
    document.forms['employee_add_form'].elements['joining_position'].value = "{{ old('joining_position') }}";
    document.forms['employee_add_form'].elements['marital_status'].value = "{{ old('marital_status') }}";
</script>
@endsection
