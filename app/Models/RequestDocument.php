<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestDocument extends Model
{
    use HasFactory;
    protected $table = "requestdocuments";
    protected $fillable = [
        'name',
        'birthdate',
        'address',
        'contactnumber',
        'docu_type',
    ];
}
