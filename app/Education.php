<?php

namespace App;

use App\Candidate;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
	protected $table = "education";
    protected $guarded = ['id'];

    protected $fillable = [
        'candidate_id', 'degree', 'e_from', 'e_to', 'institution', 'e_additional_information'
    ];

    public function candidate(){
        return $this->belongsTo(Candidate::class);
    }
}
