<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use SoftDeletes;
use App\Models\subject;


class topic extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'subject_id',
        'topic_name'
    ];

    function getSubjectInfo(){
        return $this->belongsTo(subject::class,'subject_id','id');
    }
}
