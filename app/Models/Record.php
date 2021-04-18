<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    use HasFactory;
    protected $table = 'records';
    protected $fillable = [
        'id','name', 'phone_number','e_mail','master_name', 'procedure_name', 'recording_time'
    ];
}
