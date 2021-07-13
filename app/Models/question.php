<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class question extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'subject_id',
        'topic_id',
        'question',
        'option1',
        'option2',
        'option3',
        'option4',
        'correct_ans'
    ];

    function getSubjectInfo(){
        return $this->belongsTo(subject::class,'subject_id','id');
    }

    function getTopicInfo(){
        return $this->belongsTo(topic::class,'topic_id','id');
    }
}
