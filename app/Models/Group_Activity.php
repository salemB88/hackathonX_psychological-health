<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group_Activity extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'time',
        'location',
        'description',
    ];

    public function user(){
        return $this->belongsToMany(User::class);
    }

}
