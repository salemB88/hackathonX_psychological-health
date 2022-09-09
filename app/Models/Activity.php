<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    protected $fillable=[
        'calories',
        'date',
        'start_time',
        'end_time',
        'activity_type',
        'user_id',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
