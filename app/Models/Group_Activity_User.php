<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group_Activity_User extends Model
{
    use HasFactory;

    protected $primaryKey = ['group_activity_id','user_id'];


}
