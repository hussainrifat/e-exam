<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subject extends Model
{
    use HasFactory;

    protected $fillable = [
        'subject_name',
        'subject_name_bangla',
        'subject_image',
    ];


       /**
     * 
     * validation start here
     * @var array
     */

    public static $insertRules=[
        'subject_name'          => 'required|string|min:3',
        'subject_image'         => 'required|string|min:3',
     ];

}
