<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\subject;


class subject extends Model
{
    use HasFactory;
    use SoftDeletes;


    protected $fillable = [
        'subject_name',
        'subject_name_bangla',
        'subject_image',
    ];

 
  
     function getSubjectInfo(){
        return $this->hasMany(subject::class,'subject_id','id');
    }

}
