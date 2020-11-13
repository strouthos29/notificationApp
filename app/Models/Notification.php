<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    //use HasFactory;
    protected $fillable = [
        'notification_type',
        'notification_msg',
        'notifiers_name',
        'start_date',
        'end_date',
    ];
}
