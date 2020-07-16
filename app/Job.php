<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model {
	//protected  $table="resume";
	protected $fillable = 
	[
        'title', 'Location','JobType','Category',
        'WorkShift', 'NoOfOpenings','Joblevel','updated_at',
        'JobExperience', 'JobDescription','SkillSet','Salary_start','Salary_end','status',

    ];
	
}
