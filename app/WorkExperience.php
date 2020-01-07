<?php

namespace App;

use App\Candidate;
use Illuminate\Database\Eloquent\Model;

class WorkExperience extends Model
{
    protected $table = "work_experiences";
    protected $guarded = ['id'];

    protected $fillable = [
        'candidate_id', 'title', 'w_from', 'w_to', 'company', 'w_additional_information'
    ];

    public function candidate(){
        return $this->belongsTo(Candidate::class);
    }
}
