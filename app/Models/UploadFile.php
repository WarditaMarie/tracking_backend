<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UploadFile extends Model
{
    use HasFactory;
    protected $table = "uploadfiles";
    protected $fillable = [
        'file',
        'primaryID',
        'validID1',
        'secondaryID',
        'validID2',
    ];
}