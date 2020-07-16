<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AppliedCandidates extends Model {
	//protected  $table="resume";
    protected  $table="appliedcadidtes";
	protected $fillable = 
	[
        'name', 'jobid','email','phone',
        'cv',

    ];
	
}
