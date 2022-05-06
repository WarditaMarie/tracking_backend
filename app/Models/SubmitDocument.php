<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubmitDocument extends Model
{
    use HasFactory;
    protected $table = "submitdocuments";
    protected $fillable = [
        'name',
        'birthdate',
        'address',
        'contactnumber',
        'docu_type',
    ];
}
